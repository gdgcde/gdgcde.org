

angular.module('menu').directive('slider', slider);
    	  
    	  slider.$inject = ['$document']
    	  
    	  function slider($document) {
    	    var directive = {
    	      restrict: 'AC', //Apply the directive through Class or Attribute
    	      scope: {
    	        images: '='
    	      },
    	      template: '<ul class="slides">'
    	        + '<li data-ng-repeat="img in images">'
    	          + '<img data-ng-src="{{img.image}}">'
    	          + '<div class="caption left-align">'
    	           + '<h3>{{img.name}}</h3>'
    	           + '<h5 class="light grey-text text-lighten-3">{{img.route}}</h5>'
    	          + '</div>'
    	        + '</li>'
    	      + '</ul>'
    	      , 
  		    link: function($scope){ 
  		     var unwatch = $scope.$watchCollection('images', function(newVal, oldVal){ 
  		     // or $watchCollection if students is an array 
  		     if (newVal) { 
  		    	console.log("OK",$scope.sliders);
  		      init(); 
  		      // remove the watcher 
  		      unwatch(); 
  		     }else{
  		    	 console.log("Undefined",$scope.sliders);
  		     } 
  		     }); 

  		     function init(){ 
  		    	$('.slider').slider();
  		     } 
  		    }
    	    };
    	    
    	    return directive;
    	    
    	   /* function linkFunc(scope, elem, attr) {
    	      $document.ready(function(){
    	        elem.slider({
    	          full_width: false,
    	          indicators: true,
    	          transition: 1500,
    	          interval: 8000
    	        });
    	      });
    	    }*/
    	  }
    	  
    	  
    	  
    	  
    	  