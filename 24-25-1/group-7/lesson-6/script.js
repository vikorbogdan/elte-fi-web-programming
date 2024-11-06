const canvas = document.querySelector("canvas");
const ctx = canvas.getContext("2d");

// STATE

//   CONSTANTS
const SCREEN = {
    width : 600,
    height : 400
}

const birdImage = new Image();

birdImage.src ="./bird.png"

const SPACE_BETWEEN = 150;
const COLUMN_DISTANCE = 300;
const COLUMN_VELOCITY = -200;



//   GAME OBJECTS

let columns = [];

let isGameRunning = true;

const bird = {
    x: 50,
    y: SCREEN.height / 2 - 50 / 2, 
    w: 30,
    h: 50,
    vy: 0,
    ay : 250
}


// DRAW
function draw() {
    ctx.clearRect(0,0,SCREEN.width,SCREEN.height)
    ctx.fillStyle = "aqua";
    ctx.fillRect(0,0,SCREEN.width,SCREEN.height);
    // ctx.fillStyle = "yellow";
    // ctx.fillRect(bird.x,bird.y,bird.w,bird.h);
    ctx.drawImage(birdImage,bird.x,bird.y,bird.w,bird.h);
    ctx.fillStyle = "lime";
    columns.forEach((column) => ctx.fillRect(column.x, column.y, column.w, column.h));
}



// UPDATE
window.addEventListener("keydown", (e) => {
    if(e.code === "Space"){
        bird.vy = -250;
    }
})

function random(min, max) {
    return Math.random() * (max - min) + min;
}

function gameOver() {
    ctx.fillStyle= "red";
    ctx.font = `40px Verdana`;
    ctx.fillText("GAME OVER", canvas.width / 2, canvas.height / 2)
}


function isColliding(a,b) {
    return !(
        b.y + b.h < a.y ||
        a.x + a.w < b.x ||
        a.y + a.h < b.y ||
        b.x + b.w < a.x
    );
}

function addNewColumns(){
    const height = random(10, canvas.height / 2);
    columns.push(
        {
            x: canvas.width,
            y: 0,
            w: 30,
            h: height
        },
        {
            x: canvas.width,
            y: height + SPACE_BETWEEN,
            w: 30,
            h: canvas.height-height - SPACE_BETWEEN
        }
    )
}


function update(dt) {
    bird.vy += bird.ay * dt;
    bird.y += bird.vy * dt;
    columns.forEach(column => {
        column.x += COLUMN_VELOCITY *dt;
        if(isColliding(column,bird)){
            isGameRunning = false;
            gameOver();
        }
    })

    if(columns[0].x < 0) {
        columns = []
        addNewColumns();
    }
}   

// ANIMATION LOOP
addNewColumns()


let previousTime = performance.now();
function gameLoop(now = performance.now()) {
    const dt = (now-previousTime) / 1000; // deltaTime
    previousTime = now;
    update(dt);
    if(isGameRunning){
        draw();
    }

    

    requestAnimationFrame(gameLoop);
}

gameLoop();