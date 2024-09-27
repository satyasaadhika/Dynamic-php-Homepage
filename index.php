<?php
// PHP Variables
$pageTitle = "PHP Webpage with Hero Section";
$navItems = ['Home', 'About', 'Services', 'Contact'];
$hero = [
    'title' => 'Welcome to My Dynamic Website',
    'subtitle' => 'Explore the beauty of web development with PHP, HTML, and CSS.',
    'buttonText' => 'Learn More',
    'buttonLink' => '#'
];
$contentSections = [
    [
        'title' => 'About This Page',
        'text' => 'This page is dynamically generated using PHP, HTML, and CSS. It demonstrates how PHP can be used to create web content dynamically.'
    ],
    [
        'title' => 'Dynamic Date and Time',
        'text' => 'Current Date and Time: ' . date('Y-m-d H:i:s')
    ]
];
$footerText = "&copy; " . date('Y') . " My PHP Webpage. All rights reserved.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul class="nav-links">
                <?php foreach ($navItems as $item): ?>
                    <li><a href="#"><?php echo $item; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    
    <section class="hero">
        <div class="hero-content">
            <h1><?php echo $hero['title']; ?></h1>
            <p><?php echo $hero['subtitle']; ?></p>
            <a href="<?php echo $hero['buttonLink']; ?>" class="btn"><?php echo $hero['buttonText']; ?></a>
        </div>
    </section>
    
    <main>
        <?php foreach ($contentSections as $section): ?>
            <section class="content">
                <h2><?php echo $section['title']; ?></h2>
                <p><?php echo $section['text']; ?></p>
            </section>
        <?php endforeach; ?>
    </main>
    
    <footer>
        <p><?php echo $footerText; ?></p>
    </footer>
</body>
</html>
