<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMS BETA</title>
    <style>
        [x-cloak] 
        {
            display: none;
        }
    </style>
    <script src="//unpkg.com/alpinejs" defer></script> <!-- AlpineJS -->
    <script src="https://unpkg.com/feather-icons"></script> <!-- Feather Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body 
        {
            font-family: 'Poppins';
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-200">
    @include('component.sidebar2')
    <script>
        feather.replace()
    </script>
</body>

</html>
