

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
    const logoText = $('.logo-text'); // логотип берём один раз
    let currentIndex = 0;

    function updateButtons() {
        el.find('.header-btn.prev').toggleClass('is-disabled', currentIndex === 0);
        el.find('.header-btn.next').toggleClass('is-disabled', currentIndex === navigationItems.length - 1);
    }

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
        const targetItem = navigationItems.has('a[href="#' + id + '"]');
        if (targetItem.length) {
            const index = navigationItems.index(targetItem);

            navigationItems.removeClass('active prev next');
            navigationItems.eq(index).addClass('active');
            if (index > 0) navigationItems.eq(index - 1).addClass('prev');
            if (index < navigationItems.length - 1) navigationItems.eq(index + 1).addClass('next');

            currentIndex = index;
            updateButtons();

            // синхронизируем логотип
            updateLogoTextById(id);
        }
    }

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.id;
                history.replaceState(null, null, '#' + id);
                setActiveById(id);
            }
        });
    }, { threshold: 0.6 });

    wrappers.each(function() {
        observer.observe(this);
    });

    navigationItems.find('a').on('click', function(e) {
        e.preventDefault();
        const targetId = $(this).attr('href');
        const targetEl = document.querySelector(targetId);
        if (targetEl) {
            targetEl.scrollIntoView({ behavior: 'smooth' });
        }
    });

    el.find('.header-btn.prev').on('click', function() {
        if (currentIndex > 0) {
            navigationItems.eq(currentIndex - 1).find('a')[0].click();
        }
    });

    el.find('.header-btn.next').on('click', function() {
        if (currentIndex < navigationItems.length - 1) {
            navigationItems.eq(currentIndex + 1).find('a')[0].click();
        }
    });

    // слушаем ресайз, чтобы логотип возвращался к дефолту
    $(window).on('resize', function() {
        const id = window.location.hash.replace('#', '');
        if (id) updateLogoTextById(id);
    });

    // стартовое состояние
    const startId = window.location.hash.replace('#', '');
    if (startId) setActiveById(startId);
    updateButtons();
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
    const swiper = new Swiper(el.find('.swiper')[0], {
        loop: false,          // без бесконечного цикла
        slidesPerView: 1,     // по одному слайду
        spaceBetween: 0,      // без отступов
        navigation: {
            nextEl: el.find('.swiper-button-next')[0],
            prevEl: el.find('.swiper-button-prev')[0],
        },
        // пагинацию пока не подключаем
    });
}

