<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body>
    <div class="grid grid-cols-4 gap-x-3 gap-y-3">
        <div class="bg-red-400">01</div>
        <div class="bg-red-400">02</div>
        <div class="bg-red-400 row-span-2">03
            <div class="flex flex-row">
                <div class="bg-cyan-400 m-2">01</div>
                <div class="bg-cyan-400 m-2">02</div>
                <div class="bg-cyan-400 m-2">03</div>
            </div>
        </div>
        <div class="bg-red-400">04</div>
        <div class="bg-red-400 col-span-2">05</div>
        <div class="bg-red-400">06</div>
        <div class="bg-red-400">07</div>
        <div class="bg-red-400">08</div>
        <div class="bg-red-400">09</div>
        <div class="bg-red-400 col-span-2">10</div>
    </div>
    <hr />
    <div class="grid grid-flow-col grid-rows-4 gap-4">
        <div class="bg-amber-400">01</div>
        <div class="bg-amber-400">02</div>
        <div class="bg-amber-400">03</div>
        <div class="bg-amber-400">04</div>
        <div class="bg-amber-400 row-span-4">05
            <div class="flex flex-row">
                <div class="bg-cyan-400 m-2 basis-1/4">01</div>
                <div class="bg-cyan-400 m-2 basis-1/4">02</div>
                <div class="bg-cyan-400 m-2 basis-1/2">03</div>
            </div>
        </div>
        <div class="bg-amber-400">06
            <div class="flex flex-col">
                <div class="bg-cyan-400 m-2 basis-1/4">01</div>
                <div class="bg-cyan-400 m-2 basis-1/4">02</div>
                <div class="bg-cyan-400 m-2 basis-1/2">03</div>
            </div>
        </div>
        <div class="bg-amber-400">07</div>
        <div class="bg-amber-400">08</div>
        <div class="bg-amber-400">09</div>
    </div>
</body>

</html>
