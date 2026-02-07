<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    {{-- Positioning & display --}}
    {{-- alignments --}}
    {{-- Responsiveness --}}
    {{-- Hover and Focus --}}
    {{-- Height & Width --}}
    {{-- Spacing --}}
    {{-- Dark Mode --}}
    <button id="theme-toggle-button" type='button' class="text-gray-500 hover:bg-gray-100 rounded-lg text-sm p-2.5">
        <svg id="theme-toggle-moon-button" class="hidden w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                d="M11.675 2.015a.998.998 0 0 0-.403.011C6.09 2.4 2 6.722 2 12c0 5.523 4.477 10 10 10 4.356 0 8.058-2.784 9.43-6.667a1 1 0 0 0-1.02-1.33c-.08.006-.105.005-.127.005h-.001l-.028-.002A5.227 5.227 0 0 0 20 14a8 8 0 0 1-8-8c0-.952.121-1.752.404-2.558a.996.996 0 0 0 .096-.428V3a1 1 0 0 0-.825-.985Z"
                clip-rule="evenodd" />
        </svg>

        <svg id="theme-toggle-sun-button" class="hidden w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                d="M13 3a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0V3ZM6.343 4.929A1 1 0 0 0 4.93 6.343l1.414 1.414a1 1 0 0 0 1.414-1.414L6.343 4.929Zm12.728 1.414a1 1 0 0 0-1.414-1.414l-1.414 1.414a1 1 0 0 0 1.414 1.414l1.414-1.414ZM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-9 4a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H3Zm16 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2ZM7.757 17.657a1 1 0 1 0-1.414-1.414l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414Zm9.9-1.414a1 1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM13 19a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Z"
                clip-rule="evenodd" />
        </svg>

    </button>
    <p class="dark:bg-gray-800 bg-gray-200 text-black dark:text-white">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, quaerat nulla deleniti corrupti ullam alias
        praesentium culpa quibusdam commodi dolores natus, saepe distinctio dignissimos rem itaque voluptate possimus
        quod obcaecati iste. Fuga saepe ex ratione tenetur excepturi expedita magnam id, obcaecati maxime eaque
        doloremque accusamus culpa similique quo officia, nisi quos consectetur repellat eveniet iste consequuntur
        dolores! Placeat quod aliquid ipsa alias temporibus nulla quos voluptatum, cumque modi magni. Fuga a quod
        inventore fugit aliquam ab, eveniet doloremque vel earum placeat, nobis recusandae nostrum numquam sunt ipsum
        adipisci modi corrupti, possimus quos qui repellat architecto culpa? Libero nobis voluptates tempora?
    </p>
    <br />
    <hr />
    <div class="my-4 bg-amber-200 text-amber-600 hover:text-amber-900">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aliquid sint nostrum. Consequuntur officia
        voluptates commodi. Vitae earum obcaecati, adipisci explicabo commodi voluptates sit inventore harum provident,
        officia nemo repudiandae perferendis facilis asperiores ducimus minima non unde deserunt similique iusto!
        Consequuntur at illum fuga quos, ea eligendi? Libero, eum consequuntur.
    </div>
</body>
<script>
    const toggleButton = document.getElementById('theme-toggle-button');
    const darkToggleButton = document.getElementById('theme-toggle-moon-button');
    const lightToggleButton = document.getElementById('theme-toggle-sun-button');

    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme:dark)').matches)) {
        lightToggleButton.classList.remove('hidden');
        document.documentElement.classList.add('dark');
    } else {
        darkToggleButton.classList.remove('hidden');
        document.documentElement.classList.remove('dark');
    }

    toggleButton.onclick = function() {
        darkToggleButton.classList.toggle('hidden');
        lightToggleButton.classList.toggle('hidden');


        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
    }
</script>

</html>
