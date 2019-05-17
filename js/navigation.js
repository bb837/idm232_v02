//    NAV      //
var hamburger = document.getElementById("hamburger");
console.log(hamburger);

function openNav(){
  console.log('open');
  document.getElementById("menu").style.height = "100%";
}

document.getElementById("hamburger").addEventListener("mouseup", openNav, false);

function closeNav(){
  document.getElementById("menu").style.height = "0%";
  console.log("open");
}
document.getElementById("closebtn").addEventListener("click",closeNav, false);