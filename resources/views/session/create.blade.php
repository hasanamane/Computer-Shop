<x-layout>
    <div class="create-pro">
        <div class="pragraph">
            <p>Log In</p>
            <div class="form-co">
                <form action="{{route('Login_s')}}" method="post">
                    @csrf
                    <label for="name"style="color: white;" >EMAIL : </label><br>
                    <input type="email" name="Email" id="Email" value="{{old("Email")}}">
                    @error('Email')
                    <p style="font-size: 9px; display: inline-block;margin: 1px;"> {{$message}}</p>
                    @enderror
                    <br>
                    <label for="name"style="color: white;" >PASSWORD : </label><br>
                    <input type="password"   id="Password" name="Password"value="{{old("Password")}}" >
                    @error('Password')
                    <p style="font-size: 9px; display: inline-block;margin: 1px;"> {{$message}}</p>
                    @enderror
                    <br><br>
                    <button type="submit" class="btn-primary">Send Data</button>
                    <a href="{{route('regster_c')}}" style="color:white; float:right;">You don't have an account?</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>
