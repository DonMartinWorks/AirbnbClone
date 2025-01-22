<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div x-data="{ open: false }">
        <button @click="open = !open">
            <span x-text="open ? 'Desactivar' : 'Activar'"></span>
        </button>

        <span x-show="open">
            <div class="text-rose-500">Hola</div>
        </span>
    </div>
</body>

</html>
