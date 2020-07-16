<?php include "connection.php";
$q = "SELECT * FROM brackets WHERE id ='" . $_GET['id'] . "'";
$res = mysqli_query($connection, $q);
$arr = [];
if($res){
    while($row = mysqli_fetch_assoc($res)){
        $arr['name'] = $row['name'];
        $arr['points'] = $row['points'];
        $arr['total'] = $row['total'];
        $arr['right'] = $row['right'];
        $arr['wrong'] = $row['wrong'];
        for($i = 201; $i <= 232; $i++){
            $arr[$i] = $row[$i];
        }
        for($i = 301; $i <= 316; $i++){
            $arr[$i] = $row[$i];
        }
        for($i = 401; $i <= 408; $i++){
            $arr[$i] = $row[$i];
        }
        for($i = 501; $i <= 504; $i++){
            $arr[$i] = $row[$i];
        }
        for($i = 601; $i <= 602; $i++){
            $arr[$i] = $row[$i];
        }
        for($i = 701; $i <= 701; $i++){
            $arr[$i] = $row[$i];
        }
    }
    $json = json_encode($arr);
    echo $json;
}else{
    echo "";
}
?>
