@extends('layouts.app')

@section('titolo', 'Lista dei libri')

@section('content')
<h1>Libri</h1>
    <ul>
        @forelse ($books as $key=>$book)
            <li>{{ $book->title }}-{{ $key }}</li>
        @empty
            <li>no books</li>
        @endforelse
    </ul>
@endsection