"use strict";

document.querySelectorAll("#navBtn, #cover").forEach((e) => {
  e.addEventListener("click", function () {
    document.querySelectorAll("#dropdown, #cover").forEach((el) => {
      el.classList.toggle("hidden");
    });
  });
});

// (Reinis) iesniegt Atbildi poga:
let side_form = document.querySelector(".right-side-main-form");

if (side_form) {
side_form.addEventListener("submit", function (event) {
    // event.preventDefault();
    let question = document.getElementById("questionText").innerText;
    let answer = this.querySelector("input[name = answer]:checked").value;
    sessionStorage.setItem(question, answer);
    /* varam izvēlēties glabāt Session Storage vai Local Storage */
    localStorage.setItem(question, answer);
    console.log(question, answer); /* var izdzēst pēc testēšanas */
  });
}

let navButton = document.getElementById(`collapse`)
if (navButton) {
  navButton.addEventListener(`click`, function () {
    document.getElementById(`collapse1`).classList.toggle("hidden");
  });
}
