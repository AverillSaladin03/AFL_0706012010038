@extends('layout.mainlayout')

@section('title', $title)

@section('pageTitle')
<div class="row mt-3">
    <h1 class="text-white col d-flex justify-content-start "> <i class="bi bi-book"></i>&nbsp;{{$pageTitle}}</h1>
    <div class="col d-flex justify-content-end align-items-center">
        <a class="btn btn-success text-white " href="{{route('mangatachi.create')}}"> Add </a>
    </div>
</div>
@endsection

@section('content')
    <div class="row mt-3">

    @foreach ($mangas as $manga)

        <div class="col-sm-4 {{($loop->last)? 'mb-5' : ''}}">
            <div class="card bg-dark border-light text-white mb-4">
                <div class="card-header border-bottom border-white text-warning">{{$manga->manga_kanji}}</div>
                <h4 class="card-title m-4 text-center">{{$manga->manga_title}}</h4>
                <a class="btn btn-outline-light " href="{{ route('mangatachi.show', $manga->manga_code)}}">Detail</a>
            </div>
        </div>
    @endforeach

@endsection
