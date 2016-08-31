<?php 
add_filter('wp_mail_from', 'new_mail_from');
add_filter('wp_mail_from_name', 'new_mail_from_name');

function new_mail_from($old) {
 return 'tachiraproduce.master@gmail.com';
}
function new_mail_from_name($old) {
 return 'Tachira Produce y Exporta';
}
 ?>