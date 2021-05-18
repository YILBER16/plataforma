<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Estudiantes;
use App\Models\Docentes;
use App\Models\Grados;
use App\Models\Acudientes;
use App\Models\Padres;
use App\Models\Anio_lectivo;
use App\Models\Mensualidades;
use App\Models\Matriculas;
use App\Models\Meses;
use App\Models\Categoriaitemobservador;
use App\Models\Itemobservadores;

use App\DataProviders\testDataProvider;


class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acudientes::insert(testDataProvider::Acudientes());

        Padres::insert(testDataProvider::Padres());

        Estudiantes::insert(testDataProvider::Estudiantes());
        Docentes::insert(testDataProvider::Docentes());
        Mensualidades::insert(testDataProvider::Mensualidad());
        Grados::insert(testDataProvider::Grados());
        Anio_lectivo::insert(testDataProvider::Anio());
        Matriculas::insert(testDataProvider::Matriculas());
        Meses::insert(testDataProvider::Meses());
        Categoriaitemobservador::insert(testDataProvider::Categoriaitemobservador());
        itemobservadores::insert(testDataProvider::Itemobservador());
    }
}