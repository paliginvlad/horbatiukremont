/* ============================================================
   MAIN.JS — Global JavaScript for Oleksandr Horbatiuk
============================================================ */

document.addEventListener('DOMContentLoaded', function () {

    // --------------------------------------------------------
    // 1. Header scroll shadow
    // --------------------------------------------------------
    const header = document.querySelector('.header');
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 20) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }, { passive: true });
    }

    // --------------------------------------------------------
    // 2. Mobile burger menu
    // --------------------------------------------------------
    const burger = document.querySelector('.header__burger');
    const nav = document.querySelector('.header__nav');
    if (burger && nav) {
        burger.addEventListener('click', function () {
            const isOpen = nav.classList.toggle('open');
            burger.setAttribute('aria-expanded', isOpen);
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Close nav when a link is clicked
        nav.querySelectorAll('.nav-link').forEach(function (link) {
            link.addEventListener('click', function () {
                nav.classList.remove('open');
                document.body.style.overflow = '';
            });
        });
    }

    // --------------------------------------------------------
    // 3. FAQ Accordion
    // --------------------------------------------------------
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(function (item) {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        if (!question || !answer) return;

        question.addEventListener('click', function () {
            const isOpen = item.classList.contains('open');

            // Close all
            faqItems.forEach(function (other) {
                if (other !== item) {
                    other.classList.remove('open');
                    const otherAnswer = other.querySelector('.faq-answer');
                    if (otherAnswer) otherAnswer.style.maxHeight = null;
                }
            });

            // Toggle current
            if (isOpen) {
                item.classList.remove('open');
                answer.style.maxHeight = null;
            } else {
                item.classList.add('open');
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });

        // Keyboard: Enter / Space
        question.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                question.click();
            }
        });
    });

    // --------------------------------------------------------
    // 4. Active nav link highlight based on current page
    // --------------------------------------------------------
    const currentPath = window.location.pathname;
    document.querySelectorAll('.nav-link').forEach(function (link) {
        if (link.getAttribute('href') && currentPath.indexOf(link.getAttribute('href').split('?')[0]) !== -1) {
            if (link.getAttribute('href').split('?')[0] !== '') {
                link.classList.add('active');
            }
        }
    });

    // --------------------------------------------------------
    // 5. Smooth scroll for anchor links
    // --------------------------------------------------------
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const headerHeight = header ? header.offsetHeight : 0;
                const targetTop = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 16;
                window.scrollTo({ top: targetTop, behavior: 'smooth' });
            }
        });
    });

    // --------------------------------------------------------
    // 6. Animate on scroll (fade in)
    // --------------------------------------------------------
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.fade-in').forEach(function (el) {
            observer.observe(el);
        });
    } else {
        document.querySelectorAll('.fade-in').forEach(function (el) {
            el.classList.add('visible');
        });
    }
});
