<?php

namespace App\Http\Controllers;

use App\Text;
use App\Http\Requests\StoreText;
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
        $valuesSection3 = Text::where('position', 'LIKE', '%values_section3%')->get();
        $valuesSection4 = Text::where('position', 'LIKE', '%values_section4%')->get();

        $ICTText = Text::where('position','ICT_text')->first();
        $ICTSection1Texts = Text::where('position', 'LIKE', '%ICT_section1_t%')->get();
        $ICTSection1list = Text::where('position', 'LIKE', '%ICT_section1_list_item%')->get();
        $ICTSection2Texts = Text::where('position', 'LIKE', '%ICT_section2_t%')->get();
        $ICTSection2list = Text::where('position', 'LIKE', '%ICT_section2_list_item%')->get();

        $recText = Text::where('position','resources_text')->first();
        $recSection1title = Text::where('position', 'LIKE', 'resources_section1_title')->first();
        $recSection1list = Text::where('position', 'LIKE', '%resources_section1_list_item%')->get();
        $recText = Text::where('position','resources_text')->first();
        $recSection2title = Text::where('position', 'LIKE', 'resources_section2_title')->first();
        $recSection2list = Text::where('position', 'LIKE', '%resources_section2_list_item%')->get();
        $recText = Text::where('position','resources_text')->first();
        $recSection3title = Text::where('position', 'LIKE', 'resources_section3_title')->first();
        $recSection3list = Text::where('position', 'LIKE', '%resources_section3_list_item%')->get();
        $recText = Text::where('position','resources_text')->first();
        $recSection4title = Text::where('position', 'LIKE', 'resources_section4_title')->first();
        $recSection4list = Text::where('position', 'LIKE', '%resources_section4_list_item%')->get();

        $address = Text::where('position','LIKE', '%contact%')->get();
        $address = $address->splice(0,ceil($address->count()/2));
        $contact = Text::where('position', 'LIKE','contact_section2%')->get();
        
        
        return view('admin.texts.index',compact('homeDescription','homeListTitles','homeListSubtitles','valuesSection1','valuesSection2Texts','valuesSection2list','valuesSection3','valuesSection4','ICTText',
        'ICTSection1Texts','ICTSection1list','ICTSection2Texts','ICTSection2list','recText','recSection1title','recSection1list','recSection2title','recSection2list','recSection3title','recSection3list','recSection4title','recSection4list','address','contact'));
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
    public function update(StoreText $request, Text $text)
    {
        $text->content_en = $request->text;

        if($text->save()){
            return redirect()->route('texts.index')->with([
                "status"=> "Success",
                "message"=> "You have successfully changed a text",
                "color"=> "success"
            ]);
        }else{
            return redirect()->route('texts.index')->with([
                "status"=> "Warning",
                "message"=> "Unfortunately the text was not changed, please try again",
                "color"=> "danger"
            ]);
        }
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
