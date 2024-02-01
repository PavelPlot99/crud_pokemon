<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-200">
<div class="container mx-auto mt-8">
    <div class="flex justify-center mb-4">
        <button id="sort-asc" class="mr-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">От старшего к младшему</button>
        <button id="sort-desc" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">От младшего к старшему</button>
    </div>
    <div id="pokemon-container" class="grid grid-cols-2 gap-4"></div>
</div>

</body>
</html>
