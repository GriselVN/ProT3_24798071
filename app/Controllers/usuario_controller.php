<?php
namespace App\Controllers;
Use App\Models\Usuario_Model;
Use CodeIgniter\Controller;

class usuario_controller extends Controller{

    public function __construct() {
        helper(['form', 'url']);
    }

    public function create() {

        $dato['titulo']='Registrar';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('back/usuario/registrar');
        echo view('front/footer_view');
    }
    
  public function formValidation() {

    $input = $this->validate([
         'nombre' => 'required|min_length[3]',
         'apellido'=> 'required|min_length[3]|max_length[25]',
         'usuario' => 'required|min_length[3]',
         'email'  =>  'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
         'password'   =>  'required|min_length[3]|max_length[10]'],);

         
     $formModel = new Usuario_Model();

     if (!$input) {
        $data['titulo']='Registrar';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registrar', ['validation' => $this->validator]);
        echo view('front/footer_view');

     } else {
        $formModel->save([
            'nombre' => $this->request->getVar('nombre'),
            'apellido'=> $this->request->getVar('apellido'),
            'usuario' => $this->request->getVar('usuario'),
            'email'  =>  $this->request->getvar('email'),    
            'password'   =>  password_hash ($this->request->getVar('password'), PASSWORD_DEFAULT)

        ]);

        session()->setFlashdata('success', 'Usuario registrado con éxito');
        return $this->response->redirect('registrar');

     }

    }
}
