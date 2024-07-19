@extends('layout')
@section('title','Register')
@section('header_title','Enjoy managing your GYM with us')
@section('content')
    <div class="card_1">
        <div class="center">
            <div class="padding_15">
                <div class="subtitle">Register</div>
                    <div class="divider"></div>
                    <form action="{{route('gyms.store')}}" method="post">
                    @csrf
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{old('name')}}">
                        <div style="color: rgba(255, 0, 0, 0.651)">
                            @error('name')
                                {{$message}}
                            @enderror
                        </div>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="{{old('email')}}">
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
                        <label for="password_confirmation">Confirm-Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"> 
                        <input type="checkbox"  name="checkbox" id="checkbox" value="1" {{ old('checkbox') ? 'checked' : '' }}>
                            I agree to the term of service,privecy policy and data processing agreement
                        <div style="color: rgba(255, 0, 0, 0.651)">
                            @error('checkbox')
                                {{$message}}
                            @enderror
                        </div>  
                        <div class="horizintalline"></div>
                        <button type="submit"> Register </button>  
                    </form> 
                </div>
            </div> 
        </div>
    <div style="height: 40px"></div>
    </div>
@endsection
