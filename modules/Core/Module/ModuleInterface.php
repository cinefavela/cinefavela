<?php 

namespace CineFavela\Core\Module;

interface ModuleInterface {
    
    public function setUp();
    public function init();
    public function getName();
    public function getVersion();
    
}

?>