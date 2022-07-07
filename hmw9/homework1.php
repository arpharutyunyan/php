<?php

    mkdir("copy");

    for($i=0; $i<5; $i++){
        copy("test.txt", "copy/copy".$i.".txt");
    }

?>