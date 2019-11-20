<html>
  <head>
    <title>P2</title>
	<script>
function move() {
var elem = document.getElementB­yId("myBar"); 
var width = 1;
var id = setInterval(frame, 10);
function frame() {
if (width >= 100) {
clearInterval(id);
} else {
width++; 
elem.style.width = width + '%'; 
}
}
}
</script>
	<style>
	.background
	            {
				 background-image:url("background.jpeg");
				 background-repeat:no-repeat;
				 background-position:right-top;
				 background-attachment:fixed;
				 background-size:100% 100%;
				
				}
	  .img
	      {
		   width:100%;
		   height:100%;
		  }
	  .ptext
	      {
		   font-size:40px;
		   color:blue;
		  }
		  .a
	     {  
		  
		  font-size:40px;
		  color:black;
		 }
		 #myProgress {
width: 100%;
background-color: #ddd;
}

#myBar {
width: 10%;
height: 30px;
background-color: 545242;
text-align: center;
line-height: 30px;
color: black;
}
	</style>
  </head>
  <body class="background">
    <center>
  <div class="conteinar"style="height:100%;width:100%;margin:0px;pading:0px"> 
	    <div class="header"style="height:10%;width:100%;clear:left;background-color:black">
		  <div class="flogo"style="height:100%;width:15%;float:left">
  		    <img src="f.png"class="img">
          </div>
          <div class="pte"style="height:100%;width:15%;float:left">
		    <div class="ptex"style="height:40%;width:100%;clear:left">
		  
		    </div>
		    <div class="ptext"style="height:60%;width:100%;clear:left">
		     PASSWORD
		    </div>
		  </div>
		  <div class="ptex"style="height:100%;width:%;float:left">
		  </div>
        </div>
		<hr color="gray"size="4"/>
		
		
		
		
		<div class="header"style="height:30%;width:80%;clear:left">

		  </div>
		  <div class="a"style="height:5%;width:80%;clear:left">
		   



<button onclick="move()">start</button> 

<h2> Lodding....</h2>

<div id="myProgress">
<div id="myBar">10%</div>
</div>


		  </div>
		  <div class="header"style="height:10%;width:80%;clear:left">

		  </div>
		  <div class="header"style="height:40%;width:80%;clear:left">

		  </div>
		  
		  
		  
	 </div>
    </center>
  </body>
 </html>