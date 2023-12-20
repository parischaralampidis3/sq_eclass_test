@extends('layout')



@section('content')


<div class="container mx-auto">
<div class="text-3xl p-5 text-gray-800 ">    
<h1>My dashboard</h1>
</div>

<article class="container">
    <div class="mx-auto bg-gray-100 text-center w-2/4 p-5 mt-5">
    <h1 class="text-gray-700 text-2xl font-semibold">
        <a href="/courses/{{$course->slug}}">
            {!! $course->title !!}
        </a>
    </h1>
    <h3 class="mt-5 w-full text-left mx-auto">
        {!! $course->body !!}
</h3>
</div>  
<div>
<p class="mt-4 block text-gray-400 text-xs">
                        Published <time>{{$course->created_at->diffForHumans()}}</time>
</p>
</div>
</article>




</div>