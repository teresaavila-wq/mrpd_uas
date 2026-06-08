/*NAVBAR*/
const navbar = document.querySelector(".navbar");
const hero = document.querySelector(".hero");

window.addEventListener("scroll", function () {
    const heroHeight = hero.offsetHeight;

    if (window.scrollY > heroHeight - 80) {
        navbar.classList.add("active");
    } else {
        navbar.classList.remove("active");
    }
});

const toggle = document.querySelector(".menu-toggle");
const menu = document.querySelector(".menu");

toggle.addEventListener("click", () => {
    menu.classList.toggle("show");
});

/*SEJARAH*/
const items = document.querySelectorAll(".sejarah-item");

window.addEventListener("scroll", () => {
    items.forEach(item => {
        const rect = item.getBoundingClientRect();

        if (rect.top < window.innerHeight - 100) {
            item.classList.add("show");
        }
    });
});

/*GALERI*/
const container = document.querySelector(".galeri-container");

document.querySelector(".next").addEventListener("click", () => {
    container.scrollLeft += 320;
});

document.querySelector(".prev").addEventListener("click", () => {
    container.scrollLeft -= 320;
});

/*KONTAK*/
document.querySelector(".btn-wa").addEventListener("click", function(e) {e.preventDefault();

    const nama = document.getElementById("nama").value;
    const email = document.getElementById("email").value;
    const pesan = document.getElementById("pesan").value;

    if (!nama || !pesan) {
        alert("Isi nama dan pesan terlebih dahulu!");
        return;
    }

    const text = `Halo, saya ${nama}%0AEmail: ${email}%0APesan: ${pesan}`;

    window.open(`https://wa.me/6282352505922?text=${text}`, "_blank");
})