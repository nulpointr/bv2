
<?php
    /**

    Template Name: No Image Page

    **/
    get_header();  
?>
<?php
    
  if($post->post_parent)
    $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  else
    $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
?>
    <div id="subNav">
        <div class="contentWrapper">
            <ul>
                <?php echo $children; ?>
            </ul>
        </div>
    </div>
    <section id="wrapper">
        <?php get_template_part( 'loop', 'emptypage' ); ?>
    </section>
<?php get_footer(); ?>
