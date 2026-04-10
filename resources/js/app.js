document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("raceForm");
  const errorsDiv = document.getElementById("error-messages");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    errorsDiv.innerHTML = "";
    let errors = [];

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const round = document.getElementById("round").value;
    const driver = document.getElementById("driver").value;

    

    if (!name) errors.push("Please, enter your name!");
    if (!email) errors.push("Please, enter your e-mail");
    if (!round) errors.push("Please, enter your favorite race round!");
    if (round && isNaN(round)) errors.push("Race round must be a number!");
    if (round && (round < 1 || round > 24)) errors.push("Race round must be between 1 and 24.");
    if (!driver) errors.push("Please, enter your favourite driver!");

    if (errors.length > 0) {
      errorsDiv.innerHTML = "<p>" + errors.join("</p><p>") + "</p>";
      return;
    }

    form.submit();
  });
  document.getElementById("show-more-btn").addEventListener("click", () => {
  const info = document.getElementById("extra-info");
  const btn = document.getElementById("show-more-btn");
  if (info.style.display === "none") {
    info.style.display = "block";
  } else {
    info.style.display = "none";
  }
});
});
