<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="{{ URL::asset('/ajax/jquery.min.js') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
</head>
<body>
<div class="form" style="margin-top: 200px;">
    <h1>Registration</h1>
    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif
    <form action="register" method="post" id="form">
        @csrf
        <input type="text" name="name" style="border-radius: 10px;width: 100%;box-sizing: border-box;"
               placeholder="Please Enter Name" required/>
        <br/>
        <input type="text" name="email" style="border-radius: 10px;width: 100%;box-sizing: border-box;"
               placeholder="name@domain.com"
               pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required/>

        <br/>
        <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
               style="border-radius: 10px;width: 100%;box-sizing: border-box;" placeholder="Abcd@123" required/>
        <br/>
        <div id="message">
            <p id="password" class="invalid">Must contain at least one number and one uppercase and lowercase letter,
                and at least 8 or more characters</p>
        </div>
        <script>
            let password = document.getElementById("password");
            password.onkeyup = function () {
                document.getElementById("message").style.display = "none";
            }
        </script>
        <input type="submit" name="submit"
               style="border-radius: 10px;width: 100%;box-sizing: border-box;background-color: skyblue;border-color: skyblue;"
               value="Register"/>
        <span class="text-success">
                <?php
            if (isset($success_message)) {
                echo $success_message;
            }
            ?>
            </span>
    </form>
    <p>Already Registered?<a href="{{"customer_login"}}"> Login Here</a></p>
</div>
</body>
</html>
