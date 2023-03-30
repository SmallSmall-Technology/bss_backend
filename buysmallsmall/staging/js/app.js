let menuIcon = document.getElementsByClassName('MenuIconBar');
let navMenu = document.getElementById('NavItemList');

let isBurgerClicked = false;
const doSomething =()=>{
    if(!isBurgerClicked){
        navMenu.classList.add( 'active');
    }

}

const closeMobileMenu =()=>{
        navMenu.classList.remove('active');

}



