<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trains | Homepage</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container bg-dark">
            <div class="row">
                <div class="col-12">
                    <div class="py-5">
                       <h1 class="text-center text-light">Trains Info</h1>
                    </div>
                </div>

                @forelse ( $trains as $train )
                    <div class="col-3 p-3">
                        <div class="card text-center p-2">
                            <img class="img-thumb" src="https://neverwasmag.com/wp-content/uploads/2018/03/Syberia-train.jpg" alt="train">
                            <p>Company: {{$train->company}}</p>
                            <p>Starting Station: {{$train->starting_station}}</p>
                            <p class="fw-bold">Arrival Station: {{$train->arrival_station}}</p>
                            <p>Departure Time:{{$train->departure_time}}</p>
                            <p>Arrival Time:{{$train->arrival_time}}</p>
                            <p class="fw-bold">Train Code:{{$train->train_code}}</p>
                            <p>On Time:{{$train->on_time}}</p>
                            <p>Cacelled:{{$train->cancelled}}</p>
                        </div>
                    </div>
                @empty
                    <p>No trains to show.</p>
                @endforelse
            </div>
        </div>
    </main>

</body>

</html>
