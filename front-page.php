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
                <?php while (have_posts()) : the_post(); ?>
                <?php
                    $id = get_the_ID();

                    // MixItUp category classes (mobile/web/graphic)
                    $categories  = get_the_category();
                    $slugs       = wp_list_pluck($categories, 'slug');
                    $class_names = join(' ', $slugs);

                    // Meta: IDs + URLs
                    $banner_meta = get_post_meta($id, 'post_banner_img', true);
                    $banner_urls = get_post_meta($id, 'post_banner_img_urls', true);

                    $banner_items = array_filter(array_map('trim', explode(',', (string) $banner_meta)));
                    $url_items    = array_filter(array_map('trim', explode(',', (string) $banner_urls)));

                    $src = '';
                    $attachment_id_for_alt = 0;

                    // 1) Try IDs first
                    foreach ($banner_items as $item) {
                    if (is_numeric($item)) {
                        $src = wp_get_attachment_url((int) $item);
                        if ($src) {
                        $attachment_id_for_alt = (int) $item;
                        break;
                        }
                    }
                    }

                    // 2) Fallback to URLs (supports absolute OR relative)
                    if (!$src) {
                    foreach ($url_items as $u) {
                        $u = trim($u);
                        if (!$u) continue;

                        // If it's a relative path like /wp-content/uploads/...
                        if (strpos($u, '/wp-content/') !== false) {
                            // Strip any subdirectory like /portfolio
                            $relative = strstr($u, '/wp-content/');
                            $src = home_url($relative);
                            break;
                        }

                        // If it's a full URL
                        if (filter_var($u, FILTER_VALIDATE_URL)) {
                        $src = $u;
                        break;
                        }
                    }
                    }

                    // Alt text (only if we have an attachment ID)
                    $alt = '';
                    if ($attachment_id_for_alt) {
                    $alt = get_post_meta($attachment_id_for_alt, '_wp_attachment_image_alt', true);
                    }

                    $disable_link = get_field('disable_link'); // ACF true/false
                ?>
                <?php if (current_user_can('manage_options')): ?>

                <?php endif; ?>

                <div class="col-sm-12 col-md-6 mix<?php echo $class_names ? ' ' . esc_attr($class_names) : ''; ?>">
                    <div class="single-project">

                    <?php if ($src): ?>
                        <?php if (!$disable_link): ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo esc_url($src); ?>" alt="<?php echo esc_attr($alt); ?>">
                            <div class="project-info">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_field('project_blurb'); ?></p>
                            </div>
                        </a>
                        <?php else: ?>
                        <div class="project-card is-disabled">
                            <img src="<?php echo esc_url($src); ?>" alt="<?php echo esc_attr($alt); ?>">
                            <div class="project-info">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_field('project_blurb'); ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
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

