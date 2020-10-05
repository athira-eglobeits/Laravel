<html>
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
</head>
<body>
<div class="form" style="margin-top: 200px">
    <h1>Log In</h1>
    <form action="login" method="post">
        @csrf
        <input type="text" name="email" style="border-radius: 10px;width: 100%;box-sizing: border-box;"
               placeholder="Please Enter Email" required/>
        <br/>
        <input type="password" name="password" style="border-radius: 10px;width: 100%;box-sizing: border-box;"
               placeholder="Please Enter Password" required autofocus/>
        <br/>
        <input type="submit" name="login"
               style="border-radius: 10px;width: 100%;box-sizing: border-box;background-color: skyblue;border-color: skyblue;"
               value="Login"/>
    </form>
    <p>Not registered yet?<a href="{{"customer_register"}}"> Register Here</a></p>
</div>
</body>
</html>
