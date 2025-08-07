<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/css/register.css') }}">
     <link href="https://fonts.cdnfonts.com/css/verdana-pro-cond" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class='reg_box'>
        <h1>REGISTRATION</h1>

        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div> 
        @endif
        <form method="POST" action="{{url('register')}}">
            @csrf
        <fieldset><legend style="text-align:center";>REGISTER NOW</legend>
            <label for="name" >Name:</label>
            <input type="text" placeholder="Full Name"  id='name' name='name' minlength='5' required/><br><br>

            <label for="email">Email:</label>
            <input type="text" placeholder="Email id" id="email" name="email" required><br><br>

            <label for="phone">Phone:</label>
            <input type="text"  placeholder="Phone"  id='phone' name='phone' minlength='10' required ><br><br>

            <label for="password">Password:</label>
            <input type="password" placeholder="Password" id="password" name="password" minlength='8' required ><br><br>

            <label for="confirm password">Confirm password:</label>
            <input type="password"  id="password" name="confirm_password" required><br><br>
            
            <button class='btn1' type="register"><span>REGISTER</span></button> 
     </fieldset>
     </form> 
    </div>
</body>
</html>