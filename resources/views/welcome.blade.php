@extends('layouts.master')
@section('title', 'Home')
@section('content')

<div class="container my-5">

    <x-trainsCard title="Tabellone Treni">
        <x-trainsTable :trains="$trains" />
    </x-trainsCard>
</div>

@endsection