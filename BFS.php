<?php 

//Array to hold the path and wall of the pacman grid
$actualmap = array(); 

//Instantiate 30 rows and 28 columns, and make all of them 0s (0 = pass through, while 1 = wall)
for($row = 0; $row < 31; $row++){
    for($col = 0; $col < 28; $col++){
        //echo 0;
        $actualmap[$row][$col] = 0; 
    }
}

//=====================================================================================================================================================
//Edge of the map
for($i = 0; $i<31; $i++){
    $actualmap[$i][0] = 1; 
}
for($i = 0; $i<31; $i++){
    $actualmap[$i][27] = 1; 
}
for($i = 0; $i<28; $i++){
    $actualmap[0][$i] = 1; 
}
for($i = 0; $i<28; $i++){
    $actualmap[30][$i] = 1; 
}

//Blocks: top half of the map 
for($r = 1; $r < 5; $r++){
    for($c = 13; $c < 15; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 2; $r < 5; $r++){
    for($c = 2; $c < 6; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 7; $c < 12; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 16; $c < 21; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 22; $c < 26; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 6; $r < 8; $r++){
    for($c = 2; $c < 6; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 7; $c < 9; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 10; $c < 18; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 19; $c < 21; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 22; $c < 26; $c++){
        $actualmap[$r][$c] = 1; 
    }
}

for($r = 8; $r < 14; $r++){
    for($c = 7; $c < 9; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 19; $c < 21; $c++){
        $actualmap[$r][$c] = 1; 
    }
}

for($r = 8; $r < 11; $r++){
    for($c = 13; $c < 15; $c++){
        $actualmap[$r][$c] = 1; 
    }
}

for($r = 9; $r < 11; $r++){
    for($c = 8; $c < 12; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 16; $c < 20; $c++){
        $actualmap[$r][$c] = 1; 
    }
}

//Ghost box
for($r = 12; $r < 17; $r++){
    for($c = 10; $c < 11; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 17; $c < 18; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 12; $r < 13; $r++){
    for($c = 10; $c < 18; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 16; $r < 17; $r++){
    for($c = 11; $c < 13; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 15; $c < 17; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 13; $r < 16; $r++){
    for($c = 11; $c < 17; $c++){
        $actualmap[$r][$c] = 4; 
    }
}
$actualmap[16][13] = 4; 
$actualmap[16][14] = 4; 

//Side indents
for($r = 9; $r < 14; $r++){
    for($c = 1; $c < 6; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 26; $c > 21; $c--){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 15; $r < 20; $r++){
    for($c = 1; $c < 6; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 26; $c > 21; $c--){
        $actualmap[$r][$c] = 1; 
    }
}
$actualmap[14][0] = 0;
$actualmap[14][27] = 0;  

//Blocks: bottom half of the map
for($r = 15; $r < 20; $r++){
    for($c = 7; $c < 9; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 19; $c < 21; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 18; $r < 20; $r++){
    for($c = 10; $c < 18; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 20; $r < 23; $r++){
    for($c = 13; $c < 15; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 24; $r < 26; $r++){
    for($c = 1; $c < 3; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 25; $c < 27; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 21; $r < 23; $r++){
    for($c =2; $c < 6; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 7; $c < 12; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 16; $c < 21; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 22; $c < 26; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 23; $r < 26; $r++){
    for($c = 4; $c < 6; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 22; $c < 24; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 24; $r < 26; $r++){
    for($c = 10; $c < 18; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 26; $r < 29; $r++){
    for($c = 13; $c < 15; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 27; $r < 29; $r++){
    for($c = 2; $c < 12; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 16; $c < 26; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
for($r = 24; $r < 27; $r++){
    for($c = 7; $c < 9; $c++){
        $actualmap[$r][$c] = 1; 
    }
    for($c = 19; $c < 21; $c++){
        $actualmap[$r][$c] = 1; 
    }
}
//End of the for loops
//===================================================================================================================================================

//Demo before json convert to JavaScript
/* for($row = 0; $row < 31; $row++){
    
        echo "<br />";
    
        for($col = 0; $col < 28; $col++){
            
            if($actualmap[$row][$col] === 0){
                echo "O  "; 
            }
            else{
                echo "X  "; 
            }
            //echo $actualmap[$row][$col]; 
            
        }
    } */

//Convert to json and send to js
$json_map_array = json_encode($actualmap); 
//echo $json_map_array; 
?>
<!-- End of PHP -->

<!-- ======================================================== HTML ============================================================================================ -->

<!-- 31 x 28, with each tile being let's say 30 pixels, our scalable vector graphics box must be 930 x 840. -->


<!DOCTYPE html>
<html>
<head>

    <style>
    
        #mysvg{

            width: 840px; 
            height: 930px; 
            background: black; 
            border: 5px solid black; 

        }

        #gameResult {
            color: white;
            position: absolute;
            top: 32%;
            width: 100%;
            font-size: 100px;
            text-align: center;
            font-family: courier; 
        }

        #instructions {

            color: white; 
            position: absolute;
            top: 32%;
            left: 10%; 
            font-size: 18px; 
            font-family: courier; 
        }

        #count_down_text{

            color: white;
            position: absolute;
            top: 32%;
            width: 100%;
            font-size: 100px;
            text-align: center;
            font-family: courier; 
        }

        #enter_to_play_text{

            color: white;
            position: absolute;
            top: 27%;
            width: 100%;
            font-size: 100px;
            text-align: center;
            font-family: courier; 
        }

        #game_scores{

            color: white; 
            position: absolute;
            top: 44%;
            left: 78%; 
            font-size: 18px; 
            font-family: courier; 
        }

        table{

            color: white; 
            position: absolute;
            top: 53%;
            left: 10%; 
            font-size: 18px; 
            font-family: courier; 
        }

    </style>

</head>

<body style="background-color:black">

<p id="xpix"></p>
<p id="ypix"></p>
<p id="xarray"></p>
<p id="yarray"></p>
<p id="balls"></p>
<p id="cd"></p>
<p id="nd"></p>
<p id="pacMouthText"></p>
<p id="edibleGhosts"></p>
<p id="bigballtimer"></p>
<p id="paths"></p>
<p id="length"></p>
<p id="optimalPath"></p>
<p id="ghosttimeout"></p>

<center>
    <svg id="mysvg">
        
        <g id="pacman">
            <circle cx="0" cy="0" r="15" fill="yellow" />
            <circle id="pacEye" cx="2" cy="-6" r="2.5" fill="black" />
            <polygon id="pacMouth" />
        </g>

        <g id="ghost">
            <rect id="red0" x="-13" y="0" height="10" width="26" fill="red"/>
            <circle id="red1" r="13" fill="red"/>

            <circle id="red2" cx="-10" cy="11" r="4" fill="red"/>
            <circle id="red3" cx="0" cy="11" r="4" fill="red"/>
            <circle id="red4" cx="10" cy="11" r="4" fill="red"/>

            <circle cx="-5" cy="-3" r="4" fill="white"/>
            <circle cx="5"  cy="-3" r="4" fill="white"/>

            <circle cx="-5" cy="-3" r="2"/>
            <circle cx="5" cy="-3" r="2"/>
        </g>

        <g id="ghost2">
            <rect id="pink0" x="-13" y="0" height="10" width="26" fill="pink"/>
            <circle id="pink1" r="13" fill="pink"/>

            <circle id="pink2" cx="-10" cy="11" r="4" fill="pink"/>
            <circle id="pink3" cx="0" cy="11" r="4" fill="pink"/>
            <circle id="pink4" cx="10" cy="11" r="4" fill="pink"/>

            <circle cx="-5" cy="-3" r="4" fill="white"/>
            <circle cx="5"  cy="-3" r="4" fill="white"/>

            <circle cx="-5" cy="-3" r="2"/>
            <circle cx="5" cy="-3" r="2"/>
        </g>

    </svg>

</center> 

<p id="gameResult"></p>
<p id="count_down_text"></p>
<p id="enter_to_play_text"></p>
<p id="instructions">Your keys: <br><br> w: up <br> a: left <br> s: down <br> d: right <br> space bar: pause /  play <br> shift: restart</p>

<table>
    <tr>
        <td><div>
            <svg width="50px" height="35px">
                <g>
                    <rect x="3" y="18" height="10" width="26" fill="blue"/>
                    <circle cx="16" cy="15" r="13" fill="blue"/>

                    <circle cx="6" cy="28" r="5" fill="blue"/>
                    <circle cx="16" cy="28" r="5" fill="blue"/>
                    <circle cx="26" cy="28" r="5" fill="blue"/>

                    <circle cx="11" cy="12" r="4" fill="white"/>
                    <circle cx="21"  cy="12" r="4" fill="white"/>

                    <circle cx="11" cy="12" r="2"/>
                    <circle cx="21" cy="12" r="2"/>
                </g>
            </svg>
        </div></td>
        <td>50 points</td>
    </tr>
    <tr>
        <td><div>
            <svg width="50px" height="35px">
                <g>
                    <circle cx="5" cy="17" r="3" fill="#FFBE7D" />
                    <circle cx="25" cy="17" r="8" fill="white" />
                </g>
            </svg>
        </div></td>
        <td>10 points</td>
</table>

<p id="game_scores"></p>

<!-- Script ================================================================= -->

<script>

//Grid walls sent from PHP as JSON
var obj = <?php echo json_encode($actualmap); ?>;
//g tag in svg
var pacman = document.getElementById("pacman"); 
var pacMouth = document.getElementById("pacMouth"); 
var pacEye = document.getElementById("pacEye");
//svg namespace to create the blue walls
var svgns = "http://www.w3.org/2000/svg";
//Pacman Left and Right & Up and Down
var pacmanLR = 14, pacmanUD = 11;  
var ballsLeft = 0; 
var upDownPixels = 345, leftRightPixels = 435; 
var new_direction; 
var current_direction; 
var neg = -15, pos = 15, counter = 1.5; 
var pacManSpeed = 2; 

var gameResult = document.getElementById("gameResult"); 
var count_down_text = document.getElementById("count_down_text"); 
var enter_to_play_text = document.getElementById("enter_to_play_text"); 
var winTexts = ["You WIN!", "You ROCK!", "You're AWESOME!"]; 
var loseText = "You LOST!";  
var pause_text = "PAUSED"; 

var edible = false; 
var big_ball_time = 0; 

var ghost_start_LR = 13, ghost_start_UD = 14, ghost_start_LR_pixels = 405, ghost_start_UD_pixels = 435; 
var ghostLR = ghost_start_LR, ghostUD = ghost_start_UD, ghostPixelsLR = ghost_start_LR_pixels, ghostPixelsUD = ghost_start_UD_pixels; 

var ghost2_start_LR = 14, ghost2_start_UD = 14, ghost2_start_LR_pixels = 435, ghost2_start_UD_pixels = 435; 
var ghost2LR = ghost2_start_LR, ghost2UD = ghost2_start_UD, ghost2PixelsLR = ghost2_start_LR_pixels, ghost2PixelsUD = ghost2_start_UD_pixels; 

var ghost_speed = 2; 
var red = [document.getElementById("red0"), document.getElementById("red1"), document.getElementById("red2"), document.getElementById("red3"), document.getElementById("red4")];
var ghost_time_out = 0; 

var game_scores = document.getElementById("game_scores"); 
var score = 0; 

for(var row = 0; row <31; row++){
    for(var col = 0; col < 28; col++){
        
        if(obj[row][col] == 1){
            
            var walls = document.createElementNS(svgns, 'rect'); 
            walls.setAttributeNS(null, 'x', (30*col)); 
            walls.setAttributeNS(null, 'y', (30*row));
            walls.setAttributeNS(null, 'height', '30');
            walls.setAttributeNS(null, 'width', '30'); 
            walls.setAttributeNS(null, 'fill', '#0000FF'); 
            document.getElementById('mysvg').appendChild(walls);
        }
        else if(obj[row][col] != 4){
            ballsLeft += 1; 

            if(row == 1 && col == 1 || row == 1 && col == 26 || row == 29 && col == 1 || row == 29 && col == 26){
                obj[row][col] = 3; 
                var balls = document.createElementNS(svgns, 'circle'); 
                balls.setAttributeNS(null, 'id', 'ball_'+row+'_'+col); 
                balls.setAttributeNS(null, 'cx', (30*col+15)); 
                balls.setAttributeNS(null, 'cy', (30*row+15));
                balls.setAttributeNS(null, 'r', 8);
                balls.setAttributeNS(null, 'fill', 'white'); 
                document.getElementById('mysvg').appendChild(balls);
            }
            else{
                obj[row][col] = 2; 
                var balls = document.createElementNS(svgns, 'circle'); 
                balls.setAttributeNS(null, 'id', 'ball_'+row+'_'+col); 
                balls.setAttributeNS(null, 'cx', (30*col+15)); 
                balls.setAttributeNS(null, 'cy', (30*row+15));
                balls.setAttributeNS(null, 'r', 3);
                balls.setAttributeNS(null, 'fill', '#FFBE7D'); 
                document.getElementById('mysvg').appendChild(balls);
            }
        }
    }
}

//Starting position of pacman
pacman.setAttribute("transform", "translate(" + leftRightPixels + ", " + upDownPixels + ") rotate(0)"); 
obj[pacmanUD][pacmanLR] = 0; 
document.getElementById('ball_'+pacmanUD+'_'+pacmanLR).remove(); 
ballsLeft-=1; 

var ghost = document.getElementById("ghost"); 
ghost.setAttribute("transform", "translate(" + ghostPixelsLR + ", " + ghostPixelsUD + ")"); 

var ghost2 = document.getElementById("ghost2"); 
ghost2.setAttribute("transform", "translate(" + ghost2PixelsLR + ", " + ghost2PixelsUD + ")")

//======================================================= Algorithm for the ghosts ==============================================================

var turnsarr = [],
    xarr = [], 
    yarr = [], 
    bestx = [], 
    besty = [];


function ghostAlgorithm(){

    var turn = 0;
    var counter = 0; 

    var string_coordinates, 
        checkString = [], 
        endString = "(" + ghostLR + ", " + ghostUD + ")"; //If edible, edit this

    turnsarr.length = 0, xarr.length = 0, yarr.length = 0, checkString.length = 0; 

    var pacman_coordinate_string;// = "(" + pacmanLR + ", " + pacmanUD + ")";

    if(edible == true){

        //turnsarr.length = 0, xarr.length = 0, yarr.length = 0; 
        turnsarr.push(turn); 
        xarr.push(ghost_start_LR); 
        yarr.push(ghost_start_UD); 

        string_coordinates = "(" + ghost_start_LR + ", " + ghost_start_UD + ")"; 
        checkString.push(string_coordinates); 

        pacman_coordinate_string = "(" + ghost_start_LR + ", " + ghost_start_UD + ")";
    }
    else{

        turnsarr.push(turn); 
        xarr.push(pacmanLR); 
        yarr.push(pacmanUD); 

        string_coordinates = "(" + pacmanLR + ", " + pacmanUD + ")"; 
        checkString.push(string_coordinates);

        pacman_coordinate_string =  "(" + pacmanLR + ", " + pacmanUD + ")";
        
    }

    while(!checkString.includes(endString)){

        turn += 1; 

        for(var i = 0; i < turnsarr.length; i++){

            var x, 
                y; 

            var queue = []; 

            if(turnsarr[i] == counter){

                x = xarr[i] - 1, y = yarr[i];//Check left
                queue.push({x, y}); 

                x = xarr[i] + 1, y = yarr[i];//Check right
                queue.push({x, y}); 

                x = xarr[i], y = yarr[i] - 1;//Check up
                queue.push({x, y});

                x = xarr[i], y = yarr[i] + 1;//Check down
                queue.push({x, y});

            }

            for(var j = 0; j < queue.length; j++){

                if(obj[queue[j].y][queue[j].x] != 1 && queue[j].x >= 0 && queue[j].x <= 27){

                    var string_to_check = "(" + queue[j].x + ", " + queue[j].y + ")"; 

                    if(!checkString.includes(string_to_check)){//This function is problematic

                        turnsarr.push(turn); 
                        xarr.push(queue[j].x); 
                        yarr.push(queue[j].y); 
                        checkString.push(string_to_check); 
                    }
                }//End of if
            }//End of for
        }//End of for

        counter += 1; 
    }//End of while 

    var decrementing_nodes = [], 
        optimal_path = [], 
        ghostx = ghostLR, 
        ghosty = ghostUD, 
        down_counter = Math.max.apply(Math, turnsarr); 

    bestx.length = 0, besty.length = 0; 

    var start_coordinate = "(" + ghostLR + ", " + ghostUD + ")";
    optimal_path.push(start_coordinate); 

    //var pacman_coordinate_string = "(" + pacmanLR + ", " + pacmanUD + ")";

    while(!optimal_path.includes(pacman_coordinate_string)){

        down_counter -= 1; 

        for(var i = 0; i < turnsarr.length; i++){

            if(turnsarr[i] == down_counter){

                var stringarr = ["(" + (ghostx-1) + ", " + ghosty + ")", "(" + (ghostx+1) + ", " + ghosty + ")", "(" + ghostx + ", " + (ghosty-1) + ")", "(" + ghostx + ", " + (ghosty+1) + ")"];

                if((ghostx-1) == xarr[i] && ghosty == yarr[i]){//Left

                    ghostx-=1; 
                    bestx.push(ghostx), besty.push(ghosty), decrementing_nodes.push(down_counter), optimal_path.push(stringarr[0]); 
                }
                else if((ghostx+1) == xarr[i] && ghosty == yarr[i]){//Right

                    ghostx+=1; 
                    bestx.push(ghostx), besty.push(ghosty), decrementing_nodes.push(down_counter), optimal_path.push(stringarr[1]);
                }
                else if(ghostx == xarr[i] && (ghosty-1) == yarr[i]){//Up

                    ghosty-=1; 
                    bestx.push(ghostx), besty.push(ghosty), decrementing_nodes.push(down_counter), optimal_path.push(stringarr[2]);
                }
                else if(ghostx == xarr[i] && (ghosty+1) == yarr[i]){//Down

                    ghosty+=1; 
                    bestx.push(ghostx), besty.push(ghosty), decrementing_nodes.push(down_counter), optimal_path.push(stringarr[3]);
                }
            }
        }//End of for loop

    }//End of while loop

}

var turnsarr2 = [],
    xarr2 = [], 
    yarr2 = [], 
    bestx2 = [], 
    besty2 = [];

function ghost_two_algorithm(){

    var turn = 0;
    var counter = 0; 

    var string_coordinates, 
        checkString = [], 
        endString = "(" + ghost2LR + ", " + ghost2UD + ")"; //If edible, edit this

    turnsarr2.length = 0, xarr2.length = 0, yarr2.length = 0, checkString.length = 0; 

    var pacman_coordinate_string;// = "(" + pacmanLR + ", " + pacmanUD + ")";

    if(edible == true){

        //turnsarr.length = 0, xarr.length = 0, yarr.length = 0; 
        turnsarr2.push(turn); 
        xarr2.push(ghost2_start_LR); 
        yarr2.push(ghost2_start_UD); 

        string_coordinates = "(" + ghost2_start_LR + ", " + ghost2_start_UD + ")"; 
        checkString.push(string_coordinates); 

        pacman_coordinate_string = "(" + ghost2_start_LR + ", " + ghost2_start_UD + ")";
    }
    else{

        turnsarr2.push(turn); 
        xarr2.push(pacmanLR); 
        yarr2.push(pacmanUD); 

        string_coordinates = "(" + pacmanLR + ", " + pacmanUD + ")"; 
        checkString.push(string_coordinates);

        pacman_coordinate_string =  "(" + pacmanLR + ", " + pacmanUD + ")";
        
    }

    while(!checkString.includes(endString)){

        turn += 1; 

        for(var i = 0; i < turnsarr2.length; i++){

            var x, 
                y; 

            var queue = []; 

            if(turnsarr2[i] == counter){

                x = xarr2[i] - 1, y = yarr2[i];//Check left
                queue.push({x, y}); 

                x = xarr2[i] + 1, y = yarr2[i];//Check right
                queue.push({x, y}); 

                x = xarr2[i], y = yarr2[i] - 1;//Check up
                queue.push({x, y});

                x = xarr2[i], y = yarr2[i] + 1;//Check down
                queue.push({x, y});

            }

            for(var j = 0; j < queue.length; j++){

                var checkstring = "(" + queue[j].x + ", " + queue[j].y + ")"; 

                if(obj[queue[j].y][queue[j].x] != 1 && queue[j].x >= 0 && queue[j].x <= 27){

                    var string_to_check = "(" + queue[j].x + ", " + queue[j].y + ")"; 

                    if(!checkString.includes(string_to_check)){//This function is problematic

                        turnsarr2.push(turn); 
                        xarr2.push(queue[j].x); 
                        yarr2.push(queue[j].y); 
                        checkString.push(string_to_check); 
                    }
                }//End of if
            }//End of for
        }//End of for

        counter += 1; 
    }//End of while 

    var decrementing_nodes = [], 
        optimal_path = [], 
        ghostx = ghost2LR, 
        ghosty = ghost2UD, 
        down_counter = Math.max.apply(Math, turnsarr2); 

    bestx2.length = 0, besty2.length = 0; 

    var start_coordinate = "(" + ghost2LR + ", " + ghost2UD + ")";
    optimal_path.push(start_coordinate); 

    //var pacman_coordinate_string = "(" + pacmanLR + ", " + pacmanUD + ")";

    while(!optimal_path.includes(pacman_coordinate_string)){

        down_counter -= 1; 

        for(var i = 0; i < turnsarr2.length; i++){

            if(turnsarr2[i] == down_counter){

                var stringarr = ["(" + (ghostx-1) + ", " + ghosty + ")", "(" + (ghostx+1) + ", " + ghosty + ")", "(" + ghostx + ", " + (ghosty-1) + ")", "(" + ghostx + ", " + (ghosty+1) + ")"];

                if((ghostx-1) == xarr2[i] && ghosty == yarr2[i] && (ghostx-1)){//Left

                    ghostx-=1; 
                    bestx2.push(ghostx), besty2.push(ghosty), decrementing_nodes.push(down_counter), optimal_path.push(stringarr[0]); 
                }
                else if((ghostx+1) == xarr2[i] && ghosty == yarr2[i] && (ghostx+1)){//Right

                    ghostx+=1; 
                    bestx2.push(ghostx), besty2.push(ghosty), decrementing_nodes.push(down_counter), optimal_path.push(stringarr[1]);
                }
                else if(ghostx == xarr2[i] && (ghosty-1) == yarr2[i] && (ghosty-1)){//Up

                    ghosty-=1; 
                    bestx2.push(ghostx), besty2.push(ghosty), decrementing_nodes.push(down_counter), optimal_path.push(stringarr[2]);
                }
                else if(ghostx == xarr2[i] && (ghosty+1) == yarr2[i] && (ghosty+1)){//Down

                    ghosty+=1; 
                    bestx2.push(ghostx), besty2.push(ghosty), decrementing_nodes.push(down_counter), optimal_path.push(stringarr[3]);
                }
            }
        }//End of for loop

    }//End of while loop

}

var move_counter = 0; 
var max_counter = Math.max.apply(Math, bestx); 

function moveGhost(){

    if(bestx[move_counter] == (ghostLR-1)){

        if((ghostPixelsUD % 30) == 15){

            ghostPixelsLR -= ghost_speed; 

            ghost.setAttribute("transform", "translate(" + ghostPixelsLR + ", " + ghostPixelsUD + ")"); 

            if((((ghostLR-1)*30)+15)==ghostPixelsLR){

                ghostLR-=1; 
                move_counter+=1; 
            }
        }
    }
    else if(bestx[move_counter] == (ghostLR+1)){

        if((ghostPixelsUD % 30) == 15){

            ghostPixelsLR += ghost_speed; 

            ghost.setAttribute("transform", "translate(" + ghostPixelsLR + ", " + ghostPixelsUD + ")"); 

            if((((ghostLR+1)*30)+15)==ghostPixelsLR){
                ghostLR+=1; 
                move_counter+=1; 
            }
        }
    }
    else if(besty[move_counter] == (ghostUD-1)){

        if((ghostPixelsLR % 30) == 15){

            ghostPixelsUD -= ghost_speed; 

            ghost.setAttribute("transform", "translate(" + ghostPixelsLR + ", " + ghostPixelsUD + ")"); 

            if((((ghostUD-1)*30)+15)==ghostPixelsUD){
                ghostUD-=1; 
                move_counter+=1; 
            }
        }
    }
    else if(besty[move_counter] == (ghostUD+1)){

        if((ghostPixelsLR % 30) == 15){

            ghostPixelsUD += ghost_speed; 

            ghost.setAttribute("transform", "translate(" + ghostPixelsLR + ", " + ghostPixelsUD + ")"); 

            if((((ghostUD+1)*30)+15)==ghostPixelsUD && (ghostPixelsLR % 30) == 15){
                ghostUD+=1; 
                move_counter+=1; 
            }
        }
    }

    if(move_counter >= max_counter){
        move_counter = 0; 
    }
}

var move_counter2 = 0; 
var max_counter2 = Math.max.apply(Math, bestx2); 

function moveGhost2(){

    if(bestx2[move_counter2] == (ghost2LR-1)){

        if((ghost2PixelsUD % 30) == 15){

            ghost2PixelsLR -= ghost_speed; 

            ghost2.setAttribute("transform", "translate(" + ghost2PixelsLR + ", " + ghost2PixelsUD + ")"); 

            if((((ghost2LR-1)*30)+15)==ghost2PixelsLR){

                ghost2LR-=1; 
                move_counter2+=1; 
            }
        }
    }
    else if(bestx2[move_counter2] == (ghost2LR+1)){

        if((ghost2PixelsUD % 30) == 15){

            ghost2PixelsLR += ghost_speed; 

            ghost2.setAttribute("transform", "translate(" + ghost2PixelsLR + ", " + ghost2PixelsUD + ")"); 

            if((((ghost2LR+1)*30)+15)==ghost2PixelsLR){
                ghost2LR+=1; 
                move_counter2+=1; 
            }
        }
    }
    else if(besty2[move_counter2] == (ghost2UD-1)){

        if((ghost2PixelsLR % 30) == 15){

            ghost2PixelsUD -= ghost_speed; 

            ghost2.setAttribute("transform", "translate(" + ghost2PixelsLR + ", " + ghost2PixelsUD + ")"); 

            if((((ghost2UD-1)*30)+15)==ghost2PixelsUD){
                ghost2UD-=1; 
                move_counter2+=1; 
            }
        }
    }
    else if(besty2[move_counter2] == (ghost2UD+1)){

        if((ghost2PixelsLR % 30) == 15){

            ghost2PixelsUD += ghost_speed; 

            ghost2.setAttribute("transform", "translate(" + ghost2PixelsLR + ", " + ghost2PixelsUD + ")"); 

            if((((ghost2UD+1)*30)+15)==ghost2PixelsUD && (ghost2PixelsLR % 30) == 15){
                ghost2UD+=1; 
                move_counter2+=1; 
            }
        }
    }

    if(move_counter2 >= max_counter2){
        move_counter2 = 0; 
    }
}

var lost = false; 

function ghost_function(){

    if(ghostLR == pacmanLR && ghostUD == pacmanUD && edible != true){

        gameResult.innerHTML = loseText; 
        lost = true; 
    }
}

//function to eat the balls
function eatballs(){

    if(obj[pacmanUD][pacmanLR] == 2 || obj[pacmanUD][pacmanLR] == 3){

        if(obj[pacmanUD][pacmanLR] == 3){

            edible = true; 
            big_ball_time += 18000; //15 Seconds, a second in requestAnimationFrame() is 1.2x faster than a regular second it seems. 15 x 1.2 = 18
            ghost_speed = 1; 

            for(var i = 0; i < red.length; i++){

                red[i].setAttribute("fill", "blue"); 
            }
        }

        obj[pacmanUD][pacmanLR] = 0; 
        ballsLeft -= 1; 
        score += 10; 

        if(ballsLeft == 0){
            gameResult.innerHTML = winTexts[Math.floor(winTexts.length * Math.random())]; 
        }   

        document.getElementById('ball_'+pacmanUD+'_'+pacmanLR).remove(); 
    }
}

var let_ghost_out = true; 

function big_balls_function(){

    if(edible == true){
        
        big_ball_time -= 20; 

        ghost_flashing(); 

        if(pacmanLR == ghostLR && pacmanUD == ghostUD){

            edible = false; 
            big_ball_time = 0; 
            ghost_time_out += 3000; 
            let_ghost_out = false; 
            score += 50; 
        }

        if(big_ball_time <= 0){

            edible = false;
            
            ghost_speed = 2; 

            for(var i = 0; i < red.length; i++){

                red[i].setAttribute("fill", "red"); 
            }
        }
    }
}

function ghost_flashing(){

    if(big_ball_time == 3000){
            
        for(var i = 0; i < red.length; i++){

            red[i].setAttribute("fill", "red"); 
        }
    }
    else if(big_ball_time == 2500){

        for(var i = 0; i < red.length; i++){

            red[i].setAttribute("fill", "blue"); 
        }
    }
    else if(big_ball_time == 2000){

        for(var i = 0; i < red.length; i++){

            red[i].setAttribute("fill", "red"); 
        }
    }
    else if(big_ball_time == 1500){

        for(var i = 0; i < red.length; i++){

            red[i].setAttribute("fill", "blue"); 
        }
    }
    else if(big_ball_time == 1000){

        for(var i = 0; i < red.length; i++){

            red[i].setAttribute("fill", "red"); 
        }
    }
    else if(big_ball_time == 500){

        for(var i = 0; i < red.length; i++){

            red[i].setAttribute("fill", "blue"); 
        }
    }
}

function release_ghost(){

    if(let_ghost_out == false){

        ghostUD = ghost_start_UD, ghostLR = ghost_start_LR; 
        ghostPixelsLR = ghost_start_LR_pixels, ghostPixelsUD = ghost_start_UD_pixels;

        ghost.setAttribute("transform", "translate(" + ghostPixelsLR + ", " + ghostPixelsUD + ")"); 

        ghost_time_out -= 20; 

        if(ghost_time_out <= 0){

            let_ghost_out = true; 
        }
    }
}

function moving(){

    if(current_direction == "up"){//Up

        if(obj[pacmanUD-1][pacmanLR] != 1 && obj[pacmanUD-1][pacmanLR] != 4 && (leftRightPixels % 30) == 15){

            upDownPixels -= pacManSpeed; 

            pacman.setAttribute("transform", "translate(" +(leftRightPixels) + ", " + (upDownPixels) + ") rotate(90)"); 

            if(/*upDownPixels % 30 == 15 && */(((pacmanUD-1)*30)+15)==upDownPixels){
                pacmanUD-=1; 
            }

            eatballs(); 
        }
    }

    else if(current_direction == "down"){//Down

        if(obj[pacmanUD+1][pacmanLR] != 1 && obj[pacmanUD+1][pacmanLR] != 4 && (leftRightPixels % 30) == 15){

            upDownPixels += pacManSpeed; 

            pacman.setAttribute("transform", "translate(" +(leftRightPixels) + ", " + (upDownPixels) + ") rotate(270)");

            if(/*upDownPixels % 30 == 15 && */(((pacmanUD+1)*30)+15)==upDownPixels){
                pacmanUD+=1;
            } 

            eatballs();
        }
    }

    else if(current_direction == "left"){//Left

        if(obj[pacmanUD][pacmanLR-1] != 1 && obj[pacmanUD][pacmanLR-1] != 4 && (upDownPixels % 30) == 15){

            leftRightPixels -= pacManSpeed; 

            pacEye.setAttribute("transform", "rotate(0)");
            pacEye.setAttribute("cx", 2);
            pacman.setAttribute("transform", "translate("  +(leftRightPixels) + ", " + (upDownPixels) + ") rotate(0)");

            if(/*leftRightPixels % 30 == 15 && */(((pacmanLR-1)*30)+15)==leftRightPixels){

                pacmanLR-=1; 
                
                eatballs(); 

                if(pacmanLR == 0){
                    pacmanLR = 28; 
                    leftRightPixels = (pacmanLR*30)+15; 
                }
            }   
        }
    }

    else if(current_direction == "right"){//Right

        if(obj[pacmanUD][pacmanLR+1] != 1 && obj[pacmanUD][pacmanLR+1] != 4 && (upDownPixels % 30) == 15){

            leftRightPixels += pacManSpeed; 
                
            pacEye.setAttribute("transform", "rotate(180)");
            pacEye.setAttribute("cx", -2);
            pacman.setAttribute("transform", "translate("  +(leftRightPixels) + ", " + (upDownPixels) + ") rotate(180)"); 

            if(/*leftRightPixels % 30 == 15 && */(((pacmanLR+1)*30)+15)==leftRightPixels){

                pacmanLR+=1; 

                eatballs(); 

                if(pacmanLR == 27){

                    pacmanLR = -1; 
                    leftRightPixels = (pacmanLR*30)+15; 
                }
            }   
        }
    }
}

function turning(){

    if(current_direction == "undefined"){
        
        current_direction = new_direction; 
    }
    else{

        //Fix this
        //if(upDownPixels % 30 == 15 || leftRightPixels % 30 == 15){

            if(new_direction == "left"){
            
                if(obj[pacmanUD][pacmanLR-1] != 1 && obj[pacmanUD][pacmanLR-1] != 4 && (upDownPixels % 30) == 15){
                    
                    current_direction = new_direction; 
                }
                else{

                    current_direction = current_direction; 
                }
            }
            else if(new_direction == "right"){
            
                if(obj[pacmanUD][pacmanLR+1] != 1  && obj[pacmanUD][pacmanLR+1] != 4 && (upDownPixels % 30) == 15){

                    current_direction = new_direction; 
                }
                else{

                    current_direction = current_direction; 
                }
            }
            else if(new_direction == "up"){
            
                if(obj[pacmanUD-1][pacmanLR] != 1 && obj[pacmanUD-1][pacmanLR] != 4 && (leftRightPixels % 30) == 15){

                    current_direction = new_direction; 
                }
                else{

                    current_direction = current_direction; 
                }
            }
            else if(new_direction == "down"){
            
                if(obj[pacmanUD+1][pacmanLR] != 1 && obj[pacmanUD+1][pacmanLR] != 4 && (leftRightPixels % 30) == 15){

                    current_direction = new_direction; 
                }
                else{

                    current_direction = current_direction; 
                }
            }
            else{

                current_direction = new_direction; 
            }
        //}
    }
}

function movepacMouth(){

    neg+=counter, pos-=counter; 

    if(neg >= 0 && pos <= 0 || neg <= -15 && pos >= 15){ 
        counter = -counter; 
    }
    
    pacMouth.setAttribute("points", "0,0 -15,"+neg+" -15,"+pos);
}

var moving_number = 0; 
var moving_counter = 20; 
var triggered = true; 

function press_play(){

    if(triggered == true){

        moving_number += moving_counter; 

        if(moving_number >= 500 || moving_number <= -500){

            moving_counter = -moving_counter; 
        }

        if(moving_counter > 0){

            enter_to_play_text.innerHTML = ""; 
        }
        else if(moving_counter < 0){

            enter_to_play_text.innerHTML = "Press 'enter'<br>to play"; 
        }

        setTimeout(press_play, 20);
    }
     
}

var play_game; //This is the requestID used to cancel the requestAnimationFrame loop
var pause = false; 

var game_mode = false; 
var game_started = false; 

function pausing(){

    if(pause == false && lost == false && game_mode == true && game_started == true){

        pause = true; 
        gameResult.innerHTML = pause_text; 
    }
    else{
        
        if(lost == false){

            pause = false; 
            gameResult.innerHTML = ""; 
            game(); 
        }
    }
}

var time = 0; 

function start_game(){

    if(game_mode == false){

        time += 4000;
        count_down(); 
        triggered = false; 
        enter_to_play_text.innerHTML = ""; 
        moving_counter = undefined; moving_number = undefined; 
    }
}

function count_down(){

    time -= 20; 

    if(time <= 4000 && time > 3000){

        count_down_text.innerHTML = "3"; 
    }
    else if(time <= 3000 && time > 2000){

        count_down_text.innerHTML = "2"; 
    }
    else if(time <= 2000 && time > 1000){

        count_down_text.innerHTML = "1";
    }
    else if(time <= 1000 && time > 0){

        count_down_text.innerHTML = "GO!"; 

        if(game_started == false){

            game_started = true; 
            game_mode = true; 
            game(); 
        }
    }
    //if(time <= 0){
    else{
        count_down_text.innerHTML = ""; 
        time = undefined; 
    }

    setTimeout(count_down, 20); 
}

function refresh_page(){

    location.reload(); 
}

function game(){

    //counter_down(); 
    moving(); 
    turning();
    movepacMouth(); 
    big_balls_function();  
    release_ghost(); 

    //if(move_counter >= max_counter && let_ghost_out == true){
        ghostAlgorithm();
    //}
    //if(move_counter2 >= max_counter2){

        ghost_two_algorithm(); 
    //}

    moveGhost();  
    moveGhost2(); 
    ghost_function(); 

    game_scores.innerHTML = "Your score: " + score + "<br>Balls left on grid: " + ballsLeft; 

    if(pause == false && lost == false && game_mode == true && game_started == true && triggered != true){

        play_game = requestAnimationFrame(game); //1.2x faster than a regular second? 
    }
    else{
        play_game = cancelAnimationFrame(game); 
    }


}

//Start of keyDown
document.onkeydown = function(e){
	
    e = e || window.event; 
    
    switch(e.keyCode){

        case 87://w
            new_direction = "up"; //Up 
            break; 
        case 83://s
            new_direction = "down"; //Down
            break; 
        case 65://a
            new_direction = "left"; //Left
            break; 
        case 68://d
            new_direction = "right"; //Right
            break; 
        case 32://space bar
            pausing(); 
            break; 
        case 16://shift
            refresh_page(); 
            break; 
        case 13://enter
            start_game();
            break; 
        default:
    }
}
//End of keyDown
press_play(); 
play_game = requestAnimationFrame(game); //1.2x faster than a regular second?   

</script> 
<!-- End of Script ===================================================== -->

</body>

</html>