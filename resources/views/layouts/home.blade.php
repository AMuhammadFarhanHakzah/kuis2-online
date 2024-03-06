<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <title>Quizz Mencerdaskan Bangsa</title>
    @include('components.style')
</head>

<body class="bg-soft-blue">
    <div class="container py-5">
        @if (auth()->user())
            <a class="text-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="text-right">
                @csrf
            </form>
        @else
            <a href="{{route('login')}}" class="text-primary">
                Login
            </a>
        @endif
        <nav class="d-flex justify-content-center">
            <a href="." class="logo ml-4">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                <h4 class="text-dark fw-bold">Quizz</h4>
            </a>
        </nav>

        @yield('content')

    </div>

    @include('components.script')
</body>

</html>
