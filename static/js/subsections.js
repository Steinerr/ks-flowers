/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $('.li-section').on("click", function(){
        // Аяксом подтягивает подсекции из subsections.php
        var thisLi = $(this);
        var min_x = thisLi.attr('id').split('_')[1];
        var icon = $(this).find('i');
        var icon_class = icon.attr('class');
        
        // Эффект гармошки
        $('li.li-section').find('i').removeClass('icon-minus');
        $('li.li-section').find('i').addClass('icon-plus');
        $('li.li-section').find('ul.nav-list').slideUp();
        
        if(icon_class ==='icon-plus'){
            
            var elem = $(this).find('a');
            icon.removeClass('icon-plus');
            icon.addClass('icon-minus');
            
            if (thisLi.find('ul.nav-list').length === 0){
                
                $.ajax({
                    url: 'templates/_elements/sections/subsections.php',
                    type: 'POST',
                    data: {'min_x': min_x},
                    success: function(data){
                        elem.after(data);
                        thisLi.find('ul.nav-list').slideDown();
                    }
                });
                
            }
            thisLi.find('ul.nav-list').slideDown();
        }else{
            thisLi.find('ul.nav-list').slideUp();
        }
        
        return false;
    });
    
});