let headingElement = document.querySelector("#helloHeading");
let buttonElement = document.querySelector("#helloButton");

function populateText() {
  headingElement.innerText = "Hello World!";
}

buttonElement.addEventListener("click", populateText);
