@extends('dashboard')
@section('dashboard-content')



<div class="container">
    <div class="text-3xl font-bold text-center p-3 text-gray-800 ">
        <h1>Explore courses</h1>
        <p class="text-sm text-center mt-5 font-normal mx-auto leading-6 w-2/4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.</p>
    </div>
    <!-- As I set the endpoint at the courses controller for the courses view, I give access to fetch and use the appropriate columns from the database at the courses view
    I use a foreach loop method to loop through the data and structure a card for each course at the frontend.
    -->
    @foreach ($courses as $course)
    <article class="container">

        <div class="mx-auto bg-gray-100 text-center w-2/4 p-10 mt-5">
            <div class="flex flex-col">
                <h1 class="text-gray-700 text-2xl w-3/5 font-semibold font-semibold">
                    <a href="/courses/{{$course->slug}}">
                        {!! $course->title !!}
                    </a>
                </h1>
                <h3 class="mt-5 mx-12  text-left ">
                    {!! $course->excerpt !!}
                </h3>
            </div>

            <div class="flex ">
    <!--I used alpine.js for providing javascript functionulity to button module, in order to change the information, if a user clicks for adding a course to watchlist-->
            <div x-data="{buttonText:'Add to wishlist'}"
                    class="mt-5 text-left mx-12 bg-blue-400 p-2 w-2/5 text-sm text-center rounded-lg">
                    <button @click="$el.innerHTML='Added to watchlist!'" class=" text-sm  font-semibold text-white">Add to watchlist</button>
                </div>
    <!-- I wanted to provide also a module for providing difficulty information for the course, using a condition based at the database data-->
                <div class="mt-5 flex flex-row items-center">
                    <h1 class="font-semibold text-gray-500 text-sm">Difficulty |</h1>
                    <div class=" mt-0 mx-4  rounded text-sm text-white ">
                        @if($course->difficulty === 'Easy')
                        <h1 class="bg-green-500 w-24">{!! $course->difficulty !!}</h1>
                        @elseif($course->difficulty === 'Medium'){
                        <h1 class="bg-yellow-500 w-24">{!! $course->difficulty !!}</h1>
                        }
                        @elseif($course->difficulty === 'Hard')
                        <h1 class="bg-red-500 w-24">{!! $course->difficulty !!}</h1>
                        @endif
                    <div>
                </div>
        </div>
    </article>


    @endforeach
</div>
@endsection