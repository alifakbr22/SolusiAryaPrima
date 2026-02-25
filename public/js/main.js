// === SCROLL REVEAL ADVANCED ===
const revealElements = document.querySelectorAll(
    '.reveal, .fade-scroll'
);

const revealOnScroll = () => {
    const windowHeight = window.innerHeight;

    revealElements.forEach(el => {
        const top = el.getBoundingClientRect().top;
        if (top < windowHeight - 100) {
            el.classList.add('show');
        }
    });
};

window.addEventListener('scroll', revealOnScroll);
window.addEventListener('load', revealOnScroll);
// NAVBAR SCROLL EFFECT
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    navbar.classList.toggle('scrolled', window.scrollY > 20);
});

// SCROLL REVEAL
const reveals = document.querySelectorAll('.reveal');


    const h = window.innerHeight;
    reveals.forEach(el => {
        if (el.getBoundingClientRect().top < h - 100) {
            el.classList.add('show');
        }
    });


window.addEventListener('scroll', revealOnScroll);
window.addEventListener('load', revealOnScroll);
