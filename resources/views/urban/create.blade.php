<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
<body>
    <form action="/urban" method="post">
        @csrf
        <h1>Registration</h1>
        
        <input type="text" name="firstname" placeholder="Firstname" value="{{old('firstname')}}"><br>
        @error('firstname')
            <p>{{$message}}</p>
        @enderror

        <input type="text" name="lastname" placeholder="Lastname"  value="{{old('lastname')}}"><br>
        @error('lastname')
            <p>{{$message}}</p>
        @enderror

        <input type="email" name="email" placeholder="Email"  value="{{old('email')}}"><br>
        @error('email')
            <p>{{$message}}</p>
        @enderror

        <input type="password" name="password" placeholder="Password"  value="{{old('password')}}"><br>
        @error('password')
            <p>{{$message}}</p>
        @enderror

        <input type="text" name="age" placeholder="Age"  value="{{old('age')}}"><br>
        @error('age')
            <p>{{$message}}</p>
        @enderror

        <select name="gender" aria-placeholder="Gender"  value="{{old('gender')}}">
            <option selected disabled>Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        @error('gender')
            <p>{{$message}}</p>
        @enderror

        <button type="submit">Register</button><br>
        <a href="/urban/login">Already have an account?</a>
    </form>
    
</body>
</html>