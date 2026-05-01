

function init_animation(element) {

    let observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                element.addClass('show');
                observer.unobserve(entry.target);
            }
        });
    }, {threshold: 0.2});

    observer.observe(element[0]);
}