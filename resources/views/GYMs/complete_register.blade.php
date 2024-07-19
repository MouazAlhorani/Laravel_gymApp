@extends('layout')
@section('title','Complete Register')
@section('header_title','Complete Register')
@section('content')

    <div class="card_1">
        <div class="center">
        <form action="{{route('gyms.update',['gym'=>$gym->id])}}" method="post">
            @csrf
            @method("PUT")
            
            <div class="uploadprofile">
                <label for="input-file">
                    <img src="{{url('assets/imgs/logo/logo.png')}}" id="def-pic">
                </label>
                <input type="file" name="" id="input-file">
            
            </div>
            <script>
                    let def_pic=document.getElementById("def-pic");
                    let input_file=document.getElementById("input-file");
                    input_file.onchange=function(){
                        def_pic.src=URL.createObjectURL(input_file.files[0]);
                    }
            </script>
            <div class="desc">choose your gym logo</div>
            
                <label for="address">Address</label>
                <input type="text"  name="address" id="address" value="{{old('address')}}">
                <div style="color: rgba(255, 0, 0, 0.651)">
                </div>
            
    
                <label for="phone_number">phone number</label>
                <input type="text"  name="phone_number" id="phone_number" value="{{old('phone_number')}}">
                <div style="color: rgba(255, 0, 0, 0.651)">
                </div>
            
    
                <label for="land_number">Land Number</label>
                <input type="text"  name="land_number" id="land_number" value="{{old('land_number')}}">
                <div style="color: rgba(255, 0, 0, 0.651)">
                </div>
            
        
                <label for="description">Description</label>
                <input type="text"  name="description" id="description" value="{{old('description')}}">
                <div style="color: rgba(255, 0, 0, 0.651)">
                </div>
            
            
                <label for="wh_women">Work Hour Women</label>
                <input type="text"  name="wh_women" id="wh_women" value="{{old('wh_women')}}">
                <div style="color: rgba(255, 0, 0, 0.651)">
                </div>
            
           
                <label for="wh_men">Work Hour Men</label>
                <input type="text"  name="wh_men" id="wh_men" value="{{old('wh_men')}}">
                <div style="color: rgba(255, 0, 0, 0.651)">
                </div>
            
         
                <label for="ds_price">Daily Subscribe Prise</label>
                <input type="text"  name="ds_price" id="ds_price" value="{{old('ds_price')}}">
                <div style="color: rgba(255, 0, 0, 0.651)">
                </div>
    
                <label for="threeDS_price">Three Days Subscribe Prise</label>
                <input type="text" name="threeDS_price" id="threeDS_price" value="{{old('threeDS_price')}}">
                <div style="color: rgba(255, 0, 0, 0.651)">
                </div>
                <button type="submit"> Register </button> 
                
        </form> 
       
    </div>
  
    </div>
 
       
 
@endsection
