<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Laravel Project</title>
</head>
<body>
    <!-- <h1>HomePage</h1> -->
    <nav>
        <label class="logo">
            Personal Note
        </label>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            @if (Route::has('login'))
                @auth
                    <li>
                        <a href="{{ url('/dashboard') }}" class="btn btn-success">{{Auth :: user()->name}}</a>
                    </li>
                    @else
            <li>
                <a href="{{ route('register') }}" class="btn btn-success">Register</a>
            </li>
            <li>
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            </li>
            @endauth
        @endif
        </ul>
    </nav>
    @foreach($post as $post)
    <div class="div_deg">
        <label>{{$post->title}}</label>
        <p>{{$post->note}}</p>
    </div>
    @endforeach
</body>
</html>