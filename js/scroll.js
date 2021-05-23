const scrollListener = () => {
    if(window.scrollY > 10){
        document.querySelector('.background-header').style.background = "#141414";
    }else if(window.scrollY < 9) {
        document.querySelector('header.background-header').style.background = "transparent";
    }
    
}

window.addEventListener('scroll', scrollListener);


//----------------------Criando efeito scrollX--------------------------------//


const handleLeftArrow = (gen) => {

   const lerMovieList = document.querySelector('.list-' + gen);
   const lerMovieListNum = parseInt(lerMovieList.style.marginLeft) + Math.round(window.innerWidth / 4);
   lerMovieList.style.marginLeft = lerMovieListNum + 'px';
  // console.log('Numerp sem dividir ' + Math.round(window.innerWidth));
 //  console.log('O numero divido por 4: ' + lerMovieListNum);

    
  if(lerMovieListNum <= 0){
    lerMovieList.style.marginLeft = lerMovieListNum + 'px';
  }else {
    lerMovieList.style.marginLeft = '0px';
  } 

}

const handleRightArrow = (gen) => {

  const lerMovieList = document.querySelector('.list-' + gen);
  const lerMovieListNum = parseInt(lerMovieList.style.marginLeft) + -Math.round(window.innerWidth / 4);

  const lisW = 20 * 160;
 
 if((window.innerWidth - lisW) <= lerMovieListNum){
  lerMovieList.style.marginLeft = (lerMovieListNum - 42) + 'px';
 }
}