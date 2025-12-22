document.querySelectorAll('[data-counter]').forEach(el => {
        let countTo = el.getAttribute('data-counter');
        let duration = 2000;
        let start = 0;
        let step = countTo / (duration / 16);

        let counter = setInterval(() => {
            start += step;
            if (start >= countTo) {
            start = countTo;
            clearInterval(counter);
            }
            el.textContent = Math.floor(start);
        }, 16);
});