@include('pages.header');
<h1>Our First Page</h1>

{{-- <a href="{{route('mypost')}}">Post Page</a>
<a href="/about">about Page</a> --}}


{{8+9}}

<br><br>

{{"Hello World"}}

{!! "<h1>Hello World</h1>" !!}

{{-- {{ "<script>alert('Yahoo Baba')</script>" }} --}}

{{-- Comment section --}}

@php
    
    $names = ["Shivam arya","praveen singh","kritika","aman","amit"];
    $user = "Shivam Arya"
@endphp

{{-- {{$usernames}} --}}
<ul>
    @foreach ($names as $n)
    {{-- <li><h1>{{$loop->index}} - {{$n}}</h1></li> --}}
    {{-- <li><h1>{{$loop->iteration}} - {{$n}}</h1></li> --}}
    <li><h1>{{$loop->count}} - {{$n}}</h1></li>
    

    
    @endforeach
</ul>

@foreach ($names as $n)
    @if ($loop->first)
       <li style="color: red">{{$n}}</li>

       @elseif ($loop->last)
       <li style="color: green">{{$n}}</li>
        
    @else
       <li >{{$n}}</li>
        
    @endif

@endforeach

<br><br>

@foreach ($names as $n)
    @if ($loop->even)
       <li style="color: red">{{$n}}</li>

       @elseif ($loop->odd)
       <li style="color: green">{{$n}}</li>
        
        
    @endif

@endforeach


<h1>{{$user}}</h1>

@include('pages.footer')
@php
    $fruits = ["1"=>"Apple","2"=>"Banana","3"=>"Orange","4"=>"Graps"];
    // $fruits = []
    $boolen = true;
    $value = '';
@endphp


{{-- @includeWhen(empty($value),'pages.header',['names'=>$fruits] ) --}}
@includeUnless(empty($value),'pages.header',['names'=>$fruits] )


{{-- @include('pages.header',['names'=>$fruits]) --}}
<h1>Home page</h1>
@include('pages.footer')


@includeif('pages.content')
