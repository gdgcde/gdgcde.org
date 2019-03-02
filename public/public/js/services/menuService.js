angular.module("menu").factory("menuAPI", function ($http, config) {

	delete $http.defaults.headers.common['X-Requested-With'];

	var _getMenus = function _getMenus() {

		


return $http({
            method: 'GET',
            url: config.baseUrl + "/menus",
            dataType: 'jsonp'
         });


	};

	

	return {

		getMenus: _getMenus

	};
});