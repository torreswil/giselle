<?php
class invitados_model extends CI_Model{
	
    function __construct() {
        parent::__construct();
    }

	function ValidarUsuario($codigo){			//	Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el mail y password ingresados en pantalla de login
		$query = $this->db->where('clave',$codigo);	//	La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
		$query = $this->db->get('invitados');
		return $query->row(); 	//	Devolvemos al controlador la fila que coincide con la búsqueda. (FALSE en caso que no existir coincidencias)
	}

	function devolver_usuario($quien){
		$query=$this->db->where('id',$quien);
		$query = $this->db->get('invitados');
		return $query->row()
	}
}
?>