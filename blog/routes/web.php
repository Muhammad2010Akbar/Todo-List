<?php
use App\Task;
use App\Project;
use App\Employee;
use App\Employee_Project;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great
*/

//Route::get('about', 'MyController@about');
//Route::get('welcome', 'MyController@welcome');

//Route::resource('songs', 'songscontroller');

Route:: get('emp', function () {
    echo $Employee = employee::find(1);

} );
Route:: get('tasks', function () {
       echo $Task = task::find(2);
});

Route:: get('proj', function () {
       echo $Project = project::find(1);
});

Route:: get('reltab', function ()
{
    $Employee = Employee::find(1);

    foreach ($Employee->project as $Project) {
        return $Project->pivot->created_at;
}
});


Route:: resource('todo', 'EmployeeController');
Route:: resource('project', 'ProjectController');
Route:: resource('task', 'TaskController');

?>
