<?php
require_once 'header.php';

function titleTagsGenre(){
    $key_category = new converterMethod;
    if($key_category->nt_ConverterGet('key', false) == ACTION){
        return titleTag('title-tag-action');
    }elseif($key_category->nt_ConverterGet('key', false) == COMEDY) {
        return titleTag('title-tag-comedy');
    }elseif($key_category->nt_ConverterGet('key', false) == DOCUMENTADY){
        return titleTag('title-tag-documentady');
    }elseif($key_category->nt_ConverterGet('key', false) == HORROR){
        return titleTag('title-tag-horror');
    }elseif($key_category->nt_ConverterGet('key', false) == ORIGINAL_NETFLIX) {
        return titleTag('title-tag-orig-netflix');
    }elseif($key_category->nt_ConverterGet('key', false) == ROMANCE) {
        return titleTag('title-tag-romance');
    }else{
        return titleTag('title-tag');
    }
}

// -- registro favicon no head
// -- O favicon original fica registrado na pagina config.php em urlFavicon();
function exFavicon(){
    $favicon_head = new converterMethod;
    echo nt_favicon($favicon_head->nt_Url_Favicon(urlFavicon('favicon')));
}

// -- registro CSS no head
function excStyles(){
  $styles = new converterMethod;  
  echo nt_styles($styles->nt_Url_Style('netfree', false), false);
  echo nt_styles($styles->nt_Url_Style('movie-row', false), false);
  echo nt_styles($styles->nt_Url_Style('featuredmovie', false), false);
  echo nt_styles($styles->nt_Url_Style('header', false), false);
  echo nt_styles($styles->nt_Url_Style('footer', false), false);
}

// -- registro JS no head
function exScript(){
    $script = new converterMethod;
    echo nt_script($script->nt_Url_Script('scroll', false), false);
    echo nt_script($script->nt_Url_Script('loading', false), false);
}

//-- registro Logotipo 
function exLogotipo(){
    $logo_head = new converterMethod;
    return nt_logotipo($logo_head->nt_Url_Logo(logotipo('image'), 100), array('<a href=', '></a>'));
}

//-- usuario 
function exUser(){
    $user_head = new converterMethod;
    return nt_user($user_head->nt_Url_User(user('image'), 50), array('<a href=', '></a>'));
}
?>