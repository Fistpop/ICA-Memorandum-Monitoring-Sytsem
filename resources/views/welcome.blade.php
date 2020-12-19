<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ICA Memorandum Monitoring System</title>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>      
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            .cardCenter{
                margin:auto;
                margin-top: 10%;
                margin-bottom: 10%;
            }
            body{
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            background-color: #f7f7f7;
            }
            h1{
                margin-top: 50px;
                margin-bottom: 50px;
                font-size: 50px;
            }
            a{
                text-decoration: none;
                color: white;
                font-size: 15px;
                border: 1px solid #2d2d2d;
                padding: 5px 10px 5px 10px;
                border-radius: 17px;
                background-color:#2d2d2d; 
                margin: 10px;
            }
            a:hover{
                background-color: white;
                color:#2d2d2d;
            }
        </style>
    </head>
    <body>
   <div class="row cardCenter">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="card">
                <div class="card-header" align="center">
                    <h1>Institute of Computer Application <br> Memorandum Monitoring <br> System</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-1" align="center">
                        </div>
                        <div class="col-sm-10" align="center">
                        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/showmemorandum') }}" class="text-sm text-gray-700 underline">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                        @endif
                                    @endif
                                </div>
                             @endif
                        </div>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h6></h6>
    </body>
</html>
