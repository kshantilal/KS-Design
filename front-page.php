<?php get_header(); ?>
    <div id="header-bg">
        <div class="container d-flex h-100">
            <div class="row align-items-center flex-wrap w-100">
                <div class="col-12 col-6 mx-auto">
                    <div id="header-info">
                        <h1 id="header-name-title">Hi, my names Kunal</h1>
                        <h2 id="header-job-title">UX & UI Designer</h2>
                        <h3 id="header-job-title-2">Front-end Developer</h3>
                        <a href="https://www.linkedin.com/in/kunalshantilal/" target="_blank"><i class="fab fa-2x fa-linkedin"></i></a><a href="https://github.com/kshantilal" target="_blank"><i class="fab fa-2x fa-github-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="about">    
        <div class="container d-flex justify-content-center h-100">
            <div class="row align-items-center flex-wrap w-100">
                <div class="col-sm-12 col-md-4 mx-auto">
                    <div id="profile-img">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/personal-photo.jpg'?>">
                    </div>
                </div>
                <div class="col-sm-12 col-md-8">
                    <div id="profile-content">
                        <h1>about.</h1>
                        <p>I am a passionate Digital Designer with over 4 years of experience in a multitude of areas including front-end web development, digital design, content creation, and POS. Advanced HTML and CSS, JavaScript and jQuery, PHP and WordPress CMS development as well as Adobe Creative Suite, are some of the key areas I have technical design expertise.</p>
                        <div class="text-center text-md-left">
                            <a class="btn" href="">Download CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-auto skills-container">
                <div class="col-4 col-sm-2 col-md-1">
                    <div class="skills">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/photoshop.svg' ?>" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-2 col-md-1">
                    <div class="skills">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/illustrator.svg' ?>" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-2 col-md-1">
                    <div class="skills">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/xd.svg' ?>" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-2 col-md-1">
                    <div class="skills">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/indesign.svg' ?>" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-2 col-md-1">
                    <div class="skills">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/aftereffects.svg' ?>" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-2 col-md-1">
                    <div class="skills">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/premiere_pro.svg' ?>" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-2 col-md-1">
                    <div class="skills">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/figma.svg' ?>" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-2 col-md-1">
                    <div class="skills">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/html.svg' ?>" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-2 col-md-1">
                    <div class="skills">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/css.svg' ?>" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-2 col-md-1">
                    <div class="skills">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/js.svg' ?>" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-2 col-md-1">
                    <div class="skills">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/php.svg' ?>" alt="">
                    </div>
                </div>
                <div class="col-4 col-sm-2 col-md-1">
                    <div class="skills">
                        <img src="<?php echo get_template_directory_uri() . '/public/img/wordpress.svg' ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="other">
                        <h2>other digs</h2>
                        <p>jQuery | Node.js | Sass | Bootstrap | JIRA | SEO | Google Analytics</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                        $all_categories = get_categories(array(
                            'hide_empty' => true,
                            'orderby' => 'id'
                        ));

                        ?>
                        <div id="mixer-button-container">
                        <?php foreach($all_categories as $category): ?>
                                <button type="button" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></button>
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
                                    
                                    <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo wp_get_attachment_url( $attachment_id );?>" alt="">
                                    <div class="project-info">
                                        <h3><?php the_title();?></h3>
                                        <p><?php the_field('project_blurb'); ?></p>
                                    </div>
                                    
                                    </a>
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

