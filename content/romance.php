<?php
function romance($key_api, $host_key, $language, $key_gen, $genre, $urlImage, $width){
    $url = $host_key.$genre.$key_gen.'&language='.$language.'&api_key='.$key_api;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = json_decode(curl_exec($ch));
    $netflix = $res->results;

    romanceTamb($res->results, $urlImage, $width);
}  

function romanceTamb($result, $urlImage, $width){

    foreach($result as $key=>$values){
         
?>
    <?php styleFilmesGenre(array('<div class=', false), array('movierow-item')); ?>
   <img src="https://<?php echo $urlImage.$width.$values->poster_path; ?>" alt="<?php echo $values->title; ?>" class="img-thumbnail"> 
   <?php styleFilmesGenre(array('</div>', false), array(1)); ?>
<?php      
    }

       
}
?>