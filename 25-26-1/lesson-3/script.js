const faqDivElement = document.querySelector(".faq");

faqDivElement.addEventListener("click", (event) => {
  const targetElement = event.target.closest("h2");
  if (!targetElement) {
    return;
  }
  const answerElement = targetElement.nextElementSibling;
  //   if (answerElement.classList.contains("visible")) {
  //     answerElement.classList.remove("visible");
  //   } else {
  //     answerElement.classList.add("visible");
  //   }
  console.log(targetElement);
  answerElement.classList.toggle("visible");
});
