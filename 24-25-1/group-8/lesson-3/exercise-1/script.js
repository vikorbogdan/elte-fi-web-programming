const decrementButton = document.querySelector("#decrease");
const increaseButton = document.querySelector("#increase");
const numberInput = document.querySelector("#number");
const containerDiv = document.querySelector("#container");

const MIN_VALUE = -5;
const MAX_VALUE = 5;

numberInput.value = 0;

containerDiv.addEventListener("click", (e) => {
  if (e.target.matches("#decrease")) {
    if (numberInput.value > MIN_VALUE) numberInput.value--;
    if (numberInput.value == MIN_VALUE) decrementButton.disabled = true;

    if (numberInput.value < MAX_VALUE) {
      increaseButton.disabled = false;
    }
  } else if (e.target.matches("#increase")) {
    if (numberInput.value < MAX_VALUE) numberInput.value++;
    if (numberInput.value == MAX_VALUE) increaseButton.disabled = true;

    if (numberInput.value > MIN_VALUE) {
      decrementButton.disabled = false;
    }
  }
});

// decrementButton.addEventListener("click", () => {
//   if (numberInput.value > MIN_VALUE) numberInput.value--;
//   if (numberInput.value == MIN_VALUE) decrementButton.disabled = true;

//   if (numberInput.value > MAX_VALUE) {
//     increaseButton.disabled = false;
//   }
// });

// increaseButton.addEventListener("click", () => {
//   if (numberInput.value < MAX_VALUE) numberInput.value++;
//   if (numberInput.value == MAX_VALUE) increaseButton.disabled = true;

//   if (numberInput.value > MIN_VALUE) {
//     decrementButton.disabled = false;
//   }
// });
