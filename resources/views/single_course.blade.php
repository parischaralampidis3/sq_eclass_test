@extends('dashboard')
@section('dashboard-content')

<div class="container mx-auto">
    <div class="flex justify-between text-xl p-3 text-gray-800">
        <h1 class="text-2xl">Courses Dashboard</h1>
        <a class="text-sm text-blue-500" href="/">Go to the main page</a>
    </div>

    <article class="container">
        <div class="mx-auto bg-gray-100 text-center w-full p-10 mt-5 mb-10">
            <h1 class="text-gray-700 text-lg text-left mx-24 font-semibold">
                <a href="/courses/{{$course->slug}}">
                    {{ $course->title }}
                </a>
            </h1>
            <h3 class="mt-5 w-3/4 text-base text-left mx-24">
                {{ $course->body }}
            </h3>
        </div>
    </article>

    <div class="flex flex-col md:flex-row"> 
<div class="flex flex-col">
          <h1 class="text-xl text-left mb-3">Enrolled Completed Students</h1>
        <div class="container bg-gray-50  mx-auto w-full md:w-4/5 mb-0 md:mb-0">
       
            @foreach($students as $student)
            <div class="flex flex-col p-1 justify-center items-center mb-0">
                <div class="flex flex-col text-center mt-0">
                    <p class="text-left text-sm">
                        @if($student->completion === "Y" && $student->enrollment==="Y")
                        <h3 class="text-lg w-full ">{{$student->name}}</h3>
                        <p class="mx-0 text-left text-sm">{{$student->email}}</p>
                        <div class="text-sm text-gray-800 bg-green-200 w-full p-1">Completed</div>
                     
                        @endif
                    </p>
                </div>
            </div>
            @endforeach
        </div>
</div>
        <div class="container mx-auto w-full md:w-3/5">
            <h1 class="text-xl text-left mb-5">Enrolled Students</h1>
            @foreach($students as $student)
            <div class="flex flex-col bg-gray-50 p-2 justify-center items-center mb-2">
                <div class="flex flex-row items-center justify-around text-left mt-2">
                    <p class="text-left text-sm">
                        <h3 class="text-base w-2/3">{{$student->name}}</h3>
                        <p class="mx-6 text-left text-sm">{{$student->email}}</p>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
