//NAVBAR
let lastScrolltop=0;
navbar= document.querySelector('.navbar');
window.addEventListener('scroll',function(){
const scrollTop = window.pageTOffset ||
this.document.documentElement.scrollTop;
if (scrollTop>lastScrolltop) {
    console.log('123');
    navbar.style.top= "-50px";
}else{
    navbar.style.top=0;
}
lastScrolltop=scrollTop;
});


// TYPED
var typed = new Typed('.typed', {
    strings: ["Je suis une personne dynamique,ponctuelle et trés rigoureuse,sportive dans l'âme ce qui me permet de travailler en équipe et de répondre aux demandes de l'entreprise, dans le but de satisfaire le client.,Toutes ces qualités me permettent d'avoir le sens du détail et me rendent trés ouvert car J'adore les challenges afin de décrocher des résultats pour chaque objectif ciblé, en respectant l'environement du travail.,Il suffit juste d'un petit click pour en savoir plus sur moi...!"],
    typeSpeed: 40,
    // backSpeed: 0,
    // smartBackspace: true, // this is a default
    // loop: false

});

 