let nums = document.querySelectorAll(".nums .num");
let section = document.querySelectorAll(".nums");
let started = false;

nums.forEach((num)=> startCount(num));

function startCount(el){
    let goal = el.dataset.goal;
    let count = setInterval(()=>{
        el.textContent++;
        if( el.textContent == goal){
            clearInterval(count);
        }
    },2000/goal);
}
