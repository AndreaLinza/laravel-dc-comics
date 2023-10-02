@extends('layout.public')

@section('title', 'DC Comics - Show')


@section('content')
    @include('partials.jumboCard')
    @include('partials.cardContent')
    @include('partials.infoCard')
    @include('partials.grayBanner')


@endsection
