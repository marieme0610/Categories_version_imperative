<?php

$categories = [

   0 =>      [
            'nom' => 'ERT5',
            'code' => 'Parfum',
            'produits' => [
                  0 => [
                    'nom' => 'victoriaSecret',
                    'ref' => '555Y',
                    'prix' => 15000,
                    'quantite' => 284 
                  ],
                  1 => [
                    'nom' => 'Love me',
                    'ref' => 'FG5R',
                    'prix' => 1500,
                    'quantite' => 76 
                  ]
            ]
         ],
   1 =>      [
            'nom' => 'A3E6',
            'code' => 'soins-de-visage',
            'produits' => []
         ]
];


 function affichProdZero(array $categories): void{
      foreach ($categories as  $cat ) {
    if (empty($cat["produits"])) {
         echo $cat["nom"]."\n";
    }
 }
 }

  function saisiInfo(string $message):string {
     return readline($message);
     
 }
 function ifVide(string $value,string $message):bool{
     if (empty($value)) {
            echo $message."\n";
           return  false;
        }
        return true;
 }




?>