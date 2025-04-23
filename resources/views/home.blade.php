@extends('app')

@section('content')

    <main class="bg-primary ps-5 hero-header" style="min-height: 92vh">
        <div class="w-50 pt-xxl-5">
            <div class="ps-xxl-5">
                <h1 class="font-secondary text-primary mb-4 pt-xxl-5 ">Super Crispy</h1>
                <h1 class="display-1 text-uppercase text-white mb-4">CakeZone</h1>
                <h1 class="text-uppercase text-white">The Best Cake In London</h1>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                    <a href="{{ route('about') }}" class="btn btn-primary border-inner py-3 px-5 me-5">Read More</a>
                </div>
            </div>
        </div>
    </main>


@endsection
