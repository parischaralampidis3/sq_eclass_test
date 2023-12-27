
@extends('dashboard')

@section('dashboard-content')

<section class="px-6 py-8">

    <section class="py-1 bg-blueGray-50">
        <div class="w-full xl:w-10/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6  rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700">Appointment List</h3>
                        </div>
                  
                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <table class="items-center bg-transparent w-full border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Title
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Excerpt
                                </th>
                                      <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Difficulty
                                </th>

                                        <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Browse Courses
                                </th>
                         
                              
                              
                          
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                    {!! $course->title !!}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    {!! $course->excerpt !!}
                                </td>
                           

                                <td>
                                    <div class=" mx-0 mt-3 p-2 rounded-md text-center text-sm text-white">
                @if($course->difficulty === 'Easy')
                <p class="bg-green-500 mx-12 p-2 w-24">{{ $course->difficulty }}</p>
                @elseif($course->difficulty === 'Medium')
                <p class="bg-yellow-500 mx-12 p-2 w-24">{{ $course->difficulty }}</p>
                @elseif($course->difficulty === 'Hard')
                <p class="bg-red-500 mx-12 p-2 w-24">{{ $course->difficulty }}</p>
                @endif
            </div>
                                </td>
                               
                              <td>
                                       <a class="bg-blue-500 text-white rounded-md text-center p-1 mt-0" href="/courses/{{$course->slug}}">Browse</a>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</section>
@endsection

@endsection
