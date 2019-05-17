//  FILTER
var arrow = document.getElementById("arrow");
// var filters = document.getElementById("filter_drop");
var test = document.getElementById("filter_container");

arrow.addEventListener('mousedown', function () {
  test.style.height = "80vh";
  if (arrow.style.transform = 'rotate(0)') {
    arrow.style.transform = 'rotate(180deg)';
    console.log('yay!');
  } else {
    arrow.style.transform = 'rotate(0)';
    console.log('help me');
  }
}, false);