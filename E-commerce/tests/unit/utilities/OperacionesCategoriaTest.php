<?php
namespace tests\utilities;
use app\utilities\OperacionesCategoria;
use app\utilities\OperacionesProducto;
class OperacionesCategoriaTest extends \Codeception\Test\Unit
{
  private $codigo_categoria = 3;//Arrange
  private $nombre_categoria = "nombre";//Arrange
  public function testNuevaCategoria(){
    $result =OperacionesCategoria::Nueva_Categoria($this->$nombre_categoria);//Act
    $this->assertTrue($result);//Assert
  }
  public function testQuitarCategoria(){
    $result =OperacionesCategoria::Quitar_Categoria($this->$codigo_categoria);//Act
    $this->assertTrue($result);//Assert
  }
  public function testObtenerListaDeCategoriasDisponibles(){
    $result = OperacionesCategoria::get_categorias_disponibles();//Act
    $this->assertNotEmpty($result);//Assert
  }
  public function testObtenerListaDeProductosTop(){
    $result = OperacionesProducto::get_top();//Act
    $this->assertNotEmpty($result);//Assert
  }
}
