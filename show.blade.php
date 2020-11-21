@extends('adminlte.master')

@section('content')
    <h4> {{ $post->judul }} </h4>
    <p> {{ $post->isi }} </p>
@endsection