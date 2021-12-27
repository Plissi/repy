<?php

namespace App\Http\Controllers;

use App\Models\eod_report;
use App\Models\PostTFJ;
use Illuminate\Http\Request;

class PostTFJController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(eod_report $report)
    {
        $tasks = eod_report::find($report) -> first() -> post_tfj();
        if ($tasks -> count() != 0) {
            return view('tfj.post.edit', [
                'tasks' => eod_report::find($report) -> first() -> post_tfj,
                'report' => $report
            ]);
        } else {
            return view('tfj.post.add', [
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
     * @param  \App\Models\PostTFJ  $postTFJ
     * @return \Illuminate\Http\Response
     */
    public function show(PostTFJ $postTFJ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostTFJ  $postTFJ
     * @return \Illuminate\Http\Response
     */
    public function edit(PostTFJ $postTFJ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostTFJ  $postTFJ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostTFJ $postTFJ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostTFJ  $postTFJ
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostTFJ $postTFJ)
    {
        //
    }
}
