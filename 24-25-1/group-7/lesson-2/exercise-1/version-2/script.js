// 1. Create a button
// 2. Whenever user clicks the button, add an h1 to the page with
// Hello World! inside

let buttonElement = document.createElement("button");
buttonElement.innerText = "👋";
buttonElement.style.fontSize = "25px";
document.body.appendChild(buttonElement);

buttonElement.addEventListener("click", () => {
  let headingElement = document.createElement("h1");
  headingElement.innerText = "Hello World!";
  document.body.appendChild(headingElement);
});
