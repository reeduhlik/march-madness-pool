<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>2020 Bracket Challenge</title>
    <link rel="stylesheet" href="css/info.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

<body>
   <div class="header">
       <h1>March Madness 2020 Bracket Challenge</h1>
       <div class="numberSubmitted">
           <h2>47</h2>
           <h6>Brackets submitted</h6>
       </div>
         <div class="timeLeft">
             <h2>02:07:17:45</h2>
             <h6>Time left</h6>
         </div>
          <ul>
              <li id="noborder"><a href="index.php">Home</a></li>
              <li><a href="info.php">Rules & Scoring</a></li>
              <li><a href="standings.php">Standings</a></li>
              <li><a href="brackets.php">Submitted Brackets</a></li>
       </ul>
   </div>
   <div class="content">
       <div class="rules">
           <h3>Official March Madness 2020 Bracket Challenge Rules:</h3>
           <ul>
               <li>All brackets MUST be submitted by <strong>Thursday, March 19, 8:00 AM PST </strong> to be considered valid.</li>
               <li>Brackets MUST be submitted through this website in order to be entered.  Emailed bracket files will not be considered.</li>
               <li>All bracket submissions are final.  Brackets will not be manually edited once they are submitted.</li>
               <li>The first four play-in games are not part of the bracket challenge.  If you select a seeding with a play-in game, your pick will be recorded as the winner of the play-in game.</li>
               <li>There is a non-refundable entry fee of $25 per bracket, and you may submit as many brackets as they wish.</li>
               <li>All brackets must be paid for before the start of the Elite 8 Round.  Any brackets not paid for before <strong>Saturday, March 28th</strong> will be automatically dropped from the pool.</li>
               <li>Payment can be made through Venmo (Jeff-Green-72) or by check, addressed to Jeff Green, 8850 E. Cloudview Way, Anaheim Hills, CA, 92808.  Please include your entry name in your payment. Brackets that have been paid for will have a checkmark next to the bracket name on the standings page.</li>
               <li>Exact payouts will be calculated and released based on the number of paid entries received by Saturday, March 28th.  Approximate payouts are as follows: <br><ul class="ext">
                   <li>1st: 40% of total pot</li>
                   <li>2nd: 25% of total pot</li>
                   <li>3rd: 17.5% of total pot</li>
                   <li>4th: 12.5% of total pot</li>
                   <li>5th: 5% of total pot</li>
               </ul>

            </li>
           </ul>
           <h3>Bracket Scoring Guidelines:</h3>
           <ul>
               <li> Each game is worth the following based on the round: <br>
                   <ul class="ext">
                       <li>1st (Round of 32): 1 point</li>
                       <li>2nd (Sweet 16): 2 points</li>
                       <li>3rd (Elite 8): 4 points</li>
                       <li>4th (Final Four): 6 points</li>
                       <li>5th (Championship Game): 9 points</li>
                       <li>Tournament Winner: 12 points</li>
                   </ul>
               </li>
               <li>In any round, the following points are awarded for upsets:<br>
                   <ul class="ext">
                       <li><strong>2-3</strong> differential in team seeding: <strong>2x multiplier</strong> for round points</li>
                       <li><strong>4 or more</strong> differential in team seeding: <strong>3x multiplier</strong> for round points</li>
                       <li>Win by a <strong>14, 15, or 16 seed</strong>: <strong>4x multiplier</strong> for round points</li>
                   </ul>
               </li>
               <li>Example Scoring:<br>
                   <ul class="ext">
                       <li>A 14-seed beats a 3-seed in the 1st round: <strong>4 points</strong> (4 x round score of 1)</li>
                       <li>A 5-seed beats a 1-seed in the 4th round: <strong>18 points</strong> (3 x round score of 6)</li>
                       <li>A 9-seed beats a 8-seed in the 1st round: <strong>1 point</strong> (no upset mutlipler)</li>
                       <li>A 9-seed beats a 1-seed in the 2nd round: <strong>6 points</strong> (3 x round score of 2)</li>
                       <li>A 14-seed beats an 11-seed in the 2nd round: <strong>8 points</strong> (3 x round score of 2)</li>
                   </ul>
               </li>
           </ul>
       </div>
   </div>    
</body>

</html>
