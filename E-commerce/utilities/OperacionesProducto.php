<?php
namespace app\utilities;
use Yii;
use app\models\Categoria;
use app\models\Producto;

class OperacionesProducto{
  
  public static function agregarProducto()
  {
    try
    {
        $model = new Producto();
        $model->codigo = 8;
        $model->categoria = 1;
        $model->nombre = "HP Pavilion";
        $model->nombre = "Computadora touch de 19'' 12 gb de ram, core i7 8th gen";
        $model->precio = 14000;
        $model->estado = 1; 
        $model->save();
        return true;
    }
    catch(Exception $e){
    } // catch
      return false;
  }

  public static function eliminarProducto($codigo_producto){
    try{
          $producto = Producto::find()->where('codigo = :codigo', [':codigo' => $codigo_producto])->one();
          $producto->delete();
          return true;
    } catch(Exception $e){
    } // catch
      return false;
  }



}