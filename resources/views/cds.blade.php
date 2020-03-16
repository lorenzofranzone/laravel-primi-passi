<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Php Dischi</title>
</head>

<body>
    <div class="container">
        <header>
            <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </header>

        <div class="cds-container">
            @foreach ($cdsList as $cd)
                <div class="cd">
                    <img src={{ $cd["imgpath"] }} />

                    <h3>{{$cd["album"]}}</h3>
                    <small>{{$cd["artist"]}}</small>
                    <strong>{{$cd["year"]}}</strong>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>