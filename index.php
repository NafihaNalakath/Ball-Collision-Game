
<?php require_once('connection.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Particle Game</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="jquery.js"></script>
    <script src="bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <style type="text/css">
        canvas {
            border: 3px solid black;
            margin-left: auto;
            margin-right: auto;
            display: block;
            
            background: rgba(150,160,150);
           background: #006064;
        }
        body {
            background: #00acc1;
            margin: 0;
            padding: 0;
        }
        .gametext {
            position: absolute;
            text-align: center;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }
        button {
            position: absolute;
        }
        #desc {
            width: 400px;
            margin: auto;
        }
  

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: absolute; /* Stay in place */
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

    </style>

</head>

<body>
<div class="container" style="margin-top:50px;">
    <div class="row" style="min-height:900px;">
        <div class="col-lg-10 mx-auto">
            <h1 class="text-center "> <kbd>Ball Collission Game </kbd></h1>
            <h3 class="text-center "> <kbd>Your high score is <span id="highscore"><?php echo getHighScore(); ?></span> </kbd>
            <a href="logout.php" id="logout"><button>Logout</button></a></h3>

            
            <canvas id="game"></canvas>
            <p class="lead gametext" id="result" style="display:none;"></p>
            <p class="lead gametext" id="memo">
                <div><br>
             <button   class='btn text-center' id="myBtn" onclick="myFunction()" style="left:410px;top:308px;">Instruction</button> 

             <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p id="demo">1. Click the Play button to start the game<br>
                 2. Save your master from colliding with the other balls<br>
                 3. Once your master ball collides with the other ball your game ends.<br>
                 4. Click Play again button to play again.</p>
  </div>

</div>


            <button class='btn text-center' id="play"> Play </button>
            <button class='btn text-center' id="again" style="display:none;"> Play again </button>
            <button class='btn text-center' id="hard" style="display:none;"> Hard Mode </button>
        </div></div>
    </div>
</div>

<!-- The Modal -->

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script src="game.js"></script>
</body>

</html>