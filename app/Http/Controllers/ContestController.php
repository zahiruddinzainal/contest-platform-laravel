<?php

namespace App\Http\Controllers;
use App\Models\Contest;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ContestController extends Controller
{
    public function displaylist()
    {
        $contests = Contest::get();
        // dd ($contests->all());

        $contests = Contest::where('number', "1")->first();

        // if(Auth::check()){
        //     return view('home')->with( 'contests', $contests);
        // }
  
        return view('home')->with( 'contests', $contests);

        // return view('home')->with( 'contests', $contests);
    }

    public function addcontest(Request $request)
    {
        if (Contest::get() == null){
            $values = array(
                'number' => 1,
                'banner' => 1,
                'title' => $request->title, 
                'desc' =>  $request->desc, 
                'start' =>  $request->start,  
                'end' =>  $request->end, 
                'winner' => '0',
                'created_at' => Carbon::now()->toDateTimeString(), 
                'updated_at' => Carbon::now()->toDateTimeString()
            );
            DB::table('contests')->insert($values);
        }
        else{
            $max = Contest::max('number');
            $values = array(
                'number' => $max+1,
                'banner' => 1,
                'title' => $request->title, 
                'desc' =>  $request->desc, 
                'start' =>  $request->start,  
                'end' =>  $request->end, 
                'winner' => '0', 
                'created_at' => Carbon::now()->toDateTimeString(), 
                'updated_at' => Carbon::now()->toDateTimeString()
            );
            DB::table('contests')->insert($values);
        }
      
        // $add = new Notes();
        // $add->notes = $request->notes;
        // $add->save();
        return redirect('/');

    }

    public function update($number) 
    {
        $contest= Contest::where('number', $number)->first();
        return view('update')->with('contest', $contest);
    }

    public function updatecontest(Request $request) 
    {
        $ambik = Contest::where('number', $request->number)->first();
        // dd ($request->all());
        $values = array(
            'number' => $ambik->number,
            'banner' => 1,
            'title' => $request->title, 
            'desc' =>  $request->desc, 
            'start' =>  $request->start,  
            'end' =>  $request->end, 
            'winner' => '0', 
            'created_at' => $ambik->created_at,
            'updated_at' => Carbon::now()->toDateTimeString()
        );
        DB::table('contests')->where('number', $ambik->number)->update($values);
        return redirect('/');

    }
    public function deletecontest($number)
    {
        Contest::where('number', $number)->delete();
        return redirect('/');

    }
}
