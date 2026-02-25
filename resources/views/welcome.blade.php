@extends('layouts.master')
@section('title', 'Home')
@section('content')



<x-trainsCard title="Tabellone Treni">
    <x-trainsTable :trains="$trains" />
</x-trainsCard>


@endsection