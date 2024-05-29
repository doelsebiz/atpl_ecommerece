<?php

namespace App\Http\Controllers;

use App\Helpers\Cmf;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\blogs;
use App\Models\blogcategories;
use App\Models\contactus_messages;
use App\Models\newsletter;
use App\Models\quries;
use App\Models\services;
use App\Models\projects;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use Twilio\Rest\Client;
use Redirect;
use Session;
use Validator;
use Storage;
use Input;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.homepage.index');
    }
    public function ecommereceapp()
    {
        return view('frontend.apps.ecommerece');
    }
    public function taxiapp()
    {
        return view('frontend.apps.taxiapp');
    }
    public function educationapp()
    {
        return view('frontend.apps.educationapp');
    }
    public function dattingapp()
    {
        return view('frontend.apps.dattingapp');
    }
    public function ourservices()
    {
        return view('frontend.services.index');
    }
    public function pharmacyapp()
    {
        return view('frontend.apps.pharmacyapp');
    }
    public function fitnessapp()
    {
        return view('frontend.apps.fitnessapp');
    }
    public function fooddeliveryapp()
    {
        return view('frontend.apps.fooddeliveryapp');
    }
    public function beautysaloonapp()
    {
        return view('frontend.apps.beautysaloonapp');
    }
    public function consultationapp()
    {
        return view('frontend.apps.consultationapp');
    }
    public function realestateapp()
    {
        return view('frontend.apps.realestateapp');
    }
    public function homeserviceapp()
    {
        return view('frontend.apps.homeserviceapp');
    }
    public function healthcareapp()
    {
        return view('frontend.apps.healthcareapp');
    }
    public function freelancerapp()
    {
        return view('frontend.apps.freelancerapp');
    }
    public function socialmediaapp()
    {
        return view('frontend.apps.socialmediaapp');
    }
    public function laundryapp()
    {
        return view('frontend.apps.laundryapp');
    }
    public function portfolio()
    {
        return view('frontend.portfolio.index');
    }
    public function contactus()
    {
        return view('frontend.contactus.index');
    }
    public function faq()
    {
        return view('frontend.faq.index');
    }
    public function stepthreetoshow($id)
    {
        $data = temproary_sales::where('temp_id' , $id)->first();
        return view('frontend.apply.templatetwo')->with(array('data' => $data));
    }
    public function sendqnquery(Request $request)
    {
        $quer = new quries();
        $quer->name = $request->name;
        $quer->email = $request->email;
        $quer->phonenumber = $request->phonenumber;
        $quer->message = $request->message;
        $quer->save();
    }
    public function compareplans($id)
    {
        return view('frontend.formone.compare')->with(array('id' => $id));
    }
    public function servicedetail($id)
    {
        $data = services::where('url', $id)->first();
        return view('frontend.services.servicedetail')->with(array('data' => $data));
    }
    public function blogdetail($id)
    {
        $data = blogs::where('url', $id)->first();
        return view('frontend.blogs.detail')->with(array('data' => $data));
    }
    public function blogbycategory($id)
    {
        $category = blogcategories::where('url', $id)->where('website', 'lifeadvice')->first();
        $data = DB::table('blogs')->where('category_id', $category->id)->where('website', 'lifeadvice')->paginate(9);
        return view('frontend.blogs.bycategory')->with(array('data' => $data, 'category' => $category));
    }
    
    public function projectdetail($id)
    {
        $data = projects::where('slug', $id)->first();
        return view('frontend.portfolio.projectdetail')->with(array('data' => $data));
    }
    public function visitorinsurance()
    {

        $data = wp_dh_products::where('url', 'visitor-insurance')->first();


        if ($data) {

            // echo"<pre>";
            // print_r($data->toArray());
            // die;

            $fields = unserialize($data->pro_fields);

            $sortfields = unserialize($data->pro_sort);

            $wp_dh_insurance_plans = wp_dh_insurance_plans::select('wp_dh_insurance_plans.id')->where('product', $data->pro_id)->get();

            $sum_insured = DB::select("SELECT `sum_insured` FROM `wp_dh_insurance_plans_rates` WHERE `plan_id` IN (SELECT `id` FROM `wp_dh_insurance_plans` WHERE `product`='$data->pro_id') GROUP BY `sum_insured` ORDER BY CAST(`sum_insured` AS DECIMAL)");


            return view('frontend.travelinsurance.visitorinsurance')->with(array('data' => $data, 'orderdata' => $sortfields, 'fields' => $fields, 'sum_insured' => $sum_insured));
        } else {
            return response()->view('frontend.errors.404', [], 404);
        }
    }
    public function studentinsurance()
    {
        $data = wp_dh_products::where('url', 'student-insurance')->first();
        if ($data) {
            $fields = unserialize($data->pro_fields);
            $sortfields = unserialize($data->pro_sort);
            $wp_dh_insurance_plans = wp_dh_insurance_plans::select('wp_dh_insurance_plans.id')->where('product', $data->pro_id)->get();
            $sum_insured = wp_dh_insurance_plans_rates::select('wp_dh_insurance_plans_rates.sum_insured')->whereIn('plan_id', $wp_dh_insurance_plans)->groupby('sum_insured')->get();
            return view('frontend.travelinsurance.studentinsurance')->with(array('data' => $data, 'orderdata' => $sortfields, 'fields' => $fields, 'sum_insured' => $sum_insured));
        } else {
            return response()->view('frontend.errors.404', [], 404);
        }
    }
    public function lifeinsurance()
    {
        return view('frontend.companypages.life-insurance');
    }
    public function desability()
    {
        return view('frontend.companypages.desability');
    }
    public function criticalillness()
    {
        return view('frontend.companypages.critical-illness');
    }
    public function health()
    {
        return view('frontend.companypages.health-insurance');
    }
    public function product()
    {
        return view('frontend.companypages.product');
    }
    public function aboutus()
    {
        return view('frontend.pages.about');
    }
    public function blogs()
    {
        $data = DB::table('blogs')->orderby('id' , 'desc')->get();
        return view('frontend.blogs.index')->with(array('data' => $data));
    }
    
    public function contacts(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);

        $insert = new contactus_messages();
        $insert->fname = $request->fname;
        $insert->lname = $request->lname;
        $insert->email = $request->email;
        $insert->mobile = $request->mobile;
        $insert->subject = $request->subject;
        $insert->description = $request->description;
        $insert->save();
        return redirect()->back()->with('message', 'Your Query Submited Successfully We Will Contact You With In 24 Hours');
    }
    public function privacypolicy()
    {
        return view('frontend.companypages.privacypolicy');
    }
    
    public function claim()
    {
        return view('frontend.companypages.claim');
    }
    public function resp()
    {
        return view('frontend.companypages.resp');
    }
    public function rrsp()
    {
        return view('frontend.companypages.rrsp');
    }
    public function mortgage()
    {
        return view('frontend.companypages.mortgage');
    }
    public function termsandcondition()
    {
        return view('frontend.companypages.termsandcondition');
    }
    public function termlifeinsurance()
    {
        return view('frontend.companypages.termlifeinsurance');
    }
    public function tfsa()
    {
        return view('frontend.companypages.tfsa');
    }
    public function nonmedical()
    {
        return view('frontend.companypages.nonmedical');
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('user.dashboard');
        } else {
            $temp = DB::table('site_settings')->where('smallname', 'lifeadvice')->first()->userpanel_temp;

            if ($temp == "1") {

                return view('auth.template1.login');
            } elseif ($temp == "2") {

                return view('auth.template2.login');
            } elseif ($temp == "3") {

                return view('auth.template3.login');
            }
        }
    }
    public function attemptlogin(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (Auth::user()->user_type == 'customer') {
                if (Auth::user()->status == 'active') {
                    return redirect()->route('user.dashboard');
                } else {
                    Auth::logout();
                    return redirect()->back()->with('warning', 'Your Account Is Banned Due To Some Reason');
                }
            } else {
                Auth::logout();
                return redirect()->back()->with('warning', 'This Is for Customers.');
            }
        } else {
            return redirect()->back()->with('warning', 'Email or Password are Incorrect');
        }
    }
    public function signup()
    {
        return view('frontend.companypages.signup');
    }
    public function carrierprofile($id)
    {
        $data = companies::where('company_link', $id)->get()->first();
        $jobs = jobsubmissionsrequests::select('jobs.url', 'jobs.id as job_id', 'jobs.job_tittle', 'jobs.duty_time', 'jobs.freight_type', 'jobs.home_time', 'jobs.avgerage_weekly_pay')->leftJoin('jobs', 'jobs.id', '=', 'jobsubmissionsrequests.job_id')->get();
        foreach ($jobs as $index => $job) {
            $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id', 'hiring_templates.minimum_expereince')->leftJoin('hiring_templates', 'hiring_templates.id', '=', 'linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id', $job->job_id)->first();
        }
        return view('frontend.carrier.index')->with(array('data' => $data, 'jobs' => $jobs));
    }
    public function jobdetail($id)
    {
        $jobs = jobsubmissionsrequests::select('jobs.hiring_area', 'jobs.operating_area', 'jobs.company_id', 'jobs.url', 'jobs.id as job_id', 'jobs.job_tittle', 'jobs.duty_time', 'jobs.freight_type', 'jobs.home_time', 'jobs.avgerage_weekly_pay')->leftJoin('jobs', 'jobs.id', '=', 'jobsubmissionsrequests.job_id')->where('jobs.url', $id)->get()->first();
        $hirring = linktemplatewithjobs::select(
            'linktemplatewithjobs.job_id',
            'hiring_templates.minimum_expereince',
            'hiring_templates.minimum_age',
            'hiring_templates.moving_violations',
            'hiring_templates.license_suspensions',
            'hiring_templates.license_suspensions_field',
            'hiring_templates.dot_moving_voilations',
            'hiring_templates.moving_voilations_incidents',
            'hiring_templates.maximum_jobs_no_more_than',
            'hiring_templates.felony_convictions',
            'hiring_templates.misdemeanors',
            'hiring_templates.moving_violations',
            'hiring_templates.moving_violations',
            'hiring_templates.moving_violations',
            'hiring_templates.moving_violations',
            'hiring_templates.moving_violations',
            'hiring_templates.moving_violations',
            'hiring_templates.minimum_age_field'
        )->leftJoin('hiring_templates', 'hiring_templates.id', '=', 'linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id', $jobs->job_id)->first();
        $company = companies::where('id', $jobs->company_id)->get()->first();
        return view('frontend.jobs.index')->with(array('data' => $jobs, 'company' => $company, 'hirring' => $hirring));
    }
    public function newsletter(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email|max:255,',
        ]);
        $email = DB::table('news_letters')->where('email', '=', $request->email)->first();
        if ($email == null) {
            $data  = new NewsLetter();
            $data->email = $request->email;
            $data->save();
            return back()->with('message', 'Email saved succesfully');
        }
        return back()->with('error', 'Email Already Exist');
    }
    public function viewLetters()
    {
        $users = DB::table('news_letters')->select('id', 'email')->get();
        return view('admin/contact/newsletter', compact('users'));
    }
    public function deleteletters($id)
    {
        DB::table('news_letters')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Letter Deleted Successfully');
    }
}
