<?php
/*
    Template Name: Product Design template
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
    <section id="project-header-container" class="project-intro-container hero-dark position-relative">
        <div id="project-text-container">
            <div class="row">
                <div class="col-md-12">
                    <div id="project-title" class="pb-2 container">
                        <h1><?php the_title();?></h1>
                        <p><?php echo get_lzb_meta( 'project-subtext' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center" id="project-intro-container">
                    <div class="col-lg-12 col-xl-8">
                    <?php
                        $image_raw = get_post_meta(get_the_ID(), 'image', true);

                        if ($image_raw) {
                        $image = json_decode(urldecode($image_raw), true);
                        $id = (int) ($image['id'] ?? 0);

                        if ($id) {
                            echo wp_get_attachment_image($id, 'full', false, ['class' => 'img-fluid project-image']);
                        }
                        }
                        ?>
                    </div>
                    <div class="col-lg-12 col-xl-4 project-intro">
                        <div class="pb-5">
                            <h3>Role</h3>
                            <p><?php echo get_lzb_meta( 'role' ); ?></p>
                            <div class="border-top my-4" style="width: 40px;"></div>
                        </div>
                       <div class="pb-5">
                            <h3>Team</h3>
                            <p><?php echo get_lzb_meta( 'team' ); ?></p>
                            <div class="border-top my-4" style="width: 40px;"></div>
                        </div>
                        <div class="pb-0">
                            <h3>Stakeholders</h3>
                            <p><?php echo get_lzb_meta( 'stakeholders' ); ?></p>
                        </div>
                    </div>
            </div>
        </div>
        <div class="wave-divider">
            <svg viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
                <path d="M0,64 C240,128 480,0 720,64 C960,128 1200,0 1440,64 L1440,120 L0,120 Z"></path>
             </svg>
         </div>
    </section>

<section id="gutenburg-content-container" class="content-container2">
  <div class="container-fluid">
    <div class="row">
      <div class="container">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>