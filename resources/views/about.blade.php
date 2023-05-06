@extends('layouts.main')

@section('container')
<article class="align-self-center text-center">
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    <h3>{{ $name }}</h3>
    <h5>NIM : {{ $nim }}</h5>
    <h5>Prodi : {{ $prodi }}</h5>
</article>
@endsection
