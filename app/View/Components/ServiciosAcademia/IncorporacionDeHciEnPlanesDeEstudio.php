<?php

namespace App\View\Components\ServiciosAcademia;

use Illuminate\View\Component;

class IncorporacionDeHciEnPlanesDeEstudio extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.servicios-academia.incorporacion-de-hci-en-planes-de-estudio');
    }
}
