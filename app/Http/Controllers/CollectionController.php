<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Collection;
use DB;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeload(){
        $collections = Collection::get();
        return view('home', compact('collections'));
    }

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
        return view('admin.collection.create');
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
            'name' => 'required|unique:collections',
            'main_image' => 'required|mimes:png,jpeg,jpg,webp',
            'hover_image' => 'required|mimes:png,jpeg,jpg,webp',
        ]);

        $main_image = time().'_'.$request->main_image->getClientOriginalName();
        $hover_image = time().'_'.$request->hover_image->getClientOriginalName();
        $mainPath = $request->file('main_image')->storeAs('collection', $main_image, 'public');
        $hoverPath = $request->file('hover_image')->storeAs('collection', $hover_image, 'public');
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        $input['main_image'] = $mainPath;
        $input['hover_image'] = $hoverPath;
        $collection = Collection::create($input);
        return redirect()->route('collection.index')
                        ->with('success','Collection created successfully');
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
}
