<?php get_header();?>
    <div class="container d-flex h-100">
        <div class="row align-items-center flex-wrap w-100">
            <div class="col-12  mx-auto">
                <div class="lost-text text-center">
                    <h1>Oops, looks like you're lost.</h1>
                    <p>The page you were looking for was not found or no longer exists. Make sure the URL is spelled correctly, or go back and try again.</p>
                    <div class="text-center">
                        <a class="btn" href="<?php echo esc_url( home_url('/') ); ?>">Go back to homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>