<?php
// lang.php is already loaded via header.php
$langParam = isset($_GET['lang']) ? $_GET['lang'] : 'pl';
?>
<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="footer__grid">
            <!-- About -->
            <div class="footer__col">
                <div class="footer__logo">
                    <div class="logo-icon" aria-hidden="true">HR</div>
                    <span><?php t('footer_about_title'); ?></span>
                </div>
                <p><?php t('footer_about_text'); ?></p>
            </div>

            <!-- Quick links -->
            <div class="footer__col">
                <h4><?php t('footer_links_title'); ?></h4>
                <nav class="footer__links" aria-label="Footer navigation">
                    <a href="index.php?lang=<?php echo $langParam; ?>"><?php t('nav_home'); ?></a>
                    <a href="renovation.php?lang=<?php echo $langParam; ?>"><?php t('nav_renovation'); ?></a>
                    <a href="contacts.php?lang=<?php echo $langParam; ?>"><?php t('nav_contacts'); ?></a>
                </nav>
            </div>

            <!-- Contact info -->
            <div class="footer__col">
                <h4><?php t('footer_contact_title'); ?></h4>
                <div class="footer__contact-item">
                    <span class="icon" aria-hidden="true"><img src="images/icons/location.png" alt="" style="width: 18px; height: 18px; filter: brightness(0) saturate(100%) invert(27%) sepia(51%) saturate(2743%) hue-rotate(14deg) brightness(104%) contrast(104%);"></span>
                    <span><?php t('company_address'); ?></span>
                </div>
                <div class="footer__contact-item">
                    <span class="icon" aria-hidden="true"><img src="images/icons/phone.png" alt="" style="width: 18px; height: 18px; filter: brightness(0) invert(1);"></span>
                    <a href="tel:<?php echo preg_replace('/\s+/', '', tr('company_phone')); ?>"><?php t('company_phone'); ?></a>
                </div>
                <div class="footer__contact-item">
                    <span class="icon" aria-hidden="true">✉️</span>
                    <a href="mailto:<?php t('company_email'); ?>"><?php t('company_email'); ?></a>
                </div>
            </div>

            <!-- Hours -->
            <div class="footer__col">
                <h4><?php t('footer_hours_title'); ?></h4>
                <div class="footer__contact-item">
                    <span class="icon" aria-hidden="true">🕐</span>
                    <span><?php t('footer_hours_value'); ?></span>
                </div>
                <div class="footer__contact-item">
                    <span class="icon" aria-hidden="true">🏢</span>
                    <span><?php t('nip_label'); ?>: <?php t('company_nip'); ?></span>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <span>&copy; <?php echo date('Y'); ?> Oleksandr Horbatiuk. <?php t('footer_rights'); ?></span>
        </div>
    </div>
</footer>

<script src="js/main.js"></script>
