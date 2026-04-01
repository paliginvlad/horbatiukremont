<?php
define('PAGE_TITLE', 'Strona główna / Головна');
require_once 'includes/header.php';
?>

<!-- ============================================================
     HERO
============================================================ -->
<section class="hero" aria-labelledby="hero-heading">
    <div class="container">
        <div class="hero__content">
          
            <h1 id="hero-heading"><?php t('hero_title'); ?></h1>
            <p><?php t('hero_subtitle'); ?></p>
            <div class="hero__btns">
                <a href="contacts.php?lang=<?php echo $lang; ?>" class="btn btn-accent">
                    <img src="images/icons/phone.png" alt="" style="width: 20px; height: 20px; display: inline-block; margin-right: 6px; vertical-align: middle;"> <?php t('hero_cta'); ?>
                </a>
                <a href="renovation.php?lang=<?php echo $lang; ?>" class="btn btn-outline">
                    🖼 <?php t('hero_cta2'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     ABOUT
============================================================ -->
<section class="section" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-text fade-in">
                <span class="label">Oleksandr Horbatiuk</span>
                <h2><?php t('about_title'); ?></h2>
                <p><?php t('about_text1'); ?></p>
                <p><?php t('about_text2'); ?></p>
                <p><?php t('about_text3'); ?></p>
                <a href="contacts.php?lang=<?php echo $lang; ?>" class="btn btn-primary" style="margin-top:8px">
                    <?php t('hero_cta'); ?> →
                </a>
            </div>
            <div class="about-stats fade-in">
                <div class="stat-card">
                    <div class="number">10+</div>
                    <div class="desc"><?php echo $lang === 'uk' ? 'Років досвіду' : 'Lat doświadczenia'; ?></div>
                </div>
                <div class="stat-card">
                    <div class="number">200+</div>
                    <div class="desc"><?php echo $lang === 'uk' ? 'Виконаних проєктів' : 'Zrealizowanych projektów'; ?></div>
                </div>
                <div class="stat-card">
                    <div class="number">100%</div>
                    <div class="desc"><?php echo $lang === 'uk' ? 'Задоволених клієнтів' : 'Zadowolonych klientów'; ?></div>
                </div>
                <div class="stat-card">
                    <div class="number">24/7</div>
                    <div class="desc"><?php echo $lang === 'uk' ? 'Години роботи' : 'Godziny pracy'; ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     SERVICES
============================================================ -->
<section class="section section--gray" id="services">
    <div class="container">
        <div class="section-header">
            <span class="label"><?php echo $lang === 'uk' ? 'Що ми робимо' : 'Co robimy'; ?></span>
            <h2><?php t('services_title'); ?></h2>
        </div>
        <div class="grid-3">
            <div class="service-card fade-in">
                <div class="service-icon" aria-hidden="true">🏗️</div>
                <h3><?php t('service1_title'); ?></h3>
                <p><?php t('service1_text'); ?></p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon" aria-hidden="true">🪵</div>
                <h3><?php t('service2_title'); ?></h3>
                <p><?php t('service2_text'); ?></p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon" aria-hidden="true">🔲</div>
                <h3><?php t('service3_title'); ?></h3>
                <p><?php t('service3_text'); ?></p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon" aria-hidden="true">🔧</div>
                <h3><?php t('service4_title'); ?></h3>
                <p><?php t('service4_text'); ?></p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon" aria-hidden="true">🎨</div>
                <h3><?php t('service5_title'); ?></h3>
                <p><?php t('service5_text'); ?></p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon" aria-hidden="true">⚡</div>
                <h3><?php t('service6_title'); ?></h3>
                <p><?php t('service6_text'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     ADVANTAGES
============================================================ -->
<section class="section" id="advantages">
    <div class="container">
        <div class="section-header">
            <h2><?php t('advantages_title'); ?></h2>
        </div>
        <div class="grid-2">
            <div class="adv-card fade-in">
                <div class="adv-icon" aria-hidden="true">👷</div>
                <div class="adv-content">
                    <h3><?php t('adv1_title'); ?></h3>
                    <p><?php t('adv1_text'); ?></p>
                </div>
            </div>
            <div class="adv-card fade-in">
                <div class="adv-icon" aria-hidden="true">✅</div>
                <div class="adv-content">
                    <h3><?php t('adv2_title'); ?></h3>
                    <p><?php t('adv2_text'); ?></p>
                </div>
            </div>
            <div class="adv-card fade-in">
                <div class="adv-icon" aria-hidden="true">🕐</div>
                <div class="adv-content">
                    <h3><?php t('adv3_title'); ?></h3>
                    <p><?php t('adv3_text'); ?></p>
                </div>
            </div>
            <div class="adv-card fade-in">
                <div class="adv-icon" aria-hidden="true">⭐</div>
                <div class="adv-content">
                    <h3><?php t('adv4_title'); ?></h3>
                    <p><?php t('adv4_text'); ?></p>
                </div>
            </div>
            <div class="adv-card fade-in">
                <div class="adv-icon" aria-hidden="true">💰</div>
                <div class="adv-content">
                    <h3><?php t('adv5_title'); ?></h3>
                    <p><?php t('adv5_text'); ?></p>
                </div>
            </div>
            <div class="adv-card fade-in">
                <div class="adv-icon" aria-hidden="true">🔑</div>
                <div class="adv-content">
                    <h3><?php t('adv6_title'); ?></h3>
                    <p><?php t('adv6_text'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     FAQ
============================================================ -->
<section class="section section--gray" id="faq">
    <div class="container">
        <div class="section-header">
            <h2><?php t('faq_title'); ?></h2>
        </div>
        <div class="faq-list" role="list">

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false">
                    <span><?php t('faq1_q'); ?></span>
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer" role="region">
                    <div class="faq-answer-inner"><?php t('faq1_a'); ?></div>
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false">
                    <span><?php t('faq2_q'); ?></span>
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer" role="region">
                    <div class="faq-answer-inner"><?php t('faq2_a'); ?></div>
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false">
                    <span><?php t('faq3_q'); ?></span>
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer" role="region">
                    <div class="faq-answer-inner"><?php t('faq3_a'); ?></div>
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false">
                    <span><?php t('faq4_q'); ?></span>
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer" role="region">
                    <div class="faq-answer-inner"><?php t('faq4_a'); ?></div>
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false">
                    <span><?php t('faq5_q'); ?></span>
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer" role="region">
                    <div class="faq-answer-inner"><?php t('faq5_a'); ?></div>
                </div>
            </div>

            <div class="faq-item" role="listitem">
                <button class="faq-question" aria-expanded="false">
                    <span><?php t('faq6_q'); ?></span>
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-answer" role="region">
                    <div class="faq-answer-inner"><?php t('faq6_a'); ?></div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     CTA STRIP
============================================================ -->
<section class="cta-strip">
    <div class="container">
        <h2><?php echo $lang === 'uk' ? 'Готові розпочати ремонт?' : 'Gotowi zacząć remont?'; ?></h2>
        <p><?php echo $lang === 'uk' ? 'Зателефонуйте нам або залиште заявку — безкоштовна консультація вже сьогодні.' : 'Zadzwoń do nas lub zostaw zapytanie — bezpłatna konsultacja już dziś.'; ?></p>
        <a href="contacts.php?lang=<?php echo $lang; ?>" class="btn btn-accent">
            <?php t('hero_cta'); ?>
        </a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
</body>
</html>
