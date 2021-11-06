<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Navigation</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark border-bottom border-warning">
        <div class="container-fluid">
            <a href="/" class="navbar-brand text-white fw-bold ms-2">
                {{-- <img class="m-1" width="25" height="25" src=""> --}}
                <i class="bi bi-hurricane m-1"></i>
                Manga Publisher
            </a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link {{ ($title == 'Home')? 'active fw-bold' : '' }}" href="/"> Home </a></li>
                <li class="nav-item"><a class="nav-link {{ ($title == 'Publisher')? 'active fw-bold' : '' }}" href="{{route('publishers.index')}}"> Publisher </a></li>
                <li class="nav-item"><a class="nav-link {{ ($title == 'Manga')? 'active fw-bold' : '' }}" href="{{route('mangatachi.index')}}"> Manga </a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
