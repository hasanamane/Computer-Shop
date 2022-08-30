<x-layout>
    <div class="create-pro">
        <div class="pragraph">
            <p>Register</p>
    <div class="form-co">
        <form action="{{route('regster_s')}}" method="post">
            @csrf
            <label for="name"style="color: white;">NAME : </label><br>
            <input type="text"  id="Name" name="Name" value="{{old("Name")}}">
            @error('Name')
              <p style="font-size: 9px; display: inline-block;margin: 1px;"> {{$message}}</p>
            @enderror
            <br>
            <label for="name"style="color: white;">SURNAME : </label><br>
            <input type="text"  name="Surname" id="Surname" value="{{old("Surname")}}">
            @error('Surname')
            <p style="font-size: 9px; display: inline-block;margin: 1px;"> {{$message}}</p>
            @enderror
            <br>
            <label for="name"style="color: white;" >EMAIL : </label><br>
            <input type="email" name="Email" id="Email" value="{{old("Email")}}">
            @error('Email')
            <p style="font-size: 9px; display: inline-block;margin: 1px;"> {{$message}}</p>
            @enderror
            <br>
            <label for="name"style="color: white;">PASSWORD : </label><br>
            <input type="password"   id="Password" name="Password"value="{{old("Password")}}" >
            @error('Password')
            <p style="font-size: 9px; display: inline-block;margin: 1px;"> {{$message}}</p>
            @enderror
            <br><br>

            <button type="submit" class="btn-primary">Send Data</button>
            <a href="{{route('Login_c')}}" style="color:white; float:right;">Do You Have Account ?</a>
        </form>
    </div>
        </div>
    </div>
</x-layout>
