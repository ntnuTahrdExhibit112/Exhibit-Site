const showInfo = () => {
    const fb4Button = document.querySelector("#fb-button");
    const ig4Button = document.querySelector("#ig-button");
    const tech4Button = document.querySelector("#tech-button");
    fb4Button.setAttribute("visible", true);
    setTimeout(() => {
      ig4Button.setAttribute("visible", true);
    }, 300);
    setTimeout(() => {
      tech4Button.setAttribute("visible", true);
    }, 600);
    fb4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.facebook.com/photo/?fbid=503597655145504&set=pb.100064858207930.-2207520000.";
    });
    ig4Button.addEventListener('click', function (evt) {
      window.location.href="https://www.instagram.com/p/ClLqMFnSZ7u/";
    });
    tech4Button.addEventListener('click', function (evt) {
      window.location.href="https://ntnutechpunk112.ml/group/?project=wingfolder";
    });
  }

const showPortfolio = (done) => {
    const portfolio = document.querySelector("#portfolio-panel");
    const txt = document.querySelector("#txt");
    const portfolioLeftButton = document.querySelector("#portfolio-left-button");
    const previewplane = document.querySelector("#previewplane");
    const portfolioRightButton = document.querySelector("#portfolio-right-button");

    let y = 0;
    let y2 = 0;
    let currentItem = 0;
    let con=false;
    portfolio.setAttribute("visible", true);
    txt.setAttribute("visible", true);
    const showPortfolioItem = (item) => {
      con=false;
      for (let i = 0; i <= 2; i++) {
        document.querySelector("#portfolio-item" + i).setAttribute("visible", i === item);
        if(i==0 && i===item){
          document.querySelector("#paintandquest-video-link").setAttribute("src", "#g1mp4");
          document.querySelector("#g1mp4").play();
          con=true;
        }
        else if(con==false){
          document.querySelector("#paintandquest-video-link").setAttribute("src", "#g1mp4");
          document.querySelector("#g1mp4").pause();
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


        setTimeout(() => {
          done();
        }, 500);
      }
      portfolio.setAttribute("position", "0 " + y + " -0.01");
      txt.setAttribute("position", "0 " + y2 + " -0.01");
    }, 10);
  }



  AFRAME.registerComponent('mytarget', {
    init: function () {
      this.el.addEventListener('targetFound', event => {
        console.log("target found");
       // showAvatar(() => {
          setTimeout(() => {
            showPortfolio(() => {
              setTimeout(() => {
                showInfo();
              }, 300);
            });
          }, 300);
       // });
      });
      this.el.addEventListener('targetLost', event => {
        document.querySelector("#paintandquest-video-link").setAttribute("src", "#g1mp4");
        document.querySelector("#g1mp4").pause();
        console.log("target found");
      });
      //this.el.emit('targetFound');
    }
  });