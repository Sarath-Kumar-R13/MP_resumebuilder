<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/css/login.css') }}">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center";>LOGIN FORM</h1>

        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div> 
        @endif
            <fieldset><legend style="text-align:center";>LOGIN</legend>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div>
                    <label>Email:</label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label>Password:</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit">LOGIN</button>
            </form>
            </fieldset>
</body>
</html>