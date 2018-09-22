<?php

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\Categoria;

use app\utilities\OperacionesCategoria;

class CategoriasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $Productos_disponibles = OperacionesCategoria::get_categorias_disponibles();

        return $this->render('index',[
          'Productos_disponibles'=>$Productos_disponibles,
        ]);
    }

    public function actionAgregar()
    {
      return $this->render('agregar');
    }

    public function actionBuscarCategoria($codigo_producto){
      $producto_row = Categoria::find()->where('codigo = :codigo', [':codigo' => $codigo_producto])->one();
      if(OperacionesCategoria::Quitar_Categoria($codigo_producto)){
            Yii::$app->session->setFlash('success', "Bien, ha comprado ".$producto_row->nombre." de manera exitosa!");
        } else {
            Yii::$app->getSession()->setFlash('error', 'No es posible comprar el producto: '.$producto_row->codigo." ".$producto_row->nombre."");
        }
      return $this->redirect(['index']);
    }

    public function actionEliminarCategoria($codigo_categoria){
      if(OperacionesCategoria::Quitar_Categoria($codigo_categoria)){
            Yii::$app->session->setFlash('success', "Bien, he eliminado de manera exitosa!");
      } else {
          Yii::$app->getSession()->setFlash('error', "No es posible eliminar");
      }
      return $this->redirect(['index']);
    }

}
