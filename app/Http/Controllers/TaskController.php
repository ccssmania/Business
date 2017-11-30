<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Process;
use App\Task;
use App\Http\Models\TaskFilter;
use App\Tooling;
use App\Machine;
use App\Department;
use Session;
class TaskController extends Controller
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

        $tasks = TaskFilter::getTask($request->task_id,$request->name);
        return view("task.index",compact( "tasks", "request"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $processes = Process::all();
        $departments = Department::all();
        $machines = Machine::all();
        $toolings = Tooling::all();
        $task = new Task;

        return view("task.create",compact("processes", "departments", "machines", "toolings","task"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task($request->all());
        //dd($task,$request->all());
        if($task->save()){
            Session::flash("message", "Task Saved!");
            return redirect("/task/index/$request->process_id");
        }else{
            Session::flash("errorMessage", "Error!");
            return redirect("/task/index/$request->process_id");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $process = Process::find($id);
        $tasks = new Task;
        if(isset($request->task_id) || $request->name){
            $tasks = TaskFilter::getTask($request->name,$request->task_id, $id);
        }else
            $tasks = $process->tasks;

        return view("task.index",compact("process", "tasks", "request"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $processes = Process::all();
        $departments = Department::all();
        $machines = Machine::all();
        $toolings = Tooling::all();
        $task =  Task::find($id);

        return view("task.edit",compact("processes", "departments", "machines", "toolings","task"));
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
        $task = Task::find($id);
        $task->update($request->all());
        //dd($task,$request->all());
        if($task->save()){
            Session::flash("message", "Task Updated!");
            return redirect("/task/index/$request->process_id");
        }else{
            Session::flash("errorMessage", "Error!");
            return redirect("/task/index/$request->process_id");
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
