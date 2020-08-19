<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <title>About</title>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                {{ $name }} Page
            </div>

            <div>
                @foreach($content as $content)
                    <p>{{ $content }}</p>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
