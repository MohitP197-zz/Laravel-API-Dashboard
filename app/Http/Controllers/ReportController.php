<?php

namespace App\Http\Controllers;

use App\Tasks;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tech = Tasks::select('user_id')->get();
        // // dd($tech);

        // $reports = Tasks::where('user_id', $tech)->get();

        // $reports = DB::table('tasks')->select('user_id')->where('status', 'Not Complete')->count('status');
        // // $techs = $solved[2]->status;
        // // $techs = Tasks::where('user_id', $solved->user_id)->count();
        // $report = DB::table('tasks')
        //     ->select('user_id')
        //     ->select(DB::raw('count(*) as Completed Projects'))
        //     ->groupBy('user_id')
        //     ->unionAll('')
        //     ->select(DB::raw('count(*)'))->orderBy('case')
        //     ->count();

        $report = DB::table('tasks')->select('user_id as User')
            ->get(array('tasks.user_id', 'count(*) AS Completed Projects'))
            ->sum('tasks.status as Completed Projects')
            ->groupby('user_id');

        // // dd($report);
        // $reports = User::where('role', 'technician')->with('Tasks')->get();
        // $report = DB::table('tasks')->select('user_id')->select(DB::raw('count(*)'));

        dd($report->toArray());

        return view('admin/report.index', compact('reports'));
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
        //
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
        //
    }
}
