<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public  function index(){
        $products = Product::get();
        return view('all-products' ,compact('products') );
    }
    public function store(Request $request){
        $products = Product::get();
       Product::create([
           'TypeProduct'=>$request->TypeProduct,
           'NameProduct'=>$request->NameProduct,
           ]);
//       return view('all-products',compact('products'));
        redirect()->back();
    }
    public function show(){
        return view('createPro');
    }
}
