<html>
<body>
<title>Thank you</title>
    <form action="http://10.24.43.41/index.html">
    <input type="submit" value="Go to log in">
                                    </form>                                            

    
    
</body>
</html>

  <?php

 $matchNumber = $_POST["matchNumber"];
 $teamNumber = $_POST["teamNumber"];
 $startingPosition = $_POST["startingPosition"];
 $aRobot = $_POST["aRobot"];
 $aTotes = $_POST["aTotes"];
 $aContainers = $_POST["aContainers"];
 $aStackedTote = $_POST["aStackedTote"];
 $tTotes = $_POST["tTotes"];
 $tContainerLevel = $_POST["tContainerLevel"];
 $tContainerLitter = $_POST["tContainerLitter"];
 $primaryZone = $_POST["primaryZone"];
 $highestLevel = $_POST["highestLevel"];
 $tCooperitionTotes = $_POST["tCooperitionTotes"];
 $tCooperitionStack = $_POST["tCooperitionStack"];
 $noShow = $_POST["noShow"];
 $deadRobot = $_POST["deadRobot"];
 $comments = $_POST["comments"];

$list = array(array($matchNumber,$teamNumber,$startingPosition,$aRobot,$aTotes,$aContainers,$aStackedTote,$tTotes,$tContainerLevel,$tContainerLitter,$primaryZone,$highestLevel,$tCoopertitionTotes,$tCooperationStack,$noShow,$deadRobot,$comments));

$fp = fopen("list.csv","a");

  foreach ($list as $fields)
  {
  fputcsv($fp,$fields);
  }


              

fclose($fp); 
