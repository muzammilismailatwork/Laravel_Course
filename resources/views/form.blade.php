
<h1> User Login</h1>
<form action= "data" method="POST">
    @csrf
    <input type="text" name="userid" placeholder="Enter User ID" /> <br/>
    @error("userid"){{$message}}@enderror
    <br/>
    <input type="password" name="password" placeholder="Enter User Password" /> <br/>
    @error("password"){{$message}}@enderror
    <br/>
    <input type="number" name="age" placeholder="Enter your age" /><br/>
    @error("password"){{$message}}@enderror
    <br/>
    <button type="submit">Login</button>
</form>