<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Tasks;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tasks = Tasks::all();
        // $data = $tasks->toArray();

        // $response = [
        //     'success' => true,
        //     'data' => $data,
        //     'message' => 'tasks retrieved successfully.'
        // ];
        $tasks = Tasks::all();
        return $tasks;
    }

    public function individual()
    {
        $user = Auth::user()->id;

        return Tasks::where('user_id', $user)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }

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
        return Tasks::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $tasks;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $tasks->delete();
    }
}
