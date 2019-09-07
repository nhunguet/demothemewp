<html>
<head> 
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/style.css">
</head>
<?php wp_head();?>
        <div>
            <?php get_sidebar('left'); ?>
            
            <?php get_sidebar('right'); ?>
        </div>
<?php wp_footer(); ?>
</html>