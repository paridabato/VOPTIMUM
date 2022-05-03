var numbers = document.querySelectorAll('.number')

numbers.forEach((number) => {
    var numberTop = number.getBoundingClientRect().top
    window.addEventListener('scroll', function onScroll() {
        if (window.pageYOffset > numberTop - window.innerHeight / 2) {
            this.removeEventListener('scroll', onScroll);
            var updateCounter = () => {
                var start = +number.innerText
                var end = +number.dataset.max
                var speed = 250
                var inc = Math.ceil(end / speed)
                if (start < end) {
                    number.innerText = start + inc
                    setTimeout(updateCounter, 2)
                } else {
                    number.innerText = end
                }
            }
            updateCounter()
        }
    });
});