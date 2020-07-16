<?php
$text = '{"id":1,"seed":1,"name":"Duke","color":"#003087"},{"id":2,"seed":2,"name":"Michigan State","color":"#18453b"},{"id":3,"seed":3,"name":"LSU","color":"#461d7c"},{"id":4,"seed":4,"name":"Virginia Tech","color":"#630031"},{"id":5,"seed":5,"name":"Mississippi State","color":"#660000"},{"id":6,"seed":6,"name":"Maryland","color":"#e03a3e"},{"id":7,"seed":7,"name":"Louisville","color":"#c9001f"},{"id":8,"seed":8,"name":"VCU","color":"#ffb300"},{"id":9,"seed":9,"name":"UCF","color":"#ba9b37"},{"id":10,"seed":10,"name":"Minnesota","color":"#7a0019"},{"id":11,"seed":11,"name":"Temple/Belmont","color":"#666"},{"id":12,"seed":12,"name":"Liberty","color":"#002d62"},{"id":13,"seed":13,"name":"Saint Louis","color":"#003da5"},{"id":14,"seed":14,"name":"Yale","color":"#00356b"},{"id":15,"seed":15,"name":"Bradley","color":"#a50000"},{"id":16,"seed":16,"name":"NCC/NDST","color":"#666"},{"id":17,"seed":1,"name":"Virginia","color":"#666"},{"id":18,"seed":2,"name":"Tennessee","color":"#666"},{"id":19,"seed":3,"name":"Purdue","color":"#666"},{"id":20,"seed":4,"name":"Kansas State","color":"#666"},{"id":21,"seed":5,"name":"Wisconsin","color":"#666"},{"id":22,"seed":6,"name":"Villanova","color":"#666"},{"id":23,"seed":7,"name":"Cincinnati","color":"#666"},{"id":24,"seed":8,"name":"Ole Miss","color":"#666"},{"id":25,"seed":9,"name":"Oklahoma","color":"#666"},{"id":26,"seed":10,"name":"Iowa","color":"#666"},{"id":27,"seed":11,"name":"Saint Mary\'s","color":"#666"},{"id":28,"seed":12,"name":"Oregon","color":"#666"},{"id":29,"seed":13,"name":"UC Irvine","color":"#666"},{"id":30,"seed":14,"name":"Old Dominion","color":"#666"},{"id":31,"seed":15,"name":"Colgate","color":"#666"},{"id":32,"seed":16,"name":"Gardner-Webb","color":"#666"},{"id":33,"seed":1,"name":"Gonzaga","color":"#666"},{"id":34,"seed":2,"name":"Michigan","color":"#666"},{"id":35,"seed":3,"name":"Texas Tech","color":"#666"},{"id":36,"seed":4,"name":"Florida State","color":"#666"},{"id":37,"seed":5,"name":"Marquette","color":"#666"},{"id":38,"seed":6,"name":"Buffalo","color":"#666"},{"id":39,"seed":7,"name":"Nevada","color":"#666"},{"id":40,"seed":8,"name":"Syracuse","color":"#666"},{"id":41,"seed":9,"name":"Baylor","color":"#666"},{"id":42,"seed":10,"name":"Florida","color":"#666"},{"id":43,"seed":11,"name":"ASU/St. Johns","color":"#666"},{"id":44,"seed":12,"name":"Murrary State","color":"#666"},{"id":45,"seed":13,"name":"Vermont","color":"#666"},{"id":46,"seed":14,"name":"Northern Kentucky","color":"#666"},{"id":47,"seed":15,"name":"Montana","color":"#666"},{"id":48,"seed":16,"name":"FDU/PV A&M","color":"#666"},{"id":49,"seed":1,"name":"North Carolina","color":"#666"},{"id":50,"seed":2,"name":"Kentucky","color":"#666"},{"id":51,"seed":3,"name":"Houston","color":"#666"},{"id":52,"seed":4,"name":"Kansas","color":"#666"},{"id":53,"seed":5,"name":"Auburn","color":"#666"},{"id":54,"seed":6,"name":"Iowa State","color":"#666"},{"id":55,"seed":7,"name":"Wofford","color":"#666"},{"id":56,"seed":8,"name":"Utah State","color":"#666"},{"id":57,"seed":9,"name":"Washington","color":"#666"},{"id":58,"seed":10,"name":"Seton Hall","color":"#666"},{"id":59,"seed":11,"name":"Ohio State","color":"#666"},{"id":60,"seed":12,"name":"New Mexico State","color":"#666"},{"id":61,"seed":13,"name":"Northeastern","color":"#666"},{"id":62,"seed":14,"name":"Georgia State","color":"#666"},{"id":63,"seed":15,"name":"Abilene Christian","color":"#666"},{"id":64,"seed":16,"name":"Iona","color":"#666"}"';
$teams = json_decode($text);
print_r($teams[0]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</head>
<body>
    <select name="101" id='101' onchange="updateBracket(this)">
       <option value="">Select Team</option>
        <option value="1">Duke</option>
        <option value="2">Kansas</option>
    </select>
    <select name="102" id='102' onchange="updateBracket(this)">
       <option value="">Select Team</option>
        <option value="3">Kentucky</option>
        <option value="4">Gonzaga</option>
    </select>
<select name="201" id='201' onchange="updateBracket(this)">
   <option value="">Select Team</option>
    </select>
</body>
<script>
    function updateBracket(game){
        var id = game.id;
        var value = game.value;
        console.log("Value:" + value);
        var nextID = Math.ceil((this.id % 100)/2) + Math.ceil(this.id / 100.0) * 100;
        $("#nextID").append("<option value=" + value + ">Kansas</option>");
    }
     
    </script>
</html>