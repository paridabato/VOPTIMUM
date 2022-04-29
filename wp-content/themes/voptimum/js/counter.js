var numbers = document.querySelector('.number')
var numberTop = numbers.getBoundingClientRect().top
var start = +number.innerHTML
var end = +number.dataset.max

numbers.forEach((number) => {
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