//    NAV      //
var hamburger = document.getElementById("hamburger");
var close = document.getElementById("closebtn");

function openNav(){
  document.getElementById("menu").style.height = "100%";
  hamburger.classList.add('hidden');
}

document.getElementById("hamburger").addEventListener("mouseup", openNav, false);

function closeNav(){
  document.getElementById("menu").style.height = "0%";
  hamburger.classList.remove('hidden');
  close.classList.remove('hidden');
}

document.getElementById("closebtn").addEventListener("click",closeNav, false);