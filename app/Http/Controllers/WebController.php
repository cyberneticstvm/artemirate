<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Collection;
use App\Models\Product;
use DB;

class WebController extends Controller
{
    private $collections;
    public function __construct(){
        $this->collections = Collection::get();
    }

    public function collections(){
        $collections = $this->collections;
        return view('home', compact('collections'));
    }

    public function products($slug){
        $collections = $this->collections;
        $collection = Collection::where('slug', $slug)->first();
        $products = Product::where('collection_id', $collection->id)->paginate(12);
        return view('products', compact('products', 'collection', 'collections'));
    }

    public function product_detail($slug){
        $collections = $this->collections;
        $product = Product::where('slug', $slug)->first();
        $collection = Collection::where('id', $product->collection_id)->first();
        return view('product_detail', compact('product', 'collection', 'collections'));
    }
}
