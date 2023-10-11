<?php



// do while
$a = 1;

do {
    // echo $a;
    $a++;
} while ($a <= 1000);

echo '<br>';


// for
for ($i = 1; $i <= 1000; $i++) {
    // echo $i;
}


echo '<br>';

// foreach
$tab = ['a' => 'Banane', 'b' => 'Pomme', 'Cerise', 'Poire'];

$count = 0;
foreach($tab as $index => $fruit) {
    echo '<p>' . $index . ' => ' . $fruit . '</p>';
}

$fruits = [
    'Banane',
    'Pomme',
    'Clémentine',
    'Pèche',
    'Fraise',
    'Prune',
    'Cerise',
    'Ananas',
    'Framboise',
    'Mangue'
];

sort($fruits);

var_dump($fruits);




////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////


$fruits = [
    
];

$fruits = [
    [
        'Banane',
        'Kiwi',
        'Framboise',
        'Fraise',
        'Pomme',
        'Poire'
    ],
    [
        'Jaune',
        'Vert',
        'Rouge',
        'Rouge',
        'Verte',
        'Jaune'
    ],
    [
        'Moyen',
        'Moyen petit',
        'Petit',
        'Petit',
        'Moyen',
        'Moyen'
    ]
];

$fruits = [
    [
        'Nom' => 'Banane',
        'Couleur' => 'Jaune',
        'Taille' => 'Moyen'
    ],
    [
        'Nom' => 'Banane',
        'Couleur' => 'Jaune',
        'Taille' => 'Moyen'
    ],
    [
        'Nom' => 'Banane',
        'Couleur' => 'Jaune',
        'Taille' => 'Moyen'
    ],
    [
        'Nom' => 'Banane',
        'Couleur' => 'Jaune',
        'Taille' => 'Moyen'
    ],
    [
        'Nom' => 'Banane',
        'Couleur' => 'Jaune',
        'Taille' => 'Moyen'
    ]
];

// Même chose :
// $fruits = [
//     0 => 'Banane',
//     1 => 'Kiwi',
//     2 => 'Framboise',
//     3 => 'Fraise',
//     4 => ['Pomme Verte','Pomme Rouge'],
//     5 => 'Poire'
// ];

foreach ($fruits as $index => $valeur) {
    echo $valeur;
}