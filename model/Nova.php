<?php
namespace App\Model;

class Nova
{
    //Variables o atributos
    var $id;
    var $titulo;
    var $slug;
    var $entradilla;
    var $texto;
    var $activo;
    var $home;
    var $fecha;
    var $autor;
    var $imagen;

    function __construct($datat=null){

        $this->id = ($datat) ? $datat->id : null;
        $this->titulo = ($datat) ? $datat->titulo : null;
        $this->slug = ($datat) ? $datat->slug : null;
        $this->entradilla = ($datat) ? $datat->entradilla : null;
        $this->texto = ($datat) ? $datat->texto : null;
        $this->activo = ($datat) ? $datat->activo : null;
        $this->home = ($datat) ? $datat->home : null;
        $this->fecha = ($datat) ? $datat->fecha : null;
        $this->autor = ($datat) ? $datat->autor : null;
        $this->imagen = ($datat) ? $datat->imagen : null;

    }

}




