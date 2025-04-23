@extends('app')

@section('content')
    <main class="container-fluid d-flex flex-column justify-content-evenly p-0" style="min-height: 92vh">
        @if(!isset($reviews) || $reviews->count() == 0)
            <div class="d-flex justify-content-center align-items-center h-50">
                <h3 class="text-center w-100 my-auto">No reviews currently available.</h3>
            </div>
        @endif
        @if(isset($reviews) && $reviews->count() > 0)
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="section-title position-relative text-center mx-auto mb-5 pb-3"
                         style="max-width: 600px;">
                        <h2 class="text-primary font-secondary">Reviews</h2>
                        <h1 class="display-4 text-uppercase">Our Clients Say!!!</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel">
                        @foreach($reviews as $review)
                            <div class="testimonial-item bg-dark text-white border-inner p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="img-fluid flex-shrink-0" src="{{ $review->customer->image ?? '' }}"
                                         style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <h4 class="text-primary text-uppercase mb-1">{{ $review->user->name}}</h4>
                                        <span><i class="fa fa-star me-1"></i>{{ $review->rating }}</span>
                                    </div>
                                </div>
                                <p class="mb-0">{{ $review->comment }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif


            @auth
                <div class="row justify-content-center w-100 pb-5">
                    <a href="{{ route('reviews.create') }}" class="btn btn-primary border-inner w-25 p-3">Add Review</a>

                </div>
            @endauth

    </main>
@endsection
