
<?php
/**
 * TeamGene Individual Member Portfolio
 */


$members = [
    'member-one' => [
        'name' => 'Rayver Jay Jamis',
        'role' => 'Project Manager',
        'image' => 'mm1.png',
        'color' => '#1684C7',
        'dark_color' => '#0B344F',
        'about' => "I'm an Information Technology student with a strong interest in project planning, organisation and team management. As TeamGene's Project Manager, I help organise tasks, track project progress, coordinate with team members and ensure that project requirements are met on time. I'm responsible, organised and eager to learn while contributing to the project's success.",
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
        'image' => 'mm2.png',
        'color' => '#1684C7',
        'dark_color' => '#0B344F',
        'about' => "I'm an Information Technology student with a strong interest in technology, system development and technical documentation. I'm eager to learn new technologies, improve my skills and contribute meaningfully to team projects. As TeamGene's Technical Writer, I focus on creating clear, organised and accessible documentation.",
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
        'image' => 'mm3.png',
        'color' => '#1684C7',
        'dark_color' => '#0B344F',
        'about' => "I'm an Information Technology student with a strong interest in analysing system requirements, business processes and user needs. As TeamGene's System Analyst, I help identify problems, organise system requirements and translate user needs into clear system functions and processes. I'm detail-oriented, analytical and eager to learn.",
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
        'image' => 'mm4.png',
        'color' => '#1684C7',
        'dark_color' => '#0B344F',
        'about' => "I'm an Information Technology student with a strong interest in programming and system development. I enjoy creating functional applications, solving technical problems and improving system features through coding. As TeamGene's Programmer, I'm committed to learning new technologies and continuously developing my programming skills.",
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

        
<a href="<?php echo esc_url(home_url('/team/')); ?>"
   style="
       display: inline-flex;
       align-items: center;
       gap: 10px;
       background: #1684C7;
       color: #ffffff;
       padding: 14px 26px;
       border-radius: 10px;
       text-decoration: none;
       font-size: 16px;
       font-weight: 600;
       transition: 0.3s ease;
   "
   onmouseover="this.style.background='#0d6396'"
   onmouseout="this.style.background='#1684C7'">
    &#8592; Back to TeamGene
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
