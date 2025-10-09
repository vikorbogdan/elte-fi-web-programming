const containerDiv = document.querySelector("div#container");
const boardTable = document.querySelector("table#board");

const sizeInput = document.querySelector("input#gridSize");
const generateButton = document.querySelector("button#generate");

const counterSpan = document.querySelector("span#counter");
const winOverlayDiv = document.querySelector("div#winOverlay");

winOverlayDiv.classList.add("hidden");

// Variable that stores where the treasure is hidden
const treasureLocation = {
  x: 1,
  y: 0,
};

const MISCLICK_EMOJI = "❌";
const TREASURE_EMOJI = "🥞";

let numberOfClicks = 0;
let gameOver = false;

function generateBoard(boardSize) {
  const tableElement = document.createElement("table");
  for (let i = 0; i < boardSize; i++) {
    const tableRow = document.createElement("tr");
    for (let j = 0; j < boardSize; j++) {
      const tableCell = document.createElement("td");
      tableRow.appendChild(tableCell);
    }
    tableElement.appendChild(tableRow);
  }
  return tableElement;
}

containerDiv.addEventListener("click", (e) => {
  const cellIndex = e.target.cellIndex;
  const rowIndex = e.target.parentNode.rowIndex;

  if (e.target.innerText === "" && !gameOver) {
    numberOfClicks++;
    counterSpan.innerText = numberOfClicks;

    if (cellIndex === treasureLocation.x && rowIndex === treasureLocation.y) {
      // I won the game
      e.target.innerText = TREASURE_EMOJI;
      winOverlayDiv.classList.remove("hidden");
      gameOver = true;
    } else {
      e.target.innerText = MISCLICK_EMOJI;
    }
  }
});

// RESET
generateButton.addEventListener("click", () => {
  containerDiv.innerHTML = "";
  winOverlayDiv.classList.add("hidden");

  gameOver = false;

  numberOfClicks = 0;
  counterSpan.innerText = numberOfClicks;

  const gridSize = sizeInput.value;
  const generatedBoardTable = generateBoard(gridSize);
  containerDiv.appendChild(generatedBoardTable);
  const randomX = Math.floor(Math.random() * gridSize);
  const randomY = Math.floor(Math.random() * gridSize);
  treasureLocation.x = randomX;
  treasureLocation.y = randomY;
});
