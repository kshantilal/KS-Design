<?php get_header(); ?>
    <div id="header-bg">
        <div class="container d-flex h-100">
            <div class="row align-items-center justify-content-center flex-wrap w-100">

                <div class="col-lg-12 col-xl-5 order-1 order-xl-2">
                    <div id="profile-img">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/personal-photo.jpg'?>">
                    </div>
                </div>

                <div class="col-lg-12 col-xl-7 order-2 order-xl-1">
                    <div id="header-info">
                        <h1 id="header-name-title">Hi, I'm Kunal 👋</h1>
                        <p>I’m a Product Designer with 8 years’ experience designing SaaS products, specialising in native mobile apps. I’m driven by creating user-centred products that solve real-world problems and make a meaningful difference in people’s everyday lives.</p>
                        <div class="text-center text-md-left">
                            <a id="cv" class="btn" href="<?php echo get_template_directory_uri() . '/public/files/Kunal_Shantilal_CV_2026.pdf' ?>">View CV</a>
                        </div>
                        <a href="https://www.linkedin.com/in/kunalshantilal/" target="_blank"><i class="fab fa-2x fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- <div class="col-lg-12 col-xl-5">
                    <div id="profile-img">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/personal-photo.jpg'?>">
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="my-work">
                        <h1>my work.</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <div class="controls text-center">
                <?php
                $desired_order = ['mobile', 'web', 'graphic'];

                $all_categories = get_categories(array(
                    'hide_empty' => true
                ));

                // Sort categories by desired order
                usort($all_categories, function ($a, $b) use ($desired_order) {
                    $pos_a = array_search($a->slug, $desired_order);
                    $pos_b = array_search($b->slug, $desired_order);

                    // Categories not in the list go to the end
                    $pos_a = $pos_a === false ? PHP_INT_MAX : $pos_a;
                    $pos_b = $pos_b === false ? PHP_INT_MAX : $pos_b;

                    return $pos_a <=> $pos_b;
                });
                ?>

                <div id="mixer-button-container">
                    <?php foreach ($all_categories as $category): ?>
                        <button type="button" data-filter=".<?php echo esc_attr($category->slug); ?>">
                            <?php echo esc_html($category->name); ?>
                        </button>
                    <?php endforeach; ?>
                </div>
                </div>
                </div>
            </div>
            <div class="row" id="mixer-cont">
                 <!-- Iterate through each post -->
                <?php while(have_posts()) : the_post(); ?>
                <!-- Gets the URL of the custom image for the post -->
                <?php 
                    $id = get_the_ID();
                    $banner_img = get_post_meta($id, 'post_banner_img', true);	
                    $banner_img = explode(',', $banner_img);
                ?>
                <?php
                $categories = get_the_category();
                $slugs = wp_list_pluck($categories, 'slug');
                $class_names = join(' ', $slugs);
                ?>
                    <div class="col-sm-12 col-md-6 mix<?php if ($class_names) { echo ' ' . $class_names;} ?> ">
                        <div class="single-project">          
                            <?php if( !empty($banner_img) ) :?>
                                <?php foreach ( $banner_img as $attachment_id ) :?>
                                <?php
                                $disable_link = get_field('disable_link'); // true/false from ACF
                                ?>
                                <?php if (!$disable_link): ?>
                                    <?php // Functionality to disable projects using Custom Fields ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo esc_url(wp_get_attachment_url($attachment_id)); ?>" alt="">
                                        <div class="project-info">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php the_field('project_blurb'); ?></p>
                                        </div>
                                    </a>
                                <?php else: ?>
                                    <div class="project-card is-disabled">
                                        <img src="<?php echo esc_url(wp_get_attachment_url($attachment_id)); ?>" alt="">
                                        <div class="project-info">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php the_field('project_blurb'); ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php endforeach;?> 
                            <?php endif; ?>
                           
                         </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" id="contact-container">
                    <div id="contact-info">
                        <h2><i class="fas fa-paper-plane"></i>Get in touch</h2>
                    </div>
                    <div id="contact-form">
                        <?php echo do_shortcode('[wpforms id="126" title="false"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
<?php get_footer(); ?>

