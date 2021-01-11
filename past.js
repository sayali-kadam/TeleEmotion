window.onload = function () {
  faceapi.nets.tinyFaceDetector.loadFromUri('./weights'),
  faceapi.nets.faceExpressionNet.loadFromUri('./weights')
};

async function upload() {
  const imgFile = document.getElementById('myFileUpload').files[0];
  const canvas = document.getElementById('myCan');
  const imageView = document.getElementById('myImg');

  const img = await faceapi.bufferToImage(imgFile);
  imageView.src = img.src;
  const displaySize = {width:imageView.width, height:imageView.height};
  faceapi.matchDimensions(canvas, displaySize);
  const detections = await faceapi.detectAllFaces(img, new faceapi.TinyFaceDetectorOptions()).withFaceExpressions();

  const resizedDetections = faceapi.resizeResults(detections, displaySize);
  faceapi.draw.drawDetections(canvas, resizedDetections);
  faceapi.draw.drawFaceExpressions(canvas, resizedDetections);
}
