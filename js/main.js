
var menubar = document.querySelector('.menubar');
var navlinks = document.querySelector('.nav_links');

menubar.addEventListener('click',function(){

  navlinks.classList.toggle('togglenav_links');

});



$(document).ready(function(){


$('.nav_links li').click(function(){
  $('.nav_links').removeClass('togglenav_links');
});


});


/*------------- JS FOR PRODUCT DETAIL ----------------*/

// var productImg = document.getElementById("productimg");
// var smallImg = document.getElementsByClassName("smallimg");

// smallImg[0].onclick = function(){

//   productImg.src = smallImg[0].src;

// }
// smallImg[1].onclick = function(){

//   productImg.src = smallImg[1].src;

// }
// smallImg[2].onclick = function(){

//   productImg.src = smallImg[2].src;

// }
// smallImg[3].onclick = function(){

//   productImg.src = smallImg[3].src;

// }


/*-----------------------------------------------------*/














/*----------------------------------------------------*/
