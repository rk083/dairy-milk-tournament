<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for tournament | Dairy Milk | Free Fire</title>
<link rel="stylesheet" href="register.css">
</head>
<body>
    <section id="register-form">
        <div class="register-form-container">

            <form method = "POST" action="./registerScript.php">
<div class="free-fire-image">
    <img src="../images/1653196979188.png" alt="free fire characters">
</div>


<div class="tournament-type">
<p>Type</p>
<i class = "solo">Solo</i>
     <input type="checkbox" name="solo" id = "solo" value = "solo">

     <i class = "duo">Duo</i>
     <input type="checkbox" name="duo"  id = "duo" value = "duo">

     <i class = "squad">Squad</i>
     <input type="checkbox" name="squad"  id = "squad" value = "squad">
</div>



<div class="form-controlls">



    <div class="form-controlls-group-one">
    
   
     
    <p>Email</p>
        <input type="text" name = "email">

        <p>Team Name</p>
        <input type="text" name = "teamName">
    
       
        <p>Leader's FB URL</p>
        <input type="text" name = "leaderFBURL">
    
        <div id="leader">
        <p>Team Leader UID</p>
        <input type="text" name = "leaderUID">
        </div>
           
    </div>

    <div class="form-controlls-group-two">
        <div id="player-two">
    <p>Player 2 UID</p>
        <input type="text" name = "playerTwoUID">
        </div>

    <div id="player-three">
        <p>Player 3 UID</p>
        <input type="text" name = "playerThreeUID"> 
        </div>
    
    <div id="player-four">
        <p>Player 4 UID</p>
        <input type="text" name = "playerFourUID">
     </div>


     <div id="player-five">
        <p>Player 5 UID</p>
        <input type="text" name = "playerFiveUID">
        </div>

    </div>
</div>
<button>Proceed To Payment</button>
            </form>

        </div>
    </section>

    <script src="../main.js"></script>
</body>
</html>