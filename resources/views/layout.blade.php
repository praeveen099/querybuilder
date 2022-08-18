<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Query Builder</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


        <style>
            html {
                scroll-behavior: smooth;
                text-align: center;
                background-color: #f2f2f2;
            }
            .clamp {
                display: -webkit-box;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
            .clamp.one-line {
                -webkit-line-clamp: 1;
            }
            form{
                margin-top: 2rem;
            }
            input[type=submit] {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
            .delete{
                background-color: #d9390d; /* Red */
                border: 5px solid black;;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

    </body>
</html>
