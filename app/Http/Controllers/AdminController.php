<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product_type;
use App\Models\Product;
use App\Models\Image;
use App\Models\Promotion;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Shipper;
use App\Models\Employee;
use App\Models\Order_detail;

class AdminController extends Controller
{
    public function getHome()
    {   
        return view('admin.pages.home');
    }

    public function getLogin()
    {   
        return view('admin.pages.login');
    }

    public function postLogin(Request $req)
    {
          
        $users = User::where('email',$req->email)->first();   
        if ($users->password == $req->password) {
            return view('admin.pages.home');
        }
        else {
            return redirect()->back();;
        }
    }

    public function getAddpro()
    {   
        $product_types = Product_type::all();
        return view('admin.pages.pro_add',compact('product_types'));
    }

    public function postAddpro(Request $req)
    {                  
        $products = new Product();
        $products->name = $req->name;
        $products->product_type_id = $req->pro_type;
        $products->description = $req->des;
        $products->quantity = $req->quantity;
        $products->brand = $req->brand;
        $products->hotflag = $req->hot;        
        $products->price = $req->price;
        $products->price_type = $req->type;
        $products->save();

        $images = new Image();
        $images->product_id = $products->id;
        $images->url_img = $req->image1;
        $images->mainflag = 1;
        $images->save();

        $promotions = new Promotion();
        $promotions->product_id = $products->id;
        $promotions->discount = $req->discount;               
        $promotions->save();
        
        return redirect()->back()->with('thanhcong', 'Thêm sản phẩm thành công');
    }

    public function getListpro(Product $products, Promotion $promotions, Image $images)
    {   
        $datas = $products
        ->join('promotions','promotions.product_id','=','products.id')
        ->join('images','images.product_id','=','products.id')
        ->select('products.*', 'promotions.discount','images.url_img','images.mainflag')
        ->get();   
        return view('admin.pages.pro_list',compact('datas'));
    }

    public function Deletepro($id)
    {
        $products = Product::find($id);
        $images = Image::where('product_id',$id);
        $promotions = Promotion::where('product_id',$id);
        $images->delete();
        $promotions->delete();
        $products->delete();
        return redirect()->back()->with('success','Dữ liệu xóa thành công.');
    }

    public function getUpdatepro($id, Product $products, Promotion $promotions, Image $images)
    {  
        $datas = $products
            ->join('promotions','promotions.product_id','=','products.id')
            ->join('images','images.product_id','=','products.id')
            ->where('products.id',$id)
            ->get(); 
        // dd($datas);
        $product_types = Product_type::all();                
        return view('admin.pages.pro_update', compact('product_types','datas'));
    }

    public function postUpdatepro($id, Request $req)
    {              
        // dd($req);       
        $products = Product::find($id);        
        $products->name = $req->name;
        $products->product_type_id = $req->pro_type;
        $products->description = $req->des;
        $products->quantity = $req->quantity;
        $products->brand = $req->brand;
        $products->hotflag = $req->hot;        
        $products->price = $req->price;
        $products->price_type = $req->type;
        $products->save();
        
        $images = Image::where('product_id',$id)
            ->update(['url_img'=>$req->image1]);          
        // $images->url_img = $req->image1;
        // $images->mainflag = 1;
        // $images->save();
       
        $promotions = Promotion::where('product_id',$id)
            ->update(['discount'=>$req->discount]);
        // $promotions->discount = $req->discount;         
        // $promotions->save();
        
        return redirect()->back()->with('thanhcong', 'Cập nhật sản phẩm thành công');
    }

    public function getAddtype()
    {   
        $product_types = Product_type::all();
        return view('admin.pages.type_add',compact('product_types'));
    }

    public function getListtype()
    {   
        $datas = Product_type::all(); 
        return view('admin.pages.type_list',compact('datas'));
    }

    public function getListbill(Order $orders, Employee $employees, Shipper $shippers, Customer $customers)
    {   
        $datas = $orders
            
            ->join('customers','customers.id','=','orders.customer_id')
            ->select('orders.*', 'customers.user_id')
            ->get(); 
        // dd($datas);
        $users = User::all();    
        return view('admin.pages.bill_list', compact('datas','users'));
    }

    public function getNhanbill($id)
    {              
        // dd($req);       
        $orders = Order::find($id);        
        $orders->order_status = '1';
        $orders->save();
        return redirect()->back();
    }

    public function getHuybill($id)
    {              
        // dd($req);       
        $orders = Order::find($id);        
        $orders->order_status = '3';
        $orders->save();
        return redirect()->back();
    }

    public function getShipper(Order $orders, Customer $customers, Order_detail $order_details)
    {   
        $datas = $orders            
            ->join('customers','customers.id','=','orders.customer_id')
            ->join('order_details','orders.id','=','orders.id')
            ->where('orders.order_status','1')
            ->select('orders.*', 'order_details.*', 'customers.user_id')
            ->get(); 
        // dd($datas);
        $users = User::all();    
        return view('admin.pages.shipper', compact('datas','users'));
    }

}
