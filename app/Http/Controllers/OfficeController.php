<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\office;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officesses = office::all();
        return view('office.index', compact('officesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('office.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'description' => 'required',
        //     'location' => 'required',
        //     'Assigned_to' => 'required',
        // ]);
            
        // Tasks::create($request->all());

        // return redirect()->route('task.index')->with('success','Task created successfully');
        return office::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $officesses = office::findOrFail($id);

        // dd($task->toarray());

        return view('office.edit',compact('officesses'));
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
        $officesses = office::findOrFail($id);

        $officesses = $officesses->update($request->all());

        return redirect(route('offices.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $officesses = office::findOrFail($id);

        $officesses->delete();

        return redirect()->route('offices.index');
    }
}
