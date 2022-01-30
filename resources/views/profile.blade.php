<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link href="/css/style.css" rel="stylesheet">
<title>Aegon Esports</title>
</head>
<body>
<section class="area">
    <div class="list-group">
  <a href="#" id="btnlist1" class="list-group-item list-group-item-action " onclick="showPanel('leader-info')">Clan Leader</a>
  <a href="#" id="btnlist1" class="list-group-item list-group-item-action" onclick="showPanel('player-info')">Clan Players</a>
  <a href="#" id="btnlist1"class="list-group-item list-group-item-action" onclick="showPanel('add-player')">Add Player</a>
  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>

<div id="leader-info" class="card">
<label for="email">email:email@email.com</label>
        <label for="email">Phone:9696969696</label>
        <label for="email">Clan Tag:JErs</label>
        <label for="email">Clan Name:Name</label>
</div>

<div id="player-info" class="card">
<div class="player-card">
        <img class="player-img" src="/assets/test.jpg" alt=""  >
        <p class="player-tag">clantagwithname</p>

        <div>
            
            <label class="switch"> 
            <input type="checkbox" id="onoff" value="On" onclick="onoff();" checked>
            <span class="slider round"></span>
            </label>
        </div>
        
</div>
</div>
<!-- form Add player  -->
<div id="add-player" class="login-box">
  <h2>Login</h2>
  <form>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>InGame Name</label>
    </div>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>Game Id</label>
    </div>
    
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
   
    var divs = ["leader-info","player-info","add-player"];
    var visibleDivId = null;
    function showPanel(divId) {
        if(visibleDivId === divId) {
            visibleDivId = null;
        }else {
            visibleDivId = divId;
         }
        hideNonVisibleDivs();
    }
    
    function hideNonVisibleDivs() {
    var i, divId, div;
        for(i = 0; i < divs.length; i++) {
            divId = divs[i];
            div = document.getElementById(divId);
            if(visibleDivId === divId) {
            div.style.display = "block";
            div.classList.add("active");
            } else {
            div.style.display = "none";
            
            }
        }
    }

    function onoff(){
    currentvalue = document.getElementById('onoff').value;
        if(currentvalue == "Off"){
            document.getElementById("onoff").value="On";
            document.getElementById("player-info").style.backgroundColor = "rgba(0,0,0,.5)";
        }else{
            document.getElementById("onoff").value="Off";
            document.getElementById("player-info").style.backgroundColor = "#ff4545";
        }
    }

    
    
</script>
</body>
</html>