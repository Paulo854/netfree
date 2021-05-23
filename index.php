<?php
require_once 'function.php';

//--versão do sistema
define('NETFREE_VERSION', '1.0');
//-- Key API
define('KEY_API', '38c007f28d5b66f36b9c3cf8d8452a4b');
//--Host
define('HOST_KEY', 'https://api.themoviedb.org/3');
//--Linguagem
define('LANGUAGE', 'pt-br');
//--Originais Indefinida
define('ORIG', '550');
//--Categoria Ação
define('ACTION', '28');
//--Categoria Cómedia
define('COMEDY', '35');
//--Categoria Terror
define('HORROR', '27');
//-Categoria Romance
define('ROMANCE', '10749');
//--Categoria documentario
define('DOCUMENTADY', '99');
//--Categoria Original Netflix
define('ORIGINAL_NETFLIX', '213');

head();
functionFeaturedMovie();

$gen = new converterMethod;
if(
    ACTION == $gen->nt_ConverterGet('key', false) ||
    COMEDY == $gen->nt_ConverterGet('key', false) ||
    HORROR == $gen->nt_ConverterGet('key', false) ||
    ROMANCE == $gen->nt_ConverterGet('key', false) ||
    DOCUMENTADY == $gen->nt_ConverterGet('key', false) ||
    ORIGINAL_NETFLIX == $gen->nt_ConverterGet('key', false)
    ){
    functionCategorias();
}else{
    functionIndex();
}

footer();
?>