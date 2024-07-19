@extends('layout')
@section('title','Payment')
@section('header_title','Payment')

@section('content')
        <div class="card_1">
            <div class="center">
            <form action="{{route('gyms.update',['gym'=>$gym->id])}}" method="POST">
            @csrf
            @method("PUT")
                <label for="cardnum"> Subscribe  <span style="font-size: 25px">&#128179;</span></label>
                <input type="text" name="cardnum" id="cardnum" value="{{old('cardnum')}}">
                <div class="undertflabel">
                <label for="cardnum"> Card number  <span style="font-size: 25px">&#128179;</span></label>
                <label for="choosedate" id="choosedate-label">yy/mm</label>
                <input type="date" id="choosedate" style="display: none;">
                </div>
                <script>
                    document.getElementById('choosedate-label').addEventListener('click', function() {
                      document.getElementById('choosedate').showPicker();
                    });
                  </script>
                <div style="color: rgba(255, 0, 0, 0.651)">
                    @error('cardnum')
                        {{$message}}
                    @enderror
                </div>
            
            <div class="radio">
            <input type="radio" id="1" name="price" value="1">
            <label for="1">1 month <span style="background-color: rgba(222, 184, 135, 0.507)">100$</span><span>&#128181;</span></label>
            </div>
            <div class="radio">
            <input type="radio" id="3" name="price" value="3" checked="true">
            <label for="3">three months <span style="background-color: rgba(222, 184, 135, 0.534)">250$</span><span>&#128181;&#128181;&#128181;</span></label>
            </div>

            <button type="submit"> Pay &#128176; </button>  
            </form> 
        </div> 
    </div>
    <div style="height: 30px"></div>

@endsection
