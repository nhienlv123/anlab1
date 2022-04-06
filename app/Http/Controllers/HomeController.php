<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use App\Models\Customer;
use App\Models\Image;
use App\Models\Post;
use App\Models\Product_type;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Tag;


class HomeController extends Controller
{
    public function getHome(Product $products, Promotion $promotions, Image $images)
    {          
        $datas = $products
            ->join('promotions','promotions.product_id','=','products.id')
            ->join('images','images.product_id','=','products.id')
            ->select('products.*', 'promotions.discount','images.url_img','images.mainflag')
            ->get();      
        $product_types = Product_type::all();
        $products = Product::where('hotflag',1)->simplePaginate(8);
        $posts = Post::all();
        return view('client.pages.home', compact('product_types','products','datas','posts'));
    }
    
    public function getProduct($id, Product $products, Promotion $promotions, Image $images)
    {   
        $datas = $products
            ->join('promotions','promotions.product_id','=','products.id')
            ->join('images','images.product_id','=','products.id')
            ->get();              
        $product_types = Product_type::all();      
        $pro_types = Product_type::where('id',$id)->first();
        return view('client.pages.product', compact('product_types','datas','pro_types'));
    }

    public function getSingle($id, Product $products, Promotion $promotions, Image $images)
    {   
        $datas = $products
            ->join('promotions','promotions.product_id','=','products.id')
            ->join('images','images.product_id','=','products.id')
            ->get(); 
        $product_types = Product_type::all();
        $products = Product::where('id',$id)->first();
        return view('client.pages.single', compact('product_types','datas','products'));
    }

    public function getContact()
    {                   
        $product_types = Product_type::all();
        return view('client.pages.contact', compact('product_types'));
    }

    public function getAbout()
    {                   
        $product_types = Product_type::all();
        return view('client.pages.about', compact('product_types'));
    }

    public function getCheckout()
    {                   
        $product_types = Product_type::all();
        return view('client.pages.Checkout', compact('product_types'));
    }

    public function getPayment()
    {                   
        $product_types = Product_type::all();
        return view('client.pages.Payment', compact('product_types'));
    }

    public function getLogin(Request $req)
    {
        $users = User::where('email',$req->email)->first();        
        if ($users->password == $req->password) {
            return redirect()->back(); }
        else {
            return redirect('LoginFail');
        }
    }

    public function postCheckout(Request $req)
    {
        
    }
}
