@extends('layout.mainlayout')

@section('title', $title)

@section('pageTitle')
    <h1 class="text-white"> {{$pageTitle}} </h1>
@endsection

@section('content')
    <div class="form-group">
        <form action="{{route('mangatachi.update', $manga->manga_code)}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH">

            <label class="mt-2 mb-1 text-white fw-bold">Code</label>
            <input type="text" class="form-control" name="manga_code" value="{{$manga->manga_code}}" readonly>
            <label class="mt-2 mb-1 text-white fw-bold">Title</label>
            <input type="text" class="form-control" name="manga_title" value="{{$manga->manga_title}}">
            <label class="mt-2 mb-1 text-white fw-bold">Author</label>
            <input type="text" class="form-control" name="manga_author" value="{{$manga->manga_author}}">
            <label class="mt-2 mb-1 text-white fw-bold">Japanese Title</label>
            <input type="text" class="form-control" name="manga_kanji" value="{{$manga->manga_kanji}}">
            <label class="mt-2 mb-1 text-white fw-bold">Release Date</label>
            <input type="text" class="form-control" name="manga_release_date" value="{{$manga->manga_release_date}}">
            <label class="mt-2 mb-1 text-white fw-bold">Published At</label><br>
            {{-- <input type="text" class="form-control" name="mata_kuliah" placeholder="Project Name"> --}}
            <select name="published_at" class="custom-select p-2 rounded w-100">
                <option value="{{$manga->publisher->publisher_code}}" selected>{{$manga->publisher->publisher_name}}</option>
                @foreach ($publishers as $publish)
                    @if ($publish['publisher_code'] != $manga->publisher->publisher_code)
                        <option value="{{$publish['publisher_code']}}">{{$publish['publisher_name']}}</option>
                    @endif

                @endforeach
            </select>

            <div>
                <a class="btn btn-outline-danger m-3 ms-0" role="button" href="{{route('mangatachi.index')}}">Cancel</a>
                <input class="btn btn-outline-warning" type="submit"/>
            </div>
        </form>
    </div>

@endsection
