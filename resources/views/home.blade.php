@extends('layouts.app', ['styles' => ['sections/home', 'sections/services']])

@section('content')
<div itemscope itemtype="https://schema.org/LocalBusiness">
    @include('sections.home')
    @include('sections.services')
</div>
@endsection
