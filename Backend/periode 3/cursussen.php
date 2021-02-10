<?php

$cursus = [
    'Naam' => 'Programmeren',
    'Duur' => '2 uur',
    'Datum' => '10/2/2021'
];

$meerderecursussen = [
    'cursus1' => [ 'Naam' => 'Programmeren', 'Duur' => '2 uur', 'Datum' => '10/2/2021'], 
    'cursus2' => [ 'Naam' => 'Webdesign', 'Duur' => '1 uur', 'Datum' => '11/2/2021'],
    'cursus3' => [ 'Naam' => 'Databases', 'Duur' => '10 uur', 'Datum' => '12/2/2021'],
];

foreach ($meerderecursussen as $cursus) {
    echo $cursus['Naam'];
}