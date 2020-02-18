<?php


namespace App\Http\Controllers;
session_start();

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function store(Request $request){

        $userFile = $request->file("myFile");

        $date = date("Y-m-d");

        $destinationPath = "../../../storage/usersFiles/". $_SESSION["user"];

        $newFileName = $_SESSION["user"] . "_" . $date;

        if($userFile->move($destinationPath, $newFileName)){

             echo "Bien hecho";
        
        }else{

            echo "Algo salio mal<br>";
            echo "DireccionPath: ". $destinationPath ."<br>";
            echo "Nuevo Nombre del Archivo:". $newFileName ."<br>";

        }

    }

    //
}
