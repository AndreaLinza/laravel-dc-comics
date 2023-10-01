@extends('layout.public')

@section('title', 'DC Comics - Homepage')


@section('content')
    @include('partials.jumboHome')
    @include('partials.cardsContent')
    @include('partials.blueBanner')

@endsection
