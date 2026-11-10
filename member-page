
<?php
/**
 * TeamGene Individual Member Portfolio
 */

$members = [
    'member-one' => [
        'name' => 'Rayver Jay Jamis',
        'role' => 'Project Manager',
        'image' => 'mem1.png',
        'color' => '#1684C7',
        'dark_color' => '#0B344F',
        'about' => '',
        'skills' => [
            'Project Planning',
            'Team Management',
            'Communication',
            'Problem Solving'
        ]
    ],

    'member-two' => [
        'name' => 'Clint Raven Tayanes',
        'role' => 'Technical Writer',
        'image' => 'mem2.png',
        'color' => '#176A61',
        'dark_color' => '#0A302C',
        'about' => '',
        'skills' => [
            'Technical Writing',
            'Documentation',
            'Research',
            'Content Editing'
        ]
    ],

    'member-three' => [
        'name' => 'Kenan Bokingo',
        'role' => 'System Analyst',
        'image' => 'mem5.png',
        'color' => '#A44555',
        'dark_color' => '#481B26',
        'about' => '',
        'skills' => [
            'System Analysis',
            'Requirements Gathering',
            'Problem Solving',
            'Process Improvement'
        ]
    ],

    'member-four' => [
        'name' => 'Jose Gabriel Bonalos',
        'role' => 'Programmer',
        'image' => 'mem4.png',
        'color' => '#9B762F',
        'dark_color' => '#493515',
        'about' => '',
        'skills' => [
            'PHP',
            'JavaScript',
            'MySQL',
            'Programming'
        ]
    ]
];

$slug = get_post_field(
    'post_name',
    get_queried_object_id()
);

$member = $members[$slug] ?? null;

if (!$member) {
    status_header(404);
    nocache_headers();
    include get_404_template();
    return;
}

$photo = get_stylesheet_directory_uri()
    . '/assets/images/'
    . $member['image'];
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="portfolio-header">

    <a class="portfolio-logo"
       href="<?php echo esc_url(home_url('/')); ?>">
        TEAM<span>GENE</span>
    </a>

    <nav class="portfolio-nav"
         aria-label="Main navigation">

        <a href="<?php echo esc_url(home_url('/')); ?>">
            Home
        </a>

        <a href="<?php echo esc_url(home_url('/team/')); ?>">
            Team
        </a>

        <a href="<?php echo esc_url(home_url('/contact/')); ?>">
            Contact
        </a>

    </nav>

</header>

<main
    class="member-portfolio"
    style="
        --member-color: <?php echo esc_attr($member['color']); ?>;
        --member-dark: <?php echo esc_attr($member['dark_color']); ?>;
    "
>

    <div class="member-layout">

        
<section class="member-hero">

    <div class="member-hero-title">

        <h1><?php echo esc_html($member['name']); ?></h1>
        <h2><?php echo esc_html($member['role']); ?></h2>

    </div>

    <div class="member-hero-outline" aria-hidden="true">

        <h1><?php echo esc_html($member['name']); ?></h1>
        <h2><?php echo esc_html($member['role']); ?></h2>

    </div>

    <div class="member-portrait">
        <img
            src="<?php echo esc_url($photo); ?>"
            alt="<?php echo esc_attr($member['name']); ?>"
        >
    </div>

</section>


    <section class="member-content-section"
             id="about">

        <p class="member-section-label">
            GET TO KNOW ME
        </p>

        <h2>About <span>Me</span></h2>

        <p>
            <?php echo esc_html($member['about']); ?>
        </p>

    </section>

    <section class="member-content-section"
             id="skills">

        <p class="member-section-label">
            WHAT I DO
        </p>

        <h2>My <span>Skills</span></h2>

        <div class="member-skills">

            <?php foreach ($member['skills'] as $skill) : ?>

                <span>
                    <?php echo esc_html($skill); ?>
                </span>

            <?php endforeach; ?>

        </div>

    </section>

    <section class="member-content-section"
             id="contact">

        <p class="member-section-label">
            LET'S CONNECT
        <div class="member-actions">

                    <a class="member-btn primary"
                       href="#contact">
                        Contact Me
                    </a>

                </div>


    </section>

    <div class="member-return">

        <a href="<?php echo esc_url(home_url('/team/')); ?>">
            &larr; Back to TeamGene
        </a>

    </div>

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
