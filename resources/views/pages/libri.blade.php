@extends('layouts.app')

@section('titolo', 'Lista dei libri')

@section('content')
<h1>Libri</h1>
{{$libri['titolo']}}
<br>
{{$libri['autore']}}
@endsection