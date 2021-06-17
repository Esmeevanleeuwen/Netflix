const options = {
    type: 'carousel',
    startAt: 0,
    perView: 5,
    breakpoints: {
        1500: {
            perView: 4
        },
        1024: {
            perView: 2
        },
        600: {
            perView: 2
        }
    }
};

const gliders = document.querySelectorAll(".glide");

Object.values(gliders).map(glider => {
    new Glide(glider, options).mount();
});