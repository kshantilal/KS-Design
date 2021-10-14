<!-- 
    
This page renders out single blog posts 

-->
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<?php get_header(); ?>

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
    <section id="key-responsibilities-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div id="key-responsibilities-text">
                        <h2>Key Responsibilities</h2>
                        <?php echo get_lzb_meta( 'key-responsibilities' ); ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div id="key-responsibilities-image">
                        <?php echo get_lzb_meta( 'image' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php get_footer(); ?>