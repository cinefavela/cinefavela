<?php 

namespace CineFavela\Usuario\Entites;

class UsuarioTest extends \PHPUnit_Framework_TestCase {
    
    public function testaSomaDoisNumeros() {
        $usuario = new \CineFavela\Usuario\Model\Usuario();
        $this->assertEquals(5, $usuario->somaDoisNumeros(4, 3));
    }
    
}

?>