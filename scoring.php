<?php include "connection.php";
    if(isset($_POST['submit'])){
        //upload new results into database
        $picks = [];
        for($i = 201; $i <= 232; $i++){
            $picks[$i] = $_POST[$i];
        }
        for($i = 301; $i <= 316; $i++){
            $picks[$i] = $_POST[$i];
        }
        for($i = 401; $i <= 408; $i++){
            $picks[$i] = $_POST[$i];
        }
        for($i = 501; $i <= 504; $i++){
            $picks[$i] = $_POST[$i];
        }
        for($i = 601; $i <= 602; $i++){
            $picks[$i] = $_POST[$i];
        }
        for($i = 701; $i <= 701; $i++){
            $picks[$i] = $_POST[$i];
        }
        $points = $_POST['points'];
$q = "UPDATE `brackets2` SET `points`=$points, ";
       for( $i = 201; $i <=232; $i++){
            $q .= "`" . $i . "`='" . $picks[$i] . "', ";
        }
        for( $i = 301; $i <=316; $i++){
            $q .= "`" . $i . "`='" . $picks[$i] . "', ";
        }
        for( $i = 401; $i <=408; $i++){
            $q .= "`" . $i . "`='" . $picks[$i] . "', ";
        }
        for( $i = 501; $i <=504; $i++){
            $q .= "`" . $i . "`='" . $picks[$i] . "', ";
        }
        for( $i = 601; $i <=602; $i++){
            $q .= "`" . $i . "`='" . $picks[$i] . "', ";
        }
$q .= "`701`='" .  $picks[701] . "' WHERE id=1";
        $res = mysqli_query($connection, $q);
        $scores = [];
        for($i = 201; $i <= 232; $i++){
            $scores[$i] = $_POST["s" . $i];
        }
        for($i = 301; $i <= 316; $i++){
            $scores[$i] = $_POST["s" . $i];
        }
        for($i = 401; $i <= 408; $i++){
            $scores[$i] = $_POST["s" . $i];
        }
        for($i = 501; $i <= 504; $i++){
            $scores[$i] = $_POST["s" . $i];
        }
        for($i = 601; $i <= 602; $i++){
            $scores[$i] = $_POST["s" . $i];
        }
        for($i = 701; $i <= 701; $i++){
            $scores[$i] = $_POST["s" . $i];
        }
        $q = "UPDATE `brackets2` SET ";
       for( $i = 201; $i <=232; $i++){
            $q .= "`" . $i . "`='" . $scores[$i] . "', ";
        }
        for( $i = 301; $i <=316; $i++){
            $q .= "`" . $i . "`='" . $scores[$i] . "', ";
        }
        for( $i = 401; $i <=408; $i++){
            $q .= "`" . $i . "`='" . $scores[$i] . "', ";
        }
        for( $i = 501; $i <=504; $i++){
            $q .= "`" . $i . "`='" . $scores[$i] . "', ";
        }
        for( $i = 601; $i <=602; $i++){
            $q .= "`" . $i . "`='" . $scores[$i] . "', ";
        }
$q .= "`701`='" .  $scores[701] . "' WHERE id=2";
                $res = mysqli_query($connection, $q);
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2020 Bracket Challenge</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="information">
        <h4>BRACKET SCORING</h4>
    </div>
    <div class="bracket">
               <form action="scoring.php" method="post">
        <div class="side" id="left">
            <div class="quarter">
                <div class="col1">
                    <div class="col1container">
                        <div class="game">
                            <div class="team" id="101">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="102">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="103">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="104">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="105">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="106">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="107">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="108">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="109">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="110">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="111">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="112">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="113">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="114">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="115">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="116">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="col2container">
                        <div class="game">
                            <div class="team" id="201"></div>
                            <div class="team" id="202"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="203"></div>
                            <div class="team" id="204"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="205"></div>
                            <div class="team" id="206"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="207"></div>
                            <div class="team" id="208"></div>
                        </div>
                    </div>
                </div>
                <div class="col3">
                    <div class="col3container">
                        <div class="game">
                            <div class="team" id="301"></div>
                            <div class="team" id="302"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="303"></div>
                            <div class="team" id="304"></div>
                        </div>
                    </div>
                </div>

                <div class="col4">
                    <div class="col4container">
                        <div class="game">
                            <div class="team" id="401"></div>
                            <div class="team" id="402"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quarter bottomq">
                <div class="col1">
                    <div class="col1container">
                        <div class="game">
                            <div class="team" id="117">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="118">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="119">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="120">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="121">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="122">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="123">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="124">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="125">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="126">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="127">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="128">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="129">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="130">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="131">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="132">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="col2container">
                        <div class="game">
                            <div class="team" id="209"></div>
                            <div class="team" id="210"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="211"></div>
                            <div class="team" id="212"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="213"></div>
                            <div class="team" id="214"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="215"></div>
                            <div class="team" id="216"></div>
                        </div>
                    </div>
                </div>
                <div class="col3">
                    <div class="col3container">
                        <div class="game">
                            <div class="team" id="305"></div>
                            <div class="team" id="306"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="307"></div>
                            <div class="team" id="308"></div>
                        </div>
                    </div>
                </div>

                <div class="col4">
                    <div class="col4container">
                        <div class="game">
                            <div class="team" id="403"></div>
                            <div class="team" id="404"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="side" id="right">
            <div class="quarter2">
                <div class="col1">
                    <div class="col1container">
                        <div class="game">
                            <div class="team" id="133">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="134">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="135">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="136">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="137">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="138">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="139">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="140">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="141">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="142">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="143">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="144">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="145">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="146">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="147">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="148">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="col2container">
                        <div class="game">
                            <div class="team" id="217"></div>
                            <div class="team" id="218"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="219"></div>
                            <div class="team" id="220"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="221"></div>
                            <div class="team" id="222"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="223"></div>
                            <div class="team" id="224"></div>
                        </div>
                    </div>
                </div>
                <div class="col3">
                    <div class="col3container">
                        <div class="game">
                            <div class="team" id="309"></div>
                            <div class="team" id="310"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="311"></div>
                            <div class="team" id="312"></div>
                        </div>
                    </div>
                </div>

                <div class="col4">
                    <div class="col4container">
                        <div class="game">
                            <div class="team" id="405"></div>
                            <div class="team" id="406"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quarter2 bottomq">
                <div class="col1">
                    <div class="col1container">
                        <div class="game">
                            <div class="team" id="149">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="150">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="151">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="152">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="153">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="154">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="155">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="156">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="157">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="158">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="159">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="160">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="161">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="162">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                        <div class="game">
                            <div class="team" id="163">
                                <h3 class="seed1"></h3>
                                <p class="teamname"></p>
                            </div>
                            <div class="team" id="164">
                                <h3 class="seed2"></h3>
                                <p class="teamname"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="col2container">
                        <div class="game">
                            <div class="team" id="225"></div>
                            <div class="team" id="226"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="227"></div>
                            <div class="team" id="228"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="229"></div>
                            <div class="team" id="230"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="231"></div>
                            <div class="team" id="232"></div>
                        </div>
                    </div>
                </div>
                <div class="col3">
                    <div class="col3container">
                        <div class="game">
                            <div class="team" id="313"></div>
                            <div class="team" id="314"></div>
                        </div>
                        <div class="game">
                            <div class="team" id="315"></div>
                            <div class="team" id="316"></div>
                        </div>
                    </div>
                </div>

                <div class="col4">
                    <div class="col4container">
                        <div class="game">
                            <div class="team" id="407"></div>
                            <div class="team" id="408"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

            <div class="finalfour">
                <h2>Final Four</h2>
                <div class="ffteams">
                    <div class="leftcont">
                        <div class="fteam1 fteam" id="501"></div>
                        <div class="fteam2 fteam" id="502"></div>
                    </div>
                    <div class="rightcont">

                        <div class="fteam3 fteam" id="503"></div>
                        <div class="fteam4 fteam" id="504"></div>
                    </div>

                </div>
                <div class="finalgame">
                    <div class="team3" id="601"></div>
                    <div class="team3" id="602"></div>
                </div>
                <h4>National Champion:</h4>
                <div class="team4" id="701"></div>
                <input type="number" placeholder="Total Points (Tiebreaker)" name="points" id="points" onchange="checkFilled(slots)">
                <input type="submit" value="Submit Bracket" name="submit" id="submit">
            </div>
    </div>
    <div class="hidden" style="display: none">

        <?php 
        for($i = 101; $i <= 164; $i++){
            echo '<input type="text" id="i' . $i .'" name="' . $i . '">';
        }
        for($i = 201; $i <= 232; $i++){
            echo '<input type="text" id="i' . $i .'" name="' . $i . '">';
        }
        for($i = 301; $i <= 316; $i++){
            echo '<input type="text" id="i' . $i .'" name="' . $i . '">';
        }
        for($i = 401; $i <= 408; $i++){
            echo '<input type="text" id="i' . $i .'" name="' . $i . '">';
        }
            for($i = 501; $i <= 504; $i++){
            echo '<input type="text" id="i' . $i .'" name="' . $i . '">';
        }
        for($i = 601; $i <= 602; $i++){
            echo '<input type="text" id="i' . $i .'" name="' . $i . '">';
        }
            for($i = 701; $i <= 701; $i++){
            echo '<input type="text" id="i' . $i .'" name="' . $i . '">';
        }
        ?>


    </div>
    <div class="pointsValue">
        <?php 
        for($i = 201; $i <= 232; $i++){
            echo $i . '<input type="text" id="s' . $i .'" name="s' . $i . '"><br>';
        }
        for($i = 301; $i <= 316; $i++){
           echo $i . '<input type="text" id="s' . $i .'" name="s' . $i . '"><br>';
        }
        for($i = 401; $i <= 408; $i++){
            echo $i . '<input type="text" id="s' . $i .'" name="s' . $i . '"><br>';
        }
            for($i = 501; $i <= 504; $i++){
            echo $i . '<input type="text" id="s' . $i .'" name="s' . $i . '"><br>';
        }
        for($i = 601; $i <= 602; $i++){
            echo $i . '<input type="text" id="s' . $i .'" name="s' . $i . '"><br>';
        }
            for($i = 701; $i <= 701; $i++){
            echo $i . '<input type="text" id="s' . $i .'" name="s' . $i . '"><br>';
        }
        ?>
    </div>
            </form>
    <div class="footer">
        <p>This website was designed and built in Chandler, AZ by 16-year old Reed Uhlik.</p>    
    </div>
    <script>
        var teams = [];
        teams[1] = new Team(1, 1, "Duke", "#003087");
        teams[2] = new Team(2, 2, "Michigan State", "#18453b");
        teams[3] = new Team(3, 3, "LSU", "#461d7c");
        teams[4] = new Team(4, 4, "Virginia Tech", "#630031");
        teams[5] = new Team(5, 5, "Mississippi State", "#660000");
        teams[6] = new Team(6, 6, "Maryland", "#e03a3e");
        teams[7] = new Team(7, 7, "Louisville", "#c9001f");
        teams[8] = new Team(8, 8, "VCU", "#ffb300");
        teams[9] = new Team(9, 9, "UCF", "#ba9b37");
        teams[10] = new Team(10, 10, "Minnesota", "#7a0019");
        teams[11] = new Team(11, 11, "Temple/Belmont", "#666");
        teams[12] = new Team(12, 12, "Liberty", "#002d62");
        teams[13] = new Team(13, 13, "Saint Louis", "#003da5");
        teams[14] = new Team(14, 14, "Yale", "#00356b");
        teams[15] = new Team(15, 15, "Bradley", "#a50000");
        teams[16] = new Team(16, 16, "NCC/NDST", "#666");
        
        
        teams[17] = new Team(17, 1, "Virginia", "#666");
        teams[18] = new Team(18, 2, "Tennessee", "#666");
        teams[19] = new Team(19, 3, "Purdue", "#666");
        teams[20] = new Team(20, 4, "Kansas State", "#666");
        teams[21] = new Team(21, 5, "Wisconsin", "#666");
        teams[22] = new Team(22, 6, "Villanova", "#666");
        teams[23] = new Team(23, 7, "Cincinnati", "#666");
        teams[24] = new Team(24, 8, "Ole Miss", "#666");
        teams[25] = new Team(25, 9, "Oklahoma", "#666");
        teams[26] = new Team(26, 10, "Iowa", "#666");
        teams[27] = new Team(27, 11, "Saint Mary's", "#666");
        teams[28] = new Team(28, 12, "Oregon", "#666");
        teams[29] = new Team(29, 13, "UC Irvine", "#666");
        teams[30] = new Team(30, 14, "Old Dominion", "#666");
        teams[31] = new Team(31, 15, "Colgate", "#666");
        teams[32] = new Team(32, 16, "Gardner-Webb", "#666");
        teams[33] = new Team(33, 1, "Gonzaga", "#666");
        teams[34] = new Team(34, 2, "Michigan", "#666");
        teams[35] = new Team(35, 3, "Texas Tech", "#666");
        teams[36] = new Team(36, 4, "Florida State", "#666");
        teams[37] = new Team(37, 5, "Marquette", "#666");
        teams[38] = new Team(38, 6, "Buffalo", "#666");
        teams[39] = new Team(39, 7, "Nevada", "#666");
        teams[40] = new Team(40, 8, "Syracuse", "#666");
        teams[41] = new Team(41, 9, "Baylor", "#666");
        teams[42] = new Team(42, 10, "Florida", "#666");
        teams[43] = new Team(43, 11, "ASU/St. Johns", "#666");
        teams[44] = new Team(44, 12, "Murrary State", "#666");
        teams[45] = new Team(45, 13, "Vermont", "#666");
        teams[46] = new Team(46, 14, "Northern Kentucky", "#666");
        teams[47] = new Team(47, 15, "Montana", "#666");
        teams[48] = new Team(48, 16, "FDU/PV A&M", "#666");
        teams[49] = new Team(49, 1, "North Carolina", "#666");
        teams[50] = new Team(50, 2, "Kentucky", "#666");
        teams[51] = new Team(51, 3, "Houston", "#666");
        teams[52] = new Team(52, 4, "Kansas", "#666");
        teams[53] = new Team(53, 5, "Auburn", "#666");
        teams[54] = new Team(54, 6, "Iowa State", "#666");
        teams[55] = new Team(55, 7, "Wofford", "#666");
        teams[56] = new Team(56, 8, "Utah State", "#666");
        teams[57] = new Team(57, 9, "Washington", "#666");
        teams[58] = new Team(58, 10, "Seton Hall", "#666");
        teams[59] = new Team(59, 11, "Ohio State", "#666");
        teams[60] = new Team(60, 12, "New Mexico State", "#666");
        teams[61] = new Team(61, 13, "Northeastern", "#666");
        teams[62] = new Team(62, 14, "Georgia State", "#666");
        teams[63] = new Team(63, 15, "Abilene Christian", "#666");
        teams[64] = new Team(64, 16, "Iona", "#666");
        console.log(JSON.stringify(teams));
        var slots = [];
        slots[101] = teams[1];
        slots[102] = teams[16];
        slots[103] = teams[8];
        slots[104] = teams[9];
        slots[105] = teams[5];
        slots[106] = teams[12];
        slots[107] = teams[4];
        slots[108] = teams[13];
        slots[109] = teams[6];
        slots[110] = teams[11];
        slots[111] = teams[3];
        slots[112] = teams[14];
        slots[113] = teams[7];
        slots[114] = teams[10];
        slots[115] = teams[2];
        slots[116] = teams[15];
        
        
        slots[117] = teams[17];
        slots[118] = teams[32];
        slots[119] = teams[24];
        slots[120] = teams[25];
        slots[121] = teams[21];
        slots[122] = teams[28];
        slots[123] = teams[20];
        slots[124] = teams[29];
        slots[125] = teams[22];
        slots[126] = teams[27];
        slots[127] = teams[19];
        slots[128] = teams[30];
        slots[129] = teams[23];
        slots[130] = teams[26];
        slots[131] = teams[18];
        slots[132] = teams[31];
        
        
        slots[133] = teams[33];
        slots[134] = teams[16+32];
        slots[135] = teams[8+32];
        slots[136] = teams[9+32];
        slots[137] = teams[5+32];
        slots[138] = teams[12+32];
        slots[139] = teams[4+32];
        slots[140] = teams[13+32];
        slots[141] = teams[6+32];
        slots[142] = teams[11+32];
        slots[143] = teams[3+32];
        slots[144] = teams[14+32];
        slots[145] = teams[7+32];
        slots[146] = teams[10+32];
        slots[147] = teams[2+32];
        slots[148] = teams[15+32];
        
        
        slots[149] = teams[1+48];
        slots[150] = teams[16+48];
        slots[151] = teams[8+48];
        slots[152] = teams[9+48];
        slots[153] = teams[5+48];
        slots[154] = teams[12+48];
        slots[155] = teams[4+48];
        slots[156] = teams[13+48];
        slots[157] = teams[6+48];
        slots[158] = teams[11+48];
        slots[159] = teams[3+48];
        slots[160] = teams[14+48];
        slots[161] = teams[7+48];
        slots[162] = teams[10+48];
        slots[163] = teams[2+48];
        slots[164] = teams[15+48];
        setBracket(teams, slots);

        function setBracket(teams, slots) {
            for (var i = 101; i <= 164; i++) {
                //set seed of selected slot with predetermined id
                $("#" + i).find('h3').html(slots[i].seed);
                $("#" + i).find('p').html(slots[i].name);
                $("#" + i).find('h3').css("background-color", slots[i].color);
                $("#i" + i).val(slots[i].id)
            }
        }
        //teams
        function Team(id, seed, name, color) {
            this.id = id;
            this.seed = seed;
            this.name = name;
            this.color = color;
        }

        function Slot(id, seed, name, color) {
            this.id = id;
            this.seed = seed;
            this.name = name;
            this.color = color;
        }

        $(".team").on("click", function() {
            var idClicked = this.id;
            //get team data for ID clicked
            var teamID = slots[idClicked].id;
            var teamSeed = slots[idClicked].seed;
            var teamName = slots[idClicked].name;
            var teamColor = slots[idClicked].color;
            //calculate next ID
            var nextID = Math.ceil((this.id % 100) / 2) + Math.ceil(this.id / 100.0) * 100;
            slots[nextID] = teams[teamID];
            console.log(nextID);
            if (nextID % 2 == 1) {
                $("#" + nextID).html("<h3 class='seed1' style='background-color: " + teamColor + "'>" + teamSeed + "</h3><p class='teamname'>" + teamName + " " + nextID +"</p>");
            } else {
                $("#" + nextID).html("<h3 class='seed2' style='background-color: " + teamColor + "'>" + teamSeed + "</h3><p class='teamname'>" + teamName + " " + nextID +"</p>");
            }
            $("#i" + nextID).val(teamID);
        });
        $(".fteam").on("click", function() {
            var idClicked = this.id;
            //get team data for ID clicked
            var teamID = slots[idClicked].id;
            var teamSeed = slots[idClicked].seed;
            var teamName = slots[idClicked].name;
            var teamColor = slots[idClicked].color;
            //calculate next ID
            var nextID = Math.ceil((this.id % 100) / 2) + Math.ceil(this.id / 100.0) * 100;
            slots[nextID] = teams[teamID];
            console.log(nextID);
            if (nextID % 2 == 1) {
                $("#" + nextID).html("<h3 class='seed1' style='background-color: " + teamColor + "'>" + teamSeed + "</h3><p class='teamname'>" + teamName + " " + nextID +"</p>");
            } else {
                $("#" + nextID).html("<h3 class='seed1' style='background-color: " + teamColor + "'>" + teamSeed + "</h3><p class='teamname'>" + teamName + " " + nextID +"</p>");
            }
            $("#i" + nextID).val(teamID);
        });
        $(".team3").on("click", function() {
            var idClicked = this.id;
            //get team data for ID clicked
            var teamID = slots[idClicked].id;
            var teamSeed = slots[idClicked].seed;
            var teamName = slots[idClicked].name;
            var teamColor = slots[idClicked].color;
            //calculate next ID
            var nextID = Math.ceil((this.id % 100) / 2) + Math.ceil(this.id / 100.0) * 100;
            slots[nextID] = teams[teamID];
            console.log(nextID);
            if (nextID % 2 == 1) {
                $("#" + nextID).html("<h3 class='seed1' style='background-color: " + teamColor + "'>" + teamSeed + "</h3><p class='teamname'>" + teamName + " " + nextID +"</p>");
            } else {
                $("#" + nextID).html("<h3 class='seed1' style='background-color: " + teamColor + "'>" + teamSeed + "</h3><p class='teamname'>" + teamName + " " + nextID +"</p>");

            }
            $("#" + nextID).css("background-color", "#eee");
            $("#i" + nextID).val(teamID);
        });


    </script>
</body>

</html>
