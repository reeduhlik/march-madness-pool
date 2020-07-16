<?php include "connection.php";
$q = "SELECT * FROM brackets";
$res = mysqli_query($connection, $q);
$arr = [];
if($res){
    while($row = mysqli_fetch_assoc($res)){
        $arr[$row['id']]['name'] = $row['name'];
        $arr[$row['id']]['points'] = $row['points'];
        for($i = 201; $i <= 232; $i++){
            $arr[$row['id']][$i] = $row[$i];
        }
        for($i = 301; $i <= 316; $i++){
            $arr[$row['id']][$i] = $row[$i];
        }
        for($i = 401; $i <= 408; $i++){
            $arr[$row['id']][$i] = $row[$i];
        }
        for($i = 501; $i <= 504; $i++){
            $arr[$row['id']][$i] = $row[$i];
        }
        for($i = 601; $i <= 602; $i++){
            $arr[$row['id']][$i] = $row[$i];
        }
        for($i = 701; $i <= 701; $i++){
            $arr[$row['id']][$i] = $row[$i];
        }
    }
    $json = json_encode($arr);
    echo $json;
}else{
    echo "";
}
?>
