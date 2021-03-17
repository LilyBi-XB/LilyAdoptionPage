<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Application::create( request()->validate([
            'name'=>'required',
            'email'=>'required',
            'experience'=>'required',
        ]));

        return redirect('/application');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $id)
    {
        $application=Application::find($id);
//
        $application->update( request()->validate([
            'name'=>'required',
            'email'=>'required',
            'experience'=>'required'
        ]));

        return view('application');

    }

    //    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Models\Application  $application
//     * @return \Illuminate\Http\Response
//     */
////    public function edit(Application $application)
////    {
////
////    }

//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        //
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//    }


//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Models\Application  $application
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Application $application)
//    {
//        //
//    }

}
