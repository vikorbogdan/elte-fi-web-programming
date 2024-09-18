// create elements

let buttonElement = document.createElement("button");
buttonElement.innerText = "Greet the world!";
buttonElement.addEventListener("click", () => {
  let headingElement = document.createElement("h1");
  headingElement.innerText = "Hello World!";
  document.body.appendChild(headingElement);
});
document.body.appendChild(buttonElement);
console.log(buttonElement);
