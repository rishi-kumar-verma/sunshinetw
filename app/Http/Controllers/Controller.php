<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AboutBanner;
use App\Models\ContactBanner;
use App\Models\ContactDetails;
use App\Models\AboutSecondSection;
use App\Models\AboutThirdSection;
use App\Models\AboutFourthSection;
use Exception;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function upload(Request $request)
    {
        try {
            $info = new User;
            $info->firstname = $request->firstname;
            $info->subject = $request->subject;
            $info->phone = $request->phone;
            $info->message = $request->message;
            $info->email = $request->email;
            $info->save();
            
            $data = [
                'Name' => $request->get('firstname'),
                'Email' => $request->get('email'),
                'Subject' => $request->get('subject'),
                'phone' => $request->get('phone'),
                'Message' => $request->get('message'),
            ];

            // Mail::to('rashidayesha208@gmail.com')->send(new \App\Mail\MailSend($data));
            // Mail::send('message', $data, function ($message) use ($request){
            //     $message->from($request->email);
             
            //     $message->to('rashidayesha208@gmail.com');
            // });

            return redirect::back()->with('message', 'Message Sent successfully');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }



    public function createbannersection()
    {

        return view('admin.Contact.contact_banner');
    }
    public function displaybannersection()
    {

        return view('admin.Contact.contactbannerview')
            ->with('info', ContactBanner::orderBy('id', 'DESC')->first());;
    }
    public function addbannersection(Request $request)
    {
        $info = new ContactBanner;
        $request->validate([
            'title' => 'required',

        ]);
        $info->title = $request->title;

        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function editbanner()
    {


        return view('admin.Contact.editcontactbanner')
            ->with('users', ContactBanner::orderBy('id', 'DESC')->first());
    }
    public function createdetailsection()
    {

        return view('admin.Contact.contactdetails');
    }
    public function displaydetailsection()
    {

        $info = ContactDetails::all();
        return view('admin.Contact.contactdetailsview', compact('info'));
    }
    public function editdetailsection(Request $request, $id)
    {
        $info = ContactDetails::find($id);
        return view('admin.Contact.editcontactdetails', ['info' => $info]);
    }
    public function destroydetail($id)
    {
        $max = DB::table('contactdetails')->max('id');
        DB::delete('delete from  contactdetails where id = ?', [$id]);
        DB::statement("ALTER TABLE contactdetails AUTO_INCREMENT =  $max");
        return redirect::back();
    }
    public function adddetailsection(Request $request)
    {
        $info = new ContactDetails;
        $request->validate([
            'street' => 'required',
            'state' => 'required',
            'phone' => 'required',
            'email' => 'required',

        ]);
        $info->street = $request->street;
        $info->state = $request->state;
        $info->phone = $request->phone;
        $info->email = $request->email;
        $info->save();

        return redirect::back()->with('message', 'Record Added successfully');
    }
    public function updatedetailsection(Request $request)
    {
        $users = ContactDetails::find($request->id);
        $request->validate([
            'street' => 'required',
            'state' => 'required',
            'phone' => 'required',
            'email' => 'required',

        ]);
        $users->street = $request->street;
        $users->state = $request->state;
        $users->phone = $request->phone;
        $users->email = $request->email;
        $users->save();
        $info = ContactDetails::all();
        return view('admin.Contact.contactdetailsview', compact('info'));
    }



    public function displayblogbannersection()
    {

        return view('admin.BlogList.blog_banner');
    }
    public function displaybloglistsection2()
    {

        return view('admin.BlogList.bloglistsection2');
    }

    public function displaycontactsection2()
    {

        return view('admin.Contact.contactsection2');
    }
    public function viewfounder()
    {
        try {
            return View('founder');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    public function viewchairman()
    {
        try {
            return View('chairman');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    public function viewdirector()
    {
        try {
            return View('director');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    public function viewschairman()
    {
        try {
            return View('schairman');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
    public function viewhead()
    {
        try {
            return View('head-management');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    public function viewalumni()
    {
        try {
            return View('alumni');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
    public function viewachievement()
    {
        try {
            return View('achievement');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
    public function viewevents()
    {
        try {
            return View('events');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
    public function viewgallery()
    {
        try {
            return View('gallery');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
    public function viewmentors()
    {
        try {
            return View('mentors');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
    public function viewbeteacher()
    {
        try {
            return View('beteacher');
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }



    public function viewcontact()
    {
        try {
            $second = ContactDetails::all();
            return View('contact')
                ->with(compact('second'))
                ->with('banner', ContactBanner::orderBy('id', 'DESC')->first());
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    public function getcontactus()
    {
        try {
            $data['users']=User::all();
            return view('admin.Contact.contactusview')->with($data);
        } catch (Exception $e) {

            return $e->getMessage();
        }
    }
}
