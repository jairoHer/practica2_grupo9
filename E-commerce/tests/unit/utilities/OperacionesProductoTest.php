<?php

namespace tests\utilities;

use app\utilities\OperacionesProducto;

class OperacionesProductoTest extends \Codeception\Test\Unit
{
  private $codigo_producto = 2;//Arrange

  public function testComprarProducto(){
    $result =OperacionesProducto::comprar_producto($this->codigo_producto);//Act
    $this->assertTrue($result);//Assert
  }
  public function testQuitarCompra(){
    $result =OperacionesProducto::Quitar_Compra($this->codigo_producto);//Act
    $this->assertTrue($result);//Assert
  }
  public function testObtenerListaDeProductoDisponibles(){
    $result = OperacionesProducto::get_productos_disponibles();//Act
    $this->assertNotEmpty($result);//Assert
  }
  public function testObtenerListaDeProductosComprados(){
    $result = OperacionesProducto::get_productos_comprados();//Act
    $this->assertEmpty($result);//Assert
  }
}
