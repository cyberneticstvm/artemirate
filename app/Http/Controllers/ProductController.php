<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collections = DB::table('collections')->get();
        return view('admin.product.create', compact('collections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'collection_id' => 'required',
            'name' => 'required|unique:products',
            'description' => 'required',
            'main_image' => 'required|mimes:png,jpeg,jpg,webp',
        ]);
        $main_image = time().'_'.$request->main_image->getClientOriginalName();
        //$hover_image = time().'_'.$request->hover_image->getClientOriginalName();
        $mainPath = $request->file('main_image')->storeAs('product', $main_image, 'public');
        //$hoverPath = $request->file('hover_image')->storeAs('product', $hover_image, 'public');
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        $input['main_image'] = $mainPath;
        //$input['hover_image'] = $hoverPath;
        $product = Product::create($input);
        //return redirect()->route('product.index')->with('success','Product created successfully');
        return redirect('/admin/product/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function enquiry(Request $request){
        $collections = DB::table('collections')->get();
        $sku = $request->sku;
        $qty = $request->qty;
        return redirect()->route('enquiry', compact('qty', 'sku', 'collections'));
    }

    public function enquiryform(Request $request){
        $collections = DB::table('collections')->get();
        $sku = $request->sku;
        $qty = $request->qty;
        return view('enquiry', compact('sku', 'qty', 'collections'));
    }
}
