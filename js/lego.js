function legs(){
    let p = document.getElementById("plate").getContext("2d");
    p.fillStyle = "#F0EE25";
    p.fillRect(150,290, 30, 90);
    p.fillStyle = "#F0EE25";
    p.fillRect(210,290, 30, 90);
}

function shoes(){
    let p = document.getElementById("plate").getContext("2d");
    p.fillStyle = "#2B2848";
    p.fillRect(145,360, 40, 20);
    p.fillStyle = "#2B2848";
    p.fillRect(205,360, 40, 20);
    p.fillStyle = "#8C8BB8";
    p.fillRect(145,375, 40, 5);
    p.fillStyle = "#8C8BB8";
    p.fillRect(205,375, 40, 5);
}

function pants(){
    let p = document.getElementById("plate").getContext("2d");
    p.fillStyle = "#4B6BDB";
    p.fillRect(150,290, 30, 65);
    p.fillRect(210,290, 30, 65);
}

function neck(){
    let p = document.getElementById("plate").getContext("2d");
    p.fillStyle = "#F0EE25";
    p.fillRect(180,183, 30, 15);
}

function bodyBig(){
    let p = document.getElementById("plate").getContext("2d");
    p.fillStyle = "#F07A29";
    p.fillRect(150,190, 90, 100);
}

function headBig(){
    let p = document.getElementById("plate").getContext("2d");
    p.beginPath();
    p.arc(195,148, 40, 0, 2*Math.PI, true);
    p.fillStyle ="#F0EE25";
    p.fill();

    p.fillStyle = "#F0EE25";
    p.fillRect(180,105, 30, 15);
}

function arms(){
    let p = document.getElementById("plate").getContext("2d");
    p.fillStyle = "#F07A29";
    p.fillRect(125,200, 30, 20);
    p.fillStyle = "#F07A29";
    p.fillRect(125,200, 20, 70);
    p.fillStyle = "#F07A29";
    p.fillRect(235,200, 30, 20);
    p.fillStyle = "#F07A29";
    p.fillRect(245,200, 20, 70);

    //правая
    p.beginPath();
    p.arc(257,277, 13, 0, 3*Math.PI, true);
    p.fillStyle ="#F0EE25";
    p.fill();

    p.beginPath();
    p.arc(257,285, 13, 0, 3*Math.PI, true);
    p.fillStyle ="#9D9AAB";
    p.fill();

    //левая
    p.beginPath();
    p.arc(133,277, 13, 0, 3*Math.PI, true);
    p.fillStyle ="#F0EE25";
    p.fill();

    p.beginPath();
    p.arc(133,285, 13, 0, 3*Math.PI, true);
    p.fillStyle ="#9D9AAB";
    p.fill();
}

function cap(){
    let p = document.getElementById("plate").getContext("2d");
    p.beginPath();
    p.arc(195,113, 30, 6, 3*Math.PI, true);
    p.fillStyle ="#F52441";
    p.fill();

    p.fillStyle = "#F52441";
    p.fillRect(160,103, 70, 15);
}


function eyes(){
    let p = document.getElementById("plate").getContext("2d");
    p.beginPath();
    p.arc(180,140, 4, 0, 2*Math.PI, true);
    p.fillStyle ="#000000";
    p.fill();
    p.beginPath();
    p.arc(210,140, 4, 0, 2*Math.PI, true);
    p.fillStyle ="#000000";
    p.fill();
    p.beginPath();
    p.arc(195,163, 9, 0, 2*Math.PI, true);
    p.fillStyle ="#000000";
    p.fill();
    p.beginPath();
    p.arc(195,153, 10, 0, 2*Math.PI, true);
    p.fillStyle ="#F0EE25";
    p.fill();
}

function clearAll(){
    let p = document.getElementById("plate").getContext("2d");
    p.clearRect(0,0,400,400);
}

function drawAll(){
    legs();
    shoes();
    pants();
    neck();
    bodyBig();
    headBig();
    arms();
    eyes();
    cap();
}