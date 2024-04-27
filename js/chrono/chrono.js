let seconds = 0;
const chronoBtnEl = document.querySelector("#chrono");
const startBtnEl = document.querySelector("#startBtn");
const stopBtnEl = document.querySelector("#stopBtn");
const resetBtnEl = document.querySelector("#resetBtn");
chronoBtnEl.innerHTML = 0;
let chronoIntervalId;

startBtnEl.addEventListener("click", () => {
    if (chronoIntervalId) return;
     chronoIntervalId = setInterval(() => chronoBtnEl.innerHTML++, 1000);

});

stopBtnEl.addEventListener("click", () => {
    clearInterval(chronoIntervalId);
    chronoIntervalId = undefined;
});

resetBtnEl.addEventListener("click", () => {
    clearInterval(chronoIntervalId);
    chronoIntervalId = undefined;
    chronoBtnEl.innerHTML=0;
});
