<?php
require_once 'featured-movie.php';
require_once 'netflixori.php';
require_once 'horror.php';
require_once 'comedy.php';
require_once 'romance.php';
require_once 'uprated.php';
require_once 'recomendyou.php';
require_once 'documentady.php';
require_once 'action.php';
require_once 'class/contentClass.php';


function urltmbImg($urlImg){
    $urlImage = new ContentInfo;
    echo $urlImage->setTmbUrlImage($urlImg);
}

//-- Inserindo imagens das seta esquerda e direita
function imageSetas($gen){

  $image_setas = new converterMethod;
  styleFilmesGenre(array('<div class=', 'onclick="handleLeftArrow('.$gen.');"'), array('movierow-left'));
  echo nt_image($image_setas->nt_Url_Image(image('image-seta-dir'), 30), false)."\n";
  styleFilmesGenre(array('</div>', false), array(1));

  styleFilmesGenre(array('<div class=', 'onclick="handleRightArrow('.$gen.');"'), array('movierow-right'));
  echo nt_image($image_setas->nt_Url_Image(image('image-seta-esq'), 30), array('<a href=', '></a>'))."\n";
  styleFilmesGenre(array('</div>', false), array(1));
}


//-- Exibe uma imagem de fundo aleatóriamente --//
function featured($key_api, $host_key, $language, $key_gen, $genre){
featuredMovie($key_api, $host_key, $language, $key_gen, $genre, urls('urlImg'), widthImage('300'));
}

//-- Exibe as imagens de todas as categorias --//
function apiHost($key_api, $host_key, $language, $key_gen, $genre){

 styleFilmesGenre(array('<div class=', false), array('movierow', 'movierow-listarea'));

 //-- Setando o titulo de cada categoria --//
 if($key_gen == ORIGINAL_NETFLIX){
  echo '<h2>'.titleTag('title-tag-orig-netflix').'</h2>';
  styleFilmesGenre(array('<div class=', ' style="margin-left: -400px;"'), array('movierow-list list-'.$key_gen));
 }elseif($key_gen == ACTION){
  echo '<h2>'.titleTag('title-tag-action').'</h2>';
  styleFilmesGenre(array('<div class=', ' style="margin-left: -400px;"'), array('movierow-list list-'.$key_gen));
 }elseif($key_gen == COMEDY){
  echo '<h2>'.titleTag('title-tag-comedy').'</h2>';
  styleFilmesGenre(array('<div class=', ' style="margin-left: -400px;"'), array('movierow-list list-'.$key_gen));
 }elseif($key_gen == HORROR){
  echo '<h2>'.titleTag('title-tag-horror').'</h2>';
  styleFilmesGenre(array('<div class=', ' style="margin-left: -400px;"'), array('movierow-list list-'.$key_gen));
 }elseif($key_gen == ROMANCE){
  echo '<h2>'.titleTag('title-tag-romance').'</h2>';
  styleFilmesGenre(array('<div class=', ' style="margin-left: -400px;"'), array('movierow-list list-'.$key_gen));
 }elseif($key_gen == DOCUMENTADY){
  echo '<h2>'.titleTag('title-tag-documentady').'</h2>';
  styleFilmesGenre(array('<div class=', ' style="margin-left: -400px;"'), array('movierow-list list-'.$key_gen));
 }

 
 imageSetas($key_gen);

     $m_get = new converterMethod;
    $url = $host_key.$genre.$key_gen.'&language='.$language.'&api_key='.$key_api;
   
  if($key_gen == ORIGINAL_NETFLIX){
   netflixOrig($key_api, $host_key, $language, $key_gen, $genre, urls('urlImg'), widthImage('300'));
  }elseif($key_gen == ACTION){
    action($key_api, $host_key, $language, $key_gen, $genre, urls('urlImg'), widthImage('300'));
  }elseif($key_gen == COMEDY){
    comedy($key_api, $host_key, $language, $key_gen, $genre, urls('urlImg'), widthImage('300'));
  }elseif($key_gen == HORROR){
    horror($key_api, $host_key, $language, $key_gen, $genre, urls('urlImg'), widthImage('300'));
  }elseif($key_gen == ROMANCE){
      romance($key_api, $host_key, $language, $key_gen, $genre, urls('urlImg'), widthImage('300'));
  }elseif($key_gen == DOCUMENTADY){
    documentady($key_api, $host_key, $language, $key_gen, $genre, urls('urlImg'), widthImage('300'));
  }

  styleFilmesGenre(array('</div>', false), array(1));
  styleFilmesGenre(array('</div>', false), array(2));
  
  
   
  //-----------------------------------------------------------------------------------//
   //-----------------------------------------------------------------------------------//
    //--URLS TESTE
    if(!empty($m_get->nt_ConverterGet('key', false)) && $m_get->nt_ConverterGet('adm', false) == '111'){
        $m_get->nt_RedirectLocation($url, false, false); exit;
    }    
} ?>