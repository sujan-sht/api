<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
class PageController extends Controller
{
    //
    public function index(){
        
        $products = Product::latest()->paginate(2);
        
        return view('/index',compact('products'))->with('user');
    }
}
