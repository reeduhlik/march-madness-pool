<?php include "connection.php";

$id = 1;
$q = "SELECT * FROM brackets WHERE id='" . $id . "'";
$res = mysqli_query($connection, $q);
$bracket = [];
while($row = mysqli_fetch_assoc($res)){
    $bracket['email'] = $row['email'];
    $bracket['fname'] = $row['fname'];
    $bracket['lname'] = $row['lname'];
    $bracket['name'] = $row['name'];
}
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
       <div class="confirmation">
           <h3>Thank you, <?php echo $bracket['fname'] . " " . $bracket['lname']; ?>.</h3>
           <h4>Your bracket "<?php echo $bracket['name'];?>" has been succesfully recorded.</h4>
           <h5>An email has been sent to <strong><?php echo $bracket['email'];?> </strong> with your submission confirmation.</h5>
           <h6>A few quick reminders:</h6>
           <ul>
              <li>You can view and print your bracket <a href="brackets.php?id=<?php echo $id;?>">here</a>.</li>
               <li>Your entry fee is due no later than <strong>Saturday, March 28th</strong>. Payment can be made through Venmo (Jeff-Green-72) or by check, addressed to Jeff Green, 8850 E. Cloudview Way, Anaheim Hills, CA, 92808.  Please include your entry name in your payment. Brackets that have been paid for will have a checkmark next to the bracket name on the standings page.</li>
               <li>You may submit more than one entry.  Click <a href="index.php">here</a> to go submit another entry.  The same email may be used, but a unique bracket id will be assigned.</li>
               <li>If you have any questions or concerns regarding the pool, please email <strong>jeffgreen1414@yahoo.com</strong>.  If you find a website bug, please email <strong>reeduhlik@gmail.com</strong>.</li>
               
           </ul>
       </div>
   </div>    
</body>

</html>
