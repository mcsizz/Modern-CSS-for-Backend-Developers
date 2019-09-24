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
    <body class="container mx-auto">
        <div class="border-b py-8">
            <h1 class="mb-6 text-gray-800 text-sm font-bold tracking-wide uppercase">Instant Navigation</h1>

            <nav class="bg-blue-100 py-4 px-4 flex justify-around">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Out Mission</a>
                <a href="#">Contact</a>
            </nav>
        </div>

        <div class="border-b py-8">
            <h1 class="mb-6 text-gray-800 text-sm font-bold tracking-wide uppercase">Split Nav</h1>

            <nav class="bg-blue-100 py-4 px-4 flex justify-between">
                <div>
                    <a href="#" class="px-4">Home</a>
                    <a href="#" class="px-4">About</a>
                </div>
                <div>
                    <a href="#" class="px-4">Out Mission</a>
                    <a href="#" class="px-4">Contact</a>
                </div>
            </nav>
        </div>

        <div class="border-b py-8">
            <h1 class="mb-6 text-gray-800 text-sm font-bold tracking-wide uppercase">Align Image With Text</h1>

            <div class="flex items-center">
                <img src="http://via.placeholder.com/350x150" class="mr-4">

                <div>
                    <h3 class="mb-4">My Trip To...</h3>

                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus neque ut veniam deserunt minus minima pariatur vitae, eligendi, reiciendis beatae sint qui ea? Accusantium ducimus vitae maiores magni omnis quibusdam.
                    </p>
                </div>
            </div>
        </div>

        <div class="border-b py-8">
            <h1 class="mb-6 text-gray-800 text-sm font-bold tracking-wide uppercase">Perfectly Centered Text</h1>

            <div class="bg-gray-400 p-6 w-3/4 h-64 flex items-center text-center justify-center">
                <div class="w-64">
                    <h3 class="mb-4">Flexbox is Amazing</h3>

                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
                </div>
            </div>
        </div>

        <div class="border-b py-8">
            <h1 class="mb-6 text-gray-800 text-sm font-bold tracking-wide uppercase">Sticky Footer</h1>

            <a href="/sticky">Click Me</a>
        </div>

    </body>
</html>
