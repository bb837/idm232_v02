//  FILTER
var toggle = document.getElementById("filter_img"); // Browse Recipes button
var filters = document.getElementById("filter_drop"); // filter option container

toggle.addEventListener('click', function () {
  if (filters.classList.contains("hidden")) {
    filters.classList.remove("hidden");
  } else {
    filters.classList.add("hidden");
  }
}, false);