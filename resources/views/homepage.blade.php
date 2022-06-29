<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>

    @foreach ($trains as $train)

        <div>
            <h3> {{$train->company}} </h3>
            <p> {{$train->departure_station}} </p>
            <p> {{$train->arrival_station}} </p>
            <p> {{$train->departure_time}} </p>
            <p> {{$train->arrival_time}} </p>
            <p> {{$train->train_number}} </p>
            <p> {{$train->carriages}} </p>
        </div>
        
    @endforeach
    
</body>
</html>