<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Welcome to Home Page , {{$name ?? "User"}} </h1>
    <h2>Todays Date is : {{date("d-m-y")}} </h2>
    <h1>Printing data  by decoding html tags </h1>{!!$demo!!}
</body>
</html>