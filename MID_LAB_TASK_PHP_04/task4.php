<?php

    $ab=11;
    $bc=35;
    $cd=22;

   

    if($ab>$bc)
    {
        if($ab>$cd)
        {
            echo" The Largest Number Is : $ab";
        }
        else
        {
            echo" The Largest Number Is : $cd";
        }
    }
    else
    {
        if($bc>$cd)
        {
            echo" The Largest Number Is : $bc";
        }
        else
        {
            echo"The Largest Number Is : $cd";
        }
    }

?>