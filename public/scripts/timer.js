const secondElem = document.querySelector('#seconds');
const minuteElem = document.querySelector('#minutes');
const hourElem = document.querySelector('#hours');
// Constants
const THREE_HOURS = 3 * 60 * 60 * 1000;


// Timer functions
function updateDisplay(timeRemaining) {
    const totalSeconds = Math.floor(timeRemaining / 1000);
    const hours = Math.floor(totalSeconds / 3600);
    const minutes = Math.floor((totalSeconds % 3600) / 60);
    const seconds = totalSeconds % 60;

    secondElem.textContent = seconds.toString().padStart(2, '0');
    minuteElem.textContent = minutes.toString().padStart(2, '0');
    hourElem.textContent = hours.toString().padStart(2, '0');
}

function startTimer(duration) {
    let startTime = Date.now();
    let endTime = startTime + duration;

    const storedEndTime = localStorage.getItem('endTime');
    if (storedEndTime) {
        endTime = parseInt(storedEndTime, 10);
    } else {
        localStorage.setItem('endTime', endTime);
    }

    function updateTimer() {
        const currentTime = Date.now();
        let timeRemaining = endTime - currentTime;

        if (timeRemaining <= 0) {
            endTime = currentTime + THREE_HOURS;
            localStorage.setItem('endTime', endTime);
            timeRemaining = THREE_HOURS;
        }

        updateDisplay(timeRemaining);
    }

    setInterval(updateTimer, 1000);
    updateTimer();  // Initial call to set the display immediately
}




// Start the timer
startTimer(THREE_HOURS);

