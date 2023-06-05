@extends('layouts.admin')

@section('content')
<h1>{{ $project->title }}</h1>
<img src="{{ $project->image }}" alt="{{ $project->title }}">
<p>{{ $project->body }}</p>
@endsection
