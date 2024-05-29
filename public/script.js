const nav = document.querySelector("nav");

window.addEventListener("scroll", () => {
    if (window.scrollY > 5) {
        // Ganti nilai 100 dengan jumlah pixel yang Anda inginkan sebelum mengubah warna navbar
        nav.classList.add("scrolled");
    } else {
        nav.classList.remove("scrolled");
    }
});
