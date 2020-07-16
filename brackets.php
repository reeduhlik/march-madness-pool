<?php include "connection.php";
/*CREATE TABLE `brackets` (
  `id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(64) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `paid` int(1) NOT NULL DEFAULT 0,
  `points` int(4) NOT NULL,
  `201` int(2) NOT NULL,
  `202` int(2) NOT NULL,
  `203` int(2) NOT NULL,
  `204` int(2) NOT NULL,
  `205` int(2) NOT NULL,
  `206` int(2) NOT NULL,
  `207` int(2) NOT NULL,
  `208` int(2) NOT NULL,
  `209` int(2) NOT NULL,
  `210` int(2) NOT NULL,
  `211` int(2) NOT NULL,
  `212` int(2) NOT NULL,
  `213` int(2) NOT NULL,
  `214` int(2) NOT NULL,
  `215` int(2) NOT NULL,
  `216` int(2) NOT NULL,
  `217` int(2) NOT NULL,
  `218` int(2) NOT NULL,
  `219` int(2) NOT NULL,
  `220` int(2) NOT NULL,
  `221` int(2) NOT NULL,
  `222` int(2) NOT NULL,
  `223` int(2) NOT NULL,
  `224` int(2) NOT NULL,
  `225` int(2) NOT NULL,
  `226` int(2) NOT NULL,
  `227` int(2) NOT NULL,
  `228` int(2) NOT NULL,
  `229` int(2) NOT NULL,
  `230` int(2) NOT NULL,
  `231` int(2) NOT NULL,
  `232` int(2) NOT NULL,
  `301` int(2) NOT NULL,
  `302` int(2) NOT NULL,
  `303` int(2) NOT NULL,
  `304` int(2) NOT NULL,
  `305` int(2) NOT NULL,
  `306` int(2) NOT NULL,
  `307` int(2) NOT NULL,
  `308` int(2) NOT NULL,
  `309` int(2) NOT NULL,
  `310` int(2) NOT NULL,
  `311` int(2) NOT NULL,
  `312` int(2) NOT NULL,
  `313` int(2) NOT NULL,
  `314` int(2) NOT NULL,
  `315` int(2) NOT NULL,
  `316` int(2) NOT NULL,
  `401` int(2) NOT NULL,
  `402` int(2) NOT NULL,
  `403` int(2) NOT NULL,
  `404` int(2) NOT NULL,
  `405` int(2) NOT NULL,
  `406` int(2) NOT NULL,
  `407` int(2) NOT NULL,
  `408` int(2) NOT NULL,
  `501` int(2) NOT NULL,
  `502` int(2) NOT NULL,
  `503` int(2) NOT NULL,
  `504` int(2) NOT NULL,
  `601` int(2) NOT NULL,
  `602` int(2) NOT NULL,
  `701` int(2) NOT NULL,
  `score2` int(3) NOT NULL DEFAULT 0,
  `score3` int(3) NOT NULL DEFAULT 0,
  `score4` int(3) NOT NULL DEFAULT 0,
  `score5` int(3) NOT NULL DEFAULT 0,
  `score6` int(3) NOT NULL DEFAULT 0,
  `score7` int(3) NOT NULL DEFAULT 0,
  `total` int(3) NOT NULL DEFAULT 0,
  `right` int(3) NOT NULL DEFAULT 0,
  `wrong` int(3) NOT NULL DEFAULT 0,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/
$brackets = [];
$numberOfBrackets = 0;
$q = "SELECT * FROM brackets";
$res = mysqli_query($connection, $q);
if($res){
    $numberOfBrackets = mysqli_num_rows($res);
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
    <div class="header">
        <h1>March Madness 2020 Bracket Challenge</h1>
        <div class="numberSubmitted">
            <h2><?php echo $numberOfBrackets; ?></h2>
            <h6>Brackets submitted</h6>
        </div>
        <div class="timeLeft">
            <h2 id="date">02:07:17:45</h2>
            <h6>Time left</h6>
        </div>
        <ul>
            <li id="noborder"><a href="index.php">Home</a></li>
            <li><a href="info.php">Rules & Scoring</a></li>
            <li><a href="standings.php">Standings</a></li>
            <li><a href="brackets.php">Submitted Brackets</a></li>
        </ul>
    </div>
    <div class="information">
        <h4>Select your bracket below.</h4>
        <select name="select" id="select" onchange="fetchBracket(this.value)">
            <option value="0">Select a bracket...</option>
        </select>
    </div>
    <div class="bracket">
        <h6 id="bracketName"></h6>
        <div class="ranking">
            <h2 id="ranking"></h2>
            <h6>out of <?php echo $numberOfBrackets; ?> brackets</h6>
        </div>
        <div class="totalPoints">
            <h2 id="totalPoints"></h2>
            <h6>Total points</h6>
        </div>
        <div class="accuracy">
            <h2 id="accuracy"></h2>
            <h6>Bracket accuracy</h6>
        </div>
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
            <h6 id="points">Total Points</h6>
        </div>
    </div>
    <div class="footer">
        <p>This website was designed and built in Chandler, AZ by 16-year old Reed Uhlik.</p>
    </div>
    <script>
        function getUrlVars() {
            var vars = {};
            var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m, key, value) {
                vars[key] = value;
            });
            return vars;
        }

        function getUrlParam(parameter, defaultvalue) {
            var urlparameter = defaultvalue;
            if (window.location.href.indexOf(parameter) > -1) {
                urlparameter = getUrlVars()[parameter];
            }
            return urlparameter;
        }
        var ID = getUrlParam('id',0);
        fetchBracket(ID);
        var teams = [];
        teams[1] = new Team(1, 1, "Seed Team A1", "#666");
        teams[2] = new Team(2, 2, "Seed Team A2", "#666");
        teams[3] = new Team(3, 3, "Seed Team A3", "#666");
        teams[4] = new Team(4, 4, "Seed Team A4", "#666");
        teams[5] = new Team(5, 5, "Seed Team A5", "#666");
        teams[6] = new Team(6, 6, "Seed Team A6", "#666");
        teams[7] = new Team(7, 7, "Seed Team A7", "#666");
        teams[8] = new Team(8, 8, "Seed Team A8", "#666");
        teams[9] = new Team(9, 9, "Seed Team A9", "#666");
        teams[10] = new Team(10, 10, "Seed Team A10", "#666");
        teams[11] = new Team(11, 11, "Seed Team A11", "#666");
        teams[12] = new Team(12, 12, "Seed Team A12", "#666");
        teams[13] = new Team(13, 13, "Seed Team A13", "#666");
        teams[14] = new Team(14, 14, "Seed Team A14", "#666");
        teams[15] = new Team(15, 15, "Seed Team A15", "#666");
        teams[16] = new Team(16, 16, "Seed Team A16", "#666");
        teams[17] = new Team(17, 1, "Seed Team B1", "#666");
        teams[18] = new Team(18, 2, "Seed Team B2", "#666");
        teams[19] = new Team(19, 3, "Seed Team B3", "#666");
        teams[20] = new Team(20, 4, "Seed Team B4", "#666");
        teams[21] = new Team(21, 5, "Seed Team B5", "#666");
        teams[22] = new Team(22, 6, "Seed Team B6", "#666");
        teams[23] = new Team(23, 7, "Seed Team B7", "#666");
        teams[24] = new Team(24, 8, "Seed Team B8", "#666");
        teams[25] = new Team(25, 9, "Seed Team B9", "#666");
        teams[26] = new Team(26, 10, "Seed Team B10", "#666");
        teams[27] = new Team(27, 11, "Seed Team B11", "#666");
        teams[28] = new Team(28, 12, "Seed Team B12", "#666");
        teams[29] = new Team(29, 13, "Seed Team B13", "#666");
        teams[30] = new Team(30, 14, "Seed Team B14", "#666");
        teams[31] = new Team(31, 15, "Seed Team B15", "#666");
        teams[32] = new Team(32, 16, "Seed Team B16", "#666");
        teams[33] = new Team(33, 1, "Seed Team C1", "#666");
        teams[34] = new Team(34, 2, "Seed Team C2", "#666");
        teams[35] = new Team(35, 3, "Seed Team C3", "#666");
        teams[36] = new Team(36, 4, "Seed Team C4", "#666");
        teams[37] = new Team(37, 5, "Seed Team C5", "#666");
        teams[38] = new Team(38, 6, "Seed Team C6", "#666");
        teams[39] = new Team(39, 7, "Seed Team C7", "#666");
        teams[40] = new Team(40, 8, "Seed Team C8", "#666");
        teams[41] = new Team(41, 9, "Seed Team C9", "#666");
        teams[42] = new Team(42, 10, "Seed Team C10", "#666");
        teams[43] = new Team(43, 11, "Seed Team C11", "#666");
        teams[44] = new Team(44, 12, "Seed Team C12", "#666");
        teams[45] = new Team(45, 13, "Seed Team C13", "#666");
        teams[46] = new Team(46, 14, "Seed Team C14", "#666");
        teams[47] = new Team(47, 15, "Seed Team C15", "#666");
        teams[48] = new Team(48, 16, "Seed Team C16", "#666");
        teams[49] = new Team(49, 1, "Seed Team D1", "#666");
        teams[50] = new Team(50, 2, "Seed Team D2", "#666");
        teams[51] = new Team(51, 3, "Seed Team D3", "#666");
        teams[52] = new Team(52, 4, "Seed Team D4", "#666");
        teams[53] = new Team(53, 5, "Seed Team D5", "#666");
        teams[54] = new Team(54, 6, "Seed Team D6", "#666");
        teams[55] = new Team(55, 7, "Seed Team D7", "#666");
        teams[56] = new Team(56, 8, "Seed Team D8", "#666");
        teams[57] = new Team(57, 9, "Seed Team D9", "#666");
        teams[58] = new Team(58, 10, "Seed Team D10", "#666");
        teams[59] = new Team(59, 11, "Seed Team D11", "#666");
        teams[60] = new Team(60, 12, "Seed Team D12", "#666");
        teams[61] = new Team(61, 13, "Seed Team D13", "#666");
        teams[62] = new Team(62, 14, "Seed Team D14", "#666");
        teams[63] = new Team(63, 15, "Seed Team D15", "#666");
        teams[64] = new Team(64, 16, "Seed Team D16", "#666");
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
        slots[134] = teams[16 + 32];
        slots[135] = teams[8 + 32];
        slots[136] = teams[9 + 32];
        slots[137] = teams[5 + 32];
        slots[138] = teams[12 + 32];
        slots[139] = teams[4 + 32];
        slots[140] = teams[13 + 32];
        slots[141] = teams[6 + 32];
        slots[142] = teams[11 + 32];
        slots[143] = teams[3 + 32];
        slots[144] = teams[14 + 32];
        slots[145] = teams[7 + 32];
        slots[146] = teams[10 + 32];
        slots[147] = teams[2 + 32];
        slots[148] = teams[15 + 32];


        slots[149] = teams[1 + 48];
        slots[150] = teams[16 + 48];
        slots[151] = teams[8 + 48];
        slots[152] = teams[9 + 48];
        slots[153] = teams[5 + 48];
        slots[154] = teams[12 + 48];
        slots[155] = teams[4 + 48];
        slots[156] = teams[13 + 48];
        slots[157] = teams[6 + 48];
        slots[158] = teams[11 + 48];
        slots[159] = teams[3 + 48];
        slots[160] = teams[14 + 48];
        slots[161] = teams[7 + 48];
        slots[162] = teams[10 + 48];
        slots[163] = teams[2 + 48];
        slots[164] = teams[15 + 48];
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
        var countDownDate = new Date("Mar 19, 2020 8:00:00").getTime();

        // Update the count down every 1 second
        Number.prototype.pad = function(size) {
            var s = String(this);
            while (s.length < (size || 2)) {
                s = "0" + s;
            }
            return s;
        }

        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            string = days.pad(2) + ":" + hours.pad(2) + ":" + minutes.pad(2) + ":" + seconds.pad(2);
            $("#date").html(string);
        }, 1000);
        fillSelect();

        function fillSelect() {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var bracket2 = this.responseText;
                    var bracket = JSON.parse(bracket2);
                    for (var i = 1; i <= Object.keys(bracket).length; i++) {
                        $("#select").append($('<option></option>').val(i).html("#" + i + ") " + bracket[i].name));

                    }
                }
            }
            xmlhttp.open("GET", "fetchbracket2.php", true);
            xmlhttp.send();
        }

        function fetchBracket(val) {
            console.log(val);
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var bracket2 = this.responseText;
                    var bracket = JSON.parse(bracket2);

                    if (bracket2 != "[]") {
                        $(".bracket").css("display", "block");
                        for (var i = 201; i <= 232; i++) {
                            console.log(bracket);
                            $("#" + i).html("<h3 class='seed1' style='background-color: " + teams[parseInt(bracket[i])].color + "'>" + teams[parseInt(bracket[i])].seed + "</h3><p class='teamname'>" + teams[parseInt(bracket[i])].name + "</p>");

                        }
                        for (var i = 301; i <= 316; i++) {
                            console.log(bracket);
                            $("#" + i).html("<h3 class='seed1' style='background-color: " + teams[parseInt(bracket[i])].color + "'>" + teams[parseInt(bracket[i])].seed + "</h3><p class='teamname'>" + teams[parseInt(bracket[i])].name + "</p>");

                        }
                        for (var i = 401; i <= 408; i++) {
                            console.log(bracket);
                            $("#" + i).html("<h3 class='seed1' style='background-color: " + teams[parseInt(bracket[i])].color + "'>" + teams[parseInt(bracket[i])].seed + "</h3><p class='teamname'>" + teams[parseInt(bracket[i])].name + "</p>");

                        }
                        for (var i = 501; i <= 504; i++) {
                            console.log(bracket);
                            $("#" + i).html("<h3 class='seed1' style='background-color: " + teams[parseInt(bracket[i])].color + "'>" + teams[parseInt(bracket[i])].seed + "</h3><p class='teamname'>" + teams[parseInt(bracket[i])].name + "</p>");

                        }
                        for (var i = 601; i <= 602; i++) {
                            console.log(bracket);
                            $("#" + i).html("<h3 class='seed1' style='background-color: " + teams[parseInt(bracket[i])].color + "'>" + teams[parseInt(bracket[i])].seed + "</h3><p class='teamname'>" + teams[parseInt(bracket[i])].name + "</p>");

                        }
                        for (var i = 701; i <= 701; i++) {
                            console.log(bracket);
                            $("#" + i).html("<h3 class='seed1' style='background-color: " + teams[parseInt(bracket[i])].color + "'>" + teams[parseInt(bracket[i])].seed + "</h3><p class='teamname'>" + teams[parseInt(bracket[i])].name + "</p>");
                            $("#" + i).css("background", "#eee");

                        }
                        $("#bracketName").html('"' + bracket['name'] + '"');
                        $("#totalPoints").html(bracket['total']);
                        if (bracket['right'] + bracket['wrong'] != 0) {
                            $("#accuracy").html(bracket['right'] / (parseInt(bracket['right']) + parseInt(bracket['wrong'])) * 100 + "%");
                        } else {
                            $("#accuracy").html("0%");
                        }

                        $("#points").html("Total Points: " + bracket['points']);
                    } else {

                    }
                }
            }
            xmlhttp.open("GET", "fetchbracket.php?id=" + val, true);
            xmlhttp.send();
        }

    </script>
</body>

</html>
