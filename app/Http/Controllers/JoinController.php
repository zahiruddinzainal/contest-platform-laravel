<?php

namespace App\Http\Controllers;
use App\Models\Contest;
use Illuminate\Support\Facades\Auth;
use App\Models\Joiner;

use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function displayjoinerlist()
    {
        $contests = Contest::get();
        $contests = Contest::where('number', "1")->first();
        return view('joinerlist')->with( 'contests', $contests);
    }

    public function mycontest()
    {
        $x = Joiner::where('email', Auth::user()->email)->first();
        $y = Contest::where('number', $x->contest_id)->first();

       
        // $mycontests = Joiner::where('email', Auth::user()->email)->first();
        // dd($mycontests->all());

        return view('mycontest')->with( 'x', $x)->with( 'y', $y);
    }

    
    public function admin()
    {
       
        $contests = Contest::get();

        // $mycontests = Joiner::where('email', Auth::user()->email)->first();
        // dd($mycontests->all());

        return view('admin')->with( 'contests', $contests);
    }

    public function join($contestid)
    {
        // dd($request->all());

        $join = new Joiner();
        $join->name = Auth::user()->name;
        $join->email = Auth::user()->email;
        $join->phone = "0177282999";
        $join->contest_id = "1";

        $join->save();

        $notification = array(
            'message' => "You have joined this contest",
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}