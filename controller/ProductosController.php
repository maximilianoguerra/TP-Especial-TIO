<?php
include_once('model/ProductosModel.php');
include_once('model/MarcasModel.php');
include_once('view/ProductosView.php');

class ProductosController extends SecuredController
{
  function __construct()
  {
    parent::__construct();
    $this->view = new ProductosView();
    $this->model = new ProductosModel();
    $this->marcasModel = new MarcasModel();
  }
  /*FUNCION PARA MOSTRAR INDEX DE LA PAGINA*/
  public function index()
  {
    $usuario = null;
    if (isset($_SESSION['usuario'])) { // pregunto si tengo un usuario
      $usuario = $_SESSION['usuario'];
    }

    $this->view->mostrarIndex($usuario);
  }
    /*FUNCION PARA MOSTRAR  NVIDIA*/
  public function nvidia()
  {
    $this->view->mostrarNvidia();
  }
      /*FUNCION PARA MOSTRAR  ATI*/
  public function Ati()
  {
    $this->view->mostrarAti();
  }
  /*FUNCION PARA MOSTRAR  COMPARATIVA*/
  public function comparativa()
  {
   $productos = $this->model->getProductos();
   $marcas = $this->marcasModel->getMarcas();

   for ($i=0; $i < count($productos); $i++) {
      $id_marca = $productos[$i]['id_marca'];// puede ser 1, 2, 3, etc son los id que envio con el formulario
      $j=0;
      while (( $j < count($marcas) && (!(isset($productos[$i]['marca']))) ) ) {
        if ($id_marca == $marcas[$j]['id']) {
          $productos[$i]['marca'] = $marcas[$j]['nombre'];
        }
        $j++;
      }
    }
    $usuario = false;
    if (isset($_SESSION['usuario'])) { // pregunto si tengo un usuario
      $usuario = true;
    }
    $this->view->mostrarProductos($productos, $marcas, $usuario);
  }
  public function create()
  {
    $this->view->mostrarCrearProductos();
  }

  /*FUNCION PARA GUARDAR PRODUCTOS*/
   public function store()
    {
      $productos = $this->model->getProductos();
      $marcas = $this->marcasModel->getMarcas();
      $id_marca = $_POST['id_marca'];
      $modelo = $_POST['modelo'];
      $memoria = $_POST['memoria'];
      $banda = $_POST['banda'];
      $consumo = $_POST['consumo'];

      if((isset($_POST['modelo']) && !empty($_POST['modelo'])) &&
      (isset($_POST['memoria']) && !empty($_POST['memoria'])) &&
      (isset($_POST['banda']) && !empty($_POST['banda'])) &&
      (isset($_POST['consumo']) && !empty($_POST['consumo'])))
      {
        $this->model->guardarProducto($id_marca,$modelo,$memoria,$banda,$consumo);
        $this->comparativa();
      }
      else{
        $this->view->errorCrear("Todos los campos son requeridos");
        $this->comparativa();
      }
    }
    /*FUNCION PARA ELIMINAR UN PRODUCTO*/
      public function destroy()
      {
         if (isset($_POST['id_producto'])) {

            $id = $_POST['id_producto'];
            $this->model->borrarProducto($id);
            $this->comparativa();
         }
      }
      /*FUNCION PARA REALIZAR FILTROS POR MARCA*/
        public function filtro()
        {

          $id_marca = $_POST['id_marca'];
          $productos = $this->model->getFiltro($id_marca);
          $marcas = $this->marcasModel->getMarcas();

          for ($i=0; $i < count($productos); $i++) {
          $id_marca = $productos[$i]['id_marca'];// puede ser 1, 2, 3, etc son los id que envio con el formulario
          $j=0;
          while (( $j < count($marcas) && (!(isset($productos[$i]['marca']))) ) ) {
            if ($id_marca == $marcas[$j]['id']) {
              $productos[$i]['marca'] = $marcas[$j]['nombre'];
            }
            $j++;
          }
        }
        $usuario = false;
          if (isset($_SESSION['usuario'])) { // pregunto si tengo un usuario
            $usuario = true;
          }

          $this->view->mostrarProductos($productos, $marcas, $usuario);
      }
      /*FUNCION PARA INICIAR LA EDICION DE LAS CARACTERISTICAS DEL PRODUCTO*/
        public function edit()
        {
           if (isset($_POST['id_producto'])) {

              $id = $_POST['id_producto'];
              $productos=$this->model->getProducto($id);
              $this->view->mostraredit($productos);
           }
        }
        /*FUNCION QUE REALIZA LA EDICION DE LAS CARACTERISTICAS DEL PRODUCTO*/
        public function editar()
        {
          $id = $_POST['id_producto'];
          $modelo = $_POST['modelo'];
          $memoria = $_POST['memoria'];
          $banda = $_POST['banda'];
          $consumo = $_POST['consumo'];

          $this->model->editarProducto($modelo,$memoria,$banda,$consumo,$id);
          $this->comparativa();
          }
          /*FUNCION PARA AGREGAR UNA MARCA A LA TABLA*/
        public function agregarMarca(){
          if (isset($_POST['marca']) && !empty($_POST['marca'])){
          $marca=$_POST['marca'];
          $this->model->addmarca($marca);
          $this->comparativa();
        }else{
          $this->view->errorCrear("Campo incompleto");
          $this->comparativa();
        }
          }
        /*FUNCION PARA ELIMINAR UNA MARCA DE LA TABLA*/
        public function destroyMarca(){
          $id = $_POST['id_marca'];
          $this->model->deleteMarca($id);
          $this->comparativa();
        }
        /*FUNCION PARA INICIAR LA EDICION DEL NOMBRE DE LA MARCA*/
        public function comienzoEditMarca()
        {
          $id=$_POST['id_marca'];
          $marcas=$this->model->getMarca($id);
          $this->view->mostrarEditMarca($marcas);
        }
        /*FUNCION PARA REALIZAR LA EDICION DE LAS CARACTERISTICAS DEL PRODUCTO*/
        public function editarMarca()
        {
          $id=$_POST['id_marca'];
          $nombre=$_POST['nombre'];
          echo $id;
          echo $nombre;
          $this->model->editMarca($id,$nombre);
          $this->comparativa();
        }
        function traemeElbody(){
            $this->view->seeBody();
        }

        }

        ?>
