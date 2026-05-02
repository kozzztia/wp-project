

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
    const navList = el.find('.header-nav ul');
    const wrappers = $('.customWrapper[id]');

    wrappers.each(function() {
        const id = $(this).attr('id');
        const title = $(this).data('title') || id;

        if (navList.find('a[href="#' + id + '"]').length === 0) {
            const li = $('<li>', { class: 'header-nav-item' });
            const a = $('<a>', { href: '#' + id, text: title });
            li.append(a);
            navList.append(li);
        }
    });

    const navigationItems = el.find('.header-nav-item');
    let currentIndex = 0;

    function updateButtons() {
        el.find('.header-btn.prev').toggleClass('is-disabled', currentIndex === 0);
        el.find('.header-btn.next').toggleClass('is-disabled', currentIndex === navigationItems.length - 1);
    }

    function setActive(index, scroll = true) {
        navigationItems.removeClass('active');
        currentIndex = index;
        const currentItem = navigationItems.eq(currentIndex);
        currentItem.addClass('active');
        updateButtons();

        if (scroll) {
            const targetId = currentItem.find('a').attr('href');
            const targetEl = $(targetId);
            if (targetEl.length) {
                targetEl[0].scrollIntoView({ behavior: 'smooth' });
            }
        }
    }

    setActive(0, false);

    el.find('.header-btn.prev').on('click', function() {
        if (currentIndex > 0) setActive(currentIndex - 1);
    });

    el.find('.header-btn.next').on('click', function() {
        if (currentIndex < navigationItems.length - 1) setActive(currentIndex + 1);
    });

    navigationItems.find('a').on('click', function(e) {
        e.preventDefault();
        const index = navigationItems.find('a').index(this);
        setActive(index);
    });

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.id;
                const index = navigationItems.find('a[href="#' + id + '"]').parent().index();
                if (index !== -1) setActive(index, false);
            }
        });
    }, { threshold: 0.5 });

    wrappers.each(function() {
        observer.observe(this);
    });
}










