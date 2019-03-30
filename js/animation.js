window.addEventListener('load',function(){

    console.log('passe')
    let elmTitre = document.querySelector('.site-branding .site-title')
    let elmDescription = document.querySelector('.site-branding .site-description')
    let elmNav = document.querySelector(".site-branding .main-navigation")
    let elmCours = document.querySelectorAll(".entry-title")
    
    elmTitre.classList.add('anim1')
    elmNav.classList.add('anim4')
    elmDescription.classList.add('anim3')
    for (let i = 0; i<elmCours.length; i++){
        if (i%2 == 0){
            elmCours[i].classList.add('anim3');
        }
        else if (i%2 != 0){
            elmCours[i].classList.add('anim4');
        }
    }
})