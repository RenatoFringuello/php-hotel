<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php hotel</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php
        $hotels = [
            [
                'name' => 'Hotel Belvedere',
                'description' => 'Hotel Belvedere Descrizione',
                'parking' => true,
                'vote' => 4,
                'distance_to_center' => 10.4
            ],
            [
                'name' => 'Hotel Futuro',
                'description' => 'Hotel Futuro Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 2
            ],
            [
                'name' => 'Hotel Rivamare',
                'description' => 'Hotel Rivamare Descrizione',
                'parking' => false,
                'vote' => 1,
                'distance_to_center' => 1
            ],
            [
                'name' => 'Hotel Bellavista',
                'description' => 'Hotel Bellavista Descrizione',
                'parking' => false,
                'vote' => 5,
                'distance_to_center' => 5.5
            ],
            [
                'name' => 'Hotel Milano',
                'description' => 'Hotel Milano Descrizione',
                'parking' => false,
                'vote' => 2,
                'distance_to_center' => 50
            ],

        ];
    ?>
    <div class="container-sm">
        <form class="d-flex align-items-center py-3" action="./table.php" method="get">
            <div class="d-flex flex-column">
                <label class="mb-1" for="parking-state">Parking Lot</label>
                <select class="p-1 me-3" name="parking_state" id="parking-state">
                    <option value="all" >Everything</option>
                    <option value="0">No parking</option>
                    <option value="1">Parking</option>
                </select>
            </div>
            <div class="d-flex flex-column">
                <label class="mb-1" for="hotel-rate">Star rate</label>
                <select class="p-1 me-3" name="hotel_rate" id="hotel-rate">
                    <option value="all" >Everything</option>
                    <option value="1">hotel *</option>
                    <option value="2">hotel **</option>
                    <option value="3">hotel ***</option>
                    <option value="4">hotel ****</option>
                    <option value="5">hotel *****</option>
                </select>
            </div>
            <button class="btn btn-warning py-1" type="submit">Send</button>
        </form>