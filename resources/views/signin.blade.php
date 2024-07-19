@extends('layout')
@section('title','SignIn')
@section('header_title','SignIn')
@section('content')

    
    <div class="card_1">
        <div class="center">
            <div class="desc">
                <div class="padding_5">
                    <a href="{{route('gyms.register')}}">
                        dont have account , register
                        <div class="itemmove">&#128640;</div>
                    </div>
                </a>
            </div>
        </div>
<div class="divider"></div>
    <form action="{{route('gyms.checkCredentials')}}" method="POST">
        @csrf
        
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{old('email')}}">
            <div style="color: rgba(255, 0, 0, 0.651)">
                @error('email')
                    {{$message}}
                @enderror
            </div>
        
            <label for="password">Password</label>
            <input type="password" name="password" id="password">     
            <div style="color: rgba(255, 0, 0, 0.651)">
                @error('password')
                    {{$message}}
                @enderror
            </div>
        <div class="center">
        <button type="submit">Log In</button>  
    </div>
    </form> 
</div>
</div>

<div style="height: 40px"></div> 
@endsection
   
   
    