<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;


class courseController extends Controller
{
    /* public function __construct(){
         $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
       /* $courses = DB::table('courses')
        ->join('contents', 'courses.id', '=', 'contents.id')
        ->join('teachers', 'courses.id', '=', 'teachers.id')
        ->join('places', 'courses.id', '=', 'places.id')

        ->select(
            'courses.date', 'courses.time', 'courses.stock', 
            'contents.name_content', 'contents.price', 
            'teachers.name_teacher',
            'places.city')
        ->get();*/
        
        $courses = Course::all();
       return view('course.index')->with('courses',$courses);

        
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $courses = DB::table('courses')
            ->join('contents', 'courses.id', '=', 'contents.id')
            ->join('teachers', 'courses.id', '=', 'teachers.id')
            ->join('places', 'courses.id', '=', 'places.id')

            ->select('courses.date', 'courses.time', 'courses.stock', 
            'contents.name_content', 'contents.price', 
            'teachers.name_teacher',
            'places.city')
            ->get();
            
        return ($courses) ;


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $course = course::find();
        $contents = Content::pluck('name_content', 'price', 'id');

        $course->date = $request->get('date');
        $course->time = $request->get('time');
        $course->stock = $request->get('stock');

        $course->save();

        return redirect('/courses');

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
        $course = course::find($id);
        return view('course.edit')->with('course',$course);
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
        $course = Course::find($id);
        $content = Content::pluck('name_content', 'price', 'id');
        $content->name_content = $request->get('name_content');
        $course->date = $request->get('date');
        $course->time = $request->get('time');
        $course->stock = $request->get('stock');

        $course->save();

        return redirect('/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = course::find($id);
        $course->delete();
        return redirect('/courses');
    }
}
