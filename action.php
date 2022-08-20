<?php
if(isset($_GET['name'])){
    $name = $_GET['name'];
    if($name == 'Sober'){
        echo "<img src= 'mingjun.jpeg'>";
        echo"<br>";
        echo "<a href= 'index.html' > Homeee </a>";
    }else{
        echo "<img src= 'mingjun2.jpg'>";
        echo "<a href= 'index.html' > Home </a>";
    }
   
}

?>