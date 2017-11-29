<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Process;
use App\Http\Models\ProcessFilter;
use Session;
class ProcessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $processes = ProcessFilter::getProcess($request->name,$request->id);
        return view("process.index", compact("processes","request"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $process = new Process;

        return view("process.create",compact("process"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $process = new Process($request->all());

        if($process->save()){
            Session::flash("message","Process Saved!");
            return redirect("/process");
        }else{
            Session::flash("errorMessage","Error!");
            return redirect("/process");
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
        $process = Process::find($id);
        return view("process.edit",compact("process"));
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
        $process = Process::find($id);

        $process->update($request->all());
        if($process->save()){
            Session::flash("message","Process Updated!");
            return redirect("/process");
        }else{
            Session::flash("errorMessage","Error!");
            return redirect("/process");
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
        //
    }
}
