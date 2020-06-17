<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <style>
        *{
            margin: 0px;
        }
        div{
            width: 350px;
            height: 200px;
            background: darkorange;
            border: black double 4px;
            color: black;
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        p{
            margin: 10px;
        }

    </style>
</head>
<body>
    <div>
        <p>E-mail: {{$result->email}}</p>
        <p>Login: {{$result->login}}</p>
        <p>Password: {{$result->password}}
    </div>
</body>
</html>
