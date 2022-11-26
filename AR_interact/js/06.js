const showInfo6 = () => {
    const fb4Button = document.querySelector("#fb-button6");
    const ig4Button = document.querySelector("#ig-button6");
    const tech4Button = document.querySelector("#tech-button6");
    fb4Button.setAttribute("visible", true);
    setTimeout(() => {
      ig4Button.setAttribute("visible", true);
    }, 300);
    setTimeout(() => {
      tech4Button.setAttribute("visible", true);
    }, 600);
    fb4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.facebook.com/photo.php?fbid=483117327193537&set=pb.100064858207930.-2207520000.&type=3";
    });
    ig4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.instagram.com/p/CkDtekeSTXD/";
    });
    tech4Button.addEventListener('click', function (evt) {
      window.location.href="https://ntnutechpunk112.ml/group/?project=JGFRA";
    });
  }

  const showPortfolio6 = (done) => {
    const portfolio = document.querySelector("#portfolio-panel6");
    const txt = document.querySelector("#txt6");
    const portfolioLeftButton = document.querySelector("#portfolio-left-button6");
    const previewplane = document.querySelector("#previewplane6a");
    const portfolioRightButton = document.querySelector("#portfolio-right-button6");

    let y = 0;
    let y2 = 0;
    let currentItem = 0;
    let con =false;
    portfolio.setAttribute("visible", true);
    txt.setAttribute("visible", true);
    const showPortfolioItem = (item) => {
      con =false;
      for (let i = 0; i <= 2; i++) {
        document.querySelector("#portfolio-item6_" + i).setAttribute("visible", i === item);
        if(i==0 && i===item){
          document.querySelector("#paintandquest-video-link6").setAttribute("src", "#g6mp4");
          document.querySelector("#g6mp4").play();
          con=true;
        }
        else if(con==false){
          document.querySelector("#paintandquest-video-link6").setAttribute("src", "#g6mp4");
          document.querySelector("#g6mp4").pause();
        }
        
        //paintandquestPreviewButton.setAttribute("visible", true);
      }
    }
    const id = setInterval(() => {
      y += 0.008;
      y2 -= 0.008;
      if (y >= 0.6) {
        clearInterval(id);
        previewplane.setAttribute("visible", false);
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


  AFRAME.registerComponent('mytarget6', {
    init: function () {
      this.el.addEventListener('targetFound', event => {
        console.log("target6 found");
        //showAvatar(() => {
          //setTimeout(() => {
            showPortfolio6(() => {
              setTimeout(() => {
                showInfo6();
              }, 300);
            });
          //}, 300);
       // });
      });
      this.el.addEventListener('targetLost', event => {
        document.querySelector("#paintandquest-video-link6").setAttribute("src", "#g6mp4");
        document.querySelector("#g6mp4").pause();
        console.log("target found");
      });
      //this.el.emit('targetFound');
    }
  });