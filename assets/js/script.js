window.addEventListener("DOMContentLoaded",()=>{


    /* FUNCTIONS */

        
    /* SCROLL TOP */

    const button__up = document.getElementById("button-up");

    button__up.addEventListener('click', function (){
        window.scrollTo(0,0);
    });


    function toggleMenu() {
        menu.classList.toggle('nav__links-active');
   
        iconMenu.classList.remove('icon_show');
        iconMenu.classList.toggle('icon_hidden');
        iconClose.classList.toggle('icon_show');
       
       background_menu.classList.toggle('back-menu-active');

       bloquearScroll(); 
    }


    function bloquearScroll() { 
        if (menu.classList.contains('nav__links-active')) {
            document.body.style.overflow = 'hidden';
            document.body.style.position = 'fixed';
    
        } else {
            document.body.style.overflow = 'auto';
            document.body.style.position = 'static';
        }       
    }    
    

  
    /* DIV CARDS OTHERS PLANS */
    const othersplans = document.getElementById('others-plans');

    
    /* BOTON DE OTROS PLANES */
    const buttonPlanes = document.getElementById('button__other-planes');


    const iconMenu = document.getElementById('icon-menu');
    const iconClose = document.getElementById('icon-close');
    const background_menu = document.querySelector('.back-menu');

    
    const menu = document.querySelector('.nav__links');
    const toggle = document.querySelector('.nav__toggle');
    
    toggle.addEventListener('click', () => {
       
        toggleMenu();
       
    });

    background_menu.addEventListener('click', () => {
       
        toggleMenu();
       
    });

    buttonPlanes?.addEventListener('click',  () => {
       
        othersplans.classList.toggle('open');
       
    });


    
let tabs = document.querySelectorAll('.tabs__toggle');
let contents = document.querySelectorAll('.tabs__content');

tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
        contents.forEach((content) => {
            content.classList.remove('isActive');
        });
        tabs.forEach((tab) => {
            tab.classList.remove('isActive');
        });

        contents[index].classList.add('isActive');
        tabs[index].classList.add('isActive');
    });
}); 


/* CARROUSEL */

window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__lista'), {
     
        slidesToShow:1,
        slidesToScroll:1,
        draggable:true,
        dots: '.carousel__indicadores',
        arrows : {
            prev: '.carousel__anterior',
            next: '.carousel__siguiente'
        }

    });
});
  

   
});



 
