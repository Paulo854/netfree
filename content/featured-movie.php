<?php
function featuredMovie($key_api, $host_key, $language, $key_gen, $genre, $urlImage, $width){
        $url = $host_key.$genre.$key_gen.'&language='.$language.'&api_key='.$key_api;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = json_decode(curl_exec($ch));
        shuffle($res->results);
        $netflix = $res->results[2];
                
        headFeatured(
          $netflix->name, 
          $netflix->backdrop_path, 
          $netflix->vote_average, 
          $netflix->overview, 
          $netflix->first_air_date,
          $netflix->genre_ids,
          $netflix->id
        );
        
  }
?>

