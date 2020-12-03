//Audio files...
var first=new Audio("assets/sounds/1st_String_E_64kb.mp3")
var second=new Audio("assets/sounds/2nd_String_B__64kb.mp3")
var third=new Audio("assets/sounds/3rd_String_G_64kb.mp3")
var fourth=new Audio("assets/sounds/4th_String_D_64kb.mp3")
var fifth=new Audio("assets/sounds/5th_String_A_64kb.mp3")
var sixth=new Audio("assets/sounds/6th_String_E_64kb.mp3")

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
  //NOT GONNA DELETE THIS. [YAWNS]

  /**
  a.classList.add('astring')

  a.addEventListener('animationend',function(){a.classList.remove('astring')}
  **/
  //document.getElementById('corda').classList.add('')
  //add class to element
  //listen for animation end and remove class from element
  //animationend
  //set animation time to zero everytime so user can spam and yet see animation

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

//Add event listeners after document has fully loaded
document.addEventListener('DOMContentLoaded',function(){
  document.getElementById('corda').addEventListener("click",sixth_string);
  document.getElementById('cordb').addEventListener("click",fifth_string);
  document.getElementById('cordc').addEventListener("click",fourth_string);
  document.getElementById('cordd').addEventListener("click",third_string);
  document.getElementById('corde').addEventListener("click",second_string);
  document.getElementById('cordf').addEventListener("click",first_string);
  document.addEventListener("keydown",keyCtrls);
});
