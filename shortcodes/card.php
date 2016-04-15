<?php

function card_shortcode($atts, $content){
    $atts = shortcode_atts(array(
        "profil" => get_template_directory_uri()."/img/profil.png",
        "name" => "NOM",
        "job" => "Your JOB",
        "email" => "EMAIL",
        "phone" => "PHONE"
        ), $atts);
    
 return
'
<div class="card">
<img class="profil-img" src="'.$atts["profil"].'" />
<div class="infos-profil">
<label>'.$atts["name"].'</label>
<label>'.$atts["job"].'</label>
<label>'.$atts["email"].'</label>
<label>'.$atts["phone"].'</label>
</div>
<article>'.$content.'</article></div>';
    
} add_shortcode("card", "card_shortcode");