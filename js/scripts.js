$(document).ready(function() {

  var drawingCanvas = document.getElementById('left-curve');

  // Check the element is in the DOM and the browser supports canvas
  if(drawingCanvas && drawingCanvas.getContext) {
    // Initaliase a 2-dimensional drawing context
    var context = drawingCanvas.getContext('2d');

    context.fillStyle="#1F1F1F";
    context.beginPath();
    context.arc(0,14,14,0,Math.PI*1.5,true);
    context.lineTo(14, 0);
    context.closePath();
    context.fill();


    drawingCanvas = document.getElementById('right-curve');
    context = drawingCanvas.getContext('2d');

    context.fillStyle="#1F1F1F";
    context.beginPath();
    context.arc(14,14,14,Math.PI*1.5,Math.PI,true);
    context.lineTo(0, 0);
    context.closePath();
    context.fill();
  }

  //	$("#cycle").cycle({
  //		fx: "fade"
  //	});

  //	$("figure.gallery-item a").attr("rel","gallery");
  //	$("figure.gallery-item a[rel='gallery']").fancybox();

});

