/* ============================================================
   GALLERY.JS — Lightbox slider for photo/video gallery
============================================================ */

document.addEventListener('DOMContentLoaded', function () {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightbox = document.getElementById('lightbox');
    if (!lightbox || galleryItems.length === 0) return;

    const mediaEl = document.getElementById('lightbox-media');
    const closeBtnEl = document.getElementById('lightbox-close');
    const prevBtn = document.getElementById('lightbox-prev');
    const nextBtn = document.getElementById('lightbox-next');

    let currentIndex = 0;
    let mediaList = [];

    // Build media list from gallery items
    galleryItems.forEach(function (item, index) {
        const img = item.querySelector('img[data-src]') || item.querySelector('img');
        const video = item.querySelector('video');
        if (img) {
            mediaList.push({ type: 'image', src: img.dataset.src || img.src, alt: img.alt || '' });
        } else if (video) {
            const source = video.querySelector('source');
            mediaList.push({ type: 'video', src: source ? source.src : video.src });
        } else {
            // placeholder
            mediaList.push({ type: 'placeholder', index: index });
        }

        item.addEventListener('click', function () {
            openLightbox(index);
        });

        item.setAttribute('tabindex', '0');
        item.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                openLightbox(index);
            }
        });
    });

    function openLightbox(index) {
        currentIndex = index;
        showMedia(currentIndex);
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
        closeBtnEl.focus();
    }

    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
        // Stop any playing video
        const v = mediaEl.querySelector('video');
        if (v) v.pause();
    }

    function showMedia(index) {
        if (!mediaList[index]) return;
        const item = mediaList[index];

        // Remove old content
        mediaEl.innerHTML = '';

        if (item.type === 'image') {
            const img = document.createElement('img');
            img.src = item.src;
            img.alt = item.alt;
            img.className = 'lightbox__media';
            mediaEl.appendChild(img);
        } else if (item.type === 'video') {
            const video = document.createElement('video');
            video.controls = true;
            video.className = 'lightbox__media';
            const source = document.createElement('source');
            source.src = item.src;
            video.appendChild(source);
            mediaEl.appendChild(video);
        } else {
            // placeholder
            const div = document.createElement('div');
            div.style.cssText = 'color:#fff;font-size:1.2rem;text-align:center;padding:40px;';
            div.textContent = 'Zdjęcie ' + (index + 1);
            mediaEl.appendChild(div);
        }

        // Update button states
        prevBtn.disabled = index === 0;
        nextBtn.disabled = index === mediaList.length - 1;
        prevBtn.style.opacity = index === 0 ? '0.4' : '1';
        nextBtn.style.opacity = index === mediaList.length - 1 ? '0.4' : '1';
    }

    // Navigation
    prevBtn.addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
            showMedia(currentIndex);
        }
    });

    nextBtn.addEventListener('click', function () {
        if (currentIndex < mediaList.length - 1) {
            currentIndex++;
            showMedia(currentIndex);
        }
    });

    closeBtnEl.addEventListener('click', closeLightbox);

    // Close on backdrop click
    lightbox.addEventListener('click', function (e) {
        if (e.target === lightbox) closeLightbox();
    });

    // Keyboard navigation
    document.addEventListener('keydown', function (e) {
        if (!lightbox.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft' && currentIndex > 0) { currentIndex--; showMedia(currentIndex); }
        if (e.key === 'ArrowRight' && currentIndex < mediaList.length - 1) { currentIndex++; showMedia(currentIndex); }
    });

    // Touch / swipe support
    let touchStartX = 0;
    lightbox.addEventListener('touchstart', function (e) { touchStartX = e.touches[0].clientX; }, { passive: true });
    lightbox.addEventListener('touchend', function (e) {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) {
            if (diff > 0 && currentIndex < mediaList.length - 1) { currentIndex++; showMedia(currentIndex); }
            else if (diff < 0 && currentIndex > 0) { currentIndex--; showMedia(currentIndex); }
        }
    }, { passive: true });
});
