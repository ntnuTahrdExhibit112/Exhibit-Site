// header share btn
var btns = document.getElementsByClassName('shareBtn');
var stat = 0;   //0: off, 1: on
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
async function mobile_share_toggle() {
    if (!stat) { //is off
        for (var i = 0; i < btns.length; i++) {
            btns[i].style.display = "block";
        }
        await sleep(100);
        for (var i = 0; i < btns.length; i++) {
            btns[i].style.opacity = 1;
            await sleep(50);
        }
        stat = 1;   //on
    }
    else if (stat) {   //is on
        for (var i = btns.length - 1; i >= 0; i--) {
            btns[i].style.opacity = 0;  
        }
        await sleep(100);
        for (var i = btns.length - 1; i >= 0; i--) {
            btns[i].style.display = "none";
            await sleep(50);
        }
        stat = 0;   //off
    }
}