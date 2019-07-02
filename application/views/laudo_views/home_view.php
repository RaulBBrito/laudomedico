<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body ng-app="crudApp" ng-controller="crudController">
		
		<div class="container" ng-init="fetchData()">
			<br />
				<h3 align="center">Prototipo Cadastro Usuario (Angular + PHP "CodeIgniter")</h3>
			<br />
			<div class="alert alert-success alert-dismissible" ng-show="success" >
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				{{successMessage}}
			</div>
			<div align="right">
				<button type="button" name="add_button" ng-click="addData()" class="btn btn-success">+ Adicionar</button>
			</div>
			<br />
			<div class="table-responsive" style="overflow-x: unset;">
				<table datatable="ng" dt-options="vm.dtOptions" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="45%">Nome</th>
							<th width="45%">Sobrenome</th>
							<th style="text-align: center;">Ações</th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="name in namesData">
							<td>{{name.first_name}}</td>
							<td>{{name.last_name}}</td>
							<td style="text-align: center;">
							<span ng-click="fetchSingleData(name.id)"><i class="fas fa-edit  fa-1x btn btn-warning"></i></span>
							<span style="color: #d9534f;" ng-click="openModalConfirm(name.id)"><i class="fas fa-trash-alt  fa-1x btn btn-danger"></i></span></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>



