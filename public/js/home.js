// Hamburger Menu Toggle
const hamburger = document.getElementById("hamburger");
const mobileMenu = document.getElementById("mobile-menu");
const overlay = document.getElementById("overlay");

// Function to open sidebar
function openSidebar() {
    mobileMenu.classList.remove("hidden", "-translate-x-full"); // Remove 'hidden' and 'translate-x-full'
    mobileMenu.classList.add("translate-x-0"); // Add 'translate-x-0'
    overlay.classList.remove("hidden");
}

// Function to close sidebar
function closeSidebar() {
    mobileMenu.classList.remove("translate-x-0"); // Remove 'translate-x-0'
    mobileMenu.classList.add("-translate-x-full"); // Add '-translate-x-full'
    setTimeout(() => {
        mobileMenu.classList.add("hidden"); // Add 'hidden' after animation ends
    }, 300); // Match the duration of the CSS animation (300ms)
    overlay.classList.add("hidden");
}

// Toggle sidebar on hamburger click
hamburger.addEventListener("click", () => {
    if (mobileMenu.classList.contains("hidden")) {
        openSidebar();
    } else {
        closeSidebar();
    }
});

// Close sidebar on overlay click
overlay.addEventListener("click", () => {
    closeSidebar();
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
