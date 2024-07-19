@extends('layout')
@section('title','GYM Profile')
@section('header_title','GYM Profile')
@section('content')
<div class="card_9">
    <img src="{{url('assets/imgs/logo/gymlogo.png')}}" alt="" width="250" height="250">
    <div class="desc">
    <div class="title_4"><span class="title_6">{{$gym->name}}</div>  
    <div class="title_4"><span class="title_6"><a href="mailto:{{$gym->email}}">&#x1F4E7; {{$gym->email}}</a> </div>   
    <div class="title_4"><span class="title_6">&#x1F30E; {{$gym->address}}</div>
    <div class="title_4"><span class="title_6">&#x1F4F1; {{$gym->phone_number}}</div>  
    <div class="title_4"><span class="title_6">&#128220; {{$gym->description}}</div> 
    <div class="title_4">&#127947; work hours for Men: <span class="title_6"> {{$gym->wh_men}}</div> 
    <div class="title_4">&#127947; work hours for Women: <span class="title_6">{{$gym->wh_women}}</div> 
    <div class="title_4">&#128176; Daily Subscribe Price: <span class="title_6">{{$gym->dS_price}}</div> 
    <div class="title_4">&#128176; three days Subscribe Price: <span class="title_6">{{$gym->threeDS_price}}</div> 

</div>
</div>
@endsection