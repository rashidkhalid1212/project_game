// alert("script connected");

// function openForm() {
//     document.getElementById("myForm").style.display = "block";
// }
   
// function closeForm() {
//     document.getElementById("myForm").style.display = "none";
// }

x = true, y = true;
let ball = document.querySelector(".ball1");
let board = document.querySelector(".board");
let boardBounds = board.getBoundingClientRect();

let leftpaddle = document.querySelector(".left");
let rightpaddle = document.querySelector(".right");

let leftplayerlives = 3;
let rightplayerlives = 3;

document.addEventListener("keydown", function(e){
    if(e.key == "q"){
        movepaddle(leftpaddle, -window.innerHeight*0.06);

    }else if(e.key == "z"){
        movepaddle(leftpaddle, window.innerHeight*0.06);
        
    }else if(e.key == "ArrowUp"){
        movepaddle(rightpaddle, -window.innerHeight*0.06);
        
    }else if(e.key == "ArrowDown"){
        movepaddle(rightpaddle, window.innerHeight*0.06);  
    }
})

function setColor(idx){
    let allicons = document.querySelectorAll(".fas.fa-circle");
    allicons[idx].style.color = "#2980b9";
}

function movepaddle(cpaddle, change){
    let cpaddlebounds = cpaddle.getBoundingClientRect();
    if(cpaddlebounds.top + change >= boardBounds.top && cpaddlebounds.bottom + change <= boardBounds.bottom){

        cpaddle.style.top = cpaddlebounds.top + change + "px" ;
    }
}

function moveBall(){
    let ballcord = ball.getBoundingClientRect();
    let ballTop = ballcord.top;
    let ballLeft = ballcord.left;
    let ballRight = ballcord.right;
    let ballBottom = ballcord.bottom;

    let hastouchedleft = ballLeft < boardBounds.left;
    let hastouchedright = ballRight > boardBounds.right;

    if(hastouchedleft || hastouchedright){
        if(hastouchedleft){
            leftplayerlives--;
            
            setColor(leftplayerlives);

            if(leftplayerlives == 0){
                alert("Game over, Player 🅱 won!");
                document.location.reload();
            }
            else{
                return resetgame();
            }
        }
        else{
            rightplayerlives--;
            setColor(3 + rightplayerlives);
            if(rightplayerlives == 0){
                alert("Game over, Player 🅰 won!");
                document.location.reload();
            }
            else{
                return resetgame();
            }
        }
        
        function resetgame(){
            ball.style.top = window.innerHeight*0.45+"px";
            ball.style.left = window.innerWidth*0.45+"px";

            requestAnimationFrame(moveBall);
        }
    }

    if(ballTop<=boardBounds.top || ballBottom>=boardBounds.bottom){
        y=!y;
    }

    // if(ballLeft<=boardBounds.left || ballRight>=boardBounds.right){
    //     x=!x;
    // }

    let leftpaddlebounds = leftpaddle.getBoundingClientRect();
    let rightpaddlebounds = rightpaddle.getBoundingClientRect();

    if(ballLeft <= leftpaddlebounds.right && ballRight >= leftpaddlebounds.left && ballTop + 30 >= leftpaddlebounds.top && ballBottom - 30 <= leftpaddlebounds.bottom){
        x = !x;
    }
    if(ballLeft <= rightpaddlebounds.right && ballRight >= rightpaddlebounds.left && ballTop + 30 >= rightpaddlebounds.top && ballBottom - 30 <= rightpaddlebounds.bottom){
        x = !x;
    }

    ball.style.top = y==true?ballTop+1+"px":ballTop-1+"px";
    ball.style.left = x==true?ballLeft+4+"px":ballLeft-4+"px";
    requestAnimationFrame(moveBall);  
}
// requestAnimationFrame(moveBall);