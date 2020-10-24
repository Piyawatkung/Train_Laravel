@extends('layouts.app')

@section('content')

<form method="post" action="{{ route('blog.store') }}">
    @csrf
    {{-- @csrf_field() --}}
    <div style="padding: 20px">
        <label>Title</label><br>
        <input type="text" name="title" />
        <br><br>

        <label>Content</label><br>
        <textarea type="text" name="content"></textarea>
        <br>

        <button type="submit">สร้างบทความ</button>
    </div>
</form>

@endsection




