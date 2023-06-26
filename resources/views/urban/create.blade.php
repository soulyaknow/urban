<x-form>
    <div class="wrapper login"> 
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <p>Login your account.<br>It's totally free.</p>
                    <a href="/urban/login" class="btn">Sign In</a>
                </div>
            </div>

            <div class="col-right">
                <div class="login-form">
                    <h2>Registration</h2>
                    <form action="/urban" method="post">
                        @csrf
                        <p>
                            <input type="text" name="firstname" placeholder="Firstname" value="{{old('firstname')}}">
                        </p>
                        @error('firstname')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                        
                        <p>
                            <input type="text" name="lastname" placeholder="Lastname"  value="{{old('lastname')}}">
                        </p>
                        @error('lastname')
                            <p style="color: red">{{$message}}</p>
                        @enderror

                        <p>
                            <input type="email" name="email" placeholder="Email"  value="{{old('email')}}">
                        </p>
                        @error('email')
                            <p style="color: red">{{$message}}</p>
                        @enderror

                        <p>
                            <input type="password" name="password" placeholder="Password"  value="{{old('password')}}">
                        </p>
                        @error('password')
                            <p style="color: red">{{$message}}</p>
                        @enderror

                        <p>
                            <input type="text" name="age" placeholder="Age"  value="{{old('age')}}">
                        </p>
                        @error('age')
                            <p style="color: red">{{$message}}</p>
                        @enderror

                        <select name="gender" aria-placeholder="Gender"  value="{{old('gender')}}">
                                <option selected disabled>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                        </select>
                        @error('gender')
                            <p style="color: red">{{$message}}</p>
                        @enderror

                        <p>
                            <input type="submit" value="Register">
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-form>