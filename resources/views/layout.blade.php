<!DOCTYPE html>
<html lang="en">
<head>
    @section('head')
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type">
        <link rel="stylesheet" href="public\css\general.css">
        <link rel="stylesheet" href="public\css\style.css">
        <link rel="stylesheet" href="public\css\register.css">
        <link rel="stylesheet" href="public\css\log.css">
        <link rel="stylesheet" href="public\css\course.css">
        <link rel="stylesheet" href="public\css\feedback.css">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <meta name="csrf-token" content=" {{ csrf_token() }} " />
        <title>Познавай-ка</title>
    @show
</head>
<body>
<main>
    <x-header class="header"></x-header>
    @yield('page-content')
</main>
<x-footer class="footer"></x-footer>

</body>
</html>
