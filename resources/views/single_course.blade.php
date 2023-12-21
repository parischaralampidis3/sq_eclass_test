@extends('layout')



@section('content')


<div class="container mx-auto">
    <div class="text-3xl p-3 text-gray-800 ">
        <h1>My dashboard</h1>
    </div>

    <article class="container">
        <div class="mx-auto bg-gray-100 text-center w-full p-4 mt-5 mb-10">
            <h1 class="text-gray-700 text-2xl font-semibold">
                <a href="/courses/{{$course->slug}}">
                    {{ $course->title }}
                </a>
            </h1>
            <h3 class="mt-5 w-full text-left mx-auto">
                {{ $course->body }}
            </h3>
        </div>

    </article>
    <div class="flex">
        <div class="container mx-auto ">
            <h1 class="text-xl  text-left mb-10">Enrolled Completed Students</h1>
            @foreach($students as $student)
            <div class="flex flex-column bg-gray-50 w-2/4 p-2 justify-center items-center">

                <div class="flex flex-row items-center justify-around  text-left mt-0  ">

                    <p class=" text-left text-sm">
                        @if($student->completion === "Y" && $student->enrollment=="Y")
                    <h3 class="text-left w-full ">{{$student->name}}</h3>
                    <p class="mx-6 text-left text-sm">{{$student->email}}</p>
                    <div class=" text-sm text-gray-800 bg-green-200 w-full p-1">Completed</div>
                    @endif
                    </p>
                </div>
            </div>
            @endforeach
        </div>


        <div class="container mx-auto ">
            <h1 class="text-xl  text-left mb-5">Enrolled Students</h1>
            @foreach($students as $student)
            <div class="flex flex-column bg-gray-50 w-2/3 p-2 justify-center items-center">

                <div class="flex flex-row items-center justify-around  text-left mt-2  ">

                    <p class="mx-6 text-left text-sm">
                    <h3 class="text-left w-1/3  ">{{$student->name}}</h3>
                    <p class="mx-6 text-left text-sm">{{$student->email}}</p>


                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</div>