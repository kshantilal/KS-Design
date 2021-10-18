<?php
/*
    Template Name: Graphic project template
    Template Post Type: post
*/
 ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<?php get_header(); ?>
    <div id="Lightbox">
        <div id="Lightbox-Content">
            <i class="fa fa-times close-button"></i>
            <img id="Lightbox-Image">
        </div>
    </div>
    <section id="project-header-container">
        <div id="project-text-container" class="container">
            <div class="row">
                <div class="col-12">
                        <div id="project-title">
                            <h1><?php the_title();?></h1>
                            <p><?php echo get_lzb_meta( 'project-subtext' ); ?></p>
                        </div>
                        <div id="header-cta">
                            <?php echo get_lzb_meta( 'cta' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="featured-image-container" class="featured-image-parent">
            <div id="featured-image" style="background-image: url('<?php echo $backgroundImg[0] ?>');"></div>
        </div>
    </section>
    <section id="gutenburg-content-container" class="content-container2">
        <div class="container-fluid">
            <div class="row">
                <?php the_content();?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>