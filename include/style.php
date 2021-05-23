<?php

function nt_styles($src_style, $ver_style){
   
    if(empty($src_style)){
        $direct = new converterMethod;
        $direct->nt_RedirectLocation('not-found', array(503, false, true), false); exit;
    }elseif($ver_style == false){
        $version = NETFREE_VERSION;
    }else {
        $version = $ver_style;
    }

    $style_array = array(
        "rel" => 'link rel="stylesheet"',
        "type" => 'type="text/css"',
        "src" => 'href=',
        "ver" => 'ver='
    );
     return "<".$style_array['rel']." "
     .$style_array['type']." "
     .$style_array['src'].$src_style."?"
     .$style_array['ver'].$version."> \n";

     
}

//-- Definindo as class dos generos AÇÃO, COMÉDIA, DOCUMENTARIO, TERRO, ORIGINAL NETFLIX, ROMANCE

function styleFilmesGenre($array_movie, $array_class){ 

        foreach($array_class as $class){
            if($array_movie['1'] != false && $array_movie['0'] == '<div class=' || $array_movie['0'] == '<div id='){
                echo $array_movie['0']."'".$class."' ".$array_movie['1']." >\n";
            }elseif($array_movie['0'] == '<div class='){
                echo $array_movie['0']."'".$class."'>\n";
            }
          
            
       }         
         foreach($array_class as $count){
            for($i=1; $i<=$count; $i++){
                echo "</div>\n";
            }         
        }
}  
?>  