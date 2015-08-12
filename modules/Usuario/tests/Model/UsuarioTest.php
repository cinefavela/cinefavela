<?php 

namespace CineFavela\Usuario\Model;

class UsuarioTest extends \PHPUnit_Framework_TestCase {
    
    public function testaSomaDoisNumeros() {
        $usuario = new \CineFavela\Usuario\Model\Usuario();
        $this->assertEquals(5, $usuario->somaDoisNumeros(2, 3));
    }
    
}

?>