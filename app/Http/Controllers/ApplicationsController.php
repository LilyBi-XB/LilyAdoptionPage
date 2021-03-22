<?php

namespace App\Http\Controllers;
use DB;
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
//    public function store(Request $request)
            public function store()
            {
        $application = Application::create( request()->validate([
            'name'=>'required',
            'email'=>'required',
            'experience'=>'required',
            'dog_name'=>'required'
        ]));
        return redirect('/application');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
//    public function show(Application $id)
//    {
//        $application=Application::find(id);
//        return view('application',['application=>$application']);
//    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update($id)
            {
        $application=Application::find($id);
        $application->update( request()->validate([
            'name'=>'required',
            'email'=>'required',
            'experience'=>'required',
            'dog_name'=>'required'
        ]));

        return redirect('application/');

    }

    //    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Models\Application  $application
//     * @return \Illuminate\Http\Response
//     */
    public function edit($id)
    {
        $application = Application::find($id);
//        dd(request()->all());
        return view('applications.edit',['application'=>$application]);
    }


//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
    public function index()
    {
        $applications = Application::get()->all();
        return view('applications.index', ['applications' => $applications]);
    }

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
    public function destroy($id)
    {
        $application = Application::find($id);
        $application->delete();
//        dump(request()->all());
        return redirect('application');
    }

}
