<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');


	class Usuarios extends CI_Controller{

			public function __construct(){

				parent::__construct();

				/*
				 * Definiar se ha sessao valida

				 /*


				 /*
				 * Definiar se e adim.

				 */
			}	


			public function index(){

				$data = array(

					'titulo' => 'Usuarios cadastrados',
					'styles' => array(
						'assets/bundles/datatables/datatables.min.css',
						'assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css',
					),
					
					'scripts' => array(
						'assets/bundles/datatables/datatables.min.js',
						'assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js',
						'assets/bundles/jquery-ui/jquery-ui.min.js',
						'assets/js/page/datatables.js',
						

					),

					'usuarios' => $this->ion_auth->users()->result(),
				);



			}




			public function core($usuario_id=null){
				$usuario_id=(int) $usuario_id;

				if (!$usuario_id) {
					/*
					*  Cadastrar o novo usuario
					*/

					exit('usuario novo');
			}else{

				/*
				*Veriicamos se o usuario ID Existe
				*/

				if (!$usuario= $this->ion_auth->user($usuario_id)->row()) {
					exit('usuario nao encontrado');
				}else{


					$data= array(
						'titulo' => 'Editar Usuario',
						'usuario' => $usuario
					);

				//	echo'<pre>';
				//	print_r($data);
				//	exit();
				



				$this->load->view('restrita/layout/header', $data);
				$this->load->view('restrita/usuarios/core');
				$this->load->view('restrita/layout/footer');



				}


			}

	}

}