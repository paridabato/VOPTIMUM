let numbers = document.querySelectorAll('.number');

numbers.forEach((number) => {
    let numberTop = number.getBoundingClientRect().top,
        start = +number.innerHTML,
        end = +number.dataset.max;
    window.addEventListener('scroll', function onScroll() {
        if (window.pageYOffset > numberTop - window.innerHeight / 2) {
            this.removeEventListener('scroll', onScroll);
            var interval = setInterval(function() {
                number.innerHTML = ++start;
                if (start == end) {
                    clearInterval(interval);
                }
            }, 5);
        }
    });
});