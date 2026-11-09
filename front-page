
<?php
/**
 * Team G Portfolio Homepage
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="portfolio-header">
    <a class="portfolio-logo" href="<?php echo esc_url(home_url('/')); ?>">
        TEAM<span>GENE</span>
    </a>

    <nav class="portfolio-nav" aria-label="Main navigation">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
        <a href="<?php echo esc_url(home_url('/team/')); ?>">Team</a>
        <a href="<?php echo esc_url(home_url('/projects/')); ?>">Projects</a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
    </nav>
</header>

<main class="portfolio-home">

    <section class="portfolio-hero">
        <p class="portfolio-eyebrow">WELCOME TO OUR PORTFOLIO</p>

        <h1>WE ARE <span>TEAMGENE.</span></h1>

        <p class="portfolio-description">
            Four creative minds working together to build
            innovative digital experiences.
        </p>

        <div class="portfolio-actions">
            <a class="portfolio-btn primary"
               href="<?php echo esc_url(home_url('/team/')); ?>">
                Meet Our Team
            </a>

            <a class="portfolio-btn secondary"
               href="<?php echo esc_url(home_url('/projects/')); ?>">
                Explore Projects
            </a>
        </div>
    </section>

    <section class="portfolio-sections">

        <a class="portfolio-section-card"
           href="<?php echo esc_url(home_url('/about/')); ?>">
            <span>01 / ABOUT</span>
            <h2>Who We Are</h2>
            <p>Discover our story, goals and passion.</p>
        </a>

        <a class="portfolio-section-card"
           href="<?php echo esc_url(home_url('/team/')); ?>">
            <span>02 / TEAM</span>
            <h2>Meet the Members</h2>
            <p>Get to know the people behind Team G.</p>
        </a>

        <a class="portfolio-section-card"
           href="<?php echo esc_url(home_url('/projects/')); ?>">
            <span>03 / PROJECTS</span>
            <h2>Our Work</h2>
            <p>Explore our projects and creative solutions.</p>
        </a>

    </section>

</main>

<footer class="portfolio-footer">
    <p>&copy; <?php echo esc_html(date('Y')); ?> TeamGene Portfolio. All rights reserved.</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
