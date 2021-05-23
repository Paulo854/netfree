<?php
//--Declarando title tag da pagina inicial
function titleTag($title){
    $array_titletag = array(
        "title-tag" => "Inicio",
        "title-tag-action" => "Ação",
        "title-tag-comedy" => "Comédia",
        "title-tag-documentady" => "Documentário",
        "title-tag-horror" => "Terror",
        "title-tag-orig-netflix" => "Orginais Netflix",
        "title-tag-romance" => "Romance"
    );
    return $array_titletag[$title];
}

//--Declaração de codigo de linguagem
//--Se é UTF-8 ou ISO-8859-1
function codLinguage($cod){
    $array_codlinguage = array(
        "charset-utf" => "UTF-8"       
    );
    return $array_codlinguage[$cod];
}

//--Declaração de idioma do sistema
function typeLanguage($language){
       $array_language = array(
        "langBr" => "pt_BR",
        "langEn" => "en"
        );
        return $array_language[$language];
}


//--Setando favicon
function urlFavicon($img){
    $array_favicon = array(
        "favicon" => "favicon.png"
    );
    return $array_favicon[$img];
}


//--Setando lotipo
function logotipo($url_img){
    $array_logotipo = array(
        "image" => "Netflix-Logo.png"
    );
    return $array_logotipo[$url_img];
}


//--Setando Usuario
function user($url_img){
    $array_logotipo = array(
        "image" => "user.jpg"
    );
    return $array_logotipo[$url_img];
}

//--Setando Imagens
function image($url_img){
    $array_logotipo = array(
        "image-seta-dir" => "seta-esquerda.png",
        "image-seta-esq" => "seta-direita.png"
    );
    return $array_logotipo[$url_img];
}

//--Resgistro de urls responsaveis por gerar um loop de filmes
function urls($url){
    $array_content = array(
        "urlGenero" => "/discover/movie?with_genres=",
        "urlOrig" => "/movie",
        "urlRecomendado" => "/trending/all/week&",
        "urlEmalta" => "/movie/top_rated?",
        "urlOrigNetflix" => "/discover/tv?with_network=",
        "urlImg" => "image.tmdb.org/t/p/"
    );

   return $array_content[$url];
}

//--Definindo tamanho das imagens
function widthImage($width){
    $array_widthimage = array(
    "300" => "w300"
    );

    return $array_widthimage[$width];
}

//--Sentando as paginas de erros
function redirect($key){
    $array_redirect = array(
       '404' => '<h1><center>PAGINA NÃO ENCONTRADA !!!</center></h1>',
       '401' => '<h1><center>USUARIO OU PAGINA NÃO AUTORIZADA !!!</center></h1>',
       '503' => '<h1><center>FOI ENCONTRADO UM ERRO NO SERVIÇO</center></h1>'
    );

    return @$array_redirect[$key];
}

//--Setando os numeros de thumbnails que irá aparecer na pagina home
function thumbnailsHome($num){
    $array_thumbnails = array(
        'netflixorigarray' => null
    );
    return $array_thumbnails[$num];
}

// --Setando os generos no formato array
// -- link de acesso para obter os generos
// -- https://api.themoviedb.org/3/genre/movie/list?api_key=38c007f28d5b66f36b9c3cf8d8452a4b&language=en-US

function genres($id){
    $array_genres = array(
       28 => "Action",    
       12 => "Adventure",    
       16 => "Animation",    
       35 => "Comedy",    
       80 => "Crime",    
       99 => "Documentary",    
       18 => "Drama",    
       10751 => "Family",    
       14 => "Fantasy",    
       36 => "History",    
       27 => "Horror",    
       10402 => "Music",    
       9648 => "Mystery",    
       10749 => "Romance",    
       878 => "Science Fiction",    
       10770 => "TV Movie",    
       53 => "Thriller",    
       10752 => "War",    
       37 => "Western",
       10759 => "Action & Adventure",    
       35 => "Comedy",    
       99 => "Documentary",    
       10762 => "Kids",    
       10763 => "News",    
       10764 => "Reality",    
       10765 => "Sci-Fi & Fantasy",    
       10766 => "Soap",    
       10767 => "Talk",    
       10768 => "War & Politics"    
    );
    return $array_genres[$id];
}
?>