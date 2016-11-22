<?php
try{
$connect= new PDO("mysql:dbname=stud0503_tookan;host=localhost","stud0503_tookan","zEQe4cDt");
}catch (PDOException $t){
    echo "we have an error".$t->getMessage();
}
$request="SELECT * FROM me";
$row=$connect->query($request);
while ($arr=$row->fetch(PDO::FETCH_ASSOC)){
    
     $category[$arr['parent_id']][$arr['id']]=$arr['name'];
    
   }
//var_dump(count($category[1]);
function treeBuild($items,$id){
    if(empty($items[$id])){
        return;
    }
    echo '<ul>';
for($i=1;$i<=/*count($items[$id])*/6;$i++){
   if ($items[$id][$i]==NULL){
       continue;
   }
  echo '<a href="'.$items[$id][$i].'">'.$items[$id][$i].'</a>';
    treeBuild($items,$i);
     }
echo '</ul>';
}

treeBuild($category,0);
