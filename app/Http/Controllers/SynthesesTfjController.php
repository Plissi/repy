<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\eod_report;
use App\Models\syntheses_tfj;
use Illuminate\Http\Request;

class SynthesesTfjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(eod_report $report)
    {
        $report['bank'] = Bank::find($report-> bank_id) -> name;
        $synthesis = syntheses_tfj::where('eod_reports_id', $report->id)->first();
        if ($synthesis -> count() == 0) {
            return view('tfj.synthesis.add', [
                'report' => $report
            ]);
        } else {
            return view('tfj.synthesis.edit', [
                'report' => $report,
                'synthesis' => $synthesis
            ]);
        }
        
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
     * @param  \App\Models\syntheses_tfj  $syntheses_tfj
     * @return \Illuminate\Http\Response
     */
    public function show(syntheses_tfj $syntheses_tfj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\syntheses_tfj  $syntheses_tfj
     * @return \Illuminate\Http\Response
     */
    public function edit(syntheses_tfj $syntheses_tfj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\syntheses_tfj  $syntheses_tfj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, syntheses_tfj $syntheses_tfj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\syntheses_tfj  $syntheses_tfj
     * @return \Illuminate\Http\Response
     */
    public function destroy(syntheses_tfj $syntheses_tfj)
    {
        //
    }
}
