<x-form>
    <div class="wrapper login"> 
        <x-flash-message />
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome Back</h2>
                    <p>Create your account.<br>It's totally free.</p>
                    <a href="/urban/create" class="btn">Sign Up</a>
                </div>
            </div>

            <div class="col-right">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="/urban/validate" method="post">
                        @csrf
                        <p>
                            <input type="text" name="email" placeholder="Email" value="{{old('email')}}">
                        </p>
                        @error('email')
                            <p style="color: red">{{$message}}</p>
                        @enderror

                        <p>
                            <input type="password" name="password" placeholder="Password" value="{{old('password')}}">
                        </p>
                        @error('password')
                            <p style="color: red">{{$message}}</p>
                        @enderror

                        <p>
                            <input type="submit" value="Sign In">
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-form>