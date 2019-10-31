<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                padding-left: 10px;
                padding-right: 10px;
            }
            
            input[type=text], input[type=email], input[type=password], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                width: 100%;
                background-color: #44a991;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .table-data {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            .table-data td, .table-data th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            .table-data th a {
                color: white;
            }

            .table-data tr:nth-child(even){background-color: #f2f2f2;}

            .table-data tr:hover {background-color: #ddd;}

            .table-data th {
                padding-top: 12px;
                padding-bottom: 12px;
                background-color: #44a991;
                color: white;
            }            
        </style>
    </head>
    <body>
        <div>
            @yield('content')
        </div>
    </body>
</html>
