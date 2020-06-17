<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>App name @yield('title') </title>
    <style>
        *{
            margin: 0px;
        }
        div{
            width: 350px;
            height: 300px;
            background: darkorange;
            border: black double 4px;
            color: black;
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

    </style>
</head>
<body>
    <div>
        <form method = "post" action = "/registration/result">
            @csrf
            <p>E-mail: </p><input type="email" name="email"><br><br>
            <p>Login: </p><input type="text" name="login"><br><br>
            <p>Password: </p><input type="password" name="password"><br><br>
            <input type="submit" value="Sign in" name="send">
        </form>
    </div>
</body>
</html>
