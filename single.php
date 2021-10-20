<!-- 
    
This page renders out single blog posts 

-->
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
    <section id="key-responsibilities-container" class="content-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div id="objectives">
                        <?php echo get_lzb_meta( 'margin-top' ); ?> 
                        <?php echo get_lzb_meta( 'objectives-title' ); ?>                  
                        <?php echo get_lzb_meta( 'objectives' ); ?>
                    </div>
                    <div id="key-responsibilities-text">
                        <?php echo get_lzb_meta( 'key-responsibilities-title' ); ?>
                        <?php echo get_lzb_meta( 'key-responsibilities' ); ?>
                    </div>
                </div>
                <div class="col-md-12 col-lg-7">
                    <div id="key-responsibilities-image">
                        <?php echo get_lzb_meta( 'image' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gutenburg-content-container" class="content-container">
        <div class="container-fluid">
            <div class="row">
                <?php the_content();?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>