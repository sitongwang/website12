



window.onload = function() {
	
	
	document.addEventListener( 'scroll', respondToScroll );

    // startTimer();
}


function respondToScroll() {
	var scrolly = window.scrollY;

	console.log(scrolly);

    if (scrolly>1200) {

       var box1 = document.querySelector('.pricing-item');
       box1.setAttribute("id", "transition-pricing");

   }

   // if (scrolly>350) {

   //     var rect2 = document.querySelector('.rect2');
   //     rect2.setAttribute("id", "transition-rect2");

   // }

   // if (scrolly>350) {

   //     var rect3 = document.querySelector('.rect3');
   //     rect3.setAttribute("id", "transition-rect3");

   // }


   // if (scrolly>800) {

   //     var slider = document.querySelector('.box');
   //     slider.setAttribute("id", "transition-box");

   // }

   // if (scrolly>1200) {

   //     var photo3 = document.querySelector('.photo3');
   //     photo3.setAttribute("id", "transition-photo3");

   //     var photo3text = document.querySelector('.photo3text');
   //     photo3text.setAttribute("id", "transition-photo3text");


   // }


   // if (scrolly>1500) {

   //     var photo4 = document.querySelector('.photo4');
   //     photo4.setAttribute("id", "transition-photo4");

   //     var photo4text = document.querySelector('.photo4text');
   //     photo4text.setAttribute("id", "transition-photo4text");

   // }

}