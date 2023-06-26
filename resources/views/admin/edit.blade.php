<x-form>
    <div class="wrapper login"> 
        <div class="container">
            <div class="col-right">
                <div class="login-form">
                    <h2>Edit</h2>
                    <form action="/urban/{{$user->id}}">
                        @csrf
                        @method('PUT')
                        <p>
                            <input type="text" name="firstname" placeholder="Firstname" value="{{$user->firstname}}">
                        </p>
                        @error('firstname')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                        
                        <p>
                            <input type="text" name="lastname" placeholder="Lastname"  value="{{$user->lastname}}">
                        </p>
                        @error('lastname')
                            <p style="color: red">{{$message}}</p>
                        @enderror

                        <p>
                            <input type="email" name="email" placeholder="Email"  value="{{$user->email}}">
                        </p>
                        @error('email')
                            <p style="color: red">{{$message}}</p>
                        @enderror

                        <p>
                            <input type="text" name="age" placeholder="Age"  value="{{$user->age}}">
                        </p>
                        @error('age')
                            <p style="color: red">{{$message}}</p>
                        @enderror

                        <select name="gender" aria-placeholder="Gender">
                            @if($user->gender == 'Male')
                            <option selected value="Male">Male</option>
                            @endif
                            {{-- <option selected disabled>{{$user->gender}}</option> --}}
                            <option  value="Female">Female</option>
                        </select>
                        @error('gender')
                            <p style="color: red">{{$message}}</p>
                        @enderror

                        <p>
                            <input type="submit" value="Update">
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-form>