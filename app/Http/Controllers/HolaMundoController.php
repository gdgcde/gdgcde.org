<?

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaMundoController extends Controller
{
    public function index() 
    {
        return view('hola');
    }
}
