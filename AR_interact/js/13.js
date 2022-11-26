const showInfo13 = () => {
    const fb4Button = document.querySelector("#fb-button13");
    const ig4Button = document.querySelector("#ig-button13");
    const tech4Button = document.querySelector("#tech-button13");
    fb4Button.setAttribute("visible", true);
    setTimeout(() => {
      ig4Button.setAttribute("visible", true);
    }, 300);
    setTimeout(() => {
      tech4Button.setAttribute("visible", true);
    }, 600);
    fb4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.facebook.com/photo/?fbid=502184875286782&set=pb.100064858207930.-2207520000.";
    });
    ig4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.instagram.com/p/ClG3yQbS934/";
    });
    tech4Button.addEventListener('click', function (evt) {
      window.location.href="https://ntnutechpunk112.ml/group/?project=modern_record_player";
    });
  }

  const showPortfolio13 = (done) => {
    const portfolio = document.querySelector("#portfolio-panel13");
    const txt = document.querySelector("#txt13");
    const previewplane = document.querySelector("#previewplane13a");
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


  AFRAME.registerComponent('mytarget13', {
    init: function () {
      this.el.addEventListener('targetFound', event => {
        console.log("target13 found");
        //showAvatar(() => {
          //setTimeout(() => {
            showPortfolio13(() => {
              setTimeout(() => {
                showInfo13();
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