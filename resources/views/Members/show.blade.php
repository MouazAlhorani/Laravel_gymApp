@extends('layout')
@section('title','Member')
@section('header_title','Member info')
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
            <img src="{{url($member->img)}}" alt="">
            <div class="title">
                {{$member->name}}
            </div>

            <div class="desc">
                <div class="padding_15">
                    <table>
                        <tr>
                            <th>email:</th>
                            <td><a href="mailto: {{$member->email}}" class="">{{$member->email}}</a></td>
                        </tr>
                        <tr>
                            <th>phone:</th>
                            <td>{{$member->phone_number}}</td>
                        </tr> 
                            <th>gender</th>
                            <td>{{$member->gender}}</td> 
                        </tr>
                    </tr> 
                    <th>age</th>
                    <td>{{$member->age}}</td> 
                </tr>
            </tr> 
            <th>hieght</th>
            <td>{{$member->hieght}}</td> 
        </tr>
    </tr> 
    <th>wieght</th>
    <td>{{$member->wieght}}</td> 
</tr>
<th>coach:</th>
    <td> @if ($member->coach)
        {{$member->coach->name}}
    @else
        </br>No Coach related with member
    @endif</td> 
</tr>

<th>nutritionist:</th>
    <td>  @if ($member->nutritionist)
        {{$member->nutritionist->name}}
    @else
        </br>No Nutritionist related with member
    @endif</td> 
</tr>
                    </table>
                </div>
            </div>



           
           
            
        </div>
        

</div>
@endsection
