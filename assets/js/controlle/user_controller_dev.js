var app = angular.module('crudApp', ['datatables']);
app.controller('crudController', function($scope, $http,$location){

	$scope.success = false;
	$scope.first_name = '';
	$scope.last_name = '';
	$scope.successMessage = '';
	$scope.idDelet = '';
	$scope.urlServidor = $location.host();

	$scope.error = false;

	/*$scope.fetchData = function(){
		$http.get('fetch_data.php').success(function(data){
			$scope.namesData = data;
			
			echo json_encode($data);
		});
	};*/
	
	$scope.fetchData = function(){	
		$http({ method:"POST", url:"usuario", data:{}
		}).success(function(data){
			$scope.namesData = data;
		});
	};

	$scope.openModal = function(){
		var modal_popup = angular.element('#crudmodal');
		modal_popup.modal('show');
	};

	$scope.closeModal = function(){
		var modal_popup = angular.element('#crudmodal');
		modal_popup.modal('hide');
	};

	$scope.closeModalDelet = function(){
		var modal_popup_delet = angular.element('#openModalConfirm');
		modal_popup_delet.modal('hide');
	};

	$scope.addData = function(){
		$scope.first_name = '';
		$scope.last_name = '';
		$scope.modalTitle = 'Add Data';
		$scope.submit_button = 'Insert';
		$scope.openModal();
	};

	$scope.submitForm = function(){
		$http({
			method:"POST",
			url:"usuario/insertUpdate",
			data:{'first_name':$scope.first_name, 'last_name':$scope.last_name, 'action':$scope.submit_button, 'id':$scope.hidden_id}
		}).success(function(data){
			if(data.error != '')
			{
				$scope.success = false;
				$scope.error = true;
				$scope.errorMessage = data.error;
			}
			else
			{
				$scope.success = true;
				$scope.error = false;
				$scope.successMessage = data.message;
				$scope.form_data = {};
				$scope.closeModal();
				$scope.fetchData();
			}
		});
	};

	$scope.fetchSingleData = function(id){
		$http({
			method:"POST",
			url:"usuario/selectUsuarioById",
			data:{'id':id, 'action':'fetch_single_data'}
		}).success(function(data){
			$scope.first_name = data.first_name;
			$scope.last_name = data.last_name;
			$scope.hidden_id = id;
			$scope.modalTitle = 'Editar Dados';
			$scope.submit_button = 'Edit';
			$scope.openModal();
		});
	};

	$scope.deleteDados = function(){
		//if(confirm("Deseja deletar o item selecionado?"))
		$http({
			method:"POST",
			url:"usuario/deletById",
			data:{'id':$scope.idDelet, 'action':'Delete'}
		}).success(function(data){
			$scope.success = true;
			$scope.error = false;
			$scope.successMessage = data.message;
			$scope.closeModalDelet();
			$scope.fetchData();
		});	
	};

	$scope.openModalConfirm = function(id){
		$scope.idDelet = id;
		var modal_popup = angular.element('#openModalConfirm');
		modal_popup.modal('show');
	};

});