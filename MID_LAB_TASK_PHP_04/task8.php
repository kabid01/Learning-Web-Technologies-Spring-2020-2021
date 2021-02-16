<?php
$ab = array
(
  array(1,2,3,"A"),
  array(1,2,"B","C"),
  array(1,"D","E","F")
);
  
echo $ab[0][0]."".$ab[0][1]."".$ab[0][2]."<br>";
echo $ab[1][0]."".$ab[1][1]."<br>";
echo $ab[2][0]."<br>";

 for($i=0;$i<=2;++$i)
 {
        for($j=0;$j<=1;++$j)
        {
            echo $ab[$i][$j];
        }
         echo "<br>";
    }

    $ba='A';
    for($i=0;$i<=3;$i++){
        for($j=0;$j<$i;$j++)
        {
            echo($ba++);
        }
        echo("\n");
    }

?>