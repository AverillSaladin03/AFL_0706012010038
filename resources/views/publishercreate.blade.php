@extends('layout.mainlayout')

@section('title', $title)

@section('pageTitle')
    <h1 class="text-white mt-3">{{$pageTitle}}</h1>
@endsection

@section('content')
    <div class="form-group text-white">
        <form action = '{{route('publishers.store')}}' method="POST">
            @csrf{{-- Ini untuk security --}}
            <label class="mt-3 fw-bold">Code</label>
            <input type="text" class="form-control" name="publisher_code" placeholder="Publisher Code" maxlength="3">
            <label class="mt-3 fw-bold">Name</label>
            <input type="text" class="form-control" name="publisher_name" placeholder="Publisher Name">
            <label class="mt-3 fw-bold">Kanji Name</label>
            <input type="text" class="form-control" name="publisher_kanji" placeholder="Kanji Name">
            <label class="mt-3 fw-bold">Full Name</label>
            <input type="text" class="form-control" name="publisher_romaji" placeholder="Full Name">
            <label class="mt-3 fw-bold">Address</label>
            <input type="text" class="form-control" name="publisher_address" placeholder="Address">
            <label class="mt-3 fw-bold">Site</label>
            <input type="text" class="form-control" name="publisher_site" placeholder="Site">
            <label class="mt-3 fw-bold">Created Date</label>
            <input type="text" class="form-control" name="publisher_created_date" placeholder="Created Date">

            <div class="mb-5 mt-3">
                <a class="btn btn-outline-danger m-3 ms-0" role="button" href="{{route('publishers.index')}}">Cancel</a>
                <input class="btn btn-outline-warning" type="submit"/>
            </div>
        </form>
    </div>
@endsection
