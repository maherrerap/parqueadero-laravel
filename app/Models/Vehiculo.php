<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = [
        'placa',
        'tipo',
        'propietario',
        'observaciones'
    ];

    static public function getVehiculos() {
        return self::all();
    }

    static public function getVehiculosById($id) {
        return self::find($id);
    }
    static public function createVehiculo(array $request) {
        return self::create($request);
    }
    static public function updateVehiculo(Vehiculo $vehiculo, array $data) {
        return $vehiculo->update($data);
    }
    static public function deleteVehiculo(Vehiculo $vehiculo) {
        $vehiculo->delete();
    }
}
