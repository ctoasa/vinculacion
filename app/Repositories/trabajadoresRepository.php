<?php

namespace App\Repositories;

use App\Models\Trabajadores;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TrabajadoresRepository
 * @package App\Repositories
 * @version March 10, 2018, 6:29 pm UTC
 *
 * @method Trabajadores findWithoutFail($id, $columns = ['*'])
 * @method Trabajadores find($id, $columns = ['*'])
 * @method Trabajadores first($columns = ['*'])
*/
class TrabajadoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'genero',
        'fechaDeNacimiento',
        'Pais_id',
        'Ciudad_id',
        'instruccionFormal',
        'horasTrabajo',
        'salario',
        'PlanDeGestionDeRiesgos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Trabajadores::class;
    }
}
