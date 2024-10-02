const faqDiv = document.querySelector(".faq");

// faqDiv.addEventListener("click", (e) => {
//   if (e.target.matches("i")) {
//     // i clicked one of the questions
//     let answer = e.target.parentElement.nextElementSibling;
//     if (answer.style.display == "none") {
//       answer.style.display = "block";
//     } else {
//       answer.style.display = "none";
//     }
//   }
// });

faqDiv.addEventListener("click", (e) => {
  if (e.target.matches("i")) {
    // i clicked one of the questions
    let answer = e.target.parentElement.nextElementSibling;
    answer.classList.toggle("hidden");
  }
});
