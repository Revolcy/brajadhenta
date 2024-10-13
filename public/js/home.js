const hamburger = document.getElementById("hamburger");
const mobileMenu = document.getElementById("mobile-menu");
const overlay = document.getElementById("overlay");
const hamburgerIcon = document.getElementById("hamburger-icon");
const closeIcon = document.getElementById("close-icon");

hamburger.addEventListener("click", function () {
    // Toggle sidebar visibility
    mobileMenu.classList.toggle("hidden");
    mobileMenu.classList.toggle("-translate-x-full");

    // Toggle overlay visibility
    overlay.classList.toggle("hidden");

    // Toggle between hamburger icon and close icon
    hamburgerIcon.classList.toggle("hidden");
    closeIcon.classList.toggle("hidden");
});

// Close sidebar and overlay when overlay is clicked
overlay.addEventListener("click", function () {
    mobileMenu.classList.add("hidden");
    mobileMenu.classList.add("-translate-x-full");
    overlay.classList.add("hidden");
    hamburgerIcon.classList.remove("hidden");
    closeIcon.classList.add("hidden");
});

// Timer
const endDate = new Date("2024-12-06T23:59:59"); // Tanggal akhir

const updateCountdown = () => {
    const now = new Date();
    const timeLeft = endDate - now;

    if (timeLeft > 0) {
        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor(
            (timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        // Update DOM elements
        document
            .getElementById("days")
            .setAttribute("style", `--value:${days}`);
        document
            .getElementById("hours")
            .setAttribute("style", `--value:${hours}`);
        document
            .getElementById("minutes")
            .setAttribute("style", `--value:${minutes}`);
        document
            .getElementById("seconds")
            .setAttribute("style", `--value:${seconds}`);
    } else {
        document.querySelector(".countdown").innerHTML = "Time's up!";
    }
};

// Update countdown setiap detik
setInterval(updateCountdown, 1000);
// Timer End
