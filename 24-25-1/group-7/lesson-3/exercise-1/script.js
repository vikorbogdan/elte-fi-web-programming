const decreaseButton = document.querySelector("#decrease");
const increaseButton = document.querySelector("#increase");
const numberInput = document.querySelector("#number");
const containerDiv = document.querySelector("#container");

const MAX_VALUE = 5;
const MIN_VALUE = -5;

numberInput.value = 0;

const checkBoundaries = () => {
  if (numberInput.value > MIN_VALUE) decreaseButton.disabled = false;
  if (numberInput.value < MIN_VALUE) increaseButton.disabled = false;
};

containerDiv.addEventListener("click", (event) => {
  if (event.target.matches("#decrease")) {
    if (numberInput.value > MIN_VALUE) numberInput.value--;
    if (numberInput.value == MIN_VALUE) decreaseButton.disabled = true;
    checkBoundaries();
  } else if (event.target.matches("#increase")) {
    if (numberInput.value < MAX_VALUE) numberInput.value++;
    if (numberInput.value == MAX_VALUE) increaseButton.disabled = true;
    checkBoundaries();
  }
});

// console.log(decreaseButton, increaseButton, numberInput);

// decreaseButton.addEventListener("click", () => {
//   if (numberInput.value > MIN_VALUE) numberInput.value--;
//   if (numberInput.value == MIN_VALUE) decreaseButton.disabled = true;
//   checkBoundaries();
// });
// increaseButton.addEventListener("click", () => {
//   if (numberInput.value < MAX_VALUE) numberInput.value++;
//   if (numberInput.value == MAX_VALUE) increaseButton.disabled = true;
//   checkBoundaries();
// });
