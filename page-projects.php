
<?php
/**
 * Template Name: TeamGene Projects
 * Template Post Type: page
 */



/* ADD YOUR PROJECTS HERE */
$projects = [
    [
        'number' => '01',
        'title' => 'Our First Project',
        'category' => 'Web Development',
        'description' => 'A collaborative project created by TeamGene, combining design, development and problem-solving skills.',
        'image' => 'project1.jpg',
        'link' => ''
    ]
];
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
    <a class="portfolio-logo"
       href="<?php echo esc_url(home_url('/')); ?>">
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


<main class="teamgene-projects">

    <!-- HERO SECTION -->
    <section class="projects-hero">
        <div class="projects-container">

            <p class="projects-eyebrow">
                WELCOME TO OUR WORK
            </p>

            <h1>
                OUR <span>PROJECTS.</span>
            </h1>

            <p class="projects-intro">
                Explore the projects we've worked on as a team.
                From creative concepts to functional digital solutions,
                every project reflects our passion for technology,
                collaboration and innovation.
            </p>

        </div>
    </section>

    <!-- PROJECT CARDS -->
    <section class="projects-section">
        <div class="projects-container">

            <div class="projects-section-heading">
                <div>
                    <p class="projects-eyebrow">WHAT WE CREATE</p>
                    <h2>Featured Work</h2>
                </div>
            </div>

            <div class="projects-grid">

                <?php foreach ($projects as $project) : ?>

                    <article class="project-card">

                        <div class="project-image">

                            <?php
                            $image_path = get_stylesheet_directory()
                                . '/assets/images/'
                                . $project['image'];

                            if (file_exists($image_path)) :
                            ?>

                                <img
                                    src="<?php echo esc_url(
                                        get_stylesheet_directory_uri()
                                        . '/assets/images/'
                                        . $project['image']
                                    ); ?>"
                                    alt="<?php echo esc_attr($project['title']); ?>"
                                >

                            <?php else : ?>

                                <div class="project-placeholder">
                                    <span>TEAMGENE</span>
                                    <strong><?php echo esc_html($project['number']); ?></strong>
                                </div>

                            <?php endif; ?>

                        </div>

                        <div class="project-details">

                            <div class="project-meta">
                                <span><?php echo esc_html($project['number']); ?></span>
                                <span><?php echo esc_html($project['category']); ?></span>
                            </div>

                            <h3>
                                <?php echo esc_html($project['title']); ?>
                            </h3>

                            <p>
                                <?php echo esc_html($project['description']); ?>
                            </p>

                            <?php if (!empty($project['link'])) : ?>
                                <a
                                    href="<?php echo esc_url($project['link']); ?>"
                                    class="project-link"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    View Project <span>↗</span>
                                </a>
                            <?php else : ?>
                                <span class="project-link project-link-disabled">
                                    Project Preview <span>↗</span>
                                </span>
                            <?php endif; ?>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>
    </section>

    <!-- BOTTOM SECTION -->
    <section class="projects-bottom">
        <div class="projects-container">

            <p class="projects-eyebrow">THE PEOPLE BEHIND THE WORK</p>

            <h2>
                FOUR MINDS.<br>
                <span>ONE TEAM.</span>
            </h2>

            <p>
                Behind every project is a team working together
                to transform ideas into meaningful digital experiences.
            </p>

            <a href="<?php echo esc_url(home_url('/team/')); ?>" class="projects-team-btn">
                Meet Our Team →
            </a>

        </div>
    </section>

</main>
<footer class="portfolio-footer">
    <p>
        &copy; <?php echo esc_html(date('Y')); ?>
        TeamGene Portfolio. All rights reserved.
    </p>
</footer>

<?php wp_footer(); ?>
</body>
</html>


