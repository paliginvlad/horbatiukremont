<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'pl';
if (!in_array($lang, ['pl', 'uk'])) {
    $lang = 'pl';
}

$translations = [
    'pl' => [
        'site_title' => 'Oleksandr Horbatiuk',
        'meta_description' => 'Kompleksowe remonty mieszkań — elewacje, podłogi, płyta kartonowo-gipsowa, hydraulika i więcej. Województwo Śląskie.',
        'nav_home' => 'Strona główna',
        'nav_renovation' => 'Kompleksowy remont mieszkania',
        'nav_contacts' => 'Kontakty',
        'lang_pl' => 'PL',
        'lang_uk' => 'UA',
        'choose_lang' => 'Język',

        // Home page
        'hero_title' => 'Kompleksowe remonty mieszkań',
        'hero_subtitle' => 'Profesjonalne usługi remontowe w województwie śląskim. Elewacje, podłogi, płyta kartonowo-gipsowa, hydraulika i wiele więcej.',
        'hero_cta' => 'Skontaktuj się z nami',
        'hero_cta2' => 'Nasze realizacje',

        'about_title' => 'O naszej firmie',
        'about_text1' => 'Firma Oleksandr Horbatiuk specjalizuje się w kompleksowych remontach mieszkań na terenie województwa śląskiego. Dysponujemy wieloletnim doświadczeniem i zespołem wykwalifikowanych specjalistów.',
        'about_text2' => 'Wykonujemy prace wykończeniowe najwyższej jakości — od elewacji zewnętrznych, przez układanie podłóg i prace płykarsko-gipsowe, po instalacje hydrauliczne. Każdy projekt traktujemy indywidualnie, zapewniając kompleksową obsługę od pierwszej konsultacji po odbiór gotowego mieszkania.',
        'about_text3' => 'Pracujemy rzetelnie, terminowo i z pasją. Materiały i narzędzia najwyższej klasy, a efekty naszej pracy mówią same za siebie.',

        'services_title' => 'Nasze usługi',
        'service1_title' => 'Elewacje',
        'service1_text' => 'Kompleksowe prace elewacyjne — tynkowanie, ocieplanie i wykańczanie fasad budynków.',
        'service2_title' => 'Podłogi',
        'service2_text' => 'Układanie parkietu, paneli, gresu, płytek ceramicznych i wszelkich innych rodzajów podłóg.',
        'service3_title' => 'Płyta kartonowo-gipsowa',
        'service3_text' => 'Montaż ścian działowych, sufitów podwieszanych i wszelkich konstrukcji z płyt G-K.',
        'service4_title' => 'Hydraulika',
        'service4_text' => 'Instalacje wodno-kanalizacyjne, montaż armatury łazienkowej i kuchennej.',
        'service5_title' => 'Malowanie i tapetowanie',
        'service5_text' => 'Profesjonalne malowanie ścian i sufitów, aplikacja tapet i dekoracyjnych farb strukturalnych.',
        'service6_title' => 'Elektryka',
        'service6_text' => 'Instalacje elektryczne, montaż osprzętu elektrycznego i oświetlenia.',

        'advantages_title' => 'Dlaczego my?',
        'adv1_title' => 'Doświadczony zespół',
        'adv1_text' => 'Nasz zespół to wykwalifikowani fachowcy z wieloletnim doświadczeniem w branży remontowej.',
        'adv2_title' => 'Gwarancja jakości',
        'adv2_text' => 'Udzielamy gwarancji na wszystkie wykonane prace. Jakość to nasz priorytet.',
        'adv3_title' => 'Terminy dotrzymane',
        'adv3_text' => 'Realizujemy projekty w uzgodnionych terminach. Szanujemy Twój czas.',
        'adv4_title' => 'Materiały premium',
        'adv4_text' => 'Używamy wyłącznie sprawdzonych materiałów od renomowanych producentów.',
        'adv5_title' => 'Uczciwe ceny',
        'adv5_text' => 'Transparentna wycena bez ukrytych kosztów. Wiesz dokładnie za co płacisz.',
        'adv6_title' => 'Kompleksowość',
        'adv6_text' => 'Jedno miejsce, wszystkie usługi. Nie musisz szukać kilku wykonawców.',

        'faq_title' => 'Najczęściej zadawane pytania',
        'faq1_q' => 'Ile kosztuje kompleksowy remont mieszkania?',
        'faq1_a' => 'Koszt remontu zależy od powierzchni mieszkania, zakresu prac, wybranych materiałów i stopnia wykończenia. Po bezpłatnej konsultacji i oględzinach przygotowujemy szczegółową wycenę. Zazwyczaj ceny zaczynają się od kilkudziesięciu złotych za metr kwadratowy przy pracach częściowych.',
        'faq2_q' => 'Jak długo trwa remont mieszkania?',
        'faq2_a' => 'Czas realizacji zależy od zakresu prac. Remont łazienki to zazwyczaj 2–3 tygodnie, kuchni 3–4 tygodnie. Kompleksowy remont całego mieszkania 50–70 m² trwa średnio 2–3 miesiące. Przed rozpoczęciem prac ustalamy konkretny harmonogram.',
        'faq3_q' => 'Czy zapewniacie materiały budowlane?',
        'faq3_a' => 'Możemy zrealizować remont zarówno z materiałów klienta, jak i z naszych. W przypadku dostarczenia materiałów przez naszą firmę, gwarantujemy ich wysoką jakość i atrakcyjne ceny dzięki długoterminowym relacjom z dostawcami.',
        'faq4_q' => 'Czy działacie na terenie całego województwa śląskiego?',
        'faq4_a' => 'Tak, świadczymy usługi remontowe na terenie całego województwa śląskiego. Nasza siedziba mieści się w Tychach, ale realizujemy projekty w Katowicach, Gliwicach, Zabrzu, Sosnowcu, Chorzowie i okolicznych miejscowościach.',
        'faq5_q' => 'Czy udzielacie gwarancji na wykonane prace?',
        'faq5_a' => 'Tak, udzielamy gwarancji na wszystkie wykonane przez nas prace. Czas gwarancji zależy od rodzaju prac i jest szczegółowo opisany w umowie. W przypadku jakichkolwiek usterek reagujemy natychmiast i bezpłatnie usuwamy wady w ramach gwarancji.',
        'faq6_q' => 'Jak wygląda proces współpracy?',
        'faq6_a' => 'Proces zaczyna się od bezpłatnej konsultacji i oględzin. Następnie przygotowujemy szczegółową wycenę. Po akceptacji sporządzamy umowę i ustalamy harmonogram. Podczas realizacji informujemy o postępach, a prace odbieramy wspólnie z klientem.',

        // Renovation page
        'renov_hero_title' => 'Kompleksowy remont mieszkania',
        'renov_hero_subtitle' => 'Twój nowy dom zaczyna się tutaj. Od projektu do odbioru kluczy.',

        'renov_benefits_title' => 'Korzyści ze współpracy z nami',
        'renov_b1_title' => 'Jeden wykonawca — zero stresu',
        'renov_b1_text' => 'Nie musisz koordynować wielu ekip. My zajmujemy się wszystkim — od prac wyburzeniowych, przez instalacje, po finalne wykończenie.',
        'renov_b2_title' => 'Transparentna umowa',
        'renov_b2_text' => 'Wszystko jest na piśmie: zakres prac, materiały, terminy i cena. Bez niespodzianek i ukrytych kosztów.',
        'renov_b3_title' => 'Nadzór kierownika budowy',
        'renov_b3_text' => 'Każda budowa jest nadzorowana przez doświadczonego kierownika, który odpowiada za jakość i terminowość.',
        'renov_b4_title' => 'Regularne raporty postępu',
        'renov_b4_text' => 'Informujemy Cię na bieżąco o postępach prac — zdjęcia, krótkie raporty, kontakt z kierownikiem.',
        'renov_b5_title' => 'Sprzątanie po remoncie',
        'renov_b5_text' => 'Po zakończeniu remontu dokładnie sprzątamy i wywozimy wszystkie odpady budowlane.',
        'renov_b6_title' => 'Gwarancja i serwis pogwarancyjny',
        'renov_b6_text' => 'Udzielamy pisemnej gwarancji na wykonane prace oraz zapewniamy serwis w razie potrzeby.',

        'renov_stages_title' => 'Etapy remontu mieszkania',
        'stage1_title' => 'Konsultacja i wycena',
        'stage1_text' => 'Bezpłatne spotkanie na miejscu, oględziny mieszkania, omówienie potrzeb i oczekiwań. Przygotowanie szczegółowej wyceny.',
        'stage2_title' => 'Projekt i planowanie',
        'stage2_text' => 'Ustalenie zakresu prac, wybór materiałów, sporządzenie harmonogramu. Podpisanie umowy.',
        'stage3_title' => 'Prace wyburzeniowe',
        'stage3_text' => 'Demontaż starych elementów, wyburzanie ścian (jeśli dotyczy), przygotowanie podłoża.',
        'stage4_title' => 'Instalacje',
        'stage4_text' => 'Wykonanie lub modernizacja instalacji elektrycznych, wodno-kanalizacyjnych i grzewczych.',
        'stage5_title' => 'Prace budowlane i wykończeniowe',
        'stage5_text' => 'Tynkowanie, gładzie, sufity podwieszane, płyty G-K, układanie płytek i podłóg.',
        'stage6_title' => 'Malowanie i montaż',
        'stage6_text' => 'Malowanie ścian, montaż drzwi, mebli łazienkowych, oświetlenia i osprzętu elektrycznego.',
        'stage7_title' => 'Sprzątanie i odbiór',
        'stage7_text' => 'Generalne sprzątanie, przegląd wykonanych prac, przekazanie mieszkania klientowi.',

        'gallery_title' => 'Nasze realizacje',
        'gallery_subtitle' => 'Wybrane projekty remontów mieszkań wykonanych przez nasz zespół.',
        'gallery_photos_title' => 'Zdjęcia',
        'gallery_videos_title' => 'Wideo',
        'gallery_no_videos' => 'Wkrótce dodamy materiały wideo.',
        'gallery_photo_alt' => 'Zdjęcie realizacji',

        'lightbox_close' => 'Zamknij',
        'lightbox_prev' => 'Poprzedni',
        'lightbox_next' => 'Następny',

        // Contacts page
        'contacts_title' => 'Kontakty',
        'contacts_subtitle' => 'Skontaktuj się z nami, aby umówić bezpłatną konsultację.',

        'contact_info_title' => 'Informacje kontaktowe',
        'phone_label' => 'Telefon',
        'email_label' => 'E-mail',
        'address_label' => 'Adres',
        'hours_label' => 'Godziny pracy',
        'hours_value' => 'Cała doba — 7 dni w tygodniu',
        'nip_label' => 'NIP',
        'area_label' => 'Obszar działania',
        'area_value' => 'Województwo Śląskie',

        'contact_form_title' => 'Napisz do nas',
        'form_name' => 'Nazwisko i imię',
        'form_phone' => 'Numer telefonu',
        'form_email' => 'Adres e-mail',
        'form_message' => 'Twoja wiadomość',
        'form_submit' => 'Wyślij wiadomość',
        'form_success' => 'Dziękujemy! Wiadomość została wysłana. Odezwiemy się wkrótce.',
        'form_error' => 'Wystąpił błąd. Proszę spróbować ponownie lub skontaktować się telefonicznie.',
        'form_required' => 'To pole jest wymagane.',
        'form_invalid_email' => 'Podaj prawidłowy adres e-mail.',

        'map_title' => 'Lokalizacja na mapie',

        // Footer
        'footer_about_title' => 'Oleksandr Horbatiuk',
        'footer_about_text' => 'Specjalizujemy się w kompleksowych remontach mieszkań na terenie województwa śląskiego. Oferujemy profesjonalne usługi od elewacji, przez podłogi i płyty G-K, po hydraulikę. Każdy projekt realizujemy z pasją i zaangażowaniem, dbając o najwyższą jakość wykonania.',
        'footer_links_title' => 'Szybkie linki',
        'footer_contact_title' => 'Kontakt',
        'footer_hours_title' => 'Godziny pracy',
        'footer_hours_value' => 'Cała doba, 7 dni w tygodniu',
        'footer_rights' => 'Wszelkie prawa zastrzeżone.',

        // Company data
        'company_phone' => '+48 577 917 817',
        'company_email' => 'horbatiukrenovation@gmail.com',
        'company_address' => 'ul. Morcinska 13/5, 43-100, Tychy',
        'company_nip' => '6463013249',
    ],

    'uk' => [
        'site_title' => 'Олександр Горбатюк',
        'meta_description' => 'Комплексний ремонт квартир — фасади, підлоги, гіпсокартон, сантехніка та багато іншого. Сілезьке воєводство.',
        'nav_home' => 'Головна',
        'nav_renovation' => 'Комплексний ремонт квартири',
        'nav_contacts' => 'Контакти',
        'lang_pl' => 'PL',
        'lang_uk' => 'UA',
        'choose_lang' => 'Мова',

        // Home page
        'hero_title' => 'Комплексний ремонт квартир',
        'hero_subtitle' => 'Професійні ремонтні послуги в Сілезькому воєводстві. Фасади, підлоги, гіпсокартон, сантехніка та багато іншого.',
        'hero_cta' => 'Зв\'яжіться з нами',
        'hero_cta2' => 'Наші роботи',

        'about_title' => 'Про нашу компанію',
        'about_text1' => 'Компанія Олександр Горбатюк спеціалізується на комплексному ремонті квартир на території Сілезького воєводства. Ми маємо багаторічний досвід та команду кваліфікованих фахівців.',
        'about_text2' => 'Виконуємо оздоблювальні роботи найвищої якості — від зовнішніх фасадів, укладання підлог і гіпсокартонних конструкцій до сантехнічних інсталяцій. Кожен проєкт ми підходимо індивідуально, забезпечуючи комплексне обслуговування від першої консультації до здачі готової квартири.',
        'about_text3' => 'Працюємо сумлінно, вчасно та з ентузіазмом. Матеріали та інструменти найвищого класу, а результати нашої роботи говорять самі за себе.',

        'services_title' => 'Наші послуги',
        'service1_title' => 'Фасади',
        'service1_text' => 'Комплексні фасадні роботи — штукатурення, утеплення та оздоблення фасадів будівель.',
        'service2_title' => 'Підлоги',
        'service2_text' => 'Укладання паркету, ламінату, керамограніту, кераміки та всіх інших видів підлог.',
        'service3_title' => 'Гіпсокартон',
        'service3_text' => 'Монтаж перегородок, підвісних стель та будь-яких конструкцій з гіпсокартону.',
        'service4_title' => 'Сантехніка',
        'service4_text' => 'Водопровідно-каналізаційні інсталяції, монтаж сантехнічної арматури для ванної та кухні.',
        'service5_title' => 'Фарбування і шпалери',
        'service5_text' => 'Професійне фарбування стін і стель, наклеювання шпалер і декоративних структурних фарб.',
        'service6_title' => 'Електрика',
        'service6_text' => 'Електричні інсталяції, монтаж електрообладнання та освітлення.',

        'advantages_title' => 'Чому ми?',
        'adv1_title' => 'Досвідчена команда',
        'adv1_text' => 'Наша команда — це кваліфіковані фахівці з багаторічним досвідом у ремонтній галузі.',
        'adv2_title' => 'Гарантія якості',
        'adv2_text' => 'Надаємо гарантію на всі виконані роботи. Якість — наш пріоритет.',
        'adv3_title' => 'Дотримання термінів',
        'adv3_text' => 'Реалізуємо проєкти у погоджені терміни. Поважаємо ваш час.',
        'adv4_title' => 'Преміальні матеріали',
        'adv4_text' => 'Використовуємо виключно перевірені матеріали від відомих виробників.',
        'adv5_title' => 'Чесні ціни',
        'adv5_text' => 'Прозоре ціноутворення без прихованих витрат. Ви знаєте, за що платите.',
        'adv6_title' => 'Комплексність',
        'adv6_text' => 'Одне місце, всі послуги. Не потрібно шукати кілька підрядників.',

        'faq_title' => 'Питання, що часто ставляться',
        'faq1_q' => 'Скільки коштує комплексний ремонт квартири?',
        'faq1_a' => 'Вартість ремонту залежить від площі квартири, обсягу робіт, вибраних матеріалів та рівня оздоблення. Після безкоштовної консультації та огляду ми готуємо детальний кошторис. Як правило, ціни починаються від кількох десятків злотих за квадратний метр при часткових роботах.',
        'faq2_q' => 'Скільки часу займає ремонт квартири?',
        'faq2_a' => 'Термін реалізації залежить від обсягу робіт. Ремонт ванної кімнати займає зазвичай 2–3 тижні, кухні 3–4 тижні. Комплексний ремонт квартири площею 50–70 м² займає в середньому 2–3 місяці. Перед початком робіт ми складаємо конкретний графік.',
        'faq3_q' => 'Чи забезпечуєте ви будівельні матеріали?',
        'faq3_a' => 'Ми можемо виконати ремонт як з матеріалів клієнта, так і зі своїх. У разі постачання матеріалів нашою компанією ми гарантуємо їх високу якість та привабливі ціни завдяки довгостроковим відносинам із постачальниками.',
        'faq4_q' => 'Чи працюєте ви по всьому Сілезькому воєводству?',
        'faq4_a' => 'Так, ми надаємо ремонтні послуги на всій території Сілезького воєводства. Наш офіс знаходиться в Тихах, але ми реалізуємо проєкти в Катовицях, Гліві, Забже, Сосновці, Хожуві та навколишніх місцевостях.',
        'faq5_q' => 'Чи надаєте ви гарантію на виконані роботи?',
        'faq5_a' => 'Так, ми надаємо гарантію на всі виконані нами роботи. Термін гарантії залежить від виду робіт і детально описаний у договорі. У разі будь-яких дефектів ми реагуємо негайно та безкоштовно усуваємо їх у рамках гарантії.',
        'faq6_q' => 'Як виглядає процес співпраці?',
        'faq6_a' => 'Процес починається з безкоштовної консультації та огляду. Потім ми готуємо детальний кошторис. Після погодження укладаємо договір та встановлюємо графік. Під час реалізації ми повідомляємо про прогрес, а роботи приймаємо разом із замовником.',

        // Renovation page
        'renov_hero_title' => 'Комплексний ремонт квартири',
        'renov_hero_subtitle' => 'Ваш новий дім починається тут. Від проєкту до передачі ключів.',

        'renov_benefits_title' => 'Переваги співпраці з нами',
        'renov_b1_title' => 'Один підрядник — нуль стресу',
        'renov_b1_text' => 'Не потрібно координувати кілька бригад. Ми займаємося всім — від демонтажних робіт, через інсталяції, до фінального оздоблення.',
        'renov_b2_title' => 'Прозорий договір',
        'renov_b2_text' => 'Все письмово: обсяг робіт, матеріали, терміни та ціна. Без сюрпризів і прихованих витрат.',
        'renov_b3_title' => 'Нагляд керівника будівництва',
        'renov_b3_text' => 'Кожний об\'єкт контролює досвідчений керівник, який відповідає за якість і своєчасність.',
        'renov_b4_title' => 'Регулярні звіти про хід робіт',
        'renov_b4_text' => 'Регулярно інформуємо вас про хід робіт — фото, короткі звіти, контакт із керівником.',
        'renov_b5_title' => 'Прибирання після ремонту',
        'renov_b5_text' => 'Після завершення ремонту ретельно прибираємо і вивозимо всі будівельні відходи.',
        'renov_b6_title' => 'Гарантія та після-гарантійне обслуговування',
        'renov_b6_text' => 'Надаємо письмову гарантію на виконані роботи та забезпечуємо обслуговування у разі потреби.',

        'renov_stages_title' => 'Етапи ремонту квартири',
        'stage1_title' => 'Консультація та кошторис',
        'stage1_text' => 'Безкоштовна зустріч на місці, огляд квартири, обговорення потреб та очікувань. Підготовка детального кошторису.',
        'stage2_title' => 'Проєкт і планування',
        'stage2_text' => 'Визначення обсягу робіт, вибір матеріалів, складання графіку. Підписання договору.',
        'stage3_title' => 'Демонтажні роботи',
        'stage3_text' => 'Демонтаж старих елементів, знесення стін (за необхідності), підготовка основи.',
        'stage4_title' => 'Інсталяції',
        'stage4_text' => 'Виконання або модернізація електричних, водопровідно-каналізаційних та опалювальних систем.',
        'stage5_title' => 'Будівельні та оздоблювальні роботи',
        'stage5_text' => 'Штукатурення, шпакльовка, підвісні стелі, гіпсокартон, укладання плитки та підлог.',
        'stage6_title' => 'Фарбування та монтаж',
        'stage6_text' => 'Фарбування стін, монтаж дверей, ванного обладнання, освітлення та електроарматури.',
        'stage7_title' => 'Прибирання та прийом',
        'stage7_text' => 'Генеральне прибирання, перевірка виконаних робіт, передача квартири замовнику.',

        'gallery_title' => 'Наші роботи',
        'gallery_subtitle' => 'Вибрані проєкти ремонту квартир, виконані нашою командою.',
        'gallery_photos_title' => 'Фото',
        'gallery_videos_title' => 'Відео',
        'gallery_no_videos' => 'Незабаром додамо відеоматеріали.',
        'gallery_photo_alt' => 'Фото виконаної роботи',

        'lightbox_close' => 'Закрити',
        'lightbox_prev' => 'Попередній',
        'lightbox_next' => 'Наступний',

        // Contacts page
        'contacts_title' => 'Контакти',
        'contacts_subtitle' => 'Зв\'яжіться з нами, щоб домовитися про безкоштовну консультацію.',

        'contact_info_title' => 'Контактна інформація',
        'phone_label' => 'Телефон',
        'email_label' => 'E-mail',
        'address_label' => 'Адреса',
        'hours_label' => 'Години роботи',
        'hours_value' => 'Цілодобово — 7 днів на тиждень',
        'nip_label' => 'NIP',
        'area_label' => 'Область діяльності',
        'area_value' => 'Сілезьке воєводство',

        'contact_form_title' => 'Напишіть нам',
        'form_name' => 'Прізвище та ім\'я',
        'form_phone' => 'Номер телефону',
        'form_email' => 'Адреса електронної пошти',
        'form_message' => 'Ваше повідомлення',
        'form_submit' => 'Надіслати повідомлення',
        'form_success' => 'Дякуємо! Повідомлення надіслано. Ми зв\'яжемося з вами найближчим часом.',
        'form_error' => 'Сталася помилка. Будь ласка, спробуйте ще раз або зателефонуйте нам.',
        'form_required' => 'Це поле є обов\'язковим.',
        'form_invalid_email' => 'Введіть дійсну адресу електронної пошти.',

        'map_title' => 'Місцезнаходження на карті',

        // Footer
        'footer_about_title' => 'Олександр Горбатюк',
        'footer_about_text' => 'Спеціалізуємося на комплексному ремонті квартир на території Сілезького воєводства. Пропонуємо професійні послуги від фасадів, підлог і гіпсокартону до сантехніки. Кожен проєкт реалізуємо з пристрастю та відданістю, дбаючи про найвищу якість виконання.',
        'footer_links_title' => 'Швидкі посилання',
        'footer_contact_title' => 'Контакт',
        'footer_hours_title' => 'Години роботи',
        'footer_hours_value' => 'Цілодобово, 7 днів на тиждень',
        'footer_rights' => 'Всі права захищені.',

        // Company data
        'company_phone' => '+48 577 917 817',
        'company_email' => 'horbatiukrenovation@gmail.com',
        'company_address' => 'ul. Morcinska 13/5, 43-100, Tychy',
        'company_nip' => '6463013249',
    ],
];

$t = $translations[$lang];

function t($key) {
    global $t;
    echo isset($t[$key]) ? htmlspecialchars($t[$key], ENT_QUOTES, 'UTF-8') : $key;
}

function tr($key) {
    global $t;
    return isset($t[$key]) ? $t[$key] : $key;
}
