<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;
include 'MemberController.php';

$GLOBALS['nutritionist']=[
    new Coach(id:0,date:"2024-03-07",img:"assets/imgs/profiles/6.jpg", name:"N.Fadi",email:"nne@g.com",phone_number:"0123465",gender:"man",age:20,wh_train:24,price:"50$",req:"undefined",members:null),
    new Coach(id:1,date:"2024-08-11",img:"assets/imgs/profiles/2.jpg",name:"C.LMA",email:"nnr@g.com",phone_number:"0123465",gender:"women",age:22,wh_train:20,price:"40$",members:null,req:"accept"),
    new Coach(id:2,date:"2024-02-06",img:"assets/imgs/profiles/9.jpg",name:"C.Kaled",email:"nnw@g.com",phone_number:"0123465",gender:"man",age:22,wh_train:16,price:"25$",req:"accept",members:[$GLOBALS['memberslist'][3],$GLOBALS['memberslist'][5]]),];
class NutritionistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getdata(){
        return $GLOBALS['nutritionist'];
    }

    public function index()
    {
        $data=$this->getdata();
        return view('nuts.index',['data'=>$data]);
    }
    public function requests()
    {
        $data=$this->getdata();
        return view('nuts.requests',['data'=>$data]);
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
        foreach($GLOBALS['nutritionist'] as $item){
            if($item->id==$id){
                $result=$item;
                break;
            }
        }
        return view('nuts.show',['nut'=>$result]);
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
