<?php
require_once __DIR__ . '/lang.php';

// Determine current page for active nav state
$currentPage = basename($_SERVER['PHP_SELF']);

function navLink($href, $labelKey, $currentPage) {
    $filename = basename($href);
    $active = ($currentPage === $filename) ? ' active' : '';
    $label = tr($labelKey);
    return '<a href="' . $href . '?lang=' . htmlspecialchars($_GET['lang'] ?? 'pl', ENT_QUOTES) . '" class="nav-link' . $active . '">' . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . '</a>';
}

$langParam = isset($_GET['lang']) ? $_GET['lang'] : 'pl';
$otherLang = $langParam === 'pl' ? 'uk' : 'pl';

// Build language switcher URLs preserving current page
$baseUrl = '?' . http_build_query(array_merge($_GET, ['lang' => 'pl']));
$urlPl = '?' . http_build_query(array_merge($_GET, ['lang' => 'pl']));
$urlUk = '?' . http_build_query(array_merge($_GET, ['lang' => 'uk']));
?>
<!DOCTYPE html>
<html lang="<?php echo $lang === 'uk' ? 'uk' : 'pl'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php t('site_title'); echo ' — '; ?><?php echo defined('PAGE_TITLE') ? htmlspecialchars(PAGE_TITLE, ENT_QUOTES, 'UTF-8') : htmlspecialchars(tr('nav_home'), ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php t('meta_description'); ?>">
    <meta name="theme-color" content="#1a56db">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<header class="header" role="banner">
    <div class="container">
        <div class="header__inner">
            <!-- Logo -->
            <a href="index.php?lang=<?php echo $lang; ?>" class="header__logo" aria-label="<?php t('site_title'); ?>">
                <div class="logo-icon" aria-hidden="true">OH</div>
                <span>Oleksandr Horbatiuk</span>
            </a>

            <!-- Navigation -->
            <nav class="header__nav" role="navigation" aria-label="Main navigation">
                <?php echo navLink('index.php', 'nav_home', $currentPage); ?>
                <?php echo navLink('renovation.php', 'nav_renovation', $currentPage); ?>
                <?php echo navLink('contacts.php', 'nav_contacts', $currentPage); ?>
            </nav>

            <!-- Actions -->
            <div class="header__actions">
                <!-- Language switcher -->
                <div class="lang-switcher" role="group" aria-label="<?php t('choose_lang'); ?>">
                    <a href="<?php echo $urlPl; ?>"
                       class="lang-btn<?php echo $lang === 'pl' ? ' active' : ''; ?>"
                       aria-label="Polski" hreflang="pl">PL</a>
                    <a href="<?php echo $urlUk; ?>"
                       class="lang-btn<?php echo $lang === 'uk' ? ' active' : ''; ?>"
                       aria-label="Українська" hreflang="uk">UA</a>
                </div>

                <!-- Mobile burger -->
                <button class="header__burger" aria-label="Toggle menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>
