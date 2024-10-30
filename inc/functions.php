<?php 
global $mig_proteam;




/*================================== EDITOR BUTTON ====================================*/
// add new buttons
add_action('media_buttons', 'migcontactmaganer_editor_button');

function migcontactmaganer_editor_button() {
    echo '<div id="migcontactmaganer_shortcode_generator" class="button dashicons-before dashicons-id-alt dashicons-id-alt"><div class="migcontactmaganer_shortcode_text">ProTeam</div></div>';
}



?>