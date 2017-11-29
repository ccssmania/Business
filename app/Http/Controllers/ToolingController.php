<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tooling;
use App\Http\Models\ToolingFilter;
use Session;

class toolingController extends Controller
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
        $toolings = ToolingFilter::getTooling($request->name,$request->tooling_id);
        return view("tooling.index", compact("toolings","request"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tooling = new Tooling;

        return view("tooling.create", compact("tooling"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tooling = new Tooling($request->all());

        if($tooling->save()){
            Session::flash("message", "Saved!");
            return redirect("/tooling");
        }else{
            Session::flash("errorMessage", "error!");
            return redirect("/tooling");
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
        $tooling = Tooling::find($id);
        return view("tooling.edit", compact("tooling"));
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
        $tooling = Tooling::find($id);
        $tooling->update($request->all());

        if($tooling->save()){
            Session::flash("message", "Saved!");
            return redirect("/tooling");
        }else{
            Session::flash("errorMessage", "error!");
            return redirect("/tooling");
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
