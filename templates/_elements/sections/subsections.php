<?php
    $min_x = (int)$_POST['min_x'];
    echo '<ul class="nav nav-list" style="display: none;">';
    for($x=0; $x<5; $x++){
        echo '<li><a href="#">подсекция '.$min_x.$x.'</a></li>';
    };
    echo '</ul>';
?>
