const showInfo4 = () => {
    const fb4Button = document.querySelector("#fb4-button");
    const ig4Button = document.querySelector("#ig4-button");
    const tech4Button = document.querySelector("#tech4-button");
    fb4Button.setAttribute("visible", true);
    setTimeout(() => {
      ig4Button.setAttribute("visible", true);
    }, 300);
    setTimeout(() => {
      tech4Button.setAttribute("visible", true);
    }, 600);
    fb4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.facebook.com/photo.php?fbid=483909313781005&set=pb.100064858207930.-2207520000.&type=3";
    });
    ig4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.instagram.com/p/CkidT4bS7m7/";
    });
    tech4Button.addEventListener('click', function (evt) {
      window.location.href="https://ntnutechpunk112.ml/group/?project=Westpath";
    });
  }

const showPortfolio4 = (done) => {
    const portfolio = document.querySelector("#portfolio-panel4");
    const txt = document.querySelector("#txt4");
    const portfolioLeftButton = document.querySelector("#portfolio-left-button4");
    const previewplane4 = document.querySelector("#previewplane4a");
    const portfolioRightButton = document.querySelector("#portfolio-right-button4");

    let y = 0;
    let y2 = 0;
    let currentItem = 0;
    let con =false;
    portfolio.setAttribute("visible", true);
    txt.setAttribute("visible", true);
    const showPortfolioItem = (item) => {
      con=false;
      for (let i = 0; i <= 2; i++) {
        document.querySelector("#portfolio-item4_" + i).setAttribute("visible", i === item);
        if(i==0 && i===item){
          document.querySelector("#paintandquest-video-link4").setAttribute("src", "#g4mp4");
          document.querySelector("#g4mp4").play();
          con=true;
        }
        else if(con==false){
          document.querySelector("#paintandquest-video-link4").setAttribute("src", "#g4mp4");
          document.querySelector("#g4mp4").pause();
        }
        //paintandquestPreviewButton.setAttribute("visible", true);
      }
    }
    const id = setInterval(() => {
      y += 0.008;
      y2 -= 0.008;
      if (y >= 0.6) {
        clearInterval(id);
        previewplane4.setAttribute("visible", false);
        showPortfolioItem(currentItem);
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

       /* paintandquestPreviewButton.addEventListener('click', () => {
          paintandquestPreviewButton.setAttribute("visible", false);
          previewplane.setAttribute("visible", false);
          document.querySelector("#paintandquest-video-link").setAttribute("src", "#g1mp4");
          document.querySelector("#g1mp4").play();
        });*/

        setTimeout(() => {
          done();
        }, 500);
      }
      portfolio.setAttribute("position", "0 " + y + " -0.01");
      txt.setAttribute("position", "0 " + y2 + " -0.01");
    }, 10);
  }

 /* const showAvatar = (onDone) => {
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
  }*/

  AFRAME.registerComponent('mytarget4', {
    init: function () {
      this.el.addEventListener('targetFound', event => {
        console.log("target found");
       // showAvatar(() => {
          setTimeout(() => {
            showPortfolio4(() => {
              setTimeout(() => {
                showInfo4();
              }, 300);
            });
          }, 300);
       // });
      });
      this.el.addEventListener('targetLost', event => {
        document.querySelector("#paintandquest-video-link4").setAttribute("src", "#g4mp4");
        document.querySelector("#g4mp4").pause();
        console.log("target found");
      });
      //this.el.emit('targetFound');
    }
  });