<div class="row-fluid">
    <h2>Последние поступления</h2>
    <?php
        for($i=1; $i<=2; $i++){
            // Строка из 3-х картинок с информацией
            echo '<div class="row-image">';
            
            for($j=1; $j<=3; $j++){
                // Блок с картинкой
                echo '<div class="span4 block deb">';
                echo '<img src="static/img/flowers/fl1.jpeg" class="image">';
                echo '<p class="price">850 <span>руб.</span></p>';
                //Блок с информаией о картинке
                echo '<div class="img-info"><p><a href="#">Глупое название</a></p><p>Стоимость: <s>820 р.</s>/ 500 р.</p></div>';
                echo '</div>';
            }
            
            echo '</div>';
        }
    ?>
    <div><a href="#" class="btn more">Еще</a></div>
    
    <h2>Скидки</h2>
    <?php
        for($i=1; $i<=2; $i++){
            // Строка из 3-х картинок с информацией
            echo '<div class="row-image">';
            
            for($j=1; $j<=3; $j++){
                // Блок с картинкой
                    echo '<div class="span4 block deb">';
                        echo '<img src="static/img/flowers/fl1.jpeg" class="image">';
                        echo '<p class="price">850 <span>руб.</span></p>';
                        //Блок с информаией о картинке
                        echo '<div class="img-info"><p><a href="#">Глупое название</a></p><p>Стоимость: <s>820 р.</s>/ 500 р.</p></div>';
                    echo '</div>';
            }
            
            echo '</div>';
        }
    ?>
    <div><a href="#" class="btn more">Еще</a></div>
</div>