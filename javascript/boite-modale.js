(function(){
    //Fonctionalités boîte modale 
    let boite__modale = document.querySelector(".boite__modale");
    let cours__desc__bouton = document.querySelectorAll('.cours__desc__bouton');
    let boite__modale__ferme = document.querySelector(".boite__modale__ferme");
    let boite__modale__texte = document.querySelector(".boite__modale__texte");
    boite__modale__ferme.addEventListener('mousedown', function(){
        boite__modale.classList.remove('boite__modale--ouvrir');

    })
    for (const bout of cours__desc__bouton) {
        bout.addEventListener('mousedown',function(){
          boite__modale.classList.add('boite__modale--ouvrir');
          boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML;
        })
    }
   
    //Fonctionalités categorie cours
    let cartes = document.querySelectorAll(".carte");
    
    for (const uneCarte of cartes) {
        uneCarte.addEventListener('mouseover',function(){
          uneCarte.classList.remove('carte');
          uneCarte.classList.add('laCarte');
          
        })
    }
    

    
})()