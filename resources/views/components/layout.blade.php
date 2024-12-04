<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <title>{{ $title ?? '' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route("home") }}">خانه</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route("login") }}">ورود</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route("register") }}">ثبت نام</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route("evaluation") }}">ثبت ارزیابی</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    گزینه ها
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route("khatarats") }}">خطرها</a></li>
                    <li><a class="dropdown-item" href="{{ route("educations") }}">آموزش ها</a></li>
                    <li><a class="dropdown-item" href="{{ route("equipments") }}">ابزار ها</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<div class="pt-3">
    {{ $slot }}
</div>
</body>
</html>
