@extends('layout')



@section('content')


<div class="container mx-auto">
<div class="text-3xl p-5 text-gray-800 ">    
<h1>My dashboard</h1>
</div>
@foreach ($courses as $course)
<article class="container">
    <div class="mx-auto bg-gray-100 text-center w-2/4 p-5 mt-5">
    <h1 class="text-gray-700 text-2xl font-semibold">
        {!! $course->title !!}
    </h1>
    <h3 class="mt-5 w-2/4 text-left mx-auto">
        {!! $course->excerpt !!}
</h3>
</div>
</article>


@endforeach
</div>