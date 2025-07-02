@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code')
    <h1 class="mb-8 text-title-md font-bold text-gray-800 dark:text-white/90 xl:text-title-2xl">
        ERROR
    </h1>

    <img src="{{ asset('tailadmin/build/src/images/error/404.svg') }}" alt="404" class="dark:hidden" />
    <img src="{{ asset('tailadmin/build/src/images/error/404-dark.svg') }}" alt="404" class="hidden dark:block" />
@endsection
@section('message',
    __('We can’t seem to find the page you are looking for!
    '))
