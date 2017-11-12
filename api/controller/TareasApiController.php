<?php

require_once('../model/ComentariosModel.php');
require_once('Api.php');
/**
 *
 */
class TareasApiController extends Api
{
  protected $model;

  function __construct()
  {
      parent::__construct();
      $this->model = new ComentariosModel();
  }

  public function getComents($url_params = [])
  {
      $comentarios = $this->model->getComentarios();
      $response = new stdClass();
      $response->tareas = [$comentarios];
      $response->status = 200;
      return $this->json_response($comentarios, 200);
  }

  public function deleteTareas($url_params = [])
  {
      $id_comentario = $url_params[":id"];
      $coments = $this->model->getComentario($id_comentario);
      if($coments)
      {
        $this->model->borrarComentario($id_comentario);
        return $this->json_response("Borrado exitoso.", 200);
      }
      else
        return $this->json_response(false, 404);
  }

  public function createComentario($url_params = []) {
    $body = json_decode($this->raw_data);
    $comentario = $body->comentario;
    $valoracioncion = $body->valoracion;
    $id_producto = $body->id_producto;
    $Coments = $this->model->guardarComentario($comentario,$valoracioncion,$id_producto);
    return $this->json_response($Coments, 200);
  }
  public function getComent($url_params = [])
  {
    $id=$url_params[":id"];
    $Coments = $this->model->getComentario($id);
    return $this->json_response($Coments, 200);
  }
  public function getComentsdeUnProducto($url_params = [])
  {
    $id_producto=$url_params[":id"];
    $Coments = $this->model->getComentariosdeUnProducto($id_producto);

    return $this->json_response($Coments, 200);
  }

  public function editComentario($url_params = []) {
    $body = json_decode($this->raw_data);
    $id = $url_params[":id"];
    $comentario = $body->comentario;
    $valoracioncion = $body->valoracion;
    $coments = $this->model->modificarComentario($id, $comentario,$valoracioncion);
    return $this->json_response($coments, 200);
  }

}

 ?>
