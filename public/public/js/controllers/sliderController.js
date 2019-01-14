angular.module("menu").controller("sliderController", function ($http, $state,sliderAPI,$scope) {

console.log('sliderController');


var cargarSliders = function cargarSliders() {

	//$scope.bandera=false;

	sliderAPI.getSliders().then(function (response){


		var vector=[];
		
		
		angular.forEach(response.data, function(slider) {
		
			  slider.image="http://localhost:8000"+slider.image;
			  
			 

			vector.push(slider);

			}); 
		
		
		
		
		$scope.sliders = vector;
		
		
		console.log("Sliders Controller in",$scope.sliders);

	}).catch(function(response) {
	  console.error('Error occurred:', response.status, response.data);
	}).finally(function() {
		 console.log("Task Finished.");
	});

	
};





cargarSliders();



});