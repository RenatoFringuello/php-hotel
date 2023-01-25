<?php
    include_once 'head.php';
?>
<table class="w-100">
    <thead class="bg-warning">
        <tr class="row g-0">
            <th class="col-2">ID</th>
            <th class="col-2">Name</th>
            <th class="col-2">Description</th>
            <th class="col-2">Parking</th>
            <th class="col-2">Vote</th>
            <th class="col-2">Distance to Center</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($hotels as $key => $hotel){
                switch ($_GET['parking_state']) {
                    case '0':
                        if(isset($hotel['parking']) && $hotel['parking'] == 1){
                            continue 2;
                        }
                        break;
                    case '1':
                        if($hotel['parking'] != 1){
                            continue 2;
                        }
                        break;
                }
                switch ($_GET['hotel_rate']) {
                    case '1':
                        if($hotel['vote'] != 1){
                            continue 2;
                        }
                        break;
                    case '2':
                        if($hotel['vote'] != 2){
                            continue 2;
                        }
                        break;
                    case '3':
                        if($hotel['vote'] != 3){
                            continue 2;
                        }
                        break;
                    case '4':
                        if($hotel['vote'] != 4){
                            continue 2;
                        }
                        break;
                    case '5':
                        if($hotel['vote'] != 5){
                            continue 2;
                        }
                        break;
                }

                
                echo '<tr class="row g-0">
                <td class="bg-light col-2">'. $key + 1 .'</td>
                <td class="bg-light col-2">'.$hotel['name'].'</td>
                <td class="bg-light col-2">'.$hotel['description'].'</td>
                <td class="bg-light col-2">'.($hotel['parking'] ? 'Parking':'No Parking').'</td>
                <td class="bg-light col-2">'.$hotel['vote'].'</td>
                <td class="bg-light col-2">'.$hotel['distance_to_center'].'</td>
                </tr>';
            }
        ?>
    </tbody>
</table>
<?php
    include_once 'foot.php';
?>