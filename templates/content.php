<div class="row-fluid">
    <h2>Последние поступления</h2>
    <?php
        $connection = @mysql_connect('localhost', 'root', 'YtJnlfv13');
        @mysql_select_db("ks-flowers", $connection);
        mysql_db_query("ks-flowers", "SET NAMES utf8");
        mysql_db_query("ks-flowers", "SET collation_connection = 'utf8_general_ci'"); 
        $res = @mysql_query("SELECT * FROM `product` LIMIT 0, 30 ", $connection);
        $x = 0;
        for($i=1; $i<=2; $i++){
            // Строка из 3-х картинок с информацией
            echo "<div class='row-image'>";
            
            for($j=1; $j<=3; $j++){
                // Блок с картинкой
//                    $price = rand(50, 2000);
                    $image = @mysql_result($res, $x, 'image');
                    $price = @mysql_result($res, $x, 'price');
                    $currency = @mysql_result($res, $x, 'currency');
                    $title = @mysql_result($res, $x, 'title');
                    $description = @mysql_result($res, $x, 'short_description');
                    
                    echo "<div class='span4 block'>";
                        echo "<img src='$image' class='image'>";
                        echo "<p class='price'>$price <span>$currency</span></p>";
                        echo "<div class='ending-price end-price'></div>";
                        echo "<div class='ending-price home-price'></div>";
                        //Блок с информаией о картинке
                        echo "<div class='img-info'><p><a href='#'>$title</a></p><p>$description</p></div>";
                    echo "</div>";
                    $x++;
            }
            
            echo "</div>";
        }
    @mysql_close($connection);
    ?>
    <div><a href="#" class="btn more">Еще</a></div>
    
    <h2>Скидки</h2>
    <?php
        $connection = @mysql_connect('localhost', 'root', 'YtJnlfv13');
        @mysql_select_db("ks-flowers", $connection);
        mysql_db_query("ks-flowers", "SET NAMES utf8");
        mysql_db_query("ks-flowers", "SET collation_connection = 'utf8_general_ci'"); 
        $res = @mysql_query("SELECT * FROM `product` LIMIT 0, 30 ", $connection);
        $x = 0;
        for($i=1; $i<=2; $i++){
            // Строка из 3-х картинок с информацией
            echo "<div class='row-image'>";
            
            for($j=1; $j<=3; $j++){
                // Блок с картинкой
//                    $price = rand(50, 2000);
                    $image = @mysql_result($res, $x, 'image');
                    $price = @mysql_result($res, $x, 'price');
                    $currency = @mysql_result($res, $x, 'currency');
                    $title = @mysql_result($res, $x, 'title');
                    $description = @mysql_result($res, $x, 'short_description');
                    
                    echo "<div class='span4 block'>";
                        echo "<img src='$image' class='image'>";
                        echo "<p class='price'>$price <span>$currency</span></p>";
                        echo "<div class='ending-price end-price'></div>";
                        echo "<div class='ending-price home-price'></div>";
                        //Блок с информаией о картинке
                        echo "<div class='img-info'><p><a href='#'>$title</a></p><p>$description</p></div>";
                    echo "</div>";
                    $x++;
            }
            
            echo "</div>";
        }
    @mysql_close($connection);
    ?>
    <div><a href="#" class="btn more">Еще</a></div>  
</div>