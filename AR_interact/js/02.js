const showInfo2 = () => {
    const fb4Button = document.querySelector("#fb2-button");
    const ig4Button = document.querySelector("#ig2-button");
    const tech4Button = document.querySelector("#tech2-button");
    fb4Button.setAttribute("visible", true);
    setTimeout(() => {
      ig4Button.setAttribute("visible", true);
    }, 300);
    setTimeout(() => {
      tech4Button.setAttribute("visible", true);
    }, 600);
    fb4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.facebook.com/photo.php?fbid=489324109906192&set=pb.100064858207930.-2207520000.&type=3";
    });
    ig4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.instagram.com/p/CkYOnXgSn57/";
    });
    tech4Button.addEventListener('click', function (evt) {
      window.location.href="https://ntnutechpunk112.ml/group/?project=FaceToVirtual";
    });
  }

const showPortfolio2 = (done) => {
    const portfolio = document.querySelector("#portfolio-panel2");
    const txt = document.querySelector("#txt2");
    const portfolioLeftButton = document.querySelector("#portfolio-left-button2");
    const previewplane = document.querySelector("#previewplane2");
    const portfolioRightButton = document.querySelector("#portfolio-right-button2");

    let y = 0;
    let y2 = 0;
    let currentItem = 0;

    portfolio.setAttribute("visible", true);
    txt.setAttribute("visible", true);
    const showPortfolioItem = (item) => {
      for (let i = 0; i <= 2; i++) {
        document.querySelector("#portfolio-item2_" + i).setAttribute("visible", i === item);
      }
    }
    const id = setInterval(() => {
      y += 0.008;
      y2 -= 0.008;
      if (y >= 0.6) {
        clearInterval(id);
        portfolioLeftButton.setAttribute("visible", true);
        portfolioRightButton.setAttribute("visible", true);
        portfolioLeftButton.addEventListener('click', () => {
          currentItem = (currentItem + 1) % 3;
          showPortfolioItem(currentItem);
        });
        portfolioRightButton.addEventListener('click', () => {
          currentItem = (currentItem - 1 + 3) % 3;
          showPortfolioItem(currentItem);
        });

        setTimeout(() => {
          done();
        }, 500);
      }
      portfolio.setAttribute("position", "0 " + y + " -0.01");
      txt.setAttribute("position", "0 " + y2 + " -0.01");
    }, 10);
  }

  const showAvatar = (onDone) => {
    const avatar = document.querySelector("#avatar");
    let z = -0.3;
    const id = setInterval(() => {
      z += 0.008;
      if (z >= 0.3) {
        clearInterval(id);
        onDone();
      }
      avatar.setAttribute("position", "0 0 " + z);
    }, 10);
  }

  AFRAME.registerComponent('mytarget2', {
    init: function () {
      this.el.addEventListener('targetFound', event => {
        console.log("target2 found");
        //showAvatar(() => {
          //setTimeout(() => {
            showPortfolio2(() => {
              setTimeout(() => {
                showInfo2();
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