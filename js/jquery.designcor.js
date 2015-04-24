var projects;
var i;
var prjct_imgs;
var easing;

$(document).ready(function(){

	prjct_imgs = $('.span-two-thirds .images').css({opacity : 1});
	easing = 'easeOutQuart';		
		
	$('.project').hover(function(){
		$(this).addClass('hover');
	}, function(){
		$(this).removeClass('hover');
	});
	
	//cycles for each project
	$('.row .span-two-thirds .images').each(function(){
		var next = '#' + $(this).parent().parent().parent().attr('id') + ' .next';
		var prev = '#' + $(this).parent().parent().parent().attr('id') + ' .prev';
		var pager = '#' + $(this).parent().parent().parent().attr('id') + ' .pager';
		
		$(this).cycle({
			fx: 'scrollHorz',
			timeout: 0,
			next: next,
			prev: prev,
			easing: 'easeOutQuint',
			pager: pager,
			pagerAnchorBuilder: function(idx, slide) {
				return '<a href="#">&bull;</a>';
			}
		});
	});
	
	projects = $('#projects .project');
	i = 1;
	
	$('body.term-logos #site_controls a').click(function(){
		if ($(this).attr('id') == 'down') {
			if (projects.length > i ) {
				
				$('body, html').animate({ scrollTop: i*316 });
				i++;
			}
			
			else { //if they are +1 scroll to the top and reset i to 1
					$('body, html').animate({ scrollTop: 0 });
					//reset i
					i = 1;
			}
			
		}

		else {
			$('body, html').animate({ scrollTop: '-=316' });
			if ($(window).scrollTop() != 0)
				i--;
		}
		
		return false;
	});
	
		projects = $('#projects .project');
		i = 1;
		
		$('body.term-print #site_controls a, body.term-other #site_controls a').click(function(){
			if ($(this).attr('id') == 'down') {
				if (projects.length > i ) {
					
					$('body, html').animate({ scrollTop: i*541 });
					i++;
				}
				
				else { //if they are +1 scroll to the top and reset i to 1
						$('body, html').animate({ scrollTop: 0 });
						//reset i
						i = 1;
				}
				
			}
	
			else {
				$('body, html').animate({ scrollTop: '-=541' });
				if ($(window).scrollTop() != 0)
					i--;
			}
			
			return false;
		});
});

$(window).load(function(){
	prjct_imgs.animate({ opacity : 1});
});

function increase(i) {
	return i++;
}


$(function()
{
 
$(".menu-item-8 a").click(function(event) {
event.preventDefault();
$("#contactArea").slideToggle();
});
 
$("#contactclose a").click(function(event) {
event.preventDefault();
$("#contactArea").slideUp();
});
});


(function($){
  
  $.fn.designcorSlider = function(options) {
  
    var settings = {
          pagination_class: 'pagination', // Class of the pagination ul
          next_class: 'next', // Class of the next anchor
          previous_class: 'previous', // Class of the previous anchor
          initial_slide: 0, // The index of the initial slide. Zero-indexed... i.e. 0 is the first slide, 4 is the fifth slide
          auto_start: true, // Automatically cycle through slides on page load?
          pause_between_slides: 8000, // The amount of milliseconds to wait between slides
          out_transition_time: 250, // The number of milliseconds it takes to complete for the slide down animation
          in_transition_time: 600, // The number of milliseconds it takes to complete for the slide up animation
          /* out_transition: 'easeOutBounce', // The transition to use on sliding down */
          in_transition: 'easeOutBounce' // The transition to use on sliding up
        },
        $this = this,
        intervalID;

    if (options) { 
      $.extend( settings, options );
    }
        
    var current_image = settings.initial_slide,
        init = function(){
          if (current_image !== 0) {
            $this.removeClass("initial");
            $this.eq(current_image).addClass("initial");
        
            $('.'+settings.pagination_class+' li').removeClass("active");
            $('.'+settings.pagination_class+' li').eq(current_image).addClass("active");
          }
          
          $('.'+settings.previous_class).click(previous_slide);
          $('.'+settings.next_class).click(next_slide);
          
          if (settings.auto_start) {
            intervalID = window.setInterval(next_slide, settings.pause_between_slides);
          }
      
          $('.'+settings.pagination_class+' li').each(function(index){
            $(this).click(function(event){
              event.preventDefault();
              if (intervalID) { window.clearInterval(intervalID); }
              change_slide(index);
            });
          });
          
        },
        change_slide = function(next_image){          
          $this.eq(current_image).animate({ top: '350px' }, 
            {
              duration: settings.out_transition_time,
              easing: settings.out_transition,
              complete: function(){
                if (next_image >= $this.length) { next_image = 0; }
                if (next_image <= -1) { next_image = $this.length -1; }
            
                $this.eq(next_image).animate({top:'0px'}, settings.in_transition_time, settings.in_transition);
                $('.'+settings.pagination_class+' li').eq(current_image).removeClass("active");
                $('.'+settings.pagination_class+' li').eq(next_image).addClass("active");

                current_image = next_image;              
              }
          });
        },
        previous_slide = function(event) {
          if (event) {
            event.preventDefault();
            if (intervalID) { window.clearInterval(intervalID); }
          }
          change_slide(current_image - 1);
        },
        next_slide = function(event) {
          if (event) {
            event.preventDefault();
            if (intervalID) { window.clearInterval(intervalID); }
          }
          change_slide(current_image + 1);
        };
    
    init();

  };  
})(jQuery);

var menuSlider=function(){
	var m,e,g,s,q,i; e=[]; q=8; i=8;
	return{
		init:function(j,k){
			m=document.getElementById(j); e=m.getElementsByTagName('li');
			var i,l,w,p; i=0; l=e.length;
			for(i;i<l;i++){
				var c,v; c=e[i]; v=c.value; if(v==1){s=c; w=c.offsetWidth; p=c.offsetLeft}
				c.onmouseover=function(){menuSlider.mo(this)}; c.onmouseout=function(){menuSlider.mo(s)};
			}
			g=document.getElementById(k); g.style.width=w+'px'; g.style.left=p+'px';
		},
		mo:function(d){
			clearInterval(m.tm);
			var el,ew; el=parseInt(d.offsetLeft); ew=parseInt(d.offsetWidth);
			m.tm=setInterval(function(){menuSlider.mv(el,ew)},i);
		},
		mv:function(el,ew){
			var l,w; l=parseInt(g.offsetLeft); w=parseInt(g.offsetWidth);
			if(l!=el||w!=ew){
				if(l!=el){var ld,lr,li; ld=(l>el)?-1:1; lr=Math.abs(el-l); li=(lr<q)?ld*lr:ld*q; g.style.left=(l+li)+'px'}
				if(w!=ew){var wd,wr,wi; wd=(w>ew)?-1:1; wr=Math.abs(ew-w); wi=(wr<q)?wd*wr:wd*q; g.style.width=(w+wi)+'px'}
			}else{clearInterval(m.tm)}
}};}();

window.onload = function() { menuSlider.init('menu-primary','slide'); };
