@extends('./app')

@section('content')
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Menu & Pricing</h2>
                <h1 class="display-4 text-uppercase">Explore Our Cakes</h1>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div class="row g-3">
                        @foreach($sweets as $sweet)
                            <a href="{{ route('sweets.show', $sweet) }}" class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="{{ $sweet->image }}" alt=""
                                             style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">${{ $sweet->price }}</h4>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">{{ $sweet->category }}</h5>
                                        <span>{{ $sweet->description ?? '' }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
