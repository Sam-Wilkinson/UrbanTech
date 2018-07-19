<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Text;
use App\Job;
use App\Category;

class FrontController extends Controller
{
    public function welcome(){

        $homeDescription = Text::where('position','LIKE','%home_description%')->first();
        $homeListTitles = Text::where('position', 'LIKE', '%home_list_title%')->get();
        $homeListSubtitles = Text::where('position', 'LIKE', '%home_list_subtitle%')->get();

        $values1 = Text::where('position', 'LIKE', '%values_section1%')->orderby('id')->get();
        $values2 = Text::where('position', 'LIKE', '%values_section2%')->orderby('id')->get();
        $values3 = Text::where('position', 'LIKE', '%values_section3%')->orderby('id')->get();
        $values4 = Text::where('position', 'LIKE', '%values_section4%')->orderby('id')->get();

        
        $ICTText = Text::where('position','ICT_text')->first();
        $ICTSection1 = Text::where('position', 'LIKE', '%ICT_section1%')->get();
        $ICTSection2 = Text::where('position', 'LIKE', '%ICT_section2%')->get();

        $recText = Text::where('position','resources_text')->first();
        $recTitles = Text::where('position', 'LIKE', '%resources_section%_title')->get();
        $recSection1 = Text::where('position', 'LIKE', '%resources_section1_list_item%')->get();
        $recSection2 = Text::where('position', 'LIKE', '%resources_section2_list_item%')->get();
        $recSection3 = Text::where('position', 'LIKE', '%resources_section3_list_item%')->get();
        $recSection4 = Text::where('position', 'LIKE', '%resources_section4_list_item%')->get();
        $recSections = array();
        array_push($recSections,$recSection1,$recSection2,$recSection3,$recSection4);

        $jobs = Job::orderby('CREATED_AT','desc')->take(3)->get();


        $general = Text::where('position', 'LIKE', '%contact_section1%')->get();



        return view('welcome',compact('homeDescription','homeListTitles','homeListSubtitles','values1','values2','values3','values4','ICTText','ICTSection1','ICTSection2','recText','recTitles','recSections','jobs','general'));
    }
    
    public function jobs(){
        $categories = Category::orderby('id','desc')->get();
        $jobs = Job::orderBy('created_at', 'desc')->paginate(6);
        $recentJobs = Job::orderby('CREATED_AT','desc')->take(3)->get();
        
        return view('jobs',compact('jobs','categories','recentJobs'));
    }

    public function job(Job $job){
        return view('job',compact('job'));
    }

    public function category($category){
        $categories = Category::orderby('id','desc')->get();
        $jobs = Job::where('categories_id',$category)->orderby('created_at','desc')->paginate(6);
        $recentJobs = Job::orderby('CREATED_AT','desc')->take(3)->get();
        
        return view('jobs',compact('jobs','categories','recentJobs','category'));
    }

    public function search(Request $request){
        $categories = Category::orderby('id','desc')->get();
        $jobs = Job::where('name_en','LIKE','%'.$request->search.'%')->orderby('created_at','desc')->paginate(6);
        $recentJobs = Job::orderby('CREATED_AT','desc')->take(3)->get();

        return view('jobs',compact('jobs','categories','recentJobs'));
    }
}
