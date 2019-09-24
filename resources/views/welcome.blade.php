<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSS for Backend Devs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head> 
    <body class="flex items-center justify-center">
        <div class="card flex rounded-lg">
            <!-- left -->
            <div class="card-left flex flex-col justify-between items-center text-center rounded-lg px-6 py-4 text-white">
                <a href="#" class="card-skill-button no-underline text-xs rounded-full px-6 py-1 text-inherit">PHP</a>
                <img height="96" src="/img/tools-solid.svg" alt="" srcset="">
                <span class="card-difficulty text-sm">Intermediate Difficulty</span>
            </div>
            <!-- right  -->
            <div class="card-right flex flex-col text-gray-700 px-6 py-4">
                <h3 class="card-title text-black text-3xl font-light mb-3"><a href="#" class="no-underline text-inherit">Testing Jargon</a></h3>
                <p class="card-excerpt flex-1">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum nobis ratione quis pariatur illum odio quaerat, vel magnam similique voluptate tempore earum blanditiis.
                </p>
                <div class="card-meta flex text-sm">
                    <div class="flex items-center mr-4">
                        <img class="h-5 mr-2 text-gray-100" src="/img/book-solid.svg" alt="">
                        5 Lessons
                    </div>
                    <div class="flex items-center">
                        <img class="h-5 mr-2 text-gray-100" src="/img/clock-regular.svg" alt="">
                        53:10 min
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
