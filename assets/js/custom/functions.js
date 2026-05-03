

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
    let currentIndex = 0;

    function updateButtons() {
        el.find('.header-btn.prev').toggleClass('is-disabled', currentIndex === 0);
        el.find('.header-btn.next').toggleClass('is-disabled', currentIndex === navigationItems.length - 1);
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
        }
    }

    // IntersectionObserver → следим за секциями
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                setActiveById(entry.target.id);
            }
        });
    }, { threshold: 0.6 });

    wrappers.each(function() {
        observer.observe(this);
    });

    // клики по ссылкам → плавный скролл
    navigationItems.find('a').on('click', function(e) {
        e.preventDefault();
        const targetId = $(this).attr('href');
        const targetEl = document.querySelector(targetId);
        if (targetEl) {
            targetEl.scrollIntoView({ behavior: 'smooth' });
        }
    });

    // кнопки → имитация клика на соседний линк
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

    // стартовое состояние
    updateButtons();
}

















