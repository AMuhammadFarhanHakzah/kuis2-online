<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <title>Quizz Mencerdaskan Bangsa</title>

    @include('components.style')
</head>

<body class="bg-soft-blue">
    
    @include('components.navbar')

    @yield('content')

    @include('components.script')
</body>

</html>
