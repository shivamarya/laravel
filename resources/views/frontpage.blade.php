@extends('layouts.masterlayout')

@section('title')
Home Page 
@endsection

@section('content')
<h2>Home page</h2>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    
@endsection


@section('content')
<h2>Testing</h2>
    
@endsection

@push('scripts')
<script src="/jquery.js"></script>
<script src="/bootstap.js"></script>
<script src="/example.js"></script>    
@endpush

@push('scripts')
<script src="/vue.js"></script>
 
@endpush


@push('style')
<link rel="stylesheet" href="css/bootstrap.css">
 
@endpush


@prepend('style')
<style>
    body{
        background-color: #b82222;
    }
</style>
    
@endprepend