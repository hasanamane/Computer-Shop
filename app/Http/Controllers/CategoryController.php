<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id){
        $products= Product::find($id);
        return view('Category',compact('products'));
    }
    public function show(){
        redirect()->back();
        return view('createCategory');

    }
    public function store(Request $request){
        $category = category::get();
        category::create([
            'product_id'=>$request->product_id,
            'Price'=>$request->Price,
            'Processor'=>$request->Processor,
            'Hard'=>$request->Hard,
            'Ram'=>$request->Ram,
        ]);

        redirect()->back();
    }


}
