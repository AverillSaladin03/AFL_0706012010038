@extends('layout.mainlayout')

@section('title', $title)

@section('pageTitle')
    <h1 class="text-white">{{$pageTitle}}</h1>
@endsection

@section('content')
    <div class="form-group">
        <form action = '{{route('mangatachi.store')}}' method="POST">
             @csrf{{-- Ini untuk security --}}
            <label class="mb-1 fw-bold">Code</label>
            <input type="text" class="form-control" name="manga_code" placeholder="Manga Code (max. 3 letters)" maxlength="3">
            <label class="mb-1 fw-bold">Title</label>
            <input type="text" class="form-control" name="manga_title" placeholder="Project Name">
            <label class="mb-1 fw-bold">Author</label>
            <input type="text" class="form-control" name="manga_author" placeholder="Author">
            <label class="mb-1 fw-bold">Japanese Title</label>
            <input type="text" class="form-control" name="manga_kanji" placeholder="Japanese Title">
            <label class="mb-1 fw-bold">Release Date</label>
            <input type="text" class="form-control" name="manga_release_date" placeholder="Release Date">
            <label class="mb-1 fw-bold">Published At</label><br>
            {{-- <input type="text" class="form-control" name="mata_kuliah" placeholder="Project Name"> --}}
            <select name="published_at" class="custom-select p-2 rounded w-100">

                <option value="" selected disabled hidden>Choose A Publisher</option>
                @foreach ($publishers as $publish)
                    <option value="{{$publish['publisher_code']}}">{{$publish['publisher_name']}}</option>
                @endforeach
            </select>

            <div>
                <a class="btn btn-outline-danger m-3 ms-0" role="button" href="{{route('mangatachi.index')}}">Cancel</a>
                <input class="btn btn-outline-warning" type="submit"/>
            </div>
        </form>
    </div>

@endsection
