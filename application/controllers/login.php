<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller {

	  function __construct() {
        parent::__construct();
		$this->load->library('form_validation');		
		$this->load->helper(array('form','url'));
		$this->load->library('session');
	}	
	
	function index(){
		$this->login();
	}


	function login()
	{
		if(!isset($_POST['codigo'])){	//	Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa.	
			$this->load->view('inicio');		//	Por lo tanto le presentamos la pantalla del formulario de ingreso.
		}
		else{								//	Si el usuario ya pasó por la pantalla inicial y presionó el botón "Ingresar"
												//	Si ambos campos fueron correctamente rellanados por el usuario,
				$this->load->model('invitados_model');
				$ExisteUsuarioyPassoword=$this->invitados_model->ValidarUsuario($_POST['codigo']);	//	comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
				if($ExisteUsuarioyPassoword){	// La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.
					
					$datos_usuario=array(

						'clave'=> $_POST['codigo']

						);

					$this->session->set_userdata($datos_usuario);

					redirect(base_url().'invitados/elegir');	//	Si el usuario ingresó datos de acceso válido, imprimos un mensaje de validación exitosa en pantalla
				}
				else{	//	Si no logró validar
					$this->load->view('inicio');	//	Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
				}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}
}
?>