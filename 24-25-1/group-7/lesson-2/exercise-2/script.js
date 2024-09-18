// 1. Select each element we need to interact with (using JS)
// 2. Add an event listener to the button
// 3. Read the value from the input field, and store it in a variable
// +. Remove all children that are already there
// 4. Create N h1s
// 5. Deal with increasing font size

// 1.
let inputElement = document.querySelector("input");
let buttonElement = document.querySelector("button");
let containerElement = document.querySelector("#container");

// 2.
buttonElement.addEventListener("click", () => {
  // +.
  containerElement.innerHTML = "";
  // 3.
  let number = inputElement.value;
  // 4.
  for (let i = 0; i < number; i++) {
    let helloWorldElement = document.createElement("h1");
    helloWorldElement.innerText = "Hi World!";
    helloWorldElement.style.fontSize = (i + 1) * 15 + "px";
    containerElement.appendChild(helloWorldElement);
  }
});
