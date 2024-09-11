const canvas = document.querySelector("canvas");
const ctx = canvas.getContext("2d");

const WIDTH = 1400;
const HEIGHT = 600;
const BAR_WIDTH = 140;
const GAP = 70;
const MULTIPLIER = 10;

canvas.width = WIDTH;
canvas.height = HEIGHT;

const data = {
  "5PM": 23,
  "6PM": 21,
  "7PM": 14,
  "8PM": 2,
  "9PM": 27,
  "10PM": 10,
  "11PM": 23,
};

let x = 0;
let y = HEIGHT - 100;
for (timestamp in data) {
  // console.log(timestamp, data[timestamp]);

  // BARS
  ctx.fillStyle = "hotpink";
  ctx.fillRect(x, y, BAR_WIDTH, -data[timestamp] * MULTIPLIER);

  // TIMESTAMPS
  ctx.fillStyle = "black";
  ctx.font = "25px Arial";
  ctx.textAlign = "center";
  ctx.fillText(timestamp, x + BAR_WIDTH / 2, y + GAP / 2);

  // NUMBER OF PEOPLE LABELS
  ctx.textBaseline = "middle";
  ctx.fillText(
    data[timestamp],
    x + BAR_WIDTH / 2,
    y - (data[timestamp] * MULTIPLIER) / 2
  );

  x += GAP + BAR_WIDTH;
}
