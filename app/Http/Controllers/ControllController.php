<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Controll;
use Session;
class ControllController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $controll = new Controll($request->all());

        if($controll->save()){
            Session::flash("message", "Controll Saved!");
            return redirect("/task/index/$request->task_id");
        }else{
            Session::flash("errorMessage", "Error!");
            return redirect("/task/index/$request->task_id");
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
    public function update(Request $request, $id)
    {
        $controll = Controll::find($id);
        $controll->update($request->all());

        if($controll->save()){
            Session::flash("message", "Controll Updated!");
            return redirect("/task/index/$request->task_id");
        }else{
            Session::flash("errorMessage", "Error!");
            return redirect("/task/index/$request->task_id");
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
