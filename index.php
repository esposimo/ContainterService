<?php


interface ContainerServiceInterface {



    /**
     * Metodo che restituisce una classe in base al nome indicato
     * @param string $name
     * @return mixed
     */
    public function get(string $name);

}


interface ContainerProviderInterface {

    public static function createObject(ContainerServiceInterface $container);

}





class ContainerService implements ContainerServiceInterface {

    public function get($name) {

    }



}



