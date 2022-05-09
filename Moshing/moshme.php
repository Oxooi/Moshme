<?php

function openfil($file){
    $final = "moshed.png";
    $output = strtok($file , ".");
    $bc = $output."_backup.png";

    if(file_exists($file)){

        $content = file_get_contents($file);

        $upper = strlen($content);
        $random_position = rand(0,$upper);
        $mosh = rand(0,51);
        $a_z = " _*/ -";
        $rand_char = $a_z[$mosh];
        $newstring = substr_replace($content, $rand_char, $random_position, 0);

        $fp = fopen($final, "w");
        fwrite($fp, $newstring);
        fclose($fp);
        echo ($final . " has  been created !");
        return true;
        
    } else {

        echo "This file doesn't exist !";
        return false;

    }
}

openfil("image.png");