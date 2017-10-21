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
  // public function comparativa()
  // {
  //   echo "entre";
  //   $productos = $this->model->getProductos();
  //   $marcas = $this->marcasModel->getMarcas();
  //
  //   for ($i=0; $i < count($productos); $i++) {
  //     $id_marca = $productos[$i]['id_marca'];// puede ser 1, 2, 3, etc son los id que envio con el formulario
  //     $j=0;
  //     while (( $j < count($marcas) && (!(isset($productos[$i]['marca']))) ) ) {
  //       if ($id_marca == $marcas[$j]['id']) {
  //         $productos[$i]['marca'] = $marcas[$j]['nombre'];
  //       }
  //       $j++;
  //     }
  //   }
  //   $usuario = false;
  //   if (isset($_SESSION['usuario'])) { // pregunto si tengo un usuario
  //     $usuario = true;
  //   }
  //   echo "$usuario";
  //   $this->view->mostrarProductos($productos, $marcas, $usuario);
  // }
  /*FUNCION PARA AGREGAR UNA MARCA A LA TABLA*/
   public function agregarMarca(){
     if (isset($_POST['marca']) && !empty($_POST['marca'])){
        $marca=$_POST['marca'];
        $this->marcasModel->addmarca($marca);
        $this->comparativa();
      }else{
        $this->view->errorCrear("Campo incompleto");
        $this->comparativa();
        }
    }
   /*FUNCION Q BORRA MARCA*/
     public function destroyMarca(){
       $id = $_POST['id_marca'];
       $this->marcasModel->deleteMarca($id);
       $this->comparativa();
     }
   /*FUNCION QUE INICIA LA EDICION DE UNA MARCA*/
   public function comienzoEditMarca()
   {
     $id=$_POST['id_marca'];
     $marcas=$this->marcasModel->getMarca($id);
     $this->view->mostrarEditMarca($marcas);
   }
   /*FUNCION Q NOS MUETRA YA LA EDICION REALIZADA*/
   public function editarMarca()
   {
     $id=$_POST['id_marca'];
     $nombre=$_POST['nombre'];
     $this->marcasModel->editMarca($id,$nombre);
     $this->comparativa();
   }


}

 ?>
