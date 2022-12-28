<?php 
    

    echo "before: " .$php_errormsg .PHP_EOL;

    @$value = 1 / 0;

    echo "after: " .$php_errormsg .PHP_EOL;