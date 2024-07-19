<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Coach;

// include 'CoachController.php';

$nutritionist=[
    new Coach(id:0,date:"2024-03-07",img:"assets/imgs/profiles/10.jpg", name:"C.Wael",email:"c_wael@g.com",phone_number:"0123465",gender:"man",age:20,wh_train:24,price:"50$",req:"undefined",members:null),
    new Coach(id:1,date:"2024-08-11",img:"assets/imgs/profiles/2.jpg",name:"C.Dana",email:"c_dana@g.com",phone_number:"0123465",gender:"women",age:22,wh_train:20,price:"40$",members:null,req:"accept"),
    new Coach(id:2,date:"2024-02-06",img:"assets/imgs/profiles/5.jpg",name:"C.Samer",email:"c_samer@g.com",phone_number:"0123465",gender:"man",age:22,wh_train:16,price:"25$",req:"accept",members:null),
];
$coacheslist=[
    new Coach(id:0,date:"2024-03-07",img:"assets/imgs/profiles/6.jpg", name:"C.Wael",email:"c_wael@g.com",phone_number:"0123465",gender:"man",age:20,wh_train:24,price:"50$",req:"undefined",members:null),
    new Coach(id:1,date:"2024-08-11",img:"assets/imgs/profiles/8.jpg",name:"C.Dana",email:"c_dana@g.com",phone_number:"0123465",gender:"women",age:22,wh_train:20,price:"40$",members:null,req:"accept"),
    new Coach(id:2,date:"2024-02-06",img:"assets/imgs/profiles/7.jpg",name:"C.Samer",email:"c_samer@g.com",phone_number:"0123465",gender:"man",age:22,wh_train:16,price:"25$",req:"accept",members:null),
];
$GLOBALS['memberslist']=[
    new Member(id:0,img:"assets/imgs/profiles/1.jpg",date:"2024-04-06", name:"Ahmed",email:"ah@g.com",phone_number:"0123465",gender:"man",age:20,wieght:70,hieght:165,req:"undefined",coach:null,nutritionist:null),
    new Member(id:1,img:"assets/imgs/profiles/2.jpg",date:"2024-03-04",name:"Mona",email:"mn@g.com",phone_number:"0123465",gender:"women",age:22,wieght:60,hieght:145,req:"accept",coach:$coacheslist[1],nutritionist:null),
    new Member(id:2,img:"assets/imgs/profiles/3.jpg",date:"2024-07-06",name:"Sami",email:"sa@g.com",phone_number:"0123465",gender:"man",age:18,wieght:50,hieght:155,req:"undefined",coach:null,nutritionist:$nutritionist[0]),
    new Member(id:3,img:"assets/imgs/profiles/4.jpg",date:"2024-04-06",name:"Sara",email:"sara@g.com",phone_number:"0123465",gender:"women",age:20,wieght:70,hieght:165,req:"accept",coach:null,nutritionist:$nutritionist[0]),
    new Member(id:4,img:"assets/imgs/profiles/5.jpg",date:"2024-05-06",name:"Omar",email:"om@g.com",phone_number:"0123465",gender:"man",age:20,wieght:70,hieght:165,req:"undefined",coach:null,nutritionist:null),
    new Member(id:5,img:"assets/imgs/profiles/6.jpg",date:"2024-04-06",name:"Rami",email:"ra@g.com",phone_number:"0123465",gender:"man",age:23,wieght:70,hieght:165,req:"accept",coach:$coacheslist[1],nutritionist:$nutritionist[1])
];
 
class MemberController extends Controller
{
    public function getdata(){
        return $GLOBALS['memberslist'];
    }
    public function index()
    {
        $data=$this->getdata();
        return view('members.index',['data'=>$data]);
    }

    public function requests()
    {
        $data=$this->getdata();
        return view('members.requests',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $result=null;
        foreach($GLOBALS['memberslist'] as $item){
            if($item->id==$id){
                $result=$item;
                break;
            }
        }
      
        return view('members.show',['member'=>$result]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
