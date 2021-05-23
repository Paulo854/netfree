<?php
function notFound(){
    //--Passando codigo da pagina pela 
    $url_key = str_split($_SERVER['REQUEST_URI'], 4);
    if(null !== redirect($url_key['3'])){
    return redirect($url_key['3']);
    }elseif(is_null(redirect($url_key['3']))){
      return notfound404();
    }
}

function notfound404(){
    $url_key = str_split($_SERVER['REQUEST_URI'], 5);
    return @redirect($url_key['5']);
}
?>