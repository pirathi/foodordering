<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Restaurant;

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
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::pluck('category_name', 'category_id');
        $restaurants = Restaurant::pluck('restaurant_name', 'restaurant_id');
        return view('admin.products.create', compact('categories', 'restaurants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item_details = new Menu();
        $item_details['item_name'] = $request->input('item_name') ;
        $item_details['restaurant_id'] = $request->input('restaurant_id') ; 
        $item_details['category_id'] = $request->input('category_id') ; 
        $item_details['item_description'] = $request->input('item_description') ;
        $item_details['price'] = $request->input('price') ;
        $item_details['video_url'] = $request->input('video_url') ;

        // $files = Input::file('images');
        // $file_count = count($files);

        // $destinationPath = public_path().'/upload/';

        // $uploadcount = 0;

        // foreach($files as $file) {
        //     $rules = array('file' => 'required');
      
        //       $extension = $file->getClientOriginalExtension();
        //       $fileName = rand(11111,99999).'.'.$extension;
        //       $file->move($destinationPath, $fileName);
        //       Image::make($destinationPath.$fileName)->fit(1200, 800)->save($destinationPath.$fileName);     
      
        //       $uploadcount ++;
        //       $newpic = 'pic'.$uploadcount;
      
             
      
        //   }

        $item_details->save();
        return redirect('/menu-items/create');
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
