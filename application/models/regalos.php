<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regalos extends CI_Model {
	function __construct() {
        parent::__construct();
    }

    function disponibles($invitado){
    	$consulta = $this->db->get_where('regalos', array('estado' => 0));

    	$cadena="";

    	foreach ($consulta->result_array() as $fila) {
	    	foreach ($consulta->result_array() as $fila) {
	    		$cadena.='<div class="regalo">
									<img class="cosa" src="'.base_url().'regalos/'.$fila['link'].'" alt="">
									<div class="descripcion"><span class="titulo">'.$fila['regalo'].'</span><span>Una prueba mas</span></div>
									<div class="boton"><input type="button" id="regalar" class="btn btn-large btn-primary" value="Elegir" onclick="regalar('.$invitado.','.$fila['id'].')"></div>
								</div>';
	    	}
    	}
    	return $cadena;
    }

    function elegidos($invitado){
    	$consulta = $this->db->get_where('regalos', array('estado' => 1));

    	$cadena="";

    	foreach ($consulta->result_array() as $fila) {
    		if($fila['quien']!==$invitado){
    			$cadena.='<div class="regalo">
								<img class="cosa" src="'.base_url().'regalos/'.$fila['link'].'" alt="">
								<div class="descripcion"><span class="titulo">'.$fila['regalo'].' ('.$fila['quien'].')</div>
							</div>';
    		}
    	}
    	return $cadena;
    }

    function elegiste($invitado){
    	$consulta = $this->db->get_where('regalos', array('quien' => $invitado));

    	$cadena="";

    	foreach ($consulta->result_array() as $fila) {
    		$cadena.='<div class="regalado">
								<img class="cosa" src="'.base_url().'regalos/'.$fila['link'].'" alt="">
								<div class="descripcion"><span class="titulo">'.$fila['regalo'].'</div>
							</div>';
    	}
    	if($cadena!=""){
    		return $cadena;
    	}
    	
    }

    function regalar($invitado,$regalo){
    	$data = array(
               'quien' => $invitado,
               'estado'=> 1
            );
        $this->db->where('id',$regalo);
        $this->db->update('regalos', $data);

        if ($this->db->affected_rows() >= 0)
		{
			return TRUE;
		}
		
		return FALSE;          
    }

	

}

/* End of file regalos.php */
/* Location: ./application/models/regalos.php */