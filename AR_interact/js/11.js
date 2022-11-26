const showInfo11 = () => {
    const fb4Button = document.querySelector("#fb-button11");
    const ig4Button = document.querySelector("#ig-button11");
    const tech4Button = document.querySelector("#tech-button11");
    fb4Button.setAttribute("visible", true);
    setTimeout(() => {
      ig4Button.setAttribute("visible", true);
    }, 300);
    setTimeout(() => {
      tech4Button.setAttribute("visible", true);
    }, 600);
    fb4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.facebook.com/photo.php?fbid=495605685944701&set=pb.100064858207930.-2207520000.&type=3";
    });
    ig4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.instagram.com/p/Ckvau1XSUMn/";
    });
    tech4Button.addEventListener('click', function (evt) {
      window.location.href="https://ntnutechpunk112.ml/group/?project=The_Healing_Forest";
    });
  }

  const showPortfolio11 = (done) => {
    const portfolio = document.querySelector("#portfolio-panel11");
    const txt = document.querySelector("#txt11");
    const previewplane = document.querySelector("#previewplane11a");
    let y = 0;
    let y2 = 0;
    portfolio.setAttribute("visible", true);
    txt.setAttribute("visible", true);
    const id = setInterval(() => {
      y += 0.008;
      y2 -= 0.008;
      if (y >= 0.6) {
        clearInterval(id);
        previewplane.setAttribute("visible", true);
        setTimeout(() => {
          done();
        }, 500);
      }
      portfolio.setAttribute("position", "0 " + y + " -0.01");
      txt.setAttribute("position", "0 " + y2 + " -0.01");
    }, 10);
  }


  AFRAME.registerComponent('mytarget11', {
    init: function () {
      this.el.addEventListener('targetFound', event => {
        console.log("target11 found");
        //showAvatar(() => {
          //setTimeout(() => {
            showPortfolio11(() => {
              setTimeout(() => {
                showInfo11();
              }, 300);
            });
          //}, 300);
       // });
      });
      this.el.addEventListener('targetLost', event => {
        console.log("target found");
      });
      //this.el.emit('targetFound');
    }
  });