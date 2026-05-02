

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

    function setActiveByHash() {
        const hash = window.location.hash;
        if (hash) {
            const index = navigationItems.find('a[href="' + hash + '"]').parent().index();
            if (index !== -1) {
                navigationItems.removeClass('active');
                navigationItems.eq(index).addClass('active');
                currentIndex = index;
                updateButtons();
            }
        }
    }

    setActiveByHash();

    el.find('.header-btn.prev').on('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
            const targetId = navigationItems.eq(currentIndex).find('a').attr('href');
            window.location.hash = targetId;
            setActiveByHash();
        }
    });

    el.find('.header-btn.next').on('click', function() {
        if (currentIndex < navigationItems.length - 1) {
            currentIndex++;
            const targetId = navigationItems.eq(currentIndex).find('a').attr('href');
            window.location.hash = targetId;
            setActiveByHash();
        }
    });

    navigationItems.find('a').on('click', function() {
        setTimeout(setActiveByHash, 300);
    });

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.id;
                window.location.hash = '#' + id;
                setActiveByHash();
            }
        });
    }, { threshold: 0.5 });

    wrappers.each(function() {
        observer.observe(this);
    });
}











