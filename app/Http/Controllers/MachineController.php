<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Machine;
use App\Http\Models\MachineFilter;
use Session;
use App\Department;
class machineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $machines = MachineFilter::getMachine($request->name,$request->machine_id);
        return view("machine.index", compact("machines","request"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $machine = new Machine;
        $departments = Department::all();

        return view("machine.create", compact("machine", "departments"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $machine = new Machine($request->all());

        if($machine->save()){
            Session::flash("message", "Saved!");
            return redirect("/machine");
        }else{
            Session::flash("errorMessage", "error!");
            return redirect("/machine");
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
        $machine = Machine::find($id);
        $departments = Department::all();
        return view("machine.edit", compact("machine","departments"));
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
        $machine = Machine::find($id);
        $machine->update($request->all());

        if($machine->save()){
            Session::flash("message", "Saved!");
            return redirect("/machine");
        }else{
            Session::flash("errorMessage", "error!");
            return redirect("/machine");
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
