<?php 

$categories = 
[

0=> [  'nom'=> "sac",
       'code'=> "0EU8",
       'produits'=> [
                   0 => ['nom'=>"sac-a-main",
                        'ref'=>"0ER5",
                        'prix'=>8500,
                        'quantite'=>500
                        ],
                   1 => ['nom'=>"sac-a-dos",
                        'ref'=>"0DR5",
                        'prix'=>6000,
                        'quantite'=>700
                        ]
                    ],
    ],

1=> [  'nom'=> "Accessoirs",
       'code'=> "0PU8",
       'produits'=> []
    ]
];

foreach ($categories as $indexCategorie => $categorie) {
    if(empty($categorie['produits'])){
        echo $categorie['nom']."\n";
    }
};

foreach ($categories as $indexCategorie => $categorie) {
    if(empty($categorie['produits'])){
        echo $categorie['nom']."\n";
    }
};


do {
    $myBool = true;
    $nom = readline("Entrer le nom du categorie : \n");
    if($nom == ""){
        echo "Veuillez donné un nom au categorie !\n";
        $myBool = false;
    }
    foreach ($categories  as $categorie) {
        if($categorie['nom'] == $nom){
            echo "Le nom est deja utilise veuillez en choisir un autre !\n";
            $myBool = false;
        }   
    }
} while(!$myBool);

do {
    $myBool = true;
    $code = readline("Entrer le code du categorie : \n");
    if($code == ""){
        echo "Veuillez donné un code au categorie !\n";
        $myBool = false;
    }
    foreach ($categories  as $categorie) {
        if($categorie['code'] == $code){
            echo "Le code est deja utilise veuillez en choisir un autre !\n";
            $myBool = false;
        }   
    }
} while(!$myBool);

$newCategorie = [
    'nom' => $nom,
    'code' => $code,
    'produits' =>[]
];

$categories[]= $newCategorie;
var_dump($categories)

?>