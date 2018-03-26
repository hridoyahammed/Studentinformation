// JavaScript Document

/*circle progress my_canvas*/
var ctx = document.getElementById('my_canvas').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
function progressSim(){
	diff = ((al / 100) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 5;
	ctx.fillStyle = '#F5AE56';
	ctx.strokeStyle = '#F5AE56';
	ctx.textAlign = 'center';
	ctx.font='36px Helvetica';
	ctx.fillText(al+'%', cw*.5, ch*.5+2, cw);
	ctx.beginPath();
	ctx.arc(85, 85, 80, start, diff/10+start, false);
	ctx.stroke();
	if(al >= 45){
		clearTimeout(sim);
	    // Add scripting here that will run when progress completes
	}
	al++;
}
var sim = setInterval(progressSim, 60);


/*circle progress my_canvas1*/

/*var ctx = document.getElementById('my_canvas1').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
function progressSim(){
	diff = ((al / 100) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 5;
	ctx.fillStyle = '#51C6BA';
	ctx.strokeStyle = '#51C6BA';
	ctx.textAlign = 'center';
	ctx.font='36px Helvetica bolder';
	ctx.fillText(al+'%', cw*.5, ch*.5+2, cw);
	ctx.beginPath();
	ctx.arc(85, 85, 80, start, diff/10+start, false);
	ctx.stroke();
	if(al >= 80){
		clearTimeout(sim);
	    // Add scripting here that will run when progress completes
	}
	al++;
}
var sim = setInterval(progressSim);


/*circle progress my_canvas2*/

var tohid=document.getElementById('our_canvas').getContext('2d');
var count=0;
var st = 4.72;
var w=tohid.canvas.width;
var h=tohid.canvas.height;
var sum;
function progresssim(){
	sum=((count/100)*Math.PI*2*10).toFixed(2);
	tohid.clearRect(0,0,w,h);
	tohid.lineWidth=5;
	tohid.fillStyle='#51C6BA';
	tohid.strokeStyle='#51C6BA';
	tohid.font='36px Helvetica';
	tohid.textAlign='center';
	tohid.fillText(count+'%',w*.5,h*.5+2,w);
	tohid.beginPath();
	tohid.arc(85,85,80,st,sum/10+st,false);
	tohid.stroke();
	if(count >= 80){
		clearTimeout(sm);
		
	}
	count++;
}
var sm=setInterval(progresssim,60);













/*wow initialite*/
new WOW().init();

/*navbar fixed*/
$(document).ready(function(){
	$(function () {
		var shrinkHeader = 20;
		$(window).scroll(function () {
			var scroll = getCurrentScroll();
			if (scroll >= shrinkHeader) {
				$('.navbar').addClass('shrink');
			} else {
				$('.navbar').removeClass('shrink');
			}
			});
	
		function getCurrentScroll() {
			return window.pageYOffset || document.documentElement.scrollTop;
		}
	});

			
/*search icon click fuction*/
$('#search_icon').click(function() {
	$('.search_menu').toggleClass('main');
});

/*circle progress my_canvas3*/

var c = document.getElementById('my_canvas3').getContext('2d');
var a = 0;
var end = 4.72;
var ct = c.canvas.width;
var cd = c.canvas.height; 
var dif;
function progresssim(){
	dif = ((a / 100) * Math.PI*2*10).toFixed(2);
	c.clearRect(0, 0, ct, cd);
	c.lineWidth = 5;
	c.fillStyle = '#EF6578';
	c.strokeStyle = '#EF6578';
	c.textAlign = 'center';
	c.font='36px Helvetica bolder';
	c.fillText(a+'%', ct*.5, cd*.5+2, cd);
	c.beginPath();
	c.arc(85, 85, 80, end, dif/10+end, false);
	c.stroke();
	if(a >= 68){
		clearTimeout(as);
	    // Add scripting here that will run when progress completes
	}
	a++;
}
var as = setInterval(progresssim,60);
		
			
/*counting up*/			
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
	
});	



