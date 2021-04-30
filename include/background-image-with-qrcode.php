
<style type="text/css">
  @media screen and (min-device-width : 360px) and  (max-device-width : 640px) {

canvas{
 width: 100%;
 
 touch-action: none;
  }
}
html, body {
    max-width: 100%;
    overflow-x: hidden;
}
.button {
   -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    border: solid 1px #20538D;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    background: #4479BA;
    color: #FFF;
    padding: 8px 12px;
    text-decoration: none;
}
/*a:hover {
  color: white;
}*/
p {
  display: inline;
}
#button1 {
    cursor: pointer;
    display: block;
    width: 90px;
    background-color: purple;
    height:25px;
    color: white;
    position: absolute;
    right:0;
    top: 0;
    font-size: 11px;
    line-height:25px;
    text-align: center;
    -webkit-transition: 500ms all;
    -moz-transition: 500ms all;
    transition: 500ms all;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="container">
  <div class="row">
    <div class="col-md-1">
       <p><a id="lnkDownload" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="currentColor" viewBox="0 0 48 48"><path d="M28.9,18.4l-3.4,3.4V10.5C25.5,9.7,24.8,9,24,9s-1.5,0.7-1.5,1.5v11.4l-3.4-3.4c-0.6-0.6-1.5-0.6-2.1,0 c-0.6,0.6-0.6,1.5,0,2.1l6,6c0.6,0.6,1.5,0.6,2.1,0c0,0,0,0,0,0l6-6c0.6-0.6,0.6-1.5,0-2.1C30.5,17.9,29.5,17.9,28.9,18.4z"></path><path d="M42,30V13.5L28.5,0H12C8.7,0,6,2.7,6,6v24c-1.7,0.1-3,1.4-3,3.1v5.8c0,1.7,1.3,3,3,3.1v0c0,3.3,2.7,6,6,6h24 c3.3,0,6-2.7,6-6v0c1.7-0.1,3-1.4,3-3.1v-5.8C45,31.4,43.7,30.1,42,30z M36,45H12c-1.7,0-3-1.3-3-3h30C39,43.7,37.7,45,36,45z M11.5,39.3v-6.6c0-0.4,0.1-0.7,0.3-0.8s0.5-0.2,0.8-0.2h2.2c0.7,0,1.2,0.1,1.5,0.2c0.4,0.1,0.7,0.3,0.9,0.5s0.4,0.5,0.6,0.8 s0.2,0.7,0.2,1.1c0,0.9-0.3,1.5-0.8,2s-1.3,0.7-2.4,0.7h-1.6v2.4c0,0.3-0.1,0.6-0.2,0.8s-0.4,0.3-0.6,0.3c-0.3,0-0.5-0.1-0.6-0.3 S11.5,39.6,11.5,39.3z M19.5,39.3v-6.6c0-0.3,0-0.5,0.1-0.7c0.1-0.2,0.2-0.3,0.4-0.4s0.4-0.2,0.6-0.2c0.2,0,0.3,0,0.4,0.1 s0.2,0.1,0.3,0.2s0.2,0.2,0.3,0.3s0.2,0.3,0.3,0.4l3.3,5.1v-5.1c0-0.3,0.1-0.6,0.2-0.7s0.3-0.2,0.6-0.2c0.3,0,0.4,0.1,0.6,0.2 s0.2,0.4,0.2,0.7v6.8c0,0.8-0.3,1.1-0.9,1.1c-0.2,0-0.3,0-0.4-0.1s-0.2-0.1-0.4-0.2s-0.2-0.2-0.3-0.3s-0.2-0.3-0.3-0.4l-3.3-5v5 c0,0.3-0.1,0.6-0.2,0.7s-0.3,0.3-0.6,0.3c-0.2,0-0.4-0.1-0.6-0.3S19.5,39.7,19.5,39.3z M30.7,38.2c0.5,0.5,1.1,0.8,1.9,0.8 c0.4,0,0.8-0.1,1.1-0.2s0.7-0.3,1.1-0.5V37h-1.3c-0.3,0-0.6,0-0.7-0.1s-0.2-0.3-0.2-0.5c0-0.2,0.1-0.4,0.2-0.5s0.3-0.2,0.6-0.2h2 c0.2,0,0.4,0,0.6,0.1s0.3,0.1,0.4,0.3s0.2,0.4,0.2,0.7v1.6c0,0.2,0,0.4-0.1,0.5s-0.1,0.2-0.2,0.4s-0.3,0.2-0.4,0.3 c-0.5,0.3-1,0.5-1.5,0.6s-1,0.2-1.6,0.2c-0.7,0-1.3-0.1-1.8-0.3s-1-0.5-1.4-0.9s-0.7-0.9-0.9-1.4s-0.3-1.2-0.3-1.8 c0-0.7,0.1-1.3,0.3-1.8s0.5-1,0.9-1.4s0.9-0.7,1.4-0.9s1.2-0.3,1.9-0.3c0.6,0,1.1,0.1,1.5,0.2s0.8,0.3,1.1,0.6s0.5,0.5,0.6,0.7 s0.2,0.5,0.2,0.7c0,0.2-0.1,0.4-0.2,0.6s-0.4,0.2-0.6,0.2c-0.1,0-0.2,0-0.4-0.1s-0.2-0.1-0.3-0.2c-0.2-0.3-0.4-0.6-0.5-0.8 s-0.3-0.3-0.6-0.4s-0.6-0.2-1-0.2c-0.4,0-0.8,0.1-1.1,0.2s-0.6,0.3-0.8,0.6s-0.4,0.6-0.5,1S30,35.4,30,35.9 C30,36.9,30.3,37.6,30.7,38.2z M39,30H9V6c0-1.7,1.3-3,3-3h16.5v6c0,2.5,2,4.5,4.5,4.5h6V30z"></path><path d="M15.5,35.4c0.3-0.1,0.5-0.2,0.6-0.4s0.2-0.5,0.2-0.8c0-0.4-0.1-0.7-0.3-0.9c-0.3-0.3-0.8-0.4-1.5-0.4h-1.2v2.6h1.2 C14.8,35.5,15.2,35.5,15.5,35.4z"></path></svg></a> </p>
     </div>
     <div class="col-md-1">
       <p><a id="lnkDownload2" style="display: none;"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="3em" height="3em" viewBox="0 0 550.801 550.801" style="enable-background:new 0 0 550.801 550.801;"
   xml:space="preserve">
<g>
  <path d="M252.63,250.539c-7.409,0-12.438,0.72-15.072,1.442v47.614c3.117,0.718,6.945,0.96,12.203,0.96
    c19.388,0,31.356-9.819,31.356-26.32C281.117,259.396,270.82,250.539,252.63,250.539z"/>
  <path d="M488.426,197.019H475.2v-63.816c0-0.398-0.063-0.799-0.116-1.202c-0.021-2.534-0.827-5.023-2.562-6.995L366.325,3.694
    c-0.032-0.031-0.063-0.042-0.085-0.076c-0.633-0.707-1.371-1.295-2.151-1.804c-0.231-0.155-0.464-0.285-0.706-0.419
    c-0.676-0.369-1.393-0.675-2.131-0.896c-0.2-0.056-0.38-0.138-0.58-0.19C359.87,0.119,359.037,0,358.193,0H97.2
    c-11.918,0-21.6,9.693-21.6,21.601v175.413H62.377c-17.049,0-30.873,13.818-30.873,30.873v160.545
    c0,17.043,13.824,30.87,30.873,30.87h13.224V529.2c0,11.907,9.682,21.601,21.6,21.601h356.4c11.907,0,21.6-9.693,21.6-21.601
    V419.302h13.226c17.044,0,30.871-13.827,30.871-30.87v-160.54C519.297,210.838,505.47,197.019,488.426,197.019z M97.2,21.605
    h250.193v110.513c0,5.967,4.841,10.8,10.8,10.8h95.407v54.108H97.2V21.605z M317.24,273.272c0,15.791-5.264,29.191-14.829,38.293
    c-12.451,11.723-30.876,16.98-52.402,16.98c-4.788,0-9.102-0.231-12.451-0.712v57.665h-36.131V226.381
    c11.253-1.925,27.042-3.354,49.296-3.354c22.491,0,38.524,4.303,49.304,12.922C310.306,244.081,317.24,257.484,317.24,273.272z
     M87.033,384.302l4.076-29.431c5.028,1.677,11.48,2.879,18.658,2.879c15.325,0,24.888-6.95,24.888-32.072V224.219h36.368v101.934
    c0,45.947-22.02,61.973-57.428,61.973C105.227,388.131,94.216,386.707,87.033,384.302z M453.601,523.353H97.2V419.302h356.4
    V523.353z M475.189,378.085c-11.242,3.828-32.537,9.091-53.852,9.091c-29.416,0-50.721-7.419-65.549-21.773
    c-14.84-13.875-22.987-34.932-22.739-58.625c0.231-53.602,39.234-84.23,92.127-84.23c20.819,0,36.861,4.061,44.75,7.894
    l-7.657,29.191c-8.859-3.829-19.87-6.94-37.578-6.94c-30.386,0-53.346,17.234-53.346,52.17c0,33.26,20.809,52.882,50.725,52.882
    c8.374,0,15.077-0.96,17.945-2.399v-33.739h-24.891v-28.472h60.064V378.085z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</a> </p></div>
<div class="col-md-1">
       <p> <a id="lnkDownload3" style="display: none;"><i class="fa fa-print fa-3x" width="3em" height="3em"></i></a></p></div>
     </div>
      <div class="row">
      <div class="fabric-canvas-wrapper">
  
       
 
       
    <input type="file" name="file" id="profile-img" class="btn btn-lg btn-block btn-primary ellipsis generate_qrcode rounded-pill" title="Background Image"> <br>

        

    <canvas id="canvas" style="border:1px solid black"></canvas>
    </div>
    <div class="col-sm">
      <div class="resizable" id="draggable-img-container">
     <img src="https://wallpapercave.com/wp/wp7632524.jpg" alt="" id="image" style="display: none;" class="img-fluid" />
        </div>
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>
    



<script>
    
     function resizeCanvas() {
    const outerCanvasContainer = $('.fabric-canvas-wrapper')[0];
    
    const ratio = canvas.getWidth() / canvas.getHeight();
    const containerWidth   = outerCanvasContainer.clientWidth;
    const containerHeight  = outerCanvasContainer.clientHeight;

    const scale = containerWidth / canvas.getWidth();
    const zoom  = canvas.getZoom() * scale;
    canvas.setDimensions({width: containerWidth, height: containerWidth / ratio});
    canvas.setViewportTransform([zoom, 0, 0, zoom, 0, 0]);
}

$(window).resize(resizeCanvas);
var isimaguploaded=false;
var canvas = new fabric.Canvas('canvas', {
    // width: 500,
    // height: 500
});


resizeCanvas();

 $( "canvas" ).on({
        click: function(e){
            canvas.forEachObject(function(o){ o.hasBorders = o.hasControls = true; });        }
    });

    // canvas.setHeight(window.innerHeight/2);
    // canvas.setWidth(380);
     function to_image(){
                var canvas = document.getElementsByTagName("canvas");
                document.getElementById("theimage").src = canvas[0].toDataURL();
                Canvas2Image.saveAsPNG(canvas[0]);
            }

            var imageSaver = document.getElementById('lnkDownload');

imageSaver.addEventListener('click', saveImage, false);
var imageSaver2 = document.getElementById('lnkDownload2');
imageSaver2.addEventListener('click', saveImage2, false);

$("#lnkDownload3").click(function(){
  
  printCanvas()
  
})
function printCanvas()  
{  canvas.forEachObject(function(o){ o.hasBorders = o.hasControls = false; });
    var dataUrl = canvas.toDataURL(); //attempt to save base64 string to server using this var  
    var windowContent = '<!DOCTYPE html>';
    windowContent += '<html>'
    // windowContent += '<head><title>Print canvas</title></head>';
    windowContent += '<body>'
    windowContent += '<img src="' + dataUrl + '">';
    windowContent += '</body>';
    windowContent += '</html>';
    var printWin = window.open('','','width=900,height=800');
    printWin.document.open();
    printWin.document.write(windowContent);
   
    printWin.document.addEventListener('load', function() {
    printWin.focus();
    printWin.print();
    printWin.document.close();
    printWin.close();            
}, true);
}


function saveImage(e) {
      canvas.forEachObject(function(o){ o.hasBorders = o.hasControls = false; });
    this.href = canvas.toDataURL({
        format: 'png',
        quality: 0.8
    });
    this.download = 'canvas.png'
}
function saveImage2(e) {
  canvas.forEachObject(function(o){ o.hasBorders = o.hasControls = false; });
    this.href = canvas.toDataURL({
        format: 'jpg',
        quality: 0.8
    });
    this.download = 'canvas.jpg'
}
function convertToImagen() {
  canvas.deactivateAll().renderAll();  
  window.open(canvas.toDataURL('png')); 
}

function rescale_canvas_if_needed(){
      var optimal_dimensions = [600,600];
     var file = document.querySelector('#profile-img').files[0];
    // getBase64(file2);

    
    var reader = new FileReader();
   
   reader.onload = function(f) {
      
      var data = f.target.result;
  fabric.Image.fromURL(data, function(img) {
         // add background image
         // var iw=img.width;
         // var ih=img.height;
         // console.log(iw)
         // console.log(ih)

         canvas.setBackgroundImage(img, canvas.renderAll.bind(canvas), {
            // canvas.setHeight(window.innerHeight/2);
            // canvas.setWidth(380);

            // canvas.width =img.width,
            //  canvas.height = img.height

             scaleX: canvas.width / img.width,
             scaleY: canvas.height / img.height
         });
      });
   }
    
    var scaleFactorX=window.innerWidth/optimal_dimensions[0];
    var scaleFactorY=window.innerHeight/optimal_dimensions[1];
    if(scaleFactorX <  scaleFactorY && scaleFactorX < 1) {
        canvas.setWidth(optimal_dimensions[0] *scaleFactorX);
        canvas.setHeight(optimal_dimensions[1] *scaleFactorX);
        canvas.setZoom(scaleFactorX);
        reader.onload = function(f) {
      
      var data = f.target.result;
  fabric.Image.fromURL(data, function(img) {
         // add background image
         // var iw=img.width;
         // var ih=img.height;
         // console.log(iw)
         // console.log(ih)

         canvas.setBackgroundImage(img, canvas.renderAll.bind(canvas), {
            // canvas.setHeight(window.innerHeight/2);
            // canvas.setWidth(380);

            // canvas.width =img.width,
            //  canvas.height = img.height

             scaleX: (optimal_dimensions[0] *scaleFactorX) / img.width,
             scaleY: (optimal_dimensions[1] *scaleFactorX) / img.height
         });
      });
   }
    } else if(scaleFactorX >  scaleFactorY && scaleFactorY < 1){
        canvas.setWidth(optimal_dimensions[0] *scaleFactorY);
        canvas.setHeight(optimal_dimensions[1] *scaleFactorY);
        canvas.setZoom(scaleFactorY);

             reader.onload = function(f) {
      
      var data = f.target.result;
  fabric.Image.fromURL(data, function(img) {
         // add background image
         // var iw=img.width;
         // var ih=img.height;
         // console.log(iw)
         // console.log(ih)

         canvas.setBackgroundImage(img, canvas.renderAll.bind(canvas), {
            // canvas.setHeight(window.innerHeight/2);
            // canvas.setWidth(380);

            // canvas.width =img.width,
            //  canvas.height = img.height

             scaleX: (optimal_dimensions[0] *scaleFactorX) / img.width,
             scaleY: (optimal_dimensions[1] *scaleFactorX) / img.height
         });
      });
   }
    }else {
        canvas.setWidth(optimal_dimensions[0] );
        canvas.setHeight(optimal_dimensions[1] );
        canvas.setZoom(1);
             reader.onload = function(f) {
      
      var data = f.target.result;
  fabric.Image.fromURL(data, function(img) {
         // add background image
         // var iw=img.width;
         // var ih=img.height;
         // console.log(iw)
         // console.log(ih)

         canvas.setBackgroundImage(img, canvas.renderAll.bind(canvas), {
            // canvas.setHeight(window.innerHeight/2);
            // canvas.setWidth(380);

            // canvas.width =img.width,
            //  canvas.height = img.height

             scaleX: (optimal_dimensions[0] *scaleFactorX) / img.width,
             scaleY: (optimal_dimensions[1] *scaleFactorX) / img.height
         });
      });
   }
    }

    canvas.calcOffset();
    canvas.renderAll();
}

function handle_resize(){
    $(".canvas-container").hide();
    rescale_canvas_if_needed();
    $(".canvas-container").show();               
     
}
var resizeId = null;
$(function() {
    $(window).resize(function() {
        if(resizeId != null)
        clearTimeout(resizeId);
        resizeId = setTimeout(handle_resize, 500);
     });
    console.log( "ready!" );
    /* auto size it right away... */
    resizeId = setTimeout(handle_resize, 500);
});

  
 
function drawww() {


var canvass = document.getElementById('canvas');
var contexts = canvas.getContext('2d');


// canvas.setHeight(window.innerHeight/2);
// canvas.setWidth(380);
canvas.renderAll();

// var object = canvas.getActiveObject();



// console.log(object.left)
// canvas.remove(object);
// clearCanvas(contexts,canvass);
var imgElement = document.getElementById('image');


canvas.clear()
canvas.renderAll();

// var imgInstance = new fabric.Image(imgElement, {
//   left: 100,
//   top: 100,
//   angle: 0,
//   opacity: 0.75,
//   width:100,
//   height:100,
//   fireRightClick: true,  // <-- enable firing of right click events
//   fireMiddleClick: true, // <-- enable firing of middle click events
//   stopContextMenu: true, // <--  prevent context menu from showing

// });
// canvas.add(imgInstance);

// canvas.calcOffset();
// canvas.setCoords();
// canvas.renderAll();


}

    var iw;
    var ih;
    document.getElementById('profile-img').addEventListener("change", function(e) {
   var file = e.target.files[0];
   var reader = new FileReader();
   isimaguploaded=true;
      $("#myFocus").css("display", "none");
   reader.onload = function(f) {
      // var iw=f.width;
      // var ih=f.height;
      // console.log(iw)
      // console.log(ih)
      var data = f.target.result;

      var im = new Image;
      im.src = data;
// im.onload = () => {iw=im.width;ih=im.height};
//        console.log(iw);

       im.onload = function(){
        iw=im.width;
        ih=im.height;
        // console.log(iw);
        // localStorage.setItem('iw',iw);
        // localStorage.setItem('ih',ih);

      
      fabric.Image.fromURL(data, function(img) {
         // add background image
         // var iw=img.width;
         // var ih=img.height;
         // console.log(iw)
         // console.log(ih)

         canvas.setBackgroundImage(img, canvas.renderAll.bind(canvas), {
            // canvas.setHeight(window.innerHeight/2);
            // canvas.setWidth(380);

            // canvas.width =img.width,
            //  canvas.height = img.height

            // scaleX: canvas.width / img.width,
            // scaleY: canvas.height / img.height
         });
      });
      // alert(iw)
      //  alert(ih)
      canvas.setHeight(ih);
      canvas.setWidth(iw);
       }
   };
   reader.readAsDataURL(file);
});


//if (typeof window.orientation !== 'undefined') { resizeCanvas(); }

  // function resizeCanvas() {
  //  alert('resized')
  //  canvas.setHeight(window.innerHeight/2);
  //  canvas.setWidth(380);

  //   // Redraw everything after resizing the window
  //   //drawStuff(); 
  // }
  function clearCanvas(context, canvas) {
  context.clearRect(0, 0, canvas.width, canvas.height);
  var w = canvas.width;
  canvas.width = 1;
  canvas.width = w;
}


</script>
