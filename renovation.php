<?php
define('PAGE_TITLE', 'Kompleksowy remont / Комплексний ремонт');
require_once 'includes/header.php';
?>

<!-- ============================================================
     HERO
============================================================ -->
<section class="hero hero--renovation" aria-labelledby="renov-hero-heading">
    <div class="container">
        <div class="hero__content">
            <h1 id="renov-hero-heading"><?php t('renov_hero_title'); ?></h1>
            <p><?php t('renov_hero_subtitle'); ?></p>
            <div class="hero__btns">
                <a href="contacts.php?lang=<?php echo $lang; ?>" class="btn btn-accent">
                    <img src="images/icons/phone.png" alt="" style="width: 20px; height: 20px; display: inline-block; margin-right: 6px; vertical-align: middle;"> <?php t('hero_cta'); ?>
                </a>
                <a href="#gallery" class="btn btn-outline">
                    <?php t('gallery_title'); ?>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- ============================================================
     BENEFITS
============================================================ -->
<section class="section" id="benefits">
    <div class="container">
        <div class="section-header">
            <h2><?php t('renov_benefits_title'); ?></h2>
        </div>
        <div class="grid-2">
            <div class="benefit-card fade-in">
                <div class="benefit-num" aria-hidden="true">1</div>
                <div class="benefit-content">
                    <h3><?php t('renov_b1_title'); ?></h3>
                    <p><?php t('renov_b1_text'); ?></p>
                </div>
            </div>
            <div class="benefit-card fade-in">
                <div class="benefit-num" aria-hidden="true">2</div>
                <div class="benefit-content">
                    <h3><?php t('renov_b2_title'); ?></h3>
                    <p><?php t('renov_b2_text'); ?></p>
                </div>
            </div>
            <div class="benefit-card fade-in">
                <div class="benefit-num" aria-hidden="true">3</div>
                <div class="benefit-content">
                    <h3><?php t('renov_b3_title'); ?></h3>
                    <p><?php t('renov_b3_text'); ?></p>
                </div>
            </div>
            <div class="benefit-card fade-in">
                <div class="benefit-num" aria-hidden="true">4</div>
                <div class="benefit-content">
                    <h3><?php t('renov_b4_title'); ?></h3>
                    <p><?php t('renov_b4_text'); ?></p>
                </div>
            </div>
            <div class="benefit-card fade-in">
                <div class="benefit-num" aria-hidden="true">5</div>
                <div class="benefit-content">
                    <h3><?php t('renov_b5_title'); ?></h3>
                    <p><?php t('renov_b5_text'); ?></p>
                </div>
            </div>
            <div class="benefit-card fade-in">
                <div class="benefit-num" aria-hidden="true">6</div>
                <div class="benefit-content">
                    <h3><?php t('renov_b6_title'); ?></h3>
                    <p><?php t('renov_b6_text'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     STAGES / TIMELINE
============================================================ -->
<section class="section section--gray" id="stages">
    <div class="container">
        <div class="section-header">
            <h2><?php t('renov_stages_title'); ?></h2>
        </div>
        <div class="stages-timeline">
            <div class="stage-item fade-in">
                <div class="stage-num" aria-hidden="true">1</div>
                <div class="stage-content">
                    <h3><?php t('stage1_title'); ?></h3>
                    <p><?php t('stage1_text'); ?></p>
                </div>
            </div>
            <div class="stage-item fade-in">
                <div class="stage-num" aria-hidden="true">2</div>
                <div class="stage-content">
                    <h3><?php t('stage2_title'); ?></h3>
                    <p><?php t('stage2_text'); ?></p>
                </div>
            </div>
            <div class="stage-item fade-in">
                <div class="stage-num" aria-hidden="true">3</div>
                <div class="stage-content">
                    <h3><?php t('stage3_title'); ?></h3>
                    <p><?php t('stage3_text'); ?></p>
                </div>
            </div>
            <div class="stage-item fade-in">
                <div class="stage-num" aria-hidden="true">4</div>
                <div class="stage-content">
                    <h3><?php t('stage4_title'); ?></h3>
                    <p><?php t('stage4_text'); ?></p>
                </div>
            </div>
            <div class="stage-item fade-in">
                <div class="stage-num" aria-hidden="true">5</div>
                <div class="stage-content">
                    <h3><?php t('stage5_title'); ?></h3>
                    <p><?php t('stage5_text'); ?></p>
                </div>
            </div>
            <div class="stage-item fade-in">
                <div class="stage-num" aria-hidden="true">6</div>
                <div class="stage-content">
                    <h3><?php t('stage6_title'); ?></h3>
                    <p><?php t('stage6_text'); ?></p>
                </div>
            </div>
            <div class="stage-item fade-in">
                <div class="stage-num" aria-hidden="true">7</div>
                <div class="stage-content">
                    <h3><?php t('stage7_title'); ?></h3>
                    <p><?php t('stage7_text'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================
     GALLERY — OUR WORK
============================================================ -->
<section class="section" id="gallery">
    <div class="container">
        <div class="section-header">
            <h2><?php t('gallery_title'); ?></h2>
            <p><?php t('gallery_subtitle'); ?></p>
        </div>

        <!--
            PHOTO/VIDEO PLACEHOLDERS
            To add real photos: place them in the images/ folder and update the src attributes.
            To add videos: use <video> tags with a <source> inside .gallery-item.
            Example for image:
              <div class="gallery-item">
                <img src="images/project1.jpg" data-src="images/project1.jpg" alt="<?php t('gallery_photo_alt'); ?>">
                <div class="gallery-overlay"><div class="gallery-overlay-icon">🔍</div></div>
              </div>
            Example for video:
              <div class="gallery-item">
                <video muted playsinline preload="metadata">
                  <source src="images/video1.mp4" type="video/mp4">
                </video>
                <div class="gallery-overlay"><div class="gallery-overlay-icon">▶</div></div>
              </div>
        -->

        <h3 class="gallery-photos-title"><?php t('gallery_photos_title'); ?></h3>
        <div class="gallery-grid" role="list" aria-label="<?php t('gallery_title'); ?>">

            <!-- Row 1 -->
            <div class="gallery-item" role="listitem" tabindex="0" title="<?php t('gallery_photo_alt'); ?> 1">
                <img src="images/photo1.jpeg" data-src="images/photo1.jpeg" alt="<?php t('gallery_photo_alt'); ?> 1">
                <div class="gallery-overlay"><div class="gallery-overlay-icon" aria-hidden="true"><img src="images/icons/magnifying_glass.png" class="gallery-overlay-icon__img" alt=""></div></div>
            </div>
            <div class="gallery-item" role="listitem" tabindex="0" title="<?php t('gallery_photo_alt'); ?> 2">
                <img src="images/photo2.jpeg" data-src="images/photo2.jpeg" alt="<?php t('gallery_photo_alt'); ?> 2">
                <div class="gallery-overlay"><div class="gallery-overlay-icon" aria-hidden="true"><img src="images/icons/magnifying_glass.png" class="gallery-overlay-icon__img" alt=""></div></div>
            </div>
            <div class="gallery-item" role="listitem" tabindex="0" title="<?php t('gallery_photo_alt'); ?> 3">
                <img src="images/photo3.jpeg" data-src="images/photo3.jpeg" alt="<?php t('gallery_photo_alt'); ?> 3">
                <div class="gallery-overlay"><div class="gallery-overlay-icon" aria-hidden="true"><img src="images/icons/magnifying_glass.png" class="gallery-overlay-icon__img" alt=""></div></div>
            </div>

            <!-- Row 2 -->
            <div class="gallery-item" role="listitem" tabindex="0" title="<?php t('gallery_photo_alt'); ?> 4">
                <img src="images/photo4.jpeg" data-src="images/photo4.jpeg" alt="<?php t('gallery_photo_alt'); ?> 4">
                <div class="gallery-overlay"><div class="gallery-overlay-icon" aria-hidden="true"><img src="images/icons/magnifying_glass.png" class="gallery-overlay-icon__img" alt=""></div></div>
            </div>
            <div class="gallery-item" role="listitem" tabindex="0" title="<?php t('gallery_photo_alt'); ?> 5">
                <img src="images/photo5.jpeg" data-src="images/photo5.jpeg" alt="<?php t('gallery_photo_alt'); ?> 5">
                <div class="gallery-overlay"><div class="gallery-overlay-icon" aria-hidden="true"><img src="images/icons/magnifying_glass.png" class="gallery-overlay-icon__img" alt=""></div></div>
            </div>
            <div class="gallery-item" role="listitem" tabindex="0" title="<?php t('gallery_photo_alt'); ?> 6">
                <img src="images/photo6.jpeg" data-src="images/photo6.jpeg" alt="<?php t('gallery_photo_alt'); ?> 6">
                <div class="gallery-overlay"><div class="gallery-overlay-icon" aria-hidden="true"><img src="images/icons/magnifying_glass.png" class="gallery-overlay-icon__img" alt=""></div></div>
            </div>

            <!-- Row 3 -->
            <div class="gallery-item" role="listitem" tabindex="0" title="<?php t('gallery_photo_alt'); ?> 7">
                <img src="images/photo7.jpeg" data-src="images/photo7.jpeg" alt="<?php t('gallery_photo_alt'); ?> 7">
                <div class="gallery-overlay"><div class="gallery-overlay-icon" aria-hidden="true"><img src="images/icons/magnifying_glass.png" class="gallery-overlay-icon__img" alt=""></div></div>
            </div>
            <!-- <div class="gallery-item" role="listitem" tabindex="0" title="<?php t('gallery_photo_alt'); ?> 8">
                <div class="gallery-placeholder">🔧<span><?php echo $lang === 'uk' ? 'Сантехніка' : 'Hydraulika'; ?></span></div>
                <div class="gallery-overlay"><div class="gallery-overlay-icon" aria-hidden="true">🔍</div></div>
            </div>
            <div class="gallery-item" role="listitem" tabindex="0" title="<?php t('gallery_photo_alt'); ?> 9">
                <div class="gallery-placeholder">🏗️<span><?php echo $lang === 'uk' ? 'Ремонт кухні' : 'Remont kuchni'; ?></span></div>
                <div class="gallery-overlay"><div class="gallery-overlay-icon" aria-hidden="true">🔍</div></div>
            </div> -->

        </div>
        <h3 class="gallery-videos-title"><?php t('gallery_videos_title'); ?></h3>
        <div class="gallery-grid" role="list" aria-label="<?php t('gallery_videos_title'); ?>">
            <?php
            $videoFiles = glob('videos/*.{mp4,webm,ogg,MP4,WEBM,OGG}', GLOB_BRACE);
            if (!empty($videoFiles)):
                foreach ($videoFiles as $index => $videoPath):
                    $safeVideoPath = htmlspecialchars($videoPath, ENT_QUOTES, 'UTF-8');
            ?>
                <div class="gallery-item" role="listitem" tabindex="0" title="<?php t('gallery_videos_title'); ?> <?php echo $index + 1; ?>">
                    <video muted playsinline preload="metadata">
                        <source src="<?php echo $safeVideoPath; ?>">
                    </video>
                    <div class="gallery-overlay"><div class="gallery-overlay-icon gallery-overlay-icon--video" aria-hidden="true"><img src="images/icons/magnifying_glass.png" class="gallery-overlay-icon__img" alt=""></div></div>
                </div>
            <?php
                endforeach;
            else:
            ?>
                <p class="gallery-empty"><?php t('gallery_no_videos'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- ============================================================
     LIGHTBOX
============================================================ -->
<div id="lightbox" class="lightbox" role="dialog" aria-modal="true" aria-label="<?php t('gallery_title'); ?>">
    <button id="lightbox-close" class="lightbox__close" aria-label="<?php t('lightbox_close'); ?>">✕</button>
    <button id="lightbox-prev" class="lightbox__btn lightbox__prev" aria-label="<?php t('lightbox_prev'); ?>">‹</button>
    <div class="lightbox__inner">
        <div id="lightbox-media"></div>
    </div>
    <button id="lightbox-next" class="lightbox__btn lightbox__next" aria-label="<?php t('lightbox_next'); ?>">›</button>
</div>

<!-- ============================================================
     CTA STRIP
============================================================ -->
<section class="cta-strip">
    <div class="container">
        <h2><?php echo $lang === 'uk' ? 'Хочете дізнатися вартість ремонту?' : 'Chcesz poznać koszt remontu?'; ?></h2>
        <p><?php echo $lang === 'uk' ? 'Зателефонуйте нам або заповніть форму — безкоштовна консультація та кошторис.' : 'Zadzwoń do nas lub wypełnij formularz — bezpłatna konsultacja i wycena.'; ?></p>
        <a href="contacts.php?lang=<?php echo $lang; ?>" class="btn btn-accent">
            <img src="images/icons/phone.png" alt="" style="width: 20px; height: 20px; display: inline-block; margin-right: 6px; vertical-align: middle;"> <?php t('hero_cta'); ?>
        </a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
<script src="js/gallery.js"></script>
</body>
</html>
