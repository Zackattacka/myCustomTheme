


// Typewriter
var i = 0;
var txt = `Photography \n \n Graphic Design \n \n Web Development \n \n Videography \n \n Audio Production \n \n`;
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    let text = txt.charAt(i);
    document.getElementById("typeWriter").innerHTML += text=== "\n" ? "<br/>": text;
    i++;
    setTimeout(typeWriter, speed);
  }
}
//Typewriter


//Text Fade in
$(document).ready(function() {
  $('#eButton').delay(5200).fadeIn('slow');
});
//Text Fade in
