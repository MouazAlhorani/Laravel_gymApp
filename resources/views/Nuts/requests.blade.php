
@extends('layout')
@section('title','Nutritionist Requests')
@section('header_title','Nutritionist Requests')
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
    <div class="items_grid">
        @foreach ($data as $item)
        @if ($item->req==='undefined')
                 
                    <div class="card_5">
                    <div class="item_grid">
                        <a href="{{route('nuts.show',['nut'=>$item->id])}}" class="">  <img src="{{url($item->img)}}" alt=""></a>
                    <div class="subtitle">
                        {{$item->name}} 
                    </div>
                    <div class="desc">
                        {{$item->email}} 
                    </div>
                    <div class="desc">
                        {{$item->date}} 
                    </div>
                    <button class="accept">
                        <a href="{{route('nuts.requests')}}">Accept</a>
                    </button>
                    <button class="reject">
                        <a href="{{route('nuts.requests')}}">Reject</a>
                    </button>
                    
                </div>
            </div>
                
            
        @endif
        @endforeach
    </div>
        <div style="height: 30px"></div>
    </div>
</div>
@endsection
