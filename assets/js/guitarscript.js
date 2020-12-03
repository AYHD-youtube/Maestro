//An audio context
var context = new (window.AudioContext || window.webkitAudioContext)();
var sss=document.getElementsByTagName('audio');
var chunks=[];
var clicked=false;
var first=new Audio("assets/sounds/1st_String_E_64kb.mp3")
var second=new Audio("assets/sounds/2nd_String_B__64kb.mp3")
var third=new Audio("assets/sounds/3rd_String_G_64kb.mp3")
var fourth=new Audio("assets/sounds/4th_String_D_64kb.mp3")
var fifth=new Audio("assets/sounds/5th_String_A_64kb.mp3")
var sixth=new Audio("assets/sounds/6th_String_E_64kb.mp3")

first.crossOrigin="anonymous";
second.crossOrigin="anonymous";
third.crossOrigin="anonymous";
fourth.crossOrigin="anonymous";
fifth.crossOrigin="anonymous";
sixth.crossOrigin="anonymous";
var first_source = context.createMediaElementSource(first);
var second_source = context.createMediaElementSource(second);
var third_source = context.createMediaElementSource(third);
var fourth_source = context.createMediaElementSource(fourth);
var fifth_source = context.createMediaElementSource(fifth);
var sixth_source = context.createMediaElementSource(sixth);

first_source.connect(context.destination);
second_source.connect(context.destination);
third_source.connect(context.destination);
fourth_source.connect(context.destination);
fifth_source.connect(context.destination);
sixth_source.connect(context.destination);

var dest=context.createMediaStreamDestination();

first_source.connect(dest);
second_source.connect(dest);
third_source.connect(dest);
fourth_source.connect(dest);
fifth_source.connect(dest);
sixth_source.connect(dest);

var mediaRecorder=new MediaRecorder(dest.stream);
mediaRecorder.onstart = function() {
chunks.length=0;
};

mediaRecorder.ondataavailable = function(evt) {
       // push each chunk (blobs) in an array
       chunks.push(evt.data);
     };

mediaRecorder.onstop = function(evt) {
       // Make blob out of our blobs, and open it.
       var blob = new Blob(chunks,{type:'audio/mp3'});
       document.getElementById("ab").src = URL.createObjectURL(blob);
       alert("FIND AUDIO AT FOLLOWING URL:\n"+URL.createObjectURL(blob));
     };

/*Audio files...
var first=new Audio("sounds/1st_String_E_64kb.mp3")
var second=new Audio("sounds/2nd_String_B__64kb.mp3")
var third=new Audio("sounds/3rd_String_G_64kb.mp3")
var fourth=new Audio("sounds/4th_String_D_64kb.mp3")
var fifth=new Audio("sounds/5th_String_A_64kb.mp3")
var sixth=new Audio("sounds/6th_String_E_64kb.mp3")
*/
//Strings mapped to keyboard keys for keyboard play...
var sounds={
  S:sixth_string,
  D:fifth_string,
  F:fourth_string,
  J:third_string,
  K:second_string,
  L:first_string
}
//Functions which handle sound and animation for respective strings...
function first_string(){
  var f=document.getElementById('cordf')
  f.classList.remove('fstring')
  //Magic line of Code. Causes DOM reflow and restarts animation
  void f.offsetWidth;
  f.classList.add('fstring');
  first.currentTime=0;
  first.play();

}
function second_string(){
  e=document.getElementById('corde');
  e.classList.remove('estring');
  void e.offsetWidth;
  e.classList.add('estring');
  second.currentTime=0;
  second.play();
}
function third_string(){
  d=document.getElementById('cordd');
  d.classList.remove('dstring');
  void d.offsetWidth;
  d.classList.add('dstring');
  third.currentTime=0;
  third.play();
}
function fourth_string(){
  c=document.getElementById('cordc');
  c.classList.remove('cstring');
  void c.offsetWidth;
  c.classList.add('cstring');
  fourth.currentTime=0;
  fourth.play();
}
function fifth_string(){
  b=document.getElementById('cordb');
  b.classList.remove('bstring');
  void b.offsetWidth;
  b.classList.add('bstring');
  fifth.currentTime=0;
  fifth.play();
}
function sixth_string(){
  a=document.getElementById('corda');
  a.classList.remove('astring');
  void a.offsetWidth;
  a.classList.add('astring');
  sixth.currentTime=0;
  sixth.play();
}

//Implements keyboard play.
function keyCtrls(event){
  sounds[String.fromCharCode(event.keyCode)]();
}

function rec_controls(e){

  if (!clicked) {
      mediaRecorder.start();
      alert('Recording started');
      e.target.innerHTML = "Stop Recording";
      clicked = true;
    } else {
      mediaRecorder.stop();
      alert("Recording stopped");
      e.target.innerHTML = "Start Recording";
      //e.target.disabled=true;
      clicked=false;
    }
}

//Add event listeners after document has fully loaded
document.addEventListener('DOMContentLoaded',function(){

  //For playing the guitar
  document.getElementById('corda').addEventListener("click",sixth_string);
  document.getElementById('cordb').addEventListener("click",fifth_string);
  document.getElementById('cordc').addEventListener("click",fourth_string);
  document.getElementById('cordd').addEventListener("click",third_string);
  document.getElementById('corde').addEventListener("click",second_string);
  document.getElementById('cordf').addEventListener("click",first_string);
  document.addEventListener("keydown",keyCtrls);

  //For using the rec button
  b=document.getElementById('rec_b').addEventListener("click", rec_controls);

});
