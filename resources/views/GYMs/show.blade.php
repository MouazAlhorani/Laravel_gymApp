@extends('layout')
@section('title','GYM')
@section('header_title','GYM')
@section('profile')
<a href="{{route('gyms.gym_profile')}}">
    <img src="{{url('assets/imgs/logo/gymlogo.png')}}" alt="">
</a>
@endsection
@section('sidebar_content')
<a href="{{route('members.index')}}">
<div class="card_2">
    <div class="desc">
        <div class="padding_5">
            Members
        </div>
    </div>
</div>
</a>
<a href="{{route('coaches.index')}}">
<div class="card_2">
    <div class="desc">
        <div class="padding_5">
            Coaches
        </div>
    </div>
</div>
</a>
<a href="{{route('nuts.index')}}">
<div class="card_2">
    <div class="desc">
        <div class="padding_5">
            Nutritionists
        </div>
    </div>
</div>
</a>
<a href="{{route('members.requests')}}">
<div class="card_2">
    <div class="desc">
        <div class="padding_5">
            Members Requests
        </div>
    </div>
</div>
</a>
<a href="{{route('coaches.requests')}}">
<div class="card_2">
    <div class="desc">
        <div class="padding_5">
            Coaches Requests
        </div>
    </div>
</div>
</a>
<a href="{{route('nuts.requests')}}">
<div class="card_2">
    <div class="desc">
        <div class="padding_5">
            Nutritionist Requests
        </div>
    </div>
</div>
</a>
@endsection
@section('content')


@endsection
    
