var animateButton = function(e) {

  e.preventDefault;
  //reset animation
  e.target.classList.remove('animate');
  
  e.target.classList.add('animate');
  setTimeout(function(){
    e.target.classList.remove('animate');
  },700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
  bubblyButtons[i].addEventListener('click', animateButton, false);
}

function playclip(){
  if(document.all){
    document.all.sound.src = "audio/caida.mp3"
  }
else{
    var audio = document.getElementsByTagName('audio')[0];
    audio.play();
}
}