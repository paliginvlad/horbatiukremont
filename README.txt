OLEKSANDR HORBATIUK — WEBSITE INSTRUCTIONS
============================================

FOLDER STRUCTURE
----------------
website/
  index.php          — Home page (strona główna / головна)
  renovation.php     — Comprehensive renovation page
  contacts.php       — Contacts page
  send_mail.php      — Contact form email handler (PHP)
  README.txt         — This file

  css/
    style.css        — Main stylesheet
    responsive.css   — Additional responsive styles

  js/
    main.js          — Header, burger menu, FAQ accordion, animations
    gallery.js       — Photo/video gallery lightbox slider
    contact.js       — Contact form validation & AJAX submission

  images/            — Place your photos and videos here
    (add photos as: project1.jpg, project2.jpg, etc.)
    (add videos as: video1.mp4, video2.mp4, etc.)

  includes/
    lang.php         — All website text in Polish and Ukrainian
    header.php       — Shared page header
    footer.php       — Shared page footer


UPLOADING TO HOSTING
--------------------
Upload the entire contents of the "website/" folder to your hosting
server's public_html (or www, or htdocs) directory.
Your hosting must support PHP (any version 7.4+).


LANGUAGE SWITCHING
------------------
Language is controlled by the "lang" URL parameter:
  ?lang=pl  →  Polish (default)
  ?lang=uk  →  Ukrainian

Example: https://yoursite.com/index.php?lang=uk


ADDING YOUR PHOTOS / VIDEOS
----------------------------
1. Place photo files in the images/ folder (JPG, PNG, WebP)
2. Place video files in the images/ folder (MP4 recommended)
3. Open renovation.php and find the gallery section (<!-- GALLERY -->)
4. Replace each placeholder <div class="gallery-placeholder"> with:

   For a photo:
   <img src="images/YOUR_PHOTO.jpg"
        data-src="images/YOUR_PHOTO.jpg"
        alt="Remont mieszkania">

   For a video:
   <video muted playsinline preload="metadata">
     <source src="images/YOUR_VIDEO.mp4" type="video/mp4">
   </video>

You can add as many items as you want — just always keep them in groups
of 3 (they display 3 per row).


CONTACT FORM EMAIL
------------------
By default the form sends email to: horbatiukrenovation@gmail.com
(set in send_mail.php, line: $to = 'horbatiukrenovation@gmail.com';)

The form uses PHP's built-in mail() function.
Your hosting server must have a working mail server configured.
Most shared hosting providers (e.g. home.pl, cyber-folks.pl) have this.


EDITING TEXT CONTENT
--------------------
All text is stored in:  includes/lang.php

The file has two sections:
  'pl' => [...],    — Polish translations
  'uk' => [...],    — Ukrainian translations

Find the key you want to change and update both language versions.
Example: to change the phone number, find 'company_phone' in both sections.


GOOGLE MAPS
-----------
The map is already embedded for:
  ul. Morcinska 13/5, 43-100, Tychy

If you need to update the location, go to Google Maps:
1. Find your address
2. Click Share → Embed a map → Copy HTML
3. Replace the <iframe> in contacts.php (in the MAP section)
