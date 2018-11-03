<?php

namespace app\utilities;

use Yii;
use app\models\Categoria;
use app\models\Producto;

class OperacionesProducto{
  public static function comprar_producto($codigo_producto){
    try{

          $producto_row = Producto::find()->where('codigo = :codigo', [':codigo' => $codigo_producto])->one();
          $producto_row->estado = 2;
          $producto_row->save();
          return true;

    } catch(Exception $e){

    } // catch
      return false;
  }
  public static function Quitar_Compra($codigo_producto){
    try{

          $producto_row = Producto::find()->where('codigo = :codigo', [':codigo' => $codigo_producto])->one();
          $producto_row->estado = 1;
          $producto_row->save();
          return true;

    } catch(Exception $e){

    } // catch
      return false;
  }

  public static function get_productos_disponibles(){
      $query_string= "SELECT * from Producto where estado = 1;";
      $connection = Yii::$app->getDb();
      $command = $connection->createCommand($query_string);
      $result = $command->queryAll();
      return $result;
  }

  public static function get_top(){
      $query_string= "SELECT * from Producto where estado = 1 order by precio desc limit 5;";
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
