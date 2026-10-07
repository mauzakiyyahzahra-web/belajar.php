<?php

function konversikeIDR ($nominal, $matauang){

    if ($nominal <= 0){
         return"nominal harus lebih dari 0!";
    } else {
    switch ($matauang){

    case "USD":
        $hasil = $nominal* 17884;
        break;
   case "SGD":
        $hasil = $nominal * 13500; 
        break;
    case "JPY":
        $hasil = $nominal * 115; 
        break; 
    default: 
        return "Mata uang tidak dikenali!";       
   }
    return "Rp" . $hasil;
  }
}
  $USD = 100;
echo konversikeIDR ($USD, "USD");
?>

