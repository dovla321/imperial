<?php
/*
Template Name: Page
 */

$title = get_field('main_title');
$content = get_field('content');
$image = get_field('image');


get_header();
?>

<section class="blog-sin">
    <div class="container">
        
        <h5><?php echo get_the_date('d/m/Y h:i:s');?></h5>
        <img src="<?php echo $image;?>">
        <h1><?php echo $title;?></h1>
        <p><?php echo $content;?></p>

        <?php 
    $fname=get_the_author_meta('first_name');
    $lname=get_the_author_meta('last_name');

    ?>


    Posted by <a href=""><?php echo $fname;?> <?php echo $lname;?></a></p>
        
    </div>
</section>





<?php get_footer();?>