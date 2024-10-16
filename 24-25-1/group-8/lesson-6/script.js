const canvas = document.querySelector("canvas");
const ctx = canvas.getContext("2d");

const SCREEN_WIDTH = 600;
const SCREEN_HEIGHT = 400;

const BIRD_WIDTH = 30;
const BIRD_HEIGHT = 50;

const bird = {
    x: 50,
    y: (SCREEN_HEIGHT - BIRD_HEIGHT) / 2,
    width: BIRD_WIDTH,
    height: BIRD_HEIGHT,
    vy: 0, // px/s
    ay: 250 // px/s^2
}

function draw() {
    // Drawing on the canvas based on the new state
    ctx.fillStyle = "lightblue";
    ctx.fillRect(0,0,SCREEN_WIDTH,SCREEN_HEIGHT);
    ctx.fillStyle = "brown";
    ctx.fillRect(bird.x, bird.y, bird.width,bird.height)
}
function update(dt) {
    // Changing the game state
    if(bird.y <= 0) {
        bird.vy = 0;
    }
    bird.vy += bird.ay * dt;
    bird.y += bird.vy * dt;
}

window.addEventListener("keydown", (e) => {
    if(e.key === " "){
        bird.vy = -200;
    }
});

let previousTime = performance.now();

function gameLoop(now = performance.now()) {
    const dt = (now - previousTime) / 1000;
    previousTime = now

    update(dt);
    draw();

    requestAnimationFrame(gameLoop);
}

// setInterval(() => {
//     bird.x += 20;
//     draw();
// }, 500)

gameLoop();