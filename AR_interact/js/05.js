const showInfo5 = () => {
    const fb4Button = document.querySelector("#fb-button5");
    const ig4Button = document.querySelector("#ig-button5");
    const tech4Button = document.querySelector("#tech-button5");
    fb4Button.setAttribute("visible", true);
    setTimeout(() => {
      ig4Button.setAttribute("visible", true);
    }, 300);
    setTimeout(() => {
      tech4Button.setAttribute("visible", true);
    }, 600);
    fb4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.facebook.com/photo/?fbid=499222638916339&set=pb.100064858207930.-2207520000.";
    });
    ig4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.instagram.com/p/Ck8NjegyBsp/";
    });
    tech4Button.addEventListener('click', function (evt) {
      window.location.href="https://ntnutechpunk112.ml/group/?project=techspestar";
    });
  }

const showPortfolio5 = (done) => {
    const portfolio = document.querySelector("#portfolio-panel5");
    const txt = document.querySelector("#txt5");
    const portfolioLeftButton = document.querySelector("#portfolio-left-button5");
    const portfolioRightButton = document.querySelector("#portfolio-right-button5");

    let y = 0;
    let y2 = 0;
    let currentItem = 0;

    portfolio.setAttribute("visible", true);
    txt.setAttribute("visible", true);
    const showPortfolioItem = (item) => {
      for (let i = 0; i <= 6; i++) {
        document.querySelector("#portfolio-item5_" + i).setAttribute("visible", i === item);
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
          currentItem = (currentItem + 1) % 7;
          showPortfolioItem(currentItem);
        });
        portfolioRightButton.addEventListener('click', () => {
          currentItem = (currentItem - 1 + 7) % 7;
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


  AFRAME.registerComponent('mytarget5', {
    init: function () {
      this.el.addEventListener('targetFound', event => {
        console.log("target5 found");
        //showAvatar(() => {
          //setTimeout(() => {
            showPortfolio5(() => {
              setTimeout(() => {
                showInfo5();
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