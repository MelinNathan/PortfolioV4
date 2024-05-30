// Initialize grid size
const rows = 500;
const cols = 500;

function createGrid() {
  let grid = new Array(rows);
  for (let i = 0; i < rows; i++) {
    grid[i] = new Array(cols).fill(0);
  }
  return grid;
}

function initGrid(grid) {
  for (let i = 0; i < rows; i++) {
    for (let j = 0; j < cols; j++) {
      grid[i][j] = Math.random() < 0.5 ? 0 : 1;
    }
  }
}

function drawGrid(grid, ctx) {
  ctx.clearRect(0, 0, cols * 10, rows * 10);
  for (let i = 0; i < rows; i++) {
    for (let j = 0; j < cols; j++) {
      if (grid[i][j] === 1) {
        ctx.fillStyle = "#FFFFFF";
      } else {
        ctx.fillStyle = "#555555";
      }
      ctx.fillRect(j * 5, i * 5, 5, 5);
    }
  }
}

function applyRules(grid) {
  let nextGrid = createGrid();
  for (let i = 0; i < rows; i++) {
    for (let j = 0; j < cols; j++) {
      let neighbors = countNeighbors(grid, i, j);
      if (grid[i][j] === 1) {
        if (neighbors < 2 || neighbors > 3) {
          nextGrid[i][j] = 0; // Die for loneliness or overpopulation
        } else {
          nextGrid[i][j] = 1; // Survive
        }
      } else {
        if (neighbors === 3) {
          nextGrid[i][j] = 1; // Born
        }
      }
    }
  }
  return nextGrid;
}

function countNeighbors(grid, x, y) {
  let sum = 0;
  for (let i = -1; i < 2; i++) {
    for (let j = -1; j < 2; j++) {
      let row = (x + i + rows) % rows;
      let col = (y + j + cols) % cols;
      sum += grid[row][col];
    }
  }
  sum -= grid[x][y]; // Subtract itself
  return sum;
}

let generation = 0;
let animationFrameId;
let grid;
let ctx;
let showGeneration;

function main() {
  let canvas = document.getElementById("canvas");
  showGeneration = document.getElementById("labelNbGeneration");

  ctx = canvas.getContext("2d");
  grid = createGrid();
  initGrid(grid);
  generation = 0;

  function update() {
    drawGrid(grid, ctx);
    grid = applyRules(grid);
    generation++;
    showGeneration.innerText = generation;

    if (generation < 250) {
      animationFrameId = requestAnimationFrame(update);
    }
  }

  update();
}

function stop() {
  cancelAnimationFrame(animationFrameId);
}

function toggleMain() {
  const button = document.getElementById("reset");
  button.innerHTML = "Reset";
  stop();
  main();
}



document.getElementById("reset").addEventListener("click", toggleMain);
document.getElementById("stop").addEventListener("click", stop);
