@extends('./app')

@section('content')
    <form action="{{ route('sweets.store') }}" method="POST">
        @csrf
        @method('post')
        <input name="name" type="text" placeholder="name">
        <input name="description" type="text" placeholder="description">
        <input name="price" type="number" placeholder="1.00">
        <input name="stock" type="number" placeholder="1">
        <button type="submit">Submit</button>
    </form>
@endsection
