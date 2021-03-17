<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Dogs;
use Illuminate\Http\Request;

class DogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dogs = Dogs::take(4)->get();
        return view('dogs.index', ['dogs' => $dogs]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Dogs $dogs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dogs = Dogs::findOrFail($id);
        return view('dogs.show', ['dogs' => $dogs]);
    }

//
//        /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
////
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
//

//
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Models\Dogs  $dogs
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Dogs $dogs)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Models\Dogs  $dogs
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Dogs $dogs)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Models\Dogs  $dogs
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Dogs $dogs)
//    {
//        //
//    }
}
