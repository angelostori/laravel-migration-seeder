@extends('layouts.master')
@section('title', 'Home')
@section('content')
<h1>Treni</h1>
@foreach($trains as $train)
<li>{{ $train['company'] . ' - ' . $train['landing_station'] . ' - ' . $train['arrival_station'] . ' - ' . $train['landind_time']}}</li>
@endforeach
@endsection