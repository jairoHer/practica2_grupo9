<?php

namespace app\utilities;

use Yii;
use app\models\Categoria;
use app\models\Producto;

class OperacionesCategoria{
  public static function Nueva_Categoria($nombre_categoria, $codigo){
    try{
          $categoria = new Categoria;
          $categoria->nombre = $nombre_categoria;
          $categoria->codigo = $codigo;
          $categoria->save();
          return true;
    } catch(Exception $e){

    } // catch
      return false;
  }
  public static function Quitar_Categoria($codigo_producto){
    try{
      $producto_row = Categoria::find()->where('codigo = :codigo', [':codigo' => $codigo_producto])->one();
      $producto_row->delete();
      return true;
    } catch(Exception $e){

    } // catch
      return false;
  }

  public static function get_categorias_disponibles(){
      $query_string= "SELECT * from categoria";
      $connection = Yii::$app->getDb();
      $command = $connection->createCommand($query_string);
      $result = $command->queryAll();
      return $result;
  }
  public static function get_productos_comprados(){
      $query_string= "SELECT * from Producto where estado = 2;";
      $connection = Yii::$app->getDb();
      $command = $connection->createCommand($query_string);
      $result = $command->queryAll();
      return $result;
  }
}
