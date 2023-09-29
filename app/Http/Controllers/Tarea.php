<?php

namespace App\Http\Controllers;

use App\Models\Revision;
use App\Models\Tarea;
use App\Models\TareaCategoria;
use App\Models\User;
use Illuminate\Http\Request;
use App\Classes\Transactions;

class TareaController extends Controller
{
    use Transactions;

    public function crearTareaConCategorias(){
        $this->bloquearTablaRead('tasks');
        $this->bloquearTablaRead('users');
        $this->bloquearTablaRead('tasks_categories');

        $User = new User();

        $User -> nombre = 'santi';
        $User -> nombre_completo = 'santi hroma';

        $User->save();

        $Task = new tarea();

        $Task -> titulo = 'basededatos';
        $Task -> contenido = 'texto';
        $Task -> estado = 'pendiente';
        $Task -> usuario_id = '1';

        $Task->save();

        $TaskCategories = new TaskCategories();
        $TaskCategories = new TaskCategories();

        $TaskCategories -> categorie = 'one';
        $TaskCategories -> tarea_id = $Tarea->id;

        $TaskCategoriesTwo -> categorie = 'one';
        $TaskCategoriesTwo -> tarea_id = $Task->id;

        $TaskCategories->save();
        $TaskCategoriesTwo->save();

        $this->commitearYDesbloquearTablas();
    }

    public function crearTareaSinCategorias(){
        $this->bloquearTablaRead('tasks');
        $this->bloquearTablaRead('users');
        $this->bloquearTablaRead('revision');

        $User = new User();

        $User -> nombre = 'santi';
        $User -> nombre_completo = 'santi hroma';

        $User->save();

        $Task = new tarea();

        $Task -> titulo = 'basededatos';
        $Task -> contenido = 'texto';
        $Task -> estado = 'pendiente';
        $Task -> usuario_id = '2';

        $Task->save();

        $Revision = new Revision();

        $Revision -> detalle = 'hola';
        $Revision -> tarea_id = $Task->id;

        $Revision->save();

        $this->commitearYDesbloquearTablas();
    }
}