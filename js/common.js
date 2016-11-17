var audioPlayer = document.getElementById("audioplayer");    
var songQueue=[];
var currentlyPlaying = 0;
var i= 0;
function playThisSong(url, id, length)
{    
    for(var i = 0;i < 15; i++)
    {
        var song = document.getElementById("songArray"+i).innerHTML;
        //alert(song);
        songQueue[i] = song;
        //alert(songQueue[i]);
    }
    var thisURL = url;
    var audio = document.getElementById("audioplayer");
    audio.removeAttribute("src");
    audio.setAttribute("src", thisURL);
    audio.play(); 
    currentlyPlaying = id;
}
function playNext()
{
    /*for (var i = 0; i <= 16; i++) 
    {
        alert(songQueue[i]);   
    }*/
    currentlyPlaying = i + 1;
    var audio = document.getElementById("audioplayer");
    audio.pause();
    audio.removeAttribute("src");
    audio.setAttribute("src",songQueue[i++]);
    audio.play();
}

function playPrevious()
{
    currentlyPlaying = i - 1;
    audioPlayer.pause();
    audioPlayer.removeAttribute("src");
    audioPlayer.setAttribute("src",songQueue[i--]);
    audioPlayer.play();
}

function CreateSeekBar()
{
    var seekbar = document.getElementById("audioSeekBar"); 
    seekbar.min = 0; 
    seekbar.max = audioPlayer.duration; 
    seekbar.value = 0; 
    var timelapsed = document.getElementById("timelapsed"); 
    timelapsed.innerHTML = "0/" + Math.round(audioPlayer.timelapsed) + "seconds";
}
function UpdatePlayPause()
{
    if(audioPlayer.paused)
    {
        audioPlayer.play();
        return true;
    }
    else
    {
        audioPlayer.pause();
    }
}
var isPlaying = false;
function togglePlay() 
{
  if (isPlaying) 
  {
    audioPlayer.pause()
  } 
  else 
  {
    audioPlayer.play();
  }
};
audioPlayer.onpause = function() {
  isPlaying = false;
};
audioPlayer.onplaying = function() {
  isPlaying = true;
};

function shuffle_songQueue()
{
    songQueue = shuffle(songQueue);
}

function EndOfAudio()
{
    document.getElementById("audioSeekBar").value = 0; 
    document.getElementById("timelapsed").innerHTML = "0/" + Math.round(audio.duration); 
}
function audioSeekBar()
{
    var seekValue = document.getElementById("audioSeekBar");
    audioPlayer.currentTime = seekValue.value;
}
function SeekBar() 
{
    var seekbar = document.getElementById("audioSeekBar"); 
    seekbar.value = audioPlayer.currentTime; 
    var timelapsed = document.getElementById("timelapsed"); 
    timelapsed.innerHTML = Math.round(audioPlayer.currentTime) + "/" + Math.round(audioPlayer.duration) + "(seconds)"; 
}
function change_Volume() 
{ 
    var volume = document.getElementById("volumeSeekBar"); 
    audioPlayer.volume = volume.value; 
} 