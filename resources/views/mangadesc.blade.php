@extends('layout.mainlayout')

@section('title', $title)

@section('pageTitle')
    <h1 class="text-white mt-3">{{$pageTitle}}</h1>
@endsection

@section('content')

{{-- Card Detail Disini --}}
<div class="card bg-dark border-light p-3 text-white">
    <h4 class="card-header mb-1 text-dark fw-bold bg-warning">{{$mangas->manga_kanji}}</h4>
    <div class="ms-3 mt-1">
        <h6>Title : {{$mangas->manga_title}}</h6>
        <h6>Author : {{$mangas->manga_author}}</h6>
        <h6>Release Date : {{$mangas->manga_release_date}}</h6>
        <h6>Publisher : <a class="text-warning text-decoration-none" href="{{route('publishers.show', $mangas->publisher->publisher_code)}}">
            {{$mangas->publisher->publisher_name}}
        </a></h6>
    </div>
</div>

{{-- Button List --}}
<div class="row mt-3">
    <div class="col d-flex justify-content-start">
        <a class= "btn btn-outline-light" href="{{route('mangatachi.index')}}">Back</a>
    </div>
    <div class="col d-flex justify-content-end">
        <a class="btn btn-outline-warning" href="{{route('mangatachi.edit', $mangas->manga_code)}}"> Edit </a>
        <form method="POST" action="{{route('mangatachi.destroy', $mangas->manga_code)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger ms-3" type="submit">Delete</button>
        </form>
    </div>
</div>
@endsection
