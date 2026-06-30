<?php 

$categories = 
[

0=> [  'nom'=> "sac",
       'code'=> "1234",
       'produits'=> [
                   0 => ['nom'=>"sac-a-main",
                        'ref'=>"1111",
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
var_dump($categories);

//recherche code dans categorie

   
do {
    $myBool = true;
    $code = readline("Entrer le code :\n");
    foreach ($categories  as $indexCategorie => $categorie) {
        if($categorie['code'] == $code){
            echo "bonjour";
            break;
        }
        else{
            echo "Code invalide \n";
            $myBool = false;
        }   
    }
} while(!$myBool);






        do {
            $myBool = true;
            $nomProduit = readline("Entrer le nom  du produit : \n");
            if($nomProduit == ""){
                echo "Veuillez donné un nom au produit !\n";
                $myBool = false;
            }
            foreach ($categories  as $categorie) {
                foreach ($categorie['produits'] as $key => $produit) {
                    if($produit['nom'] == $nomProduit){
                    echo "Le nom est deja utilise veuillez en choisir un autre !\n";
                    $myBool = false;
                }  
             } 
        }
} while(!$myBool);

do {
    $myBool = true;
    $refProduit = readline("Entrer le referent du produit : \n");
    if($refProduit == ""){
        echo "Veuillez donné un referent au produit !\n";
        $myBool = false;
    }
    foreach ($categories  as $categorie) {
        foreach ($categorie['produits'] as $key => $produit) {
             if($produit['ref'] == $refProduit){
            echo "Le referent est deja utilise veuillez en choisir un autre !\n";
            $myBool = false;
        }
        }
          
    }
} while(!$myBool);

do {
    $myBool = true;
    $prixProduit = readline("Entrer le prix du produit : \n");
    if($prixProduit == ""){
        echo "Veuillez donné un prix au produit !\n";
        $myBool = false;
    }
    if($prixProduit <= 0){
            echo "Le prix doit etre positif !\n";
            $myBool = false;
    }   
} while(!$myBool);

do {
    $myBool = true;
    $quantiteProduit = readline("Entrer le quantite du produit : \n");
    if($quantiteProduit == ""){
        echo "Veuillez donné un quantite au produit !\n";
        $myBool = false;
    }
    if($quantiteProduit <= 0){
            echo "Le quantite doit etre positif !\n";
            $myBool = false;
    }   
} while(!$myBool);

$newProduit = [
    'nom'=> $nomProduit,
    'reft'=> $refProduit,
    'prix'=> $prixProduit,
    'quantite'=> $quantiteProduit,
];

$categories[$indexCategorie]['produits'][]= $newProduit; 
print_r($categories);



?>