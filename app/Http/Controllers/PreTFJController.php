<?php

namespace App\Http\Controllers;

use App\Models\eod_report;
use App\Models\PreTFJ;
use Illuminate\Http\Request;

class PreTFJController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(eod_report $report)
    {
        $tasks = eod_report::find($report) -> first() -> pre_tfj();
        if ($tasks -> count() != 0) {
            return view('tfj.pre.edit', [
                'tasks' => eod_report::find($report) -> first() -> pre_tfj,
                'report' => $report
            ]);
        } else {
            return view('tfj.pre.add', [
                'report' => $report
            ]);
        }
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
     * @param  \App\Models\PreTFJ  $preTFJ
     * @return \Illuminate\Http\Response
     */
    public function show(PreTFJ $preTFJ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PreTFJ  $preTFJ
     * @return \Illuminate\Http\Response
     */
    public function edit(PreTFJ $preTFJ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PreTFJ  $preTFJ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PreTFJ $preTFJ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PreTFJ  $preTFJ
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreTFJ $preTFJ)
    {
        //
    }
}
