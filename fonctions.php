<?php 

declare (strict_types = 1);


function dd(mixed $var) :  void{
     var_dump($var);
     die;
}

function chiffrement(string $message, int $dec) : string {

     $message_chiffre = "";
   

       for ($i=0;$i<strlen($message);$i++){
                    if (ctype_alpha($message[$i]) == true){
                         $base = ctype_upper($message[$i]) ? 'A' : 'a';
                         $message_chiffre .= chr( (ord($message[$i]) - ord($base) + $dec) % 26 + ord($base));
                    } else {
                         $message_chiffre .= $message[$i];
                    }
       }

       return $message_chiffre; 
}

function dechiffrement(string $message, int $dec) : string{

     return chiffrement($message, -$dec);
}

function chiffrementAffine(string $texte, int $a, int $b) : string
{
$chiffre_affine = "" ;

for ($i=0;$i<strlen($texte);$i++){
     if (ctype_alpha($texte[$i]) == true){
          $base = ctype_upper($texte[$i]) ? 'A' : 'a';
          $chiffre_affine .= chr ( ($a * ( ord($texte[$i]) - ord($base)) + $b)  % 26 + ord($base)) ;
     } else {
          $chiffre_affine .= $texte[$i]; 
     }
}

return $chiffre_affine;

}


function dechiffrementAffine(string $message, int $a, int $b) : string 
{
  
    $result = "";
    $aInverse = 0;
    while (($a * $aInverse) % 26 != 1) {
        $aInverse++;
    }

    for ($i = 0; $i < strlen($message); $i++) {
        $char = $message[$i];
        if ($char == " ") {
           
            $result .= " ";
        }elseif( ctype_alpha($char) == false){
            $result .= $char;
        } else {
            $base = ctype_upper($message[$i]) ? 'A' : 'a';
            $y = ord($char) - ord($base);
            $decryptedChar = chr((($aInverse * ($y - $b + 26)) % 26) + ord($base));
            $result .= $decryptedChar;
        }
    }

    return $result;
}




function chiffrementPolybe(string $message, string $motCle) : string {


 
    $motCle = strtoupper($motCle);
    $motCleSet = array();

  
    for ($i = 0; $i < strlen($motCle); $i++) {
        $char = $motCle[$i];
        if (!in_array($char, $motCleSet) &&  $char != "J" && $char != " " ) {
         
                $motCleSet[] = $char;
            
        }
    }

   
    $alphabetSet = array();
    for ($i = 0; $i < 26; $i++) {
        $char = chr($i + ord('A'));
        if (!in_array($char, $motCleSet) && $char != "J"  ) {
            $alphabetSet[] = $char;
        } 
    }

    
    $grilleSet = array_merge($motCleSet, $alphabetSet);

   
    $grille = array_chunk($grilleSet, 5);

  
    $result = "";
    foreach (str_split(strtoupper($message)) as $char) {
    
  if($char == 'J'){
    $char = 'I';
  }
        if ($char == " ") {
          

                $result .= " ";
            
         
        } elseif( !ctype_alpha($char) )
        
        {
                 $result .= $char; 
        } 
        else {
          
            for ($i = 0; $i < 5; $i++) 
            {
                for ($j = 0; $j < 5; $j++) 
                {
               
                    if ($grille[$i][$j] == $char ) 
                    {
                        $result .= ($i + 1) . ($j + 1) ;
                    }
                }
            }
        }
    }
    
    //   print_r($grille);
    //   die;
    return $result;
}



function dechiffrementPolybe(string $messageChiffre, string $motCle) : string {
   
   

    $motCle = strtoupper($motCle);
    $motCleTab = array();

   
    for ($i = 0; $i < strlen($motCle); $i++) {
        $char = $motCle[$i];
        if (!in_array($char, $motCleTab) && $char != "J" && $char != " "  ) {
            $motCleTab[] = $char;
        }
    }

    
    $alphabetTab = array();
    for ($i = 0; $i < 26; $i++) {
        $char = chr($i + ord('A'));
        if (!in_array($char, $motCleTab) && $char != 'J'  ) {
            $alphabetTab[] = $char;
        }
    }

    
    $grilleTab = array_merge($motCleTab, $alphabetTab);

  
    $grille = array_chunk($grilleTab, 5);

   
    $result = "";


    $tri = "";

    
    for($i=0; $i< strlen($messageChiffre);$i++){
        if (ctype_alnum($messageChiffre[$i])){
            $tri .= $messageChiffre[$i];
        }else{
        
          if (ord($messageChiffre[$i]) >= 123 && ord($messageChiffre[$i]) <= 126 ){
            $tri .= ord($messageChiffre[$i])-50;
          } elseif (ord($messageChiffre[$i]) >= 32 && ord($messageChiffre[$i]) <= 64) {
            $tri .= ord($messageChiffre[$i])+30;
          }else{
            $tri .= ord($messageChiffre[$i]);
          }
        }
        }

        $pairs = str_split($tri, 2);

     
  

 
    foreach ($pairs as $pair) 
    {
        
   $i = intval($pair[0]) - 1;
   $j = intval($pair[1]) - 1;
    


             if (isset($grille[$i][$j])) {
                 $result .= $grille[$i][$j];
             } else{
                if ($pair >= 73 && $pair <= 76 ){
        
                    $result .= chr($pair+50);
                    
                  } elseif ($pair >= 62 && $pair <= 94) {
                 
                    $result .= chr($pair-30);
                }else{
                    
                    $result .= chr($pair-0);
                   

                  }

                
             }
    }

    return $result;
}








