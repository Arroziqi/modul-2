let columns = document.querySelectorAll("table div");
let reset = document.getElementById("reset");
let i = 0;
let selects = [];
let circles = [];
var state = "playing";

columns.forEach((column) => {
  column.addEventListener("click", function(){
    if (column.className != "select" && column.className != "circle") {
      if (i == 0) {
        column.classList.toggle("select");
        i = 1;
        selects.push(column.id);
        (selects.length >= 3) ? handleWin(selects, "hijau") : "";  
      }else{
        column.classList.toggle("circle");
        i = 0;
        circles.push(column.id);  
        (circles.length >= 3) ? handleWin(circles, "biru") : "";  
      }
    }
  });
  
});

function handleReset(){
  columns.forEach((column)=>{
    if (column.className == "select") {
      column.classList.toggle("select");
    }else if(column.className == "circle"){
      column.classList.toggle("circle");
    }
    selects = [];
    circles = [];
    i = 0;
    document.getElementById("display").textContent = "";
  });
}


async function handleWin(data, player){
  let winConditions = [["box1", "box2", "box3"], ["box1", "box5", "box9"], ["box1", "box4", "box7"], ["box2", "box5", "box8"], ["box3", "box6", "box9"], ["box4", "box5", "box6"], ["box7", "box8", "box9"], ["box7", "box5", "box3"]];

  let isWin = winConditions.some(subarray => {
    let matchingElements = data.filter(element => subarray.includes(element));
    return matchingElements.length >= 3;
  });
  if (isWin) {
    document.getElementById("display").textContent = player + " win";
    await delay(2000);
    handleReset();
  } else {
    state = (data.length >= 5) ? "end" : "playing";
    if (state == "end") {
      document.getElementById("display").textContent = "Draw";
      await delay(2000);
      handleReset();
    }
  }
}

function delay(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}