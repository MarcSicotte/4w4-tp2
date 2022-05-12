(function(){
  //Fonctionalités boîte modale 
  let boite__modale = document.querySelector(".boite__modale");
  let boite__modale__ferme = document.querySelector(".boite__modale__ferme");
  let boite__modale__texte = document.querySelector('.boite__modale__texte');
  let galerie__img = document.querySelectorAll('.galerie img')
  console.log(galerie__img.length)
  
  let elmImg = document.createElement('img')

  boite__modale__texte.appendChild(elmImg)

  for (const img of galerie__img) {
    img.addEventListener('mousedown',function(){
      boite__modale.classList.add('boite__modale--ouvrir');
      elmImg.setAttribute('src', this.getAttribute('src'));
    })
}

 

  
})()