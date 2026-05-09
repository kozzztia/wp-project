

function init_animation(el) {

    let observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                el.addClass('show');
                observer.unobserve(entry.target);
            }
        });
    }, {threshold: 0.2});

    observer.observe(el[0]);
}


function init_navigation(el) {
    const navigationItems = el.find('.menu-item');
    const wrappers = $('.customWrapper[id]');
    const logoText = $('.logo-text');
    let currentIndex = 0;

    function updateLogoTextById(id) {
        if (window.innerWidth <= 768) {
            const target = document.getElementById(id);
            if (target) {
                const text = target.getAttribute('data-title') || target.id;
                logoText.text(text);
            }
        } else {
            logoText.text('Front-end developer');
        }
    }

    function setActiveById(id) {
        const targetItem = navigationItems.filter(function () {
            return $(this).find('a').attr('href') === '#' + id;
        });

        if (targetItem.length) {
            const index = navigationItems.index(targetItem);

            navigationItems.removeClass('active prev next');
            navigationItems.eq(index).addClass('active');
            navigationItems.eq((index - 1 + navigationItems.length) % navigationItems.length).addClass('prev');
            navigationItems.eq((index + 1) % navigationItems.length).addClass('next');

            currentIndex = index;
            updateLogoTextById(id);
        }
    }

    // переключение по скроллу: ближайший блок к верху окна
    $(window).on('scroll', function () {
        let closest = null;
        let minDiff = Infinity;

        wrappers.each(function () {
            const rect = this.getBoundingClientRect();
            const diff = Math.abs(rect.top);
            if (diff < minDiff) {
                minDiff = diff;
                closest = this;
            }
        });

        if (closest) {
            const id = closest.id;
            // обновляем только если hash реально изменился
            if ('#' + id !== window.location.hash) {
                history.replaceState(null, null, '#' + id);
                setActiveById(id);
            }
        }
    });

    // клик по пункту меню: активируем сразу и обновляем hash
    navigationItems.find('a').on('click', function (e) {
        e.preventDefault();
        const targetId = $(this).attr('href');
        const targetEl = document.querySelector(targetId);
        if (targetEl) {
            targetEl.scrollIntoView({ behavior: 'smooth' });
            setActiveById(targetId.replace('#', ''));
            history.replaceState(null, null, targetId);
        }
    });

    // кнопка prev по кругу
    el.find('.header-btn.prev').on('click', function () {
        const newIndex = (currentIndex - 1 + navigationItems.length) % navigationItems.length;
        navigationItems.eq(newIndex).find('a')[0].click();
    });

    // кнопка next по кругу
    el.find('.header-btn.next').on('click', function () {
        const newIndex = (currentIndex + 1) % navigationItems.length;
        navigationItems.eq(newIndex).find('a')[0].click();
    });

    $(window).on('resize', function () {
        const id = window.location.hash.replace('#', '');
        if (id) updateLogoTextById(id);
    });

    const startId = window.location.hash.replace('#', '');
    if (startId) {
        setActiveById(startId);
    } else {
        setActiveById(navigationItems.first().find('a').attr('href').replace('#', ''));
    }
}










function init_menu_toggler(el) {
    const menuList = $('.header-menu > ul');

    el.on('click', function(e) {
        e.preventDefault();

        if (window.innerWidth > 768) {
            menuList.toggleClass('show');

            el.toggleClass('close');
        }
    });
}

function init_slider(el) {
    const swiperEl = el.find('.swiper')[0];
    const swiper = new Swiper(swiperEl, {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: el.find('.swiper-button-next')[0],
            prevEl: el.find('.swiper-button-prev')[0],
        }
    });

    const paginationEl = el.find('.single-slider-pagination');
    const thumb = paginationEl.find('.single-slider-thumb');

    const bullets = [];

    swiper.slides.forEach((slide, index) => {
        const slug = slide.getAttribute('data-slug') || (index + 1);
        const num = (index + 1 < 10) ? '0' + (index + 1) : (index + 1);
        const bullet = $('<span/>', {
            class: 'single-slider-bullet',
            html: '<i>' + num + '</i> ' + slug
        });

        bullet.on('click', () => {
            swiper.slideTo(index);
        });

        paginationEl.append(bullet);
        bullets.push(bullet);
    });

    function updateThumb() {
        const activeBullet = bullets[swiper.activeIndex];
        if (!activeBullet) return;

        bullets.forEach(b => b.removeClass('active'));
        activeBullet.addClass('active');

        const left = activeBullet.offset().left - paginationEl.offset().left;
        const width = activeBullet.outerWidth();

        thumb.css({
            transform: `translateX(${left}px)`,
            width: width
        });
    }


    updateThumb();
    swiper.on('slideChange', updateThumb);
}


function init_second_slider(el){
    const swiperEl = el.find('.swiper')[0];
    const timer = swiperEl.getAttribute('data-timer');

    const swiper = new Swiper(swiperEl, {
        loop: !!timer,
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: el.find('.swiper-button-next')[0],
            prevEl: el.find('.swiper-button-prev')[0],
        },

        ...(timer ? {
            autoplay: {
                delay: parseInt(timer, 10),
                disableOnInteraction: false
            }
        } : {}),
        breakpoints: {
            1440: { slidesPerView: 4 },
            1024: { slidesPerView: 3 },
            768:  { slidesPerView: 2 },
            390:  { slidesPerView: 1 }
        },
        watchSlidesProgress: true,
        watchSlidesVisibility: true
    });

    if (timer) {
        swiperEl.addEventListener('mouseenter', () => swiper.autoplay.stop());
        swiperEl.addEventListener('mouseleave', () => swiper.autoplay.start());
    }
}








