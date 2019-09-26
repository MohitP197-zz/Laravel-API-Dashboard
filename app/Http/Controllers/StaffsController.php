<?php

namespace App\Http\Controllers;

use App\Staff;
use App\User;
use Illuminate\Http\Request;

class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $getStaffs = User::all();
        $getStaffs = User::with('tasks')->get();
        // return view('staff.index', compact('getStaffs'));
        return view('admin/staff.index',compact('getStaffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        // return view('staff.create');
        return view('admin/staff.create');
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
        // return User::create($request->all());
        $user = new User([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $user->save();
        return redirect()->back();
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
        $getStaffs = User::findOrFail($id);

        // dd($task->toarray());

        // return view('staff.edit',compact('getStaffs'));
        return view('admin/staff.edit',compact('getStaffs'));
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
        $getStaffs = User::findOrFail($id);

        $getStaffs = $getStaffs->update($request->all());

        return redirect(route('staffs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $getStaffs = User::findOrFail($id);

        $getStaffs->delete();

        return redirect()->route('staffs.index');
    }
}
