//init grid size
const rows = 500;
const cols = 500;

function createGrid(){
    let grid = new Array(rows);
    for (let i = 0; i< rows; i++){
        grid[i] = new Array(cols).fill(0);
    }
    return grid;
}

function initGrid(grid){
    for (let i = 0; i<rows; i++){
        for (let j =0; j <cols; j++){
            grid[i][j] = Math.random() < 0.5 ? 0 : 1;
            // grid[i][j] = Math.floor(Math.random() );
            // console.log(grid[i][j]);
        }
    }
}

function drawGrid(grid, ctx){
    ctx.clearRect(0,0, cols*10, rows*10);
    for (let i = 0; i< rows; i++){
        for (let j = 0; j <cols; j++){
            if (grid[i][j] ===1){
                ctx.fillStyle = "#00FF00";
            }  else if (grid[i][j] === 0 ){
                ctx.fillStyle = "#0000FF";
            } else{
                ctx.fillStyle = "#FF0000";
            }
            ctx.fillRect(j * 5, i*5, 5,5);
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
                    nextGrid[i][j] = 0; // die for loneliness or overpopulation
                } else {
                    nextGrid[i][j] = 1; // survive
                }
            } else {
                if (neighbors === 3) {
                    nextGrid[i][j] = 1; // born
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
    sum -= grid[x][y]; // substract itself
    return sum;
}

function main() {
    let canvas = document.getElementById("canvas");
    let showGeneration = document.getElementById('labelNbGeneration');
    
    let ctx = canvas.getContext("2d");
    let grid = createGrid();
    initGrid(grid);
    
    

    update();
    
}


let generation = 0;
main();
