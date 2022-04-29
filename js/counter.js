var numbers = document.querySelectorAll('.number')

numbers.forEach((number) => {
    var start = +number.innerHTML
    var end = +number.dataset.max
    var numberTop = number.getBoundingClientRect().top
    window.addEventListener('scroll', function onScroll() {
        if (window.pageYOffset > numberTop - window.innerHeight / 2) {
            this.removeEventListener('scroll', onScroll);
            var interval = setInterval(function() {
                number.innerHTML = ++start;
                if (start == end) {
                    clearInterval(interval);
                }
            }, 1);
        }
    });
});