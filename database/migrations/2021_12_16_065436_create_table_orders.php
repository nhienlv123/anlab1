<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('shipper_id')->constrained('shippers');
            $table->foreignId('customer_id')->constrained('customers');   
            $table->string('order_address_to');
            $table->dateTime('order_time');      
            $table->dateTime('accepted_time');
            $table->tinyInteger('order_status');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
