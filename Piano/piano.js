//Since label is nested within div, label fires event. But label has no Id(check playWkey & playBkey functions for more info). This generates TypeError(as id is NULL)
//Temporary fix->Don't click on label.
//DO NOTE:
//Code is not optimized
//Regards, enCrypt.

var context = new (window.AudioContext || window.webkitAudioContext)();
var dest=context.createMediaStreamDestination();
var chunks=[];
var clicked=false;
//Instance of AudioSynth
var audioSynth = new AudioSynth();
var piano=audioSynth.createInstrument('piano');

//plays key sound
function playWkey(e){
  let note=e.target.id;
  //piano.play(note.charAt(0),note.charAt(1));
  keySounds[note].play();
}
function playBkey(e){
  let sharp=e.target.id;
  //piano.play(sharp.charAt(0)+sharp.charAt(2),sharp.charAt(1));
  keySounds[sharp].play();
}
//Keys of the Piano
var keys=["C2","C2#","D2","D2#","E2","F2","F2#","G2","G2#","A2","A2#","B2",
          "C3","C3#","D3","D3#","E3","F3","F3#","G3","G3#","A3","A3#","B3",
          "C4","C4#","D4","D4#","E4","F4","F4#","G4","G4#","A4","A4#","B4",
          "C5","C5#","D5","D5#","E5","F5","F5#","G5","G5#","A5","A5#","B5"]

//Stores Key to Sound mappings
var keySounds=[];
var src="";

//Generate Keyboard
keyboard=document.getElementById('pianoSpace')
var whiteOffsetCount=0;
var labelVerticalOffset="";
for(let key of keys){
  pianoKey=document.createElement('div')
  if(key.length==2){
    pianoKey.className="whiteKey";
    pianoKey.id=key;
    pianoKey.style.width="40px";
    pianoKey.style.height="200px";
    pianoKey.style.left=40 * whiteOffsetCount + 'px';
    whiteOffsetCount++;

    labelVerticalOffset="170px";
  }
  else{
    pianoKey.className="blackKey";
    pianoKey.id=key;
    pianoKey.style.width="30px";
    pianoKey.style.height="130px";
    pianoKey.style.left=(40 * (whiteOffsetCount - 1)) + 25 + 'px';

    labelVerticalOffset="90px";
  }
  var label=document.createElement('div');
  label.style.position="absolute";
  label.style.top=labelVerticalOffset;
  label.innerHTML='<b>'+key+'</b>';

  pianoKey.appendChild(label);

  if(pianoKey.className=="whiteKey"){
    src=audioSynth.generate('piano',key.charAt(0),key.charAt(1));
    pianoKey.addEventListener("click",playWkey);
  }
  else{
    src=audioSynth.generate('piano',key.charAt(0)+key.charAt(2),key.charAt(1));
    pianoKey.addEventListener("click",playBkey);
  }
  let audio=new Audio(src);

  source=context.createMediaElementSource(audio);
  source.connect(context.destination);
  source.connect(dest);

  keySounds[key]=audio;
  keyboard.appendChild(pianoKey);
}
var mediaRecorder=new MediaRecorder(dest.stream);
mediaRecorder.onstart = function(){
  chunks.length=0;
};
mediaRecorder.ondataavailable = function(evt) {
  // push each chunk (blobs) in an array
  chunks.push(evt.data);
};
mediaRecorder.onstop = function() {
  // Make blob out of our blobs, and open it.
  var blob = new Blob(chunks,{type:'audio/wav'});
  document.getElementById("au").src = URL.createObjectURL(blob);
  
};

//Handles recording
function rec_controls(e){

  if (!clicked) {
      mediaRecorder.start();
      alert('Recording started');
      e.target.innerHTML = "Stop Recording";
        alert("works");
      clicked = true;
    }
    else {
      mediaRecorder.stop();
      alert("Recording stopped");
      e.target.innerHTML = "Start Recording";
      clicked=false;
    }

}
var record=document.getElementById('rec').addEventListener("click", rec_controls);
