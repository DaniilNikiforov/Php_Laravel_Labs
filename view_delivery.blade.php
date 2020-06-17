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
        h1{
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Delivery information:</h1>
        <h2>Product: {{$delivery->product}}</h2>
        <h2>Weight: {{$delivery->weight}}</h2>
        <h2>Cost: {{$delivery->cost}}</h2>
    </div>
</body>
</html>
