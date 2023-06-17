<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <x-flash-message />
    <h1>Login</h1>
    <form action="/urban/validate" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email" value="{{old('email')}}"><br>
        @error('email')
            <p>{{$message}}</p>
        @enderror
        
        <input type="password" name="password" placeholder="Password" value="{{old('password')}}"><br>
        @error('password')
            <p>{{$message}}</p>
        @enderror
        
        <button type="submit">Login</button><br>
        <a href="/urban/create">Dont have an account?</a>
    </form>
</body>
</html>