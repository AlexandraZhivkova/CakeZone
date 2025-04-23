@extends('app')

@section('content')
    <main style="min-height: 89vh; padding-top: 150px; margin: 0">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('reviews.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <input name="rating" type="number"
                                   class="form-control{{ $errors->has('rating') ? 'is-invalid' : '' }} bg-light border-0 px-4 w-100"
                                   placeholder="5" style="height: 55px;">

                            @if($errors->has('rating'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('rating') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="col-sm-12">
                            <textarea name="comment" type="text"
                                      class="form-control{{ $errors->has('comment') ? 'is-invalid' : '' }} bg-light border-0 px-4 w-100"
                                      placeholder="Your Comment" style="height: 55px;"></textarea>

                            @if($errors->has('comment'))
                                <span class="invalid-feedback  d-block" role="alert">
                                    <strong>{{ $errors->first('comment') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="col-sm-12 mt-xxl-5">
                            <button class="btn btn-primary border-inner w-100 py-3" type="submit">Add Review</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
