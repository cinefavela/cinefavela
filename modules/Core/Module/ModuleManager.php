<?php 

namespace CineFavela\Core\Module;


class ModuleManager {
    
    private $modules = array();
    
    public function register(Module $module) {
        $modules[$module->getName()] = $module;
        $module->init();
        $module->setUp();
    }
    
    public function getModule($name) {
        return $modules[$name];
    }
    
}

?>