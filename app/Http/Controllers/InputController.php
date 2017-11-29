<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Input;
use App\Http\Models\InputFilter;
use App\Task;
use Session;
class inputController extends Controller
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
        $inputs = InputFilter::getInput($request->name,$request->input_id);
        return view("input.index", compact("inputs","request"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $input = new Input;
        $tasks = Task::all();

        return view("input.create", compact("input", "tasks"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = new Input($request->all());

        if($input->save()){
            Session::flash("message", "Saved!");
            return redirect("/input");
        }else{
            Session::flash("errorMessage", "error!");
            return redirect("/input");
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
        $input = Input::find($id);
        $tasks = Task::all();
        return view("input.edit", compact("input","tasks"));
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
        $input = Input::find($id);
        $input->update($request->all());

        if($input->save()){
            Session::flash("message", "Saved!");
            return redirect("/input");
        }else{
            Session::flash("errorMessage", "error!");
            return redirect("/input");
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
