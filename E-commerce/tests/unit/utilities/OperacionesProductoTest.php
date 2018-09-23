<?php
namespace tests\utilities;
use app\utilities\OperacionesProducto;
class OperacionesProductoTest extends \Codeception\Test\Unit
{
  

  public function testAgregarProducto(){
    $result = OperacionesProducto::agregarProducto();//Act
    if(is_null($result)){
      $this->assertEmpty($result);//Assert
    }else{
      $this->assertNotEmpty($result);//Assert
    }
    //$this->assertNotEmpty($result);//Assert
  }
  public function testEliminarProducto(){
    $result = OperacionesProducto::eliminarProducto(7);//Act
    if(is_null($result)){
      $this->assertEmpty($result);//Assert
    }else{
      $this->assertNotEmpty($result);//Assert
    }
  }
}