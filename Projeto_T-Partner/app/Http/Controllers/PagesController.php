<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function getIndex()
    {
        $instructors = DB::table('instructors')->where('id', 1)->get();
       
        return view('index', compact('instructors'));

    }


    public function getMessages()
    {
        return view('messages');
    }

    public function getAbout()
    {
        return view('about');
    }

    public function getClasses()
    {
        $students = DB::table('students')->where('id', 2)->get();
        $students2 = DB::table('students')->where('id', 3)->get();

        return view('classes', compact('students'), compact('students2'));
    }

    public function getHelp()
    {
        return view('help');
    }

    public function getLogin()
    {
        return view('login');
    }

    public function getNotifications()
    {
        return view('notifications');
    }

    public function getProfile()
    {
        return view('profile');
    }

    public function getSettings()
    {
        return view('settings');
    }

    public function getStudents()
    {
        $students2 = DB::table('students')->where('id', 3)->get();
        return view('students',compact('students2'));
    }

    public function getSubjects()
    {
        $classes = DB::table('classes')->where('id', 1)->get();
        $classes2 = DB::table('classes')->where('id', 2)->get();
    
        return view('subjects', compact('classes'), compact('classes2'));
    }
}
