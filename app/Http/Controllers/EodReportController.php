<?php

namespace App\Http\Controllers;

use App\Models\eod_report;
use App\Models\Bank;
use Illuminate\Http\Request;

class EodReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reports.index', [
            'reports' => eod_report::join('banks', 'eod_reports.bank_id', '=', 'banks.id')
            ->orderByDesc('date') 
            ->select('eod_reports.id as id', 'eod_reports.date', 'eod_reports.bank_id', 'banks.name', ) 
            ->paginate(24)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.add');
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
     * @param  \App\Models\eod_report  $eod_report
     * @return \Illuminate\Http\Response
     */
    public function show(eod_report $eod_report)
    {
        return view('reports.show', [
            'report' => $eod_report
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\eod_report  $eod_report
     * @return \Illuminate\Http\Response
     */
    public function edit(eod_report $eod_report)
    {
        return view('reports.edit', [
            'report' => $eod_report
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\eod_report  $eod_report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eod_report $eod_report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\eod_report  $eod_report
     * @return \Illuminate\Http\Response
     */
    public function destroy(eod_report $eod_report)
    {
        //
    }
}
