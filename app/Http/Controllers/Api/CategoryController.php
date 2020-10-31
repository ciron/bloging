<?php

namespace App\Http\Controllers\Api;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\department;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Category::all();
        return department::Collection(Category::all());
        
    }
    public function indexid($id=True)
    {
      
        return Category::find($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $slug = str_slug($request->name);
        $category->slug = $slug;
        $result=$category->save();
        if($result){
            return ["result"=>"Data has been send"];
        }else{
            return ["result"=>"Data has not send"];
        }

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
    public function update(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',          
        ]);
       
       
        $slug = str_slug($request->name);
        $category = Category::find($request->id);
//        

        $category->name = $request->name;
        $category->slug = $slug;       
        $result=$category->save();
        if($result){
            return ["result"=>"Data has been Update"];
        }else{
            return ["result"=>"Data has not Update"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
      
        $result=$category->delete();
        if($result){
            return ["result"=>"Data has been Delete ".$id];
        }else{
            return ["result"=>"Data has not Delete"];
        }
    }
}
