

<?php
  
  
/**
* 
*/
class Rot16PL
{
  
  
    
   
   
    

  

 public static $tab_rot16pl = array(
               'a'=>'m' , 'ą'=>'n' ,'b'=>'ń' , 'c'=>'o' , 'ć'=>'ó' , 'd'=>'p' , 'e'=>'r' , 'ę'=>'s' , 'f'=>'ś', 'g'=>'t' , 'h'=>'u' , 'i'=>'w' , 'j'=>'y' ,'k'=>'z' , 'l'=>'ź' ,'ł'=>'ż' ,
               'm'=>'a' ,  'n'=>'ą', 'ń'=>'b', 'o'=>'c',  'ó'=>'ć',  'p'=>'d',  'r'=>'e',  's'=>'ę' ,  'ś'=>'f', 't'=>'g' , 'u'=>'h', 'w'=>'i', 'y'=>'j' , 'z'=>'k', 'ź'=>'l', 'ż'=>'ł',
               'A'=>'M',  'Ą'=>'N', 'B'=>'Ń', 'C'=>'O',  'Ć'=>'Ó',  'D'=>'P' , 'E'=>'R',  'Ę'=>'S' , 'F'=>'Ś', 'G'=>'T',  'H'=>'U',   'I'=>'W', 'J'=>'Y', 'K'=>'Z', 'L'=>'Ź',  'Ł'=>'Ż',
               'M'=>'A',  'N'=>'Ą'  ,'Ń'=>'B', 'O'=>'C', 'Ó'=>'Ć',  'P'=>'D' , 'R'=>'E',   'S'=>'Ę', 'Ś'=>'F', 'T'=>'G',  'U'=>'H',   'W'=>'I',  'Y'=>'J', 'Z'=>'K', 'Ź'=>'L' , 'Ż'=>'Ł'
            );

   
   
 static public  function rot16($string){
        $tab = self::$tab_rot16pl;

       
    $l = mb_strlen($string);
    $strout='';

        for($x=0;$x<$l;$x++){

           if(true===array_key_exists(mb_substr($string,$x,1,'UTF-8'),$tab)) { $strout .= $tab[mb_substr($string,$x,1,'UTF-8')];  }

           else
           { $strout .=  mb_substr($string,$x,1,'UTF-8')   ;     }



        }


            return $strout;

}
}






