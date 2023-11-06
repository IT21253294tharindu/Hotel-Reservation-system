// initialize swiper js

const swiper = new Swiper('.swiper', {
    loop: true,

     // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


})
let search = document.querySelector('#serach-bar');
let searchbox = document.querySelector('.search-box');
let menubar = document.querySelector('#menu-bars');
let mynav = document.querySelector('.navbar');




/*search.onclick = () =>{
    searchbox.classList.toggle('active');
}*/

menubar.onclick = () =>{
    menubar.classList.toggle('fa-times')
    mynav.classList.toggle('active')
}



/*$(document).ready(function(){
		    $('.active').click(function(){
			    $('.search-box').toggle();
			})
		})*/



$(document).ready(function(){
		    $('.sidebarBtn').click(function(){
			    $('.sidebar').toggleClass('active');
				$('.sidebarBtn').toggleClass('toggle');
			})
		})
