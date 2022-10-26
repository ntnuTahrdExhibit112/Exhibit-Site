const panorama = new PANOLENS.ImagePanorama( 'img/panolens_test_image02.jpg' );
const imageContainer = document.querySelector(".image-container");
const viewer = new PANOLENS.Viewer({
    container: imageContainer,
    autoRotate: true,
});


var infospot = new PANOLENS.Infospot(600,"img/info.png");
var infospot2 = new PANOLENS.Infospot(600,"img/info.png");
infospot.position.set(0,0,-5000);
infospot2.position.set(10,10,-5000);
//infospot.addHoverText("hi");

const picture = document.getElementById("desc-container");

infospot.addHoverElement(picture);
infospot2.addHoverElement(picture);
panorama.add(infospot);
panorama.add(infospot2);
viewer.add( panorama );
//console.log(typeof(picture));