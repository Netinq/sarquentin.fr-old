@extends('layouts.app', ['styles' => ['sections/home', 'sections/services']])

@section('content')
@include('layouts.top')
<div>
    @include('sections.home')
    @include('sections.services')
</div>
@endsection
