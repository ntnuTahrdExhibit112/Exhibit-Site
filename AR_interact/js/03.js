const showInfo3 = () => {
    const fb4Button = document.querySelector("#fb3-button");
    const ig4Button = document.querySelector("#ig3-button");
    const tech4Button = document.querySelector("#tech3-button");
    fb4Button.setAttribute("visible", true);
    setTimeout(() => {
      ig4Button.setAttribute("visible", true);
    }, 300);
    setTimeout(() => {
      tech4Button.setAttribute("visible", true);
    }, 600);
    fb4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.facebook.com/photo.php?fbid=492117696293500&set=pb.100064858207930.-2207520000.&type=3";
    });
    ig4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.instagram.com/p/CkidT4bS7m7/";
    });
    tech4Button.addEventListener('click', function (evt) {
      window.location.href="https://ntnutechpunk112.ml/group/?project=Motion_Sensor_Game";
    });
  }

const showPortfolio3 = (done) => {
    const portfolio = document.querySelector("#portfolio-panel3");
    const txt = document.querySelector("#txt3");
    const portfolioLeftButton = document.querySelector("#portfolio-left-button3");
    const previewplane = document.querySelector("#previewplane3");
    const portfolioRightButton = document.querySelector("#portfolio-right-button3");

    let y = 0;
    let y2 = 0;
    let currentItem = 0;

    portfolio.setAttribute("visible", true);
    txt.setAttribute("visible", true);
    const showPortfolioItem = (item) => {
      for (let i = 0; i <= 2; i++) {
        document.querySelector("#portfolio-item3_" + i).setAttribute("visible", i === item);
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


  AFRAME.registerComponent('mytarget3', {
    init: function () {
      this.el.addEventListener('targetFound', event => {
        console.log("target2 found");
        //showAvatar(() => {
          //setTimeout(() => {
            showPortfolio3(() => {
              setTimeout(() => {
                showInfo3();
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