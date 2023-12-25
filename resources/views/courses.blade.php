@extends('dashboard')
@section('dashboard-content')

<div class="container mx-auto">
    <div class="font-bold text-center p-1 text-gray-800">
        <h1 class="text-2xl">Explore courses</h1>
        <p class="text-sm text-center mt-0 font-normal mx-auto leading-6 sm:w-2/3 md:w-1/2 lg:w-1/3">
            <!-- Your Lorem Ipsum text here -->
        </p>
    </div>

    @foreach ($courses as $course)
    <article class="mx-auto bg-gray-100 text-center sm:w-2/3 md:w-1/2 lg:w-1/3 p-10 mt-5">
        <div class="flex flex-col">
            <h1 class="text-gray-700 text-2xl w-full font-semibold">
                <a href="/courses/{{$course->slug}}">
                    {!! $course->title !!}
                </a>
            </h1>
            <h3 class="mt-5 text-base text-left">
                {!! $course->excerpt !!}
            </h3>
        </div>

        <div class="flex mt-5 items-center">
            <div x-data="{buttonText:'Add to wishlist'}"
                class="mr-4 bg-blue-400 p-2 text-sm text-center rounded-lg">
                <button @click="$el.innerHTML='Added to watchlist!'" class="text-sm font-semibold text-white">
                    {{ $course->watchlisted ? 'Added to watchlist' : 'Add to watchlist' }}
                </button>
            </div>

            <div class=" mx-0 rounded text-sm text-white">
                @if($course->difficulty === 'Easy')
                <p class="bg-green-500 mx-12 w-24">{{ $course->difficulty }}</p>
                @elseif($course->difficulty === 'Medium')
                <p class="bg-yellow-500 mx-12 w-24">{{ $course->difficulty }}</p>
                @elseif($course->difficulty === 'Hard')
                <p class="bg-red-500 mx-12 w-24">{{ $course->difficulty }}</p>
                @endif
            </div>
        </div>
    </article>
    @endforeach

</div>
@endsection