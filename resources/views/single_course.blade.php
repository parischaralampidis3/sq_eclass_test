@extends('dashboard')
@section('dashboard-content')

<div class="container mx-auto">
    <div class="flex justify-between text-xl p-3 text-gray-800">
        <h1 class="text-2xl">Courses Dashboard</h1>
        <a class="text-sm text-blue-500" href="/">Go to the main page</a>
    </div>

    <article class="container">
        <div class="mx-auto bg-gray-100 text-center w-full p-10 mt-5 mb-10">
            <h1 class="text-gray-700 text-2xl text-left mx-24 font-semibold">
                    {{ $course->title }}
            </h1>
            <h3 class="mt-5 w-3/4 text-base text-left mx-24">
                {{ $course->body }}
            </h3>
        </div>
    </article>

    <div class="flex flex-col md:flex-row p-4"> 
<div class="flex flex-col">
          <h1 class="text-xl text-left mb-3">Enrolled Completed Students</h1>
        <div class="container bg-gray-50 p-2 mx-auto w-full md:w-4/5 mb-0 md:mb-0">
       
            @foreach($students as $student)
            <div class="flex flex-col p-1 justify-center items-center mb-0">
                <div class="flex flex-col text-center mt-0">
                    <p class="text-left text-sm">
                        @if($student->completion === "Y" && $student->enrollment==="Y")
                        <h3 class="text-lg w-full ">{{$student->name}}</h3>
                        <p class="mx-0 text-left text-sm">{{$student->email}}</p>
                        <div class="text-base bg-green-500 w-full text-white font-semibold p-1">Completed</div>
                     
                        @endif
                    </p>
                </div>
            </div>
            @endforeach
        </div>
</div>
        <div class="container mx-auto w-full md:w-1/3">
            <h1 class="text-xl text-left mb-5">Enrolled Students</h1>
          <div class="block w-full">
                    <table class="items-center bg-transparent w-full border-collapse sm:table-auto">
                        <thead>
                            <tr>
                                <th
                                    class="px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Name
                                </th>
                                <th
                                    class="px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Email
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td
                                    class="border-t-0 px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                    {!! $student->name !!}
                                </td>
                                <td
                                    class="border-t-0 px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    {!! $student->email !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>

@endsection
