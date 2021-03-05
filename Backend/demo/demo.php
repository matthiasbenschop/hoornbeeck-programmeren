<!DOCTYPE html>
<html>
<body>
    
<?php 

    $name = 'Matthias';
    $age = 16;
    $working = true;
    $length = 1.95;

    // echo 'mijn naam is' .$name .' en ik ben'. $age . ' jaar oud.';


    if (3 < 4) {
        echo 'Klopt!';
    } else {
        echo 'Niet waar!';
    }


    $cars = [
        ['brand' => 'Volvo', 'type' => 'V60', 'licence' => '34-gv-hb'],
        ['brand' => 'BMW', 'type' => 'M4', 'licence' => '35-gv-hb'],
        ['brand' => 'BMW', 'type' => 'M5', 'licence' => '36-gv-hb'],
        ['brand' => 'fiat', 'type' => '500', 'licence' => '37-gv-hb'],
    ];

    foreach ($cars as $car) {
        echo $car['brand'] .' - '. $car['type'] .' - '. $car['licence'] .'<br/>';
    }



    // $eersteklas = ['arthur', 'Matthias', 'gert'];

    // // foreach ($eersteklas as $student) {
    // //     echo $student .'</br>';
    // // }

?>


</body>
</html> 