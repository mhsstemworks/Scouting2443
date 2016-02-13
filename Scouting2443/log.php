<html>
<body>
<title>Thank you</title>
    <form action="http://10.24.43.31/page.html">
    <input type="submit" value="Go to log in">
                                    </form>                                             

</body>
</html>

  <?php

	$matchNumber = $_POST["matchNumber"];
	$teamNumber = $_POST["teamNumber"];
	$startingPosition = $_POST["startingPosition"];
	$aReach = $_POST["aReach"];
	$aCross = $_POST["aCross"];
	$aLowGoal = $_POST["aLowGoal"];
	$aHighGoal = $_POST["aHighGoal"];
	$aHighGoalMiss = $_POST["aHighGoalMiss"];
	$tCross = $_POST["tCross"];
	$tLowGoal = $_POST["tLowGoal"];
	$tHighGoal = $_POST["tHighGoal"];
	$tHighGoalMiss = $_POST["tHighGoalMiss"];
	$primaryPosition = $_POST["primaryPosition"];
	$challenge = $_POST["challenge"];
	$scale = $_POST["scale"];
	$noShow = $_POST["noShow"];
	$deadRobot = $_POST["deadRobot"];
	$foul = $_POST["foul"];
	$techFoul = $_POST["techFoul"];
	$yellowCard = $_POST["yellowCard"]; 
	$redCard = $_POST["redCard"];
	$comments = $_POST["comments"];

$list = array(array($matchNumber,$teamNumber,$startingPosition,$aReach,$aCross,$aLowGoal,$aHighGoal,$aHighGoalMiss,$tCross,$tLowGoal,$tHighGoal,$tHighGoalMiss,$primaryPosition,$challenge,$scale,$noShow,$deadRobot,$foul,$techFoul,$yellowCard,$redCard,$comments));

$fp = fopen("list.csv","a");

  foreach ($list as $fields)
  {
  	fputcsv($fp,$fields);
  }

fclose($fp); 

?>
