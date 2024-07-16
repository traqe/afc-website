<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFC Document</title>
</head>

<body>
    <p><strong>Email: </strong> {{ $dataReceived['email'] }} </p>
    <br>
    <p><strong>Phone Number: </strong> {{ $dataReceived['phone'] }} </p>
    <br>
    <p><strong>Services Requested: </strong></p>
    <ul>
        @foreach($dataReceived['services'] as $service)
        <li>{{ $service }}</li>
        @endforeach
    </ul>
    <p><strong>Comment: </strong> {{ $dataReceived['comment'] }} </p>
</body>

</html>
