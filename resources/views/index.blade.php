@extends('layouts.app', ['styles' => [
    'sections/home',
    'sections/services',
    'sections/services-brand-1',
    'sections/services-brand-2'
    ]])

@section('content')
@include('layouts.top')
<div>
    @include('sections.home')
    @include('sections.services')
    @include('sections.services.brand-1')
    @include('sections.services.brand-2')
</div>
@endsection