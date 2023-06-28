<!-- </?php get_header(); ?> -->
<main>archive.php</main>
<?php
var_dump($cat_id == 0);


//echo $cat_id;
//get_template_part("temp/_archive" , get_post_type());
get_template_part("temp/_archive-". get_post_type());
?>
<!-- </?php get_footer(); ?> -->