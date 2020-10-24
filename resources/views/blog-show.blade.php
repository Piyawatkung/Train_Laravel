@extends('layouts.app')

@section('content')
    <p> Blog ID: {{ $blog->id }} </p>
    <p> Title: {{ $blog->title }} </p>
    <p> Content: {{ $blog->content }} </p>
    <hr>
    
@endsection











{{-- 
<a href="{{ route('blog.index') }}">
        <button>บทความทั้งหมด</button>
    </a> --}}