window.addEventListener("scroll", () => {
    const header = document.querySelector(".header");
    header.classList.toggle("shrink", window.scrollY > 60);
});
const reveals = document.querySelectorAll(".reveal");


