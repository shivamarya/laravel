<h1>Users Page</h1>

{{-- <h3>Hello {{$user}}</h3>
<h3>City : {{$city}}</h3>
<h3>Script : {{$script}}</h3>
<h3>Script : {!!$script!!}</h3>


<h3>City : {{!empty($city)?$city : 'No City'}}</h3> --}}



{{-- ----------------------------------------------------------------------------- --}}


{{-- @foreach ($user as $id => $user)
    <h3>{{$id}} : {{$user['name']}}  | {{$user['phone']}} | {{$user['city']}}</h3>
    
@endforeach --}}

@foreach ($user as $id => $user)
    <h3>{{$id}} : {{$user['name']}}  | {{$user['phone']}} | {{$user['city']}} | <a href="{{route('view.user',$id)}}">Show</a></h3>


    
@endforeach

