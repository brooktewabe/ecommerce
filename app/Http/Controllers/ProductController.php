<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models;

class ProductController extends Controller
{
    public function register(Request $request){
    /*
    $product = Product::create([
        'name' => 'ecommerce product',
        'unit' => '10',
        'price' => '50',
        'quantity' => '10',
        ]);
        echo 'Product: ', $product->name; */
    return view('product.register');
    }
     function store(Request $request)
    {
        $product = new product();
        $product->name= $request->name;
        $product->unit = $request->unit;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $is_saved = $college->save();

        if($is_saved){
            echo "Record saved successfully.";
            }
        else{
          echo "Sorry, try again something went wrong.";
             }
               
    }
    
   /* function get_all(){
        $product=product::all();
        return view('product.list' $product);
    }
*/
    
}
