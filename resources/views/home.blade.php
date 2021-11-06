@extends("layout.mainlayout")

@section("title", $title)

@section("pageTitle")
    <h1 class="text-white mt-3"> {{$pageTitle}}</h1>
@endsection

@section("content")
    <div class="card row bg-dark d-block border-light outline-light p-3 mt-3 mb-5">
        <div class="card col-sm-5 d-inline-flex justify-content-center bg-dark p-3 border border-warning m-5">
            <div class="text-center fw-bold m-5">
                <a class= "text-decoration-none text-white" href="{{route('publishers.index')}}">
                    <h1><i class="bi bi-building"></i></h1>
                    <h4>Publisher</h4>
                </a>
            </div>
        </div>
        <div class="card col-sm-5 d-inline-flex justify-content-center bg-dark p-3 border border-warning ms-5">
            <div class="text-center fw-bold m-5">
                <a class= "text-decoration-none text-white" href="{{route('mangatachi.index')}}">
                    <h1><i class="bi bi-book"></i></h1>
                    <h4>Manga</h4>
                </a>
            </div>
        </div>
    </div>
@endsection
