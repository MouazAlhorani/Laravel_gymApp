<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Coach;
use App\Models\Member;


include 'MemberController.php';

$GLOBALS['coacheslist']=[
    new Coach(id:0,date:"2024-03-07",img:"assets/imgs/profiles/6.jpg", name:"C.Wael",email:"c_wael@g.com",phone_number:"0123465",gender:"man",age:20,wh_train:24,price:"50$",req:"undefined",members:null),
    new Coach(id:1,date:"2024-08-11",img:"assets/imgs/profiles/2.jpg",name:"C.Dana",email:"c_dana@g.com",phone_number:"0123465",gender:"women",age:22,wh_train:20,price:"40$",members:[$GLOBALS['memberslist'][5],$GLOBALS['memberslist'][1]],req:"accept"),
    new Coach(id:2,date:"2024-02-06",img:"assets/imgs/profiles/9.jpg",name:"C.Samer",email:"c_samer@g.com",phone_number:"0123465",gender:"man",age:22,wh_train:16,price:"25$",req:"accept",members:null),
];



class CoachController extends Controller
{
    public function getdata(){
        return $GLOBALS['coacheslist'];
    }
    public function index()
    {
        $data=$this->getdata();
        return view('coaches.index',['data'=>$data]);
    }

    public function requests()
    {
        $data=$this->getdata();
        return view('coaches.requests',['data'=>$data]);
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
        foreach($GLOBALS['coacheslist'] as $item){
            if($item->id==$id){
                $result=$item;
                break;
            }
        }
        return view('coaches.show',['coach'=>$result]);
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
