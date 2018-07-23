<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request as middlewareRequest;
use App;
use Session;
use App\Text;
use App\Job;
use App\Category;
use Mail;
use App\Mail\ContactUsMailer;
use App\Http\Requests\StoreContact;

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
        $contact = Text::where('position', 'LIKE', '%contact_section2%')->get();



        return view('welcome',compact('homeDescription','homeListTitles','homeListSubtitles','values1','values2','values3','values4','ICTText','ICTSection1','ICTSection2','recText','recTitles','recSections','jobs','general','contact'));
    }
    
    public function jobs(){
        $categories = Category::orderby('id','desc')->get();
        $jobs = Job::orderBy('created_at', 'desc')->paginate(6);
        $recentJobs = Job::orderby('CREATED_AT','desc')->take(3)->get();
        
        return view('jobs',compact('jobs','categories','recentJobs'));
    }

    public function job(Job $job){
        $categories = Category::orderby('id','desc')->get();
        $texts = Text::where('position','LIKE','job%')->get();

        return view('job',compact('job','categories','texts'));
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

    public function contact(){    
        
        $general = Text::where('position', 'LIKE', '%contact_section1%')->get();
        $contact = Text::where('position', 'LIKE', '%contact_section2%')->get();

        return view('contact',compact('general','contact'));
    }

    public function contactus(StoreContact $request){

        Mail::to('UrbanTechCEO@UrbanTech.be')->send(new ContactUsMailer($request));
        return redirect()->route('welcome')->with([
            "message" => 'Your email has been sent and we will get back to you as soon as possible'
        ]);
    }

    public function changeLocale($locale){
        if (in_array($locale, \Config::get('app.locales'))) {
            Session::put('locale', $locale);
          }
         
          return redirect()->back();
    }
    
}
