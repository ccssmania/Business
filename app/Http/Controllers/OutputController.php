<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Output;
use App\Http\Models\OutputFilter;
use Session;
use App\Task;
class outputController extends Controller
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
        $outputs = OutputFilter::getoutput($request->name,$request->output_id);
        return view("output.index", compact("outputs","request"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $output = new Output;
        $tasks = Task::all();

        return view("output.create", compact("output", "tasks"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $output = new Output($request->all());

        if($output->save()){
            Session::flash("message", "Saved!");
            return redirect("/output");
        }else{
            Session::flash("errorMessage", "error!");
            return redirect("/output");
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
        $output = Output::find($id);
        $tasks = Task::all();
        return view("output.edit", compact("output","tasks"));
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
        $output = Output::find($id);
        $output->update($request->all());

        if($output->save()){
            Session::flash("message", "Saved!");
            return redirect("/output");
        }else{
            Session::flash("errorMessage", "error!");
            return redirect("/output");
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
