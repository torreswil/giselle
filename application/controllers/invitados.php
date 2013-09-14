<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invitados extends CI_Controller {

	 function __construct() {
        parent::__construct();
		$this->load->library('form_validation');		
		$this->load->helper(array('form','url'));
		$this->load->library('session');
		$this->load->model('invitados_model');
		$this->load->model('regalos');

	}

	public function index()
	{
		$this->load->view('inicio');	
	}

	public function elegir()
	{
			if($this->session->userdata('clave')){
			$fila=$this->invitados_model->ValidarUsuario($this->session->userdata('clave'));
			$this->data['invitado'] = $this->invitados_model->ValidarUsuario($this->session->userdata('clave'));

			$this->data['elegidos']= $this->regalos->elegidos($fila->id);
	       	$this->load->view('invitados', $this->data); 
       }

       else{
       	redirect(base_url());
       }
	}

	public function regalos_disponibles(){
		$invitado = $this->input->get('invitado');
		echo $this->regalos->disponibles($invitado);
	}

	public function regalos_elegidos(){
		$invitado = $this->input->get('invitado');
		echo $this->regalos->elegidos($invitado);
	}

	public function elegiste(){
		$invitado = $this->input->get('invitado');
		$regalos = $this->regalos->elegiste($invitado);
		echo '<div class="row-fluid">
				
			<div class="span12 nombres">
				<section class="cuadro">
					<div id="elegiste" class="row-fluid">';

					if($this->regalos->elegiste($invitado)){
							echo'<h2 class="amor">Tu has elegido..</h2>
						<hr>'.
						$this->regalos->elegiste($invitado);
						}
						else{
						echo '<h2 class="amor">Aun no has elegido tu regalo!</h2>
						<hr>';
						}
						echo '
					</div>
				</section>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
					<section class="cuadro">
						<h2 class="amor">Estas son las cositas que puedes elegir para obsequiarme...</h2><hr>
						<div id="regalos" class="row-fluid">
							'.$this->regalos->disponibles($invitado).'
						</div>
					</section>
			</div>
			
			<div class="span6">
					<section class="cuadro">
						<h2 class="amor">...Y estas son las cosas que otras personas ya eligierón</h2><hr>
						<div id="cargador-elegido"><img src="<?php echo base_url()?>img/loading.gif" alt=""></div>
						<div id="elegidos" class="row-fluid">
							'.$this->regalos->elegidos($invitado).'
						</div>
					</section>
			</div>
		</div>';

	}

	public function regalar(){
		$invitado = $this->input->get('invitado');
		$regalo = $this->input->get('regalo');
		echo $this->regalos->regalar($invitado,$regalo);
	}

}

/* End of file invitados.php */
/* Location: ./application/controllers/invitados.php */