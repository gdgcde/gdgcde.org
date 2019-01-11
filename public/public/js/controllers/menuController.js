angular.module("menu").controller("menuController", function ($http, $state,menuAPI,$scope) {




console.log('menuController');




$scope.menus = [];


var cargarMenus = function cargarMenus() {



		menuAPI.getMenus().then(function (response){


			console.log(response);
			$scope.menus = response.data;
			console.log("status:" + response.status);

console.log("Datos:" + response.data);


		}).catch(function(response) {
		  console.error('Error occurred:', response.status, response.data);
		}).finally(function() {
			 console.log("Task Finished.");
		});

		
	};



	var gestionarError = function gestionarError(error, status) {
		var msj = "";
		for (var i = 0; i < error.fieldErrors.length; i++) {

			msj += "Registro de: " + error.fieldErrors[i].resource + ", ";

			msj += "Campo: " + error.fieldErrors[i].field + ", ";

			msj += "Tipo de error: " + error.fieldErrors[i].code + ", </br> ";

			msj += "Detalle mensaje: " + error.fieldErrors[i].message;
		}

		Command: toastr["error"](msj, "ERROR: " + error.code + ", " + error.message);
	};



//cargarMenus();


});