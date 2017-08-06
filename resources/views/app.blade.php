<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                	<meta name="csrf-token" content="{{ csrf_token() }}">
	                    <title>
	                        {{ config('app.name') }}
	                    </title>
                    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
                    <link href="/css/style.css" rel="stylesheet" type="text/css"> </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <div id="app">
        </div>
        <br/>
     <br />

    </body>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    <link href="{{ asset('css/semantic.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/semantic.min.js') }}"></script>
   
 
</html>
