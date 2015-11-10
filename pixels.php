<php?
      
?>
  
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Pixel Galary</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jscolor.js"></script>
    <script>
      var pixels = [1,0,1,0,1,0]; 
      var blockSize = 20;
      function drawPixel(event) {
        var x = event.clientX-5;
        var y = event.clientY-5;
        
        //alert("X: "+x+",Y: "+y);
        //calculate position
        var x1 = x/blockSize*blockSize-x%blockSize;
        var y1 = y/blockSize*blockSize-y%blockSize;
       
        //draw
        var ctx = c.getContext("2d");
        ctx = c.getContext("2d");
        //ctx.fillStyle = "#FF0000";
        ctx.fillStyle = "#"+document.getElementById("colorpicker").value;
        ctx.fillRect(x1,y1,blockSize,blockSize);
        
      //alert(document.getElementById("colorpicker").value);
      }

    </script> 
  </head>

  <body>
    <canvas id="myCanvas" onclick="drawPixel(event)" style="border:1px solid #000000;">
    </canvas> 
   <div>
    Color: <input id="colorpicker" class="jscolor" value="ab2567">
   </div>
    <script>
      window.onload = function() {
      };
           
      var c = document.getElementById("myCanvas");
      c.width=500;
      c.height=500;
      
      //c.width=screen.width;
      //c.height=screen.height;
      //dray grids
      var ctx = c.getContext("2d");
      for (var i=0; i< (c.width/blockSize) ; i++)
      {
        ctx.moveTo(0, i*blockSize-0.5);  //-0.5 draw a 1px line
        ctx.lineTo(c.height, i*blockSize-0.5);
        ctx.stroke();
        ctx.moveTo(i*blockSize-0.5, 0 );  //-0.5 draw a 1px line
        ctx.lineTo(i*blockSize-0.5, c.width);
        ctx.stroke();
      }

      
    
      
    </script>
  </body>

</html> 