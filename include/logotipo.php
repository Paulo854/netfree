<?php
function nt_logotipo($url_logo, $array_tag){    
    $logo = new converterMethod();
    return $array_tag['0'].'"'.$logo->nt_Url_Site('home', 'http').'"><img '.$url_logo.$array_tag['1'];  
}
?>