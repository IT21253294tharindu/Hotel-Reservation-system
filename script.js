let search = document.querySelector('#serach-bar');
let searchbox = document.querySelector('.search-box');
let menubar = document.querySelector('#menu-bars');
let mynav = document.querySelector('.navbar');





menubar.onclick = () =>{
    menubar.classList.toggle('fa-times')
    mynav.classList.toggle('active')
}





$(document).ready(function(){
		    $('.sidebarBtn').click(function(){
			    $('.sidebar').toggleClass('active');
				$('.sidebarBtn').toggleClass('toggle');
			})
		})













































// let search = document.querySelector('#serach-bar');
// let searchbox =document.querySelector('.search-box');

// search.onclick = () =>{
//     searchbox.classList.toggle('active');
// }