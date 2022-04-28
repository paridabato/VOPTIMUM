var numbers = document.querySelectorAll('.number');

numbers.forEach((number) => {
    var numberTop = number.getBoundingClientRect().top;
    // var start = +number.innerHTML;
    // var end = +number.dataset.max;
    // const speed = 100;
    // var inc = Math.ceil(end / speed);
    // console.log(inc)
    var updateNumber = () => {
        var end = +number.dataset.max;
        var start = +number.innerHTML;
        var speed = 250;
        var inc = end / speed

        if (start < end) {
            start = `${Math.ceil(start + inc)}`
            setTimeout(updateNumber, 1)
        }
    }
    window.addEventListener('scroll', function onScroll() {
        if (window.pageYOffset > numberTop - window.innerHeight / 2) {
            this.removeEventListener('scroll', onScroll);
            // var interval = setInterval(function() {
            //     number.innerHTML = ++inc;
            //     console.log(inc)
            //     if (inc == end) {
            //         clearInterval(interval);
            //     }
            // }, 1);
            updateNumber();
        }
    });
})