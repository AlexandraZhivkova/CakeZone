@extends('app')

@section('content')
    <main class="container-fluid contact position-relative px-5" style="padding-top: 60px; min-height: 92vh">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <form action="{{ route('profile.update') }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <input name="name" type="text"
                                           class="form-control{{ $errors->has('name') ? 'is-invalid' : '' }} bg-light border-0 px-4"
                                           placeholder="Your Name" style="height: 55px;">
                                </div>
                                @if($errors->has('name'))
                                    <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                                <div class="col-sm-6">
                                    <input name="email" type="email"
                                           class="form-control{{ $errors->has('email') ? 'is-invalid' : '' }} bg-light border-0 px-4"
                                           placeholder="Your Email" style="height: 55px;">
                                </div>
                                @if($errors->has('email'))
                                    <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <div class="col-sm-12">
                                    <input name="image" type="image"
                                           class="form-control{{ $errors->has('image') ? 'is-invalid' : '' }} bg-light border-0 px-4"
                                           placeholder="Subject" style="height: 55px;">
                                </div>
                                @if($errors->has('image'))
                                    <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                                @endif
                                <div class="col-sm-12 mt-xxl-5">
                                    <button class="btn btn-primary border-inner w-100 py-3" type="submit">Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
