<?php
define('PAGE_TITLE', 'Kontakty / Контакти');
require_once 'includes/header.php';
?>

<!-- ============================================================
     PAGE HERO
============================================================ -->
<section class="hero" style="padding-bottom: 64px;" aria-labelledby="contacts-heading">
    <div class="container">
        <div class="hero__content">
            <div class="hero__badge" aria-hidden="true"><img src="images/icons/location.png" alt="" style="width: 24px; height: 24px; filter: brightness(0) saturate(100%) invert(27%) sepia(51%) saturate(2743%) hue-rotate(14deg) brightness(104%) contrast(104%);"> Tychy, <?php t('area_value'); ?></div>
            <h1 id="contacts-heading"><?php t('contacts_title'); ?></h1>
            <p><?php t('contacts_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- ============================================================
     CONTACTS GRID — INFO + FORM
============================================================ -->
<section class="section">
    <div class="container">
        <div class="contacts-grid">

            <!-- Left: Contact information -->
            <div class="contact-info-card fade-in">
                <h2><?php t('contact_info_title'); ?></h2>

                <div class="contact-info-row">
                    <div class="contact-info-icon" aria-hidden="true"><img src="images/icons/phone.png" alt="" style="width: 24px; height: 24px; filter: brightness(0) invert(1);"></div>
                    <div class="contact-info-content">
                        <strong><?php t('phone_label'); ?></strong>
                        <a href="tel:<?php echo preg_replace('/\s+/', '', tr('company_phone')); ?>"><?php t('company_phone'); ?></a>
                    </div>
                </div>

                <div class="contact-info-row">
                    <div class="contact-info-icon" aria-hidden="true"><img src="images/icons/email.png" alt="" style="width: 24px; height: 24px; filter: brightness(0) invert(1);"></div>
                    <div class="contact-info-content">
                        <strong><?php t('email_label'); ?></strong>
                        <a href="mailto:<?php t('company_email'); ?>"><?php t('company_email'); ?></a>
                    </div>
                </div>

                <div class="contact-info-row">
                    <div class="contact-info-icon" aria-hidden="true"><img src="images/icons/location.png" alt="" style="width: 24px; height: 24px; filter: brightness(0) invert(1);"></div>
                    <div class="contact-info-content">
                        <strong><?php t('address_label'); ?></strong>
                        <span><?php t('company_address'); ?></span>
                    </div>
                </div>

                <div class="contact-info-row">
                    <div class="contact-info-icon" aria-hidden="true"><img src="images/icons/clock.png" alt="" style="width: 24px; height: 24px; filter: brightness(0) invert(1);"></div>
                    <div class="contact-info-content">
                        <strong><?php t('hours_label'); ?></strong>
                        <span><?php t('hours_value'); ?></span>
                    </div>
                </div>

                <div class="contact-info-row">
                    <div class="contact-info-icon" aria-hidden="true"><img src="images/icons/briefcase.png" alt="" style="width: 24px; height: 24px; filter: brightness(0) invert(1);"></div>
                    <div class="contact-info-content">
                        <strong><?php t('nip_label'); ?></strong>
                        <span><?php t('company_nip'); ?></span>
                    </div>
                </div>

                <div class="contact-info-row">
                    <div class="contact-info-icon" aria-hidden="true"><img src="images/icons/map.png" alt="" style="width: 24px; height: 24px; filter: brightness(0) invert(1);"></div>
                    <div class="contact-info-content">
                        <strong><?php t('area_label'); ?></strong>
                        <span><?php t('area_value'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Right: Contact form -->
            <div class="contact-form-card fade-in">
                <h2><?php t('contact_form_title'); ?></h2>

                <div id="form-notice" class="form-notice" role="alert"></div>

                <form id="contact-form"
                      action="send_mail.php"
                      method="post"
                      novalidate
                      data-msg-required="<?php t('form_required'); ?>"
                      data-msg-email="<?php t('form_invalid_email'); ?>"
                      data-msg-success="<?php t('form_success'); ?>"
                      data-msg-error="<?php t('form_error'); ?>">

                    <input type="hidden" name="lang" value="<?php echo htmlspecialchars($lang, ENT_QUOTES, 'UTF-8'); ?>">

                    <div class="form-group">
                        <label for="name"><?php t('form_name'); ?> *</label>
                        <input type="text"
                               id="name"
                               name="name"
                               required
                               autocomplete="name"
                               placeholder="<?php echo $lang === 'uk' ? 'Іванченко Іван' : 'Kowalski Jan'; ?>">
                        <span class="field-error" role="alert"></span>
                    </div>

                    <div class="form-group">
                        <label for="phone"><?php t('form_phone'); ?></label>
                        <input type="tel"
                               id="phone"
                               name="phone"
                               autocomplete="tel"
                               placeholder="+48 000 000 000">
                        <span class="field-error" role="alert"></span>
                    </div>

                    <div class="form-group">
                        <label for="email"><?php t('form_email'); ?> *</label>
                        <input type="email"
                               id="email"
                               name="email"
                               required
                               autocomplete="email"
                               placeholder="<?php echo $lang === 'uk' ? 'example@email.com' : 'example@email.com'; ?>">
                        <span class="field-error" role="alert"></span>
                    </div>

                    <div class="form-group">
                        <label for="message"><?php t('form_message'); ?> *</label>
                        <textarea id="message"
                                  name="message"
                                  required
                                  placeholder="<?php echo $lang === 'uk' ? 'Розкажіть про ваш проєкт...' : 'Opisz swój projekt...'; ?>"></textarea>
                        <span class="field-error" role="alert"></span>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center;">
                    <img src="images/icons/send_mail.png" alt="" style="width: 24px; height: 24px; filter: brightness(0) invert(1);"> <?php t('form_submit'); ?>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================
     GOOGLE MAPS
============================================================ -->
<section class="section map-section">
    <div class="container">
        <div class="section-header">
            <h2><?php t('map_title'); ?></h2>
        </div>
        <div class="map-wrapper">
            <!--
                Google Maps embed for ul. Morcinska 13/5, 43-100 Tychy, Poland.
                The map is embedded via a public iframe. No API key required for this basic embed.
            -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2558.6246002522953!2d18.98092307641662!3d50.11203317152951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716b7fce8b12f79%3A0x86676a4c2b96f72d!2sMorcinka%2013%2F5%2C%2043-110%20Tychy!5e0!3m2!1sru!2spl!4v1775051782868!5m2!1sru!2spl"
                width="100%"
                height="480"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="<?php t('map_title'); ?>"
                aria-label="Google Maps — ul. Morcinska 13/5, 43-100 Tychy">
            </iframe>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
<script src="js/contact.js"></script>
</body>
</html>
