// Live countdown timer for cable car operation
function startCountdown(targetTime) {
    const countdownElement = document.getElementById("countdown");

    if (!countdownElement) return;

    function updateTimer() {
        const now = new Date().getTime();
        const target = new Date(targetTime).getTime();
        const distance = target - now;

        if (distance <= 0) {
            countdownElement.innerHTML = "Time Reached";
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        countdownElement.innerHTML =
            days + "d " +
            hours + "h " +
            minutes + "m " +
            seconds + "s";
    }

    updateTimer();
    setInterval(updateTimer, 1000);
}

// Green light blink effect safety backup
function blinkIndicator() {
    const indicator = document.querySelector('.on');

    if (indicator) {
        setInterval(() => {
            indicator.style.opacity = indicator.style.opacity === '0.4' ? '1' : '0.4';
        }, 1000);
    }
}

window.onload = function () {
    blinkIndicator();

    // Example dynamic countdown usage
    // startCountdown("2026-04-26 20:00:00");
};
====================================================

// Live countdown timer for cable car operation
function startCountdown(targetTime) {
    const countdownElement = document.getElementById("countdown");

    function updateTimer() {
        const now = new Date().getTime();
        const target = new Date(targetTime).getTime();
        const distance = target - now;

        if (distance <= 0) {
            countdownElement.innerHTML = "Time Reached";
            return;
        }

        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        countdownElement.innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
    }

    updateTimer();
    setInterval(updateTimer, 1000);
}

// Example usage:
// startCountdown("2026-04-26 18:00:00");
