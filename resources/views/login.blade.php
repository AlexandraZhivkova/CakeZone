@extends('app')

@section('content')
    <main style="min-height: 89vh; padding-top: 150px; margin: 0">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('login') }}" method="POST" >
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <input name="email" type="text" class="form-control{{ $errors->has('email') ? 'is-invalid' : '' }} bg-light border-0 px-4 w-100" placeholder="Your Email" style="height: 55px;">

                            @if($errors->has('email'))
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="col-sm-12">
                            <input name="password" type="password" class="form-control{{ $errors->has('password') ? 'is-invalid' : '' }} bg-light border-0 px-4 w-100" placeholder="Your Password" style="height: 55px;">

                            @if($errors->has('password'))
                                <span class="invalid-feedback  d-block" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="col-sm-12 mt-xxl-5">
                            <button class="btn btn-primary border-inner w-100 py-3" type="submit">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
