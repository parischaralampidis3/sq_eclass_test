
@extends('dashboard')
@section('dashboard-content')


<div class="container mx-auto">
    <div class="flex justify-between text-3xl p-3 text-gray-800 ">
        <h1>Courses Dashboard</h1>
        <a class="text-sm text-blue-500" href="/">Go at the main page</a>
    </div>

    <article class="container">
        <div class="mx-auto bg-gray-100 text-center w-full p-10 mt-5 mb-10">
            <h1 class="text-gray-700 text-2xl text-left mx-24 font-semibold">
                <a href="/courses/{{$course->slug}}">
                    {{ $course->title }}
                </a>
            </h1>
            <h3 class="mt-5 w-3/4 text-left mx-24">
                {{ $course->body }}
            </h3>
        </div>
<!--This is the view where student information is expected, to be shown.I used again a loop to fetch student information and create small components, to provide information with more clarity-->
    </article>
    <div class="flex">
        <div class="container mx-auto ">
            <h1 class="text-xl  text-left mb-10">Enrolled Completed Students</h1>
            @foreach($students as $student)
            <div class="flex flex-column bg-gray-50 w-4/5 p-2 justify-center items-center">
<!--One of the tasks requires -->
                <div class="flex flex-column text-center mt-0  ">
                    <p class=" text-left text-sm">
                        @if($student->completion === "Y" && $student->enrollment=="Y")
                    <h3 class="text-left w-full ">{{$student->name}}</h3>
                    <p class="mx-6 text-left text-sm">{{$student->email}}</p>
                    <div class=" text-sm text-gray-800 bg-green-200 w-full p-1">Completed</div>
                        @else
                        <p class="hidden">no records</p>
                    @endif

                    </p>
                </div>
            </div>
            @endforeach
        
  
       
        </div>

        <div class="container mx-auto ">
            <h1 class="text-xl  text-left mb-5">Enrolled Students</h1>
            @foreach($students as $student)
            <div class="flex flex-column bg-gray-50 w-3/5 p-2 justify-center items-center">

                <div class="flex flex-row items-center justify-around  text-left mt-2  ">
                    <p class="mx-6 text-left text-sm">
                    <h3 class="text-left w-2/3  ">{{$student->name}}</h3>
                    <p class="mx-6 text-left text-sm">{{$student->email}}</p>


                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</div>
@endsection