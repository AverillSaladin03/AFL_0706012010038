@extends('layout.mainlayout')

@section('title', $title)

@section('pageTitle')
    <h1 class="text-warning mt-3 border-bottom border-warning">{{$pageTitle}}</h1>
@endsection

@section('content')
    <div class="form-group text-white">
        <form action = '{{route('publishers.update', $publishers->publisher_code)}}' method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <label class="mt-1 fw-bold">Code</label>
            <input type="text" class="form-control" name="publisher_code" value="{{$publishers->publisher_code}}" readonly>
            <label class="mt-3 fw-bold">Name</label>
            <input type="text" class="form-control" name="publisher_name" value="{{$publishers->publisher_name}}">
            <label class="mt-3 fw-bold">Kanji Name</label>
            <input type="text" class="form-control" name="publisher_kanji" value="{{$publishers->publisher_kanji}}">
            <label class="mt-3 fw-bold">Full Name</label>
            <input type="text" class="form-control" name="publisher_romaji" value="{{$publishers->publisher_romaji}}">
            <label class="mt-3 fw-bold">Address</label>
            <input type="text" class="form-control" name="publisher_address" value="{{$publishers->publisher_address}}">
            <label class="mt-3 fw-bold">Site</label>
            <input type="text" class="form-control" name="publisher_site" value="{{$publishers->publisher_site}}">
            <label class="mt-3 fw-bold">Created Date</label>
            <input type="text" class="form-control" name="publisher_created_date" value="{{$publishers->publisher_created_date}}">

            <div class="mb-5 mt-3">
                <a class="btn btn-outline-danger m-3 ms-0" role="button" href="{{route('publishers.show', $publishers->publisher_code)}}">Cancel</a>
                <input class="btn btn-outline-warning" type="submit"/>
            </div>
        </form>
    </div>
@endsection
