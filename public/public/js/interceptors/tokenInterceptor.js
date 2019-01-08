"use strict";

/**
 * 
 */

angular.module("menu").factory("tokenInterceptor", function ($q, $injector) {

	var contador = 0;
	//	Configuración de mensajes de Toastr
	toastr.options = {
		"closeButton": true,
		"debug": false,
		"newestOnTop": true,
		"progressBar": true,
		"positionClass": "toast-top-right",
		"preventDuplicates": false,
		"onclick": null,
		"showDuration": "3000",
		"hideDuration": "10000",
		"timeOut": "90000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	};

	return {

		'request': function request(config) {

			//console.log(localStorage.getItem("userToken"));

			var producto = config.url;

			var enviopedido = config.url;

			producto = producto.indexOf("/producto");
			enviopedido = enviopedido.indexOf("/enviopedido");

			//Cuando no encuentra ninguna coincidencia con la url producto... que si esta habilitado
			if (producto == -1 && enviopedido == -1) {
				//				console.log("Ingrese en app token");
				config.headers.Authorization = 'Bearer ' + localStorage.getItem("userToken");
			}

			return config;
		},

		'responseError': function responseError(rejection) {

			if (rejection.status == 500) {

				//$injector.get('$state').transitionTo('logins');

				//$injector.get('$state').transitionTo('logins', { 
				//   reload: true, inherit: false, notify: false 
				//  });
				Command: toastr["error"]("Error interno del Servidor", "Error");

				//$injector.get('$state').go($state.current, {}, {reload: true});


				$injector.get('$state').go('login');

				//$injector.get('$state').reload();
				//	$location.path("/login");
			}

			if (rejection.status == 401) {

				Command: toastr["warning"]("Seña ha expirado, vuelva a iniciar sesión", "Precaución");

				setTimeout(function () {
					$injector.get('$state').go('login');
				}, 5000);
			}

			return rejection;
		}

	};
});