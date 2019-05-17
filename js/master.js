
//   Load    //
function getStarted(){
    document.getElementById("load_screen").style.visibility = "collapse";
  }
  document.getElementById("get_started").addEventListener("click",getStarted, false);

// PROMISE
const introElement = document.getElementById('load_screen');
const promiseEvents = new Promise(function(resolve, reject) {
  if (introElement.classList.contains('load_screen')) {
    window.setTimeout(function() {
      resolve();
    }, 4000);
  }
});

promiseEvents.then(function() {
  getStarted();
});


