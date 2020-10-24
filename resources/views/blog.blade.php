@extends('layouts.app')

@section('content')
<div style="padding: 0 30px;">

    <a href="{{ route('blog.create') }}">
        <button>สร้างบทความ</button>
    </a>

</div>
<ul>
@foreach($blogs as $blog)
    <li>
        <p> Blog ID: {{ $blog->id }} </p>
        <p> Title: {{ $blog->title }} </p>
        <p> Content: {{ $blog->content }} </p>

        <a href="{{ route('blog.show', $blog->id) }}">
            <button>ดูรายละเอียดบทความนี้</button>
        </a>
        <a href="{{ route('blog.edit', $blog->id) }}">
            <button>แก้ไขบทความนี้</button>
        </a>

        <form 
            style="display: inline-block;" 
            method="post" 
            action="{{ route('blog.destroy', $blog->id)}}"
        >
            @csrf
            @method('delete')
            <button type="submit">ลบบทความนี้</button>
        </form>

        <hr>
    </li>
@endforeach
</ul>


@endsection




