(function(){
  //Fonctionalités boîte modale 
  let boite__modale = document.querySelector(".boite__modale");
  let boite__modale__ferme = document.querySelector(".boite__modale__ferme");
  
  let galerie__img = document.querySelectorAll('.galerie img')
  console.log(galerie__img.length)
  
  let elmImg = document.createElement('img')


  for (const img of galerie__img) {
    img.addEventListener('mousedown',function(){
      console.log(this.tagName);
      boite__modale.classList.add('boite__modale--ouvrir');
      console.log(this.getAttribute('src'))
    })
}

 

  
})()