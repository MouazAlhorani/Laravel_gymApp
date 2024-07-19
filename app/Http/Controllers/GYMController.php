<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GYM;
use Illuminate\Http\Request;

$GLOBALS['login']=0;

$dgym=new GYM(
name:"ProGYM",
email:"dg@g.com",
password:"12345678",
logo:url('../assets/gymlogo.png'),
address:"Syria - Daraa",
phone_number:"012345678",
description:"pro gym ....",
wh_men:"25 hours",
wh_women:"20 hours",
dS_price:"350$",
threeDS_price:"200$"
);
$GLOBALS['gymlist']=[$dgym];


class GYMController extends Controller
{
    public function checkCredentials(Request $request)
    {
        $request->validate([
            'email'=>['required','email'],
            'password'=>'required'
        ]);
        $credentials = $request->only('email', 'password');

        $gym=$GLOBALS['gymlist'][0];
        if($request->input('email')===$gym->email and $request->input('password')===$gym->password){
        $GLOBALS['login']=1;
        return view('gyms.show',['gym'=>$gym]);
        }
        return back()->withErrors(['password' => "account not valid"]); 
        
    }


    // public function getdata(){
        
    //     return GYM::all();
    // }
    public function index()
    {
        //$data=self::getdata();
        return view('gyms.index');
    }

    public function gymregister()
    {
        return view('gyms.register');
    }

    public function gympay()
    {
        return view('gyms.payment');
    }

    public function gymcomplete_register()
    {
        return view('gyms.complete_register');
    }
    public function gym_profile()
    {
        $gym=$GLOBALS['gymlist'][0];
        return view('gyms.gym_profile',['gym'=>$gym]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
        $request->validate([
        "name"=>'required',
        'email'=>'required',
        'password'=>['required','min:8','confirmed'],
        'checkbox'=>'accepted'   
        ]);
        
        $name=strip_tags($request->input('name'));
        $email=strip_tags($request->input('email'));
        $password=strip_tags($request->input('password'));
        strip_tags($request->input('password_confirmation'));
        $request->input('checkbox');
        $newGYM=new GYM($name,$email,$password);
        // $result = GYM::where('email', $gym->email)->first();
        $gymlist= $GLOBALS['gymlist'];
        $exist=false;
        foreach($gymlist as $gym){
            if($newGYM->email==$gym->email){
                $exist=true;
                break;
            }
        }
        if($exist){
            return back()->withErrors(['checkbox' => "$gym->email - This account is already registered."]);
        }
        // $gym->save();
        // return view('gyms.pay',['data'=>$gym]);
        return view('gyms.payment',['gym'=>$newGYM]);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gym=$GLOBALS['gymlist'][0];
        return view('gyms.show',['gym'=>$gym]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('gyms.complete_register');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $gym)
    {   
       $cardnum= strip_tags($request->input('cardnum'));
       if($cardnum){
        return view('gyms.complete_register',['gym'=>$GLOBALS['gymlist'][0]]);
       }
       return redirect()-> route('home.signin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
