@extends('layouts.master')
@section('title', 'Home')
@section('content')

<div class="container mt-5">
    <h1>Treni</h1>

    <x-trainsCard>
        <x-trainsTable :trains="$trains" />
    </x-trainsCard>
</div>

@endsection