// console.clear();

function CountdownTracker(label, value){

  var el = document.createElement('span');

  el.className = 'flip-clock__piece';
  el.innerHTML = '<b class="flip-clock__card card"><b class="card__top"></b><b class="card__bottom"></b><b class="card__back"><b class="card__bottom"></b></b></b>' + 
    '<span class="flip-clock__slot">' + label + '</span>';

  this.el = el;

  var top = el.querySelector('.card__top'),
      bottom = el.querySelector('.card__bottom'),
      back = el.querySelector('.card__back'),
      backBottom = el.querySelector('.card__back .card__bottom');

  this.update = function(val){
    val = ( '0' + val ).slice(-2);
    if ( val !== this.currentValue ) {
      
      if ( this.currentValue >= 0 ) {
        back.setAttribute('data-value', this.currentValue);
        bottom.setAttribute('data-value', this.currentValue);
      }
      this.currentValue = val;
      top.innerText = this.currentValue;
      backBottom.setAttribute('data-value', this.currentValue);

      this.el.classList.remove('flip');
      void this.el.offsetWidth;
      this.el.classList.add('flip');
    }
  }
  
  this.update(value);
}

// Calculation adapted from https://www.sitepoint.com/build-javascript-countdown-timer-no-dependencies/

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  return {
    'Total': t,
    'Days': Math.floor(t / (1000 * 60 * 60 * 24)),
    'Hours': Math.floor((t / (1000 * 60 * 60)) % 24),
    'Minutes': Math.floor((t / 1000 / 60) % 60),
    'Seconds': Math.floor((t / 1000) % 60)
  };
}

function getTime() {
  var t = new Date();
  return {
    'Total': t,
    'Hours': t.getHours() % 12,
    'Minutes': t.getMinutes(),
    'Seconds': t.getSeconds()
  };
}

function Clock(countdown,callback) {
  countdown = countdown ? new Date(Date.parse(countdown)) : false;
  callback = callback || function(){};
  
  var updateFn = countdown ? getTimeRemaining : getTime;

  this.el = document.createElement('div');
  this.el.className = 'flip-clock';

  var trackers = {},
      t = updateFn(countdown),
      key, timeinterval;

  for ( key in t ){
    if ( key === 'Total' ) { continue; }
    trackers[key] = new CountdownTracker(key, t[key]);
    this.el.appendChild(trackers[key].el);
  }

  var i = 0;
  function updateClock() {
    timeinterval = requestAnimationFrame(updateClock);
    
    // throttle so it's not constantly updating the time.
    if ( i++ % 10 ) { return; }
    
    var t = updateFn(countdown);
    if ( t.Total < 0 ) {
      cancelAnimationFrame(timeinterval);
      for ( key in trackers ){
        trackers[key].update( 0 );
      }
      callback();
      return;
    }
    
    for ( key in trackers ){
      trackers[key].update( t[key] );
    }
  }

  setTimeout(updateClock,500);
}

//set deadlines
var startVote = new Date(2022, 12-1, 2, 8, 0, 0);
var endVote = new Date(2022, 12-1, 3, 13, 0, 0);

// startVote = new Date(2022, 12-1, 2, 0, 16, 30);
// endVote = new Date(2022, 12-1, 2, 0, 17, 0);

var countdown_counter = document.getElementById('countdown_counter');
var c = new Clock(startVote, function(){
    //show vote btn
    vote_started = 1;
    showVoteBtn();
    
    //calcTime switch
    countdown_section_title.innerHTML = "投票結束倒數";
    countdown_title.innerHTML = "投票結束";

    var c1 = new Clock(endVote, function (){
        countdown_section_title.innerHTML = "投票已結束";
        countdown_counter.innerHTML = "";
        // alert('投票已經結束囉！請靜待結果公布～');
        vote_ended = 1;
        hideVote();
    });
    countdown_counter.innerHTML = "";
    countdown_counter.appendChild(c1.el);
});
countdown_counter.appendChild(c.el);

// original countdown
// var timer = null;
// var today;
// var countdown_days = document.getElementById("countdown_days");
// var countdown_hours = document.getElementById("countdown_hours");
// var countdown_mins = document.getElementById("countdown_mins");
// var countdown_secs = document.getElementById("countdown_secs");
// function countdown_counter() {   
//     // Y, M, D, h, m, s
//     // var startVote = new Date(2022, 12-1, 2, 8, 0, 0);
//     var endVote = new Date(2022, 12-1, 3, 12, 0, 0);
//     today = new Date();
//     var toStart = (startVote.getTime() - today.getTime());
//     var toEnd = (endVote.getTime() - today.getTime());
//     //test
//     /* var testTime = new Date(2022, 7-1, 3, 22, 40, 0);
//     var toTest = (testTime.getTime() - today.getTime()); */
//     //end test
//     var calcTime = toStart;
//     if (toStart <= 0) {
//         //show vote btn
//         vote_started = 1;
//         showVoteBtn();
        
//         //calcTime switch
//         calcTime = toEnd;
//         countdown_section_title.innerHTML = "投票結束";
//         countdown_title.innerHTML = "投票結束";
//     }
//     // var sectimeold = toEnd / 1000;
//     // var secondsold = Math.floor(sectimeold);
//     var msPerDay = 24 * 60 * 60 * 1000;
//     var e_daysold = calcTime / msPerDay;
//     var daysold = Math.floor(e_daysold);
//     var e_hrsold = (e_daysold - daysold) * 24;
//     var hrsold = Math.floor(e_hrsold);
//     var e_minsold = (e_hrsold - hrsold) * 60;
//     var minsold = Math.floor((e_hrsold - hrsold) * 60);
//     var seconds = Math.floor((e_minsold - minsold) * 60);
//     if (daysold < 0) {
//         countdown_days.innerHTML = "0";
//         countdown_hours.innerHTML = "00";
//         countdown_mins.innerHTML = "00";
//         countdown_secs.innerHTML = "00";
//         clearInterval(timer);
//     }
//     else{
//         if (daysold < 10) {daysold = "0" + daysold;}
//         if (hrsold < 10) {hrsold = "0" + hrsold;}
//         if (minsold < 10) {minsold = "0" + minsold;}
//         if (seconds < 10) {seconds="0" + seconds;}
//         //show.innerHTML = daysold + "天, " + hrsold + "時" + minsold + "分" + seconds + "秒";
//         countdown_days.innerHTML = daysold;
//         countdown_hours.innerHTML = hrsold;
//         countdown_mins.innerHTML = minsold;
//         countdown_secs.innerHTML = seconds;
//     }
// }
// timer = setInterval(countdown_counter, 1000);