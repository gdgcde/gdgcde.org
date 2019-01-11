angular.module("menu").controller("sliderController", function ($http, $state,sliderAPI,$scope) {

console.log('sliderController');


var cargarSliders = function cargarSliders() {



	sliderAPI.getSliders().then(function (response){


		console.log(response);
		$scope.sliders = response.data;
		
		var nombre=$scope.sliders[0].name;
		console.log("status:" + response.status);

console.log("Datos:" +nombre );


	}).catch(function(response) {
	  console.error('Error occurred:', response.status, response.data);
	}).finally(function() {
		 console.log("Task Finished.");
	});

	
};


cargarSliders();



/*$('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
    autoplay: true
  });




autoplay()   
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 6000);
}

$('.materialboxed').materialbox();*/


$('.slider').slider();


});