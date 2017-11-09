<?php
include_once('model/ProductosModel.php');
include_once('model/MarcasModel.php');
include_once('view/ProductosView.php');
class MarcasController extends SecuredController
{


  function __construct()
  {
    parent::__construct();
    $this->view = new ProductosView();
    $this->model = new ProductosModel();//nueva linea
    $this->marcasModel = new MarcasModel();
  }

  public function index()
  {
    $marcas = $this->model->getMarcas();
    $this->view->mostrarMarcas($marcas);
  }

   public function agregarMarca(){
     if (isset($_SESSION['usuario'])) {
       if (isset($_POST['marca']) && !empty($_POST['marca'])){
          $marca=$_POST['marca'];
          $this->marcasModel->addmarca($marca);
          $this->comparativa();
        }else{
          $this->view->errorCrear("Campo incompleto");
          $this->comparativa();
          }
      }
    }
   /*FUNCION Q BORRA MARCA*/
     public function destroyMarca(){
       if (isset($_SESSION['usuario'])) {
           $id = $_POST['id_marca'];
           $this->marcasModel->deleteMarca($id);
           $this->comparativa();
        }
     }
   /*FUNCION QUE INICIA LA EDICION DE UNA MARCA*/
   public function comienzoEditMarca()
   {
     if (isset($_SESSION['usuario'])) {
         $id=$_POST['id_marca'];
         $marcas=$this->marcasModel->getMarca($id);
         $this->view->mostrarEditMarca($marcas);
    }
   }
   /*FUNCION Q NOS MUETRA YA LA EDICION REALIZADA*/
   public function editarMarca()
   {
     if (isset($_SESSION['usuario'])) {
         $id=$_POST['id_marca'];
         $nombre=$_POST['nombre'];
         $this->marcasModel->editMarca($id,$nombre);
         $this->comparativa();
      }
   }


}

 ?>
