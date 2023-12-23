
@extends('layout')


<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
@section('content')
<div class="min-h-full">

@include('partials.navigation')
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->

        @yield('dashboard-content')
    </div>
  </main>
  @include('partials.footer')
</div>
@endsection