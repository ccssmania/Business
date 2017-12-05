<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Controll;
use Session;
use App\Task;
use Carbon\Carbon;
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
        $task = Task::find($request->task_id);
        $r_start = Carbon::createFromFormat('Y-m-d H:i:s',$request->r_start_date);
        $r_end = Carbon::createFromFormat('Y-m-d H:i:s',$request->r_end_date);
        //dd($end->diffInHours($start));
        $start = Carbon::createFromFormat('Y-m-d H:i:s',$task->start_time);
        $end = Carbon::createFromFormat('Y-m-d H:i:s',$task->end_time);
        $controll->end_time_left = $r_end->diffInHours($end);
        $controll->start_time_left = $r_start->diffInHours($start);
        $id = $task->process->id;
        if($controll->save()){
            Session::flash("message", "Controll Saved!");
            return redirect("/task/index/$id");
        }else{
            Session::flash("errorMessage", "Error!");
            return redirect("/task/index/$id");
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
        $task = Task::find($request->task_id);
        if($controll->save()){
            Session::flash("message", "Controll Updated!");
            return redirect("/task/index/$task->process->id");
        }else{
            Session::flash("errorMessage", "Error!");
            return redirect("/task/index/$task->process->id");
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
