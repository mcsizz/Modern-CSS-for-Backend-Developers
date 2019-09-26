<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modal Example</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
        <!-- <link rel="stylesheet" href="/css/app.css"> -->
        <style>
            .overlay {
                visibility: hidden;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                background: rgba(0, 0, 0, .7);
            }

            .overlay:target {
                visibility: visible;
            }

            .modal {
                position: relative;
                width: 600px;
                max-width: 80%;
                background: white;
                border-radius: 8px;
                padding: 1em 2em;
            }

            .modal .close {
                position: absolute;
                top: 15px;
                right: 15px;
                color: gray;
                text-decoration: none;
            }

            .overlay .cancel {
                position: absolute;
                width: 100%;
                height: 100%;
            }
        </style>
    </head> 
    <body>
        <a href="#join-modal">Join</a>
        <a href="#cancel-modal">Cancel</a>

        @component('modal', ['name' => 'join-modal'])
            <h1>Pick a Plan</h1>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis obcaecati laboriosam repudiandae necessitatibus dicta officia ea consequatur, quis odio, est autem labore veniam minus error maiores optio, unde ipsam earum.
            </p>
        @endcomponent

        @component('modal', ['name' => 'cancel-modal'])
            <h1>Leaving So Soon?</h1>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis obcaecati laboriosam repudiandae necessitatibus dicta officia ea consequatur, quis odio, est autem labore veniam minus error maiores optio, unde ipsam earum.
            </p>

            <p>
                <a href="#join-modal">Sign up</a>
            </p>
        @endcomponent

    </body>
</html>
