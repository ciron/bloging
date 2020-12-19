<?php

namespace App\Http\Controllers\Api;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Tags;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tags::Collection(Tag::all());
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
        $this->validate($request,[
            'name' => 'required'
        ]);
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->slug = str_slug($request->name);
        $result=$tag->save();
        if($result){
            return ["result"=>"Tag has been send"];
        }else{
            return ["result"=>"Tag has not send"];
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
        $tag = Tag::find($request->id);
        $tag->name = $request->name;
        $tag->slug = str_slug($request->name);
        $result=$tag->save();
        if($result){
            return ["result"=>"tag has been Update"];
        }else{
            return ["result"=>"tag has not Update"];
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
       
        $tag = Tag::find($id);
      
        $result=$tag->delete();
        if($result){
            return ["result"=>"tag has been Delete ".$id];
        }else{
            return ["result"=>"Dtagata has not Delete"];
        }
    }
}
