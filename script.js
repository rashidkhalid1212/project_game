// alert("script connected");
x = true, y = true;
let ball = document.querySelector(".ball1");
let board = document.querySelector(".board");
let boardBounds = board.getBoundingClientRect();

document.addEventListener("keydown", function(e){
    console.log("chal rha hai");
})

function moveBall(){
    let ballcord = ball.getBoundingClientRect();
    let ballTop = ballcord.top;
    let ballLeft = ballcord.left;
    let ballRight = ballcord.right;
    let ballBottom = ballcord.bottom;

    if(ballTop<=boardBounds.top || ballBottom>=boardBounds.bottom){
        y=!y;
    }

    if(ballLeft<=boardBounds.left || ballRight>=boardBounds.right){
        x=!x;
    }

    // ball.style.top = ballTop+1+"px";
    // ball.style.left = ballLeft+1+"px";
    ball.style.top = y==true?ballTop+1+"px":ballTop-1+"px";
    ball.style.left = x==true?ballLeft+1+"px":ballLeft-1+"px";
    requestAnimationFrame(moveBall);  
}
// requestAnimationFrame(moveBall);