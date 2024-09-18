let inputElement = document.querySelector("input");
let buttonElement = document.querySelector("button");
let containerElement = document.querySelector("#container");

buttonElement.addEventListener("click", () => {
  // 1. get the value from the input field
  // 1.1. clear the contents from the container
  // 2. create that many heading elements
  // 3. increment the size of each element based on ther index

  // 1.
  let N = inputElement.value;

  // 1.1.
  containerElement.innerHTML = "";

  // 2.
  for (let i = 0; i < N; i++) {
    let headingElement = document.createElement("h1");
    headingElement.innerText = "Hello World!";
    // 3.
    headingElement.style.fontSize = `${i * 10}px`; // i + "px"
    containerElement.appendChild(headingElement);
  }
});
