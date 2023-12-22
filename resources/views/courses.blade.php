@extends('dashboard')


@section('dashboard-content')


<div class="container">
<div class="text-3xl font-bold mx-12 p-3 text-gray-800 ">    
<h1>My dashboard</h1>
</div>
@foreach ($courses as $course)
<article class="container">
    
    <div class="mx-auto bg-gray-100 text-center w-2/4 p-10 mt-5">
    <div class="flex flex-col"  >    
    <h1 class="text-gray-700 text-2xl w-3/5 font-semibold font-semibold">
        <a href="/courses/{{$course->slug}}">
            {!! $course->title !!}
        </a>
    </h1>
    <h3 class="mt-5 mx-12  text-left ">
        {!! $course->excerpt !!}
</h3>


</div>

<div class="mt-12 text-left mx-12 bg-blue-400 p-2 w-2/5 text-sm text-center rounded-lg">
    <a class=" text-sm  font-semibold text-white">Add to watchlist</a>
</div>
</article>


@endforeach
</div>
@endsection