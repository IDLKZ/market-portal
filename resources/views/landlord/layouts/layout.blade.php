<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <title>Dore jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/cabinet.css">
    @livewireStyles
</head>

<body id="app-container" class="menu-default show-spinner">
@include('landlord.layouts.navbar')
@include('landlord.layouts.sidebar')

<main>
    <div class="container-fluid">
        @yield('content')
    </div>
</main>

@livewireScripts
<script src="js/cabinet.js"></script>

</body>

</html>
