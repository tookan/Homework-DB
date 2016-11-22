<?php
try{
$connect= new PDO("mysql:dbname=stud0503_tookan;host=localhost","stud0503_tookan","zEQe4cDt");
}catch (PDOException $t){
    echo "we have an error".$t->getMessage();
}
$request="SELECT * FROM me";
foreach($connect->query($request) AS $row){
    for($i=0;$i<count($row['parent_id']);$i++){
    $menu[$row['parent_id']][$i]= $row['name'];
    }
}

var_dump($menu);
/*function treeBuild($items,$id){
    if(empty($items[$id])){
        return;
    }
for($i=1;$i<count($items[$i]);$i++){
    echo $items[$id][$i];
    treeBuild($items,$i);
}
}
echo $menu[1];
treeBuild($menu,0);*/
