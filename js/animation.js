window.addEventListener('load',function(){

    console.log('passe')
    let elmTitre = document.querySelector('.site-branding .site-title')
    let elmDescription = document.querySelector('.site-branding .site-description')
    let elmNav = document.querySelector(".site-branding .main-navigation")
    
    elmTitre.classList.add('anim1')
    elmNav.classList.add('anim4')
    elmDescription.classList.add('anim3')
})