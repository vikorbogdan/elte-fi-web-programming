const canvas = document.querySelector("canvas");
const ctx = canvas.getContext("2d");

canvas.width = 400;
canvas.height = 400;

ctx.moveTo(200, 200);
ctx.lineTo(100, 100);
ctx.lineTo(100, 300);
ctx.lineTo(100, 360);
ctx.lineTo(220, 190);

ctx.strokeStyle = "#ff00ff";
ctx.lineWidth = 20;
ctx.lineCap = "round";
ctx.fillStyle = "red";
ctx.stroke();
ctx.fill();

ctx.beginPath();
ctx.lineWidth = 1;

ctx.moveTo(400, 0);
ctx.lineTo(350, 400);
ctx.stroke();

ctx.clearRect(0, 0, 400, 400);

// ctx.beginPath();
// ctx.lineWidth = 20;
// ctx.strokeStyle = "green";
// ctx.fillStyle = "red";
// ctx.arc(200, 200, 100, 0, Math.PI);
// ctx.fill();
// ctx.stroke();

// ctx.font = "40px Arial";
// ctx.textAlign = "center";
// ctx.lineWidth = 1;
// ctx.strokeText("Melon", 200, 170);
// //ctx.fillText("Melon", 200, 170);

ctx.moveTo(0, 0);
let x = 0;
// setInterval(() => {
//   ctx.lineTo(x, 20);
//   ctx.stroke();
//   x += 20;
// }, 50);

document.addEventListener("keypress", (e) => {
  if (e.key === "d") {
    ctx.lineTo(x, 20);
    ctx.stroke();
    x += 20;
  }
});
