@extends('layouts.dashboard')

@section('content')
<div class="dashboard-main-content">

@php
    date_default_timezone_set('Africa/Kigali');
    $time = date('H'); 
    $greeting = '';

    if ($time >= 1 && $time < 12) {
        $greeting = 'Good Morning';
    } elseif ($time >= 12 && $time < 18) {
        $greeting = 'Good Afternoon';
    } else {
        $greeting = 'Good Evening';
    }
@endphp

<h3 class="text-2xl font-semibold">{{ $greeting }} user Alain Honore</h3>
    <div class="container mt-4">

        <div class="grid grid-cols-2 sm:grid-cols-2 gap-4 bg-white">
            <div class=" d-flex align-items-center justify-content-between p-4 shadow rounded">
                <div class="">
                    <p class="font-bold h3">
                        112/150
                    </p>
                    <h3 class="font-semibold text-xl capitalize ">Pending Replies</h3>
                </div>
            </div>
            <div class=" d-flex align-items-center justify-content-between p-4 shadow rounded">
                <div class="">
                    <p class="font-bold h3">
                        112/150
                    </p>
                    <h3 class="font-semibold text-xl capitalize ">Replied</h3>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
