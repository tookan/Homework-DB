<?php
try{
$connect= new PDO("mysql:dbname=stud0503_tookan;host=localhost","stud0503_tookan","zEQe4cDt");
}catch (PDOException $t){
    echo "we have an error".$t->getMessage();
}
$sql = 'SELECT * FROM me ORDER BY id ASC';

/*while ($arr=$request->fetch(PDO::FETCH_ASSOC)){
     $i=0;
     $category[$arr['parrent_id']][$arr['id']]=$arr['name'];
     $i++;
   }*/
foreach ($request= $connect->query($sql) as $row){
    $category[$arr['parrent_id']][$arr['id']]=$arr['name'];
} 

/*function treeBuild($category,$parent_id=0){
    if (empty($category($parent_id))){
        return;
    }
    for ($i=0;$i<count($category[$parent_id]);$i++){
        echo $category[$parent_id][$i];
         treeBuild($category,$i);
    }
}
treeBuild($category);*/
var_dump($category);