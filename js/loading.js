var myVar;
const loadingMovie = () => {
  myVar = setTimeout(showPage, 30);
}

window.addEventListener('load', loadingMovie);

function showPage() {
  document.querySelector('.loading').style.visibility = 'hidden';
}