@extends('layout')
@section('title','Nutritionist')
@section('header_title','Nutritionist info')
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
<div class="body2">
   
        <div class="card_9">
            <img src="{{url($nut->img)}}" alt="">
            <div class="title">
                {{$nut->name}}
            </div>

            <div class="desc">
                <div class="padding_15">
                    <table>
                        <tr>
                            <th>email:</th>
                            <td><a href="mailto: {{$nut->email}}" class="">{{$nut->email}}</a></td>
                        </tr>
                        <tr>
                            <th>phone:</th>
                            <td>{{$nut->phone_number}}</td>
                        </tr> 
                            <th>gender</th>
                            <td>{{$nut->gender}}</td> 
                        </tr>
                    </tr> 
                    <th>age</th>
                    <td>{{$nut->age}}</td> 
                </tr>
            </tr> 
            <th>wh_train</th>
            <td>{{$nut->wh_train}}</td> 
        </tr>
    </tr> 
    <th>price</th>
    <td>{{$nut->price}}</td> 
</tr>
<th>members:</th>
    <td> @if ($nut->members)
        @foreach ($nut->members as $item)
        <ul>
            <li>{{$item->name}}</li>
        </ul> 
        @endforeach
    @else
        </br>No member related with coach
    @endif</td> 

                    </table>
                </div>
            </div>



           
           
            
        </div>
        

</div>
@endsection
