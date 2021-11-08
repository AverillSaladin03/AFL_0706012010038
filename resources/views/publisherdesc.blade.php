@extends('layout.mainlayout')

@section('title', $title)

@section('pageTitle')
<h1 class="text-white mt-3">{{$pageTitle}}</h1>
@endsection

@section('content')

{{-- Card Detail Disini --}}
<div class="card bg-dark border-light p-3 text-white">
    <h4 class="card-header mb-1 text-dark bg-warning fw-bold ">{{$publishers->publisher_kanji}}</h4>
    <div class="ms-3">
        <h6>Full Name   : {{$publishers->publisher_romaji}}</h6>
        <h6>Office      : {{$publishers->publisher_address}}</h6>
        <h6>Site        : <a class="text-warning text-decoration-none" target="_blank" href='http://{{$publishers->publisher_site}}'>{{$publishers->publisher_site}}</a></h6>
        <h6>Date Created: {{$publishers->publisher_created_date}}</h6>
    </div>
</div>

{{-- Button List --}}
<div class="row mt-3">
    <div class="col d-flex justify-content-start">
        <a class= "btn btn-outline-light" href="{{route('publishers.index')}}">Back</a>
    </div>
    <div class="col d-flex justify-content-end">
        <a class="btn btn-outline-warning" href="{{route('publishers.edit', $publishers->publisher_code)}}"> Edit </a>
        <form method="POST" action="{{route('publishers.destroy', $publishers->publisher_code)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger ms-3" type="submit">Delete</button>
        </form>
    </div>
</div>

{{-- List Manga Disini --}}
<h4 class="text-warning mt-3 ">Manga Published</h4>
<div class="rounded border border-light mt-3 mb-5 p-1 rounded">
    <table class="table table-striped table-dark">
        <thead class="fw-bold">
            <td>Title</td>
            <td>Author</td>
            <td>Release Date</td>
        </thead>

        @foreach ($publishers->mangas as $manga)
            <tr>
                <td><a href="{{route('mangatachi.show', $manga->manga_code)}}" class="text-warning text-decoration-none fw-bold">
                    {{$manga->manga_title}}
                    </a></td>
                <td>{{$manga->manga_author}}</td>
                <td>{{$manga->manga_release_date}}</td>
            </tr>

        @endforeach
    </table>
</div>

@endsection
