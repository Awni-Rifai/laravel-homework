<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
//    function arrayGeneration(){
//        $data= ["Iphone_price"=>800,"Iphone_description"=>"nice iphone"];
//        return view('product')->with($data);
//    }
    function generateArray()
    {
        $productsArr = array(
            ['name' => 'coffee', 'price' => '6jd', 'weight' => '5kg'],
            array('name' => 'bread', 'price' => '1jd', 'weight' => '3kg'),
            array('name' => 'mango', 'price' => '2jd', 'weight' => '1kg'),
            array('name' => 'apple', 'price' => '1jd', 'weight' => '1kg'),
            array('name' => 'coffee', 'price' => '6jd', 'weight' => '5kg'),
            array('name' => 'coffee', 'price' => '6jd', 'weight' => '5kg'),
            array('name' => 'coffee', 'price' => '6jd', 'weight' => '5kg'),
            array('name' => 'coffee', 'price' => '6jd', 'weight' => '5kg'),
        );

        return view('product')->with('productsArr',$productsArr);
    }
}
