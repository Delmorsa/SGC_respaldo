<?php
/**
 * Created by Cesar Mejía.
 * User: Sistemas
 * Date: 22/4/2019 15:11 2019
 * FileName: Usuarios_controller.php
 */
class Usuarios_controller extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Usuarios_model");
		$this->load->library("session");
		if ($this->session->userdata("logged") != 1) {
			redirect(base_url() . 'index.php', 'refresh');
		}
	}

	public function index(){
		$data["roles"] = $this->Usuarios_model->mostrarRoles();
		$this->load->view('header/header');
		$this->load->view('header/menu');
		$this->load->view('usuarios/roles',$data);
		$this->load->view('footer/footer');
		$this->load->view('jsview/usuarios/jsRoles');
	}

	public function perfil(){
		$this->load->view('header/header');
		$this->load->view('header/menu');
		$this->load->view('usuarios/perfil');
		$this->load->view('footer/footer');
		//$this->load->view('jsview/usuarios/jsRoles');
	}

	public function guardarRol(){
		$rol = $this->input->get_post("rol");
		$desc = $this->input->get_post("desc");
		$this->Usuarios_model->guardarRol($rol,$desc);
	}

	public function actualizarRol(){
		$idrol = $this->input->get_post("idrol");
		$rol = $this->input->get_post("rol");
		$desc = $this->input->get_post("desc");
		$this->Usuarios_model->actualizarRol($idrol,$rol,$desc);
	}

	public function modificarEstadoRol(){
		$idrol = $this->input->get_post("idrol");
		$estado = $this->input->get_post("estado");
		if($estado == 1){
			$estado = 0;
			$fechabaja = gmdate(date("Y-m-d H:i:s"));
		}else{
			$estado = 1;
			$fechabaja = NULL;
		}
		$this->Usuarios_model->modificarEstadoRol($idrol, $estado, $fechabaja);
	}

	public function usuarios(){
		$data["roles"] = $this->Usuarios_model->mostrarRoles();
		$data["usuarios"] = $this->Usuarios_model->mostrarUsuarios();
		$this->load->view('header/header');
		$this->load->view('header/menu');
		$this->load->view('usuarios/usuarios',$data);
		$this->load->view('footer/footer');
		$this->load->view('jsview/usuarios/jsUsuarios');
	}

	public function guardarUsuario(){
		$idrol = $this->input->get_post("idrol");
		$usuario = $this->input->get_post("usuario");
		$nombre = $this->input->get_post("nombre");
		$apellido = $this->input->get_post("apellido");
		$sexo = $this->input->get_post("sexo");
		$password = $this->input->get_post("password");
		$correo = $this->input->get_post("correo");
		$this->Usuarios_model->guardarUsuario($idrol, $usuario, $nombre, $apellido, $sexo, $password, $correo);
	}

    public function actualizarUsuario(){
		$idUsuario = $this->input->get_post("");
		$idrol = $this->input->get_post("idrol");
		$usuario = $this->input->get_post("usuario");
		$nombre = $this->input->get_post("nombre");
		$apellido = $this->input->get_post("apellido");
		$sexo = $this->input->get_post("sexo");
		$correo = $this->input->get_post("correo");
		$this->Usuaios_model->actualizarUsuario($idUsuario,$idrol, $usuario, $nombre, $apellido, $sexo, $correo);
    }
}
?>

