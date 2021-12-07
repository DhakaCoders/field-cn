<?php 
/*Template Name: Thankyou*/
get_header();
$thisID = get_the_ID();
$intro = get_field('introsec', $thisID);
?>

<?php get_footer(); ?>