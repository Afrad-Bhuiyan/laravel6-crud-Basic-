<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student_list;

class studentCrud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all_student_list=student_list::all();
        
        

        return view('students.index', \compact('all_student_list'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('students.add-record');
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
        $rules=[
        "fname"=>"required",
        "lname"=>"required",
        "age"=>"required",
        "gender"=>"required"
        ];

        $this->validate($request, $rules);

        student_list::create($request->all());

        return redirect('students')->with("success","Successfully Added the record");



       
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
        return "<h1>show function</h1>";
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
        $single_record=student_list::find($id);

        return view('students.edit',\compact('single_record'));
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
        $rules=[
            "fname"=>"required",
            "lname"=>"required",
            "age"=>"required",
            "gender"=>"required"
        ];
    
        $this->validate($request, $rules);

        $the_record=student_list::find($id);

        $the_record->update($request->all());

        return redirect('students')->with('success','Updated Successfully');
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
        student_list::destroy($id);

        return redirect('students')->with("success","Deleted Successfully");
       
    }
}
