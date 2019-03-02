angular.module("menu").factory("sliderAPI", function ($http, config) {

	var _getSliders = function _getSliders() {

return $http({
            method: 'GET',
            url: config.baseUrl + "/sliders"
         });


	};

	return {

		getSliders: _getSliders

	};
});