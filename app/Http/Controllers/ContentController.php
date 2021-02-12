<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    /* public function __construct(){
        $this->middleware('auth');
    }
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       
    $contents = Content::all();
    return view('content.index')->with('contents',$contents);

   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('content.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {        
       $content = new content();

       $content->name_content = $request->get('name_content');
       $content->description_content = $request->get('description_content');
       $content->price = $request->get('price');


       $content->save();

       return redirect('/contents');

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
        $content = content::find($id);
        return view('content.edit')->with('content',$content);
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
        $content = content::find($id);

        $content->name_content = $request->get('name_content');
        $content->description_content = $request->get('description_content');
        $content->price = $request->get('price');

        $content->save();

        return redirect('/contents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = content::find($id);
        $content->delete();
        return redirect('/contents');
    }
}
