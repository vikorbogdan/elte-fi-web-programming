const faqDiv = document.querySelector(".faq");

// faqDiv.addEventListener("click", (e) => {
//   if (e.target.matches("i")) {
//     let answer = e.target.parentElement.nextElementSibling;
//     if (answer.style.display === "none") {
//       answer.style.display = "block";
//     } else {
//       answer.style.display = "none";
//     }
//   }
// });
// faqDiv.addEventListener("click", (e) => {
//   if (e.target.matches("i")) {
//     let answer = e.target.parentElement.nextElementSibling;
//     answer.classList.toggle("hidden");
// if (answer.classList.contains("hidden")) {
//   answer.classList.remove("hidden");
// } else {
//   answer.classList.add("hidden");
// }
//   }
// });

// delegate(faqDiv, "i", "click", (e) => {
//   let answer = e.target.parentElement.nextElementSibling;
//   answer.classList.toggle("hidden");
//   if (answer.classList.contains("hidden")) {
//     answer.classList.remove("hidden");
//   } else {
//     answer.classList.add("hidden");
//   }
// });

// function delegate(parent, child, when, what) {
//   function eventHandler(event) {
//     let eventTarget = event.target;
//     let eventHandler = this;
//     let closestMatchingElement = eventTarget.closest(child);

//     if (eventHandler.contains(closestMatchingElement)) {
//       what(event, closestMatchingElement);
//     }
//   }

//   parent.addEventListener(when, eventHandler);
// }
