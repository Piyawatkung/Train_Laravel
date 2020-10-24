@extends('layouts.app')

@section('content')

<form method="post" action="{{ route('blog.update', $blog->id) }}">
    @csrf
    @method('put')
    {{-- @csrf_field() --}}
    <div style="padding: 20px">
        <label>Title</label><br>
    <input type="text" name="title" value="{{ $blog->title }}" />
        <br><br>

        <label>Content</label><br>
        <textarea type="text" name="content">{{ $blog->content }}</textarea>
        <br>

        <button type="submit">บันทึกบทความ</button>
    </div>
</form>

@endsection




