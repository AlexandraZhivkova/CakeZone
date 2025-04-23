@extends('./app')

@section('content')
    <form action="{{ route('sweets.update', $sweet) }}" method="POST">
        @csrf
        @method('put')
        <input name="name" type="text" placeholder="name" value="{{ $sweet->name }}">
        <input name="description" type="text" placeholder="description" value="{{ $sweet->description }}">
        <input name="price" type="number" placeholder="1.00" value="{{ $sweet->price }}">
        <input name="stock" type="number" placeholder="1" value="{{ $sweet->stock }}">
        <button type="submit">Submit</button>
    </form>
@endsection
