<?php
function input($icon,$placeholder, $name,$value){
    $ele= "
    <div class=\"input-group flex-nowrap\">
        <span class=\"input-group-text bg-warning\" id=\"addon-wrapping\">$icon</i></span>
        
        <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" class=\"form-control\" placeholder='$placeholder' aria-label=\"Username\" 
        aria-describedby=\"addon-wrapping\">
    </div>
    
    
    ";
echo $ele;

}

function button($btnid,$styleclass,$text,$name,$attr){
    $btn = "
        <button name='$name' '$attr' class='$styleclass' id='$btnid'>$text</button>
    
    ";
    echo $btn;
}


?>