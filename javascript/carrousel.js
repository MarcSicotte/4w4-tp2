(function(){
  //Fonctionalités boîte modale 
  let boite__carrousel = document.querySelector(".boite__carrousel");
  let boite__carrousel__fermeture = document.querySelector(".boite__carrousel__fermeture");
  let boite__carrousel__navigation = document.querySelector('.boite__carrousel__navigation');
  let galerie__img = document.querySelectorAll('.galerie img')
  console.log(galerie__img.length)

  boite__carrousel__fermeture.addEventListener('mousedown', function(){
    boite__carrousel.classList.remove('boite__carrousel--ouvrir');

})
  
  let elmImg = document.createElement('img')
  boite__carrousel.append(elmImg)
  let index = 0


  for (const img of galerie__img) {
    let bouton = document.createElement('button')
    bouton.dataset.index = index++
    boite__carrousel__navigation.append(bouton);
    //fonction permettant la navigaton boite du carrousel
    bouton.addEventListener('mousedown', function(){
      elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
    })
    img.addEventListener('mousedown',function(){
      boite__carrousel.classList.add('boite__carrousel--ouvrir');
      elmImg.setAttribute('src', this.getAttribute('src'));
    })
}

 

  
})()