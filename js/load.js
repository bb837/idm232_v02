
//   Load    //
function getStarted(){
    document.getElementById("load_screen").style.visibility = "collapse";
  }
  document.getElementById("get_started").addEventListener("click",getStarted, false);

// Local Storage
const introElement = document.getElementById('load_screen');
const introWatched = localStorage.getItem('introWatched');

if (introWatched === 'true') 
{
  console.log(introElement);
  document.body.removeChild(introElement);

  console.log('Intro Played');
}

localStorage.setItem('introWatched','true');

console.log(introWatched);

