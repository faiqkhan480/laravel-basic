<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <title>Form</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Form Page
                </div>

                <form action="{{ url('/get_data') }}" method="post">
                    @csrf
                    <div class="wrap">
                        <input class="effect-10" type="text" name="title" placeholder="Enter Title">
                        <span class="focus-bg"></span>
                    </div>

                    <div class="wrap">
                        <textarea class="effect-10" rows="10" name="blog" placeholder="Enter Blog Content"></textarea>
                        <span class="focus-bg"></span>
                    </div>

                    <input class="myButton" type="submit" value="Submit Form">
                </form>
            </div>
        </div>
    </body>
</html>
