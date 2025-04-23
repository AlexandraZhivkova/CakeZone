@extends('./app')

@section('content')
        <div>
            {{$sweet->name}}
        </div>
        <div>
            {{$sweet->description}}
        </div>
        <div>
            {{$sweet->price}}
        </div>
        <div>
            {{$sweet->stock}}
        </div>
@endsection
