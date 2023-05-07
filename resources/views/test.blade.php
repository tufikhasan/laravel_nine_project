<?php
//php variable call like this
$variable = "Hello World";
echo $variable . "<br/>";
?>
{{-- 01: This is a Blade comment --}}

{{-- 02: Blade variable --}}
{{$variable}}


{{-- 03: if statements:------
@if (condition)
    // code to execute if condition is true
@endif

@if (condition)
   // code to execute if condition is true
@else
   // code to execute if condition is false
@endif

@if (condition1)
   // code to execute if condition1 is true
@elseif (condition2)
   // code to execute if condition2 is true
@else
   // code to execute if both conditions are false
@endif
----------}}

{{-- 04: switch statements:-----------
@switch ($variable)
    @case (value)
        // code to execute if variable equals value
        @break
    @default
        // code to execute if none of the cases match
@endswitch
---------}}


{{-- 05: Unless statements:---------
@unless (condition)
    // code to execute if condition is false
@endunless
---------}}


{{-- 06: Foreach loops:-----------
@foreach ($items as $item)
    // code to execute for each item in the array
@endforeach

@foreach ($items as $key => $value)
   // code to execute for each item in the array
@endforeach
---------}}


{{-- 07: Foreach Loops with Empty and Not Empty:-----------
    @forelse ($items as $item)
   // code to execute for each item in the array
@empty
   // code to execute if the array is empty
@endforelse
---------}}


{{-- 08: while loops:-----------
@while (condition)
    // code to execute while condition is true
@endwhile
---------}}


{{-- 09: Includes:-----------
@include('partials.header')
---------}}


{{-- 10: Extending a layout:-----------
@extends('layouts.app')

@section('section_name')
    // code for the content section of the layout
@endsection
---------}}


{{-- 11: Yielding Content:-----------
@yield('section_name', 'default content')
---------}}