<?php

namespace App\Http\Controllers;

use App\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeDescription = Text::where('position','LIKE','%home_description%')->first();
        $homeListTitles = Text::where('position', 'LIKE', '%home_list_title%')->get();
        $homeListSubtitles = Text::where('position', 'LIKE', '%home_list_subtitle%')->get();
        $valuesSection1 = Text::where('position', 'LIKE', '%values_section1%')->get();
        $valuesSection2Texts = Text::where('position', 'LIKE', '%values_section2_t%')->get();
        $valuesSection2list = Text::where('position', 'LIKE', '%values_section2_list_item%')->get();

        //dd($valuesSection);
        return view('admin.texts.index',compact('homeDescription','homeListTitles','homeListSubtitles','valuesSection1','valuesSection2Texts','valuesSection2list'));
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
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function show(Text $text)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function edit(Text $text)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Text $text)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function destroy(Text $text)
    {
        //
    }
}
