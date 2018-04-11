<?php

use App\Http\Requests;
use App\Carpeta;
use Illuminate\Http\Request;
use ZipArchive;

class CU_19Controller extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('download')) {
            // Define Dir Folder
            $public_dir=$request->path;
            // Zip File Name
            $nom=$request->nom;
            $zipFileName = $nom.'.zip';
            // Create ZipArchive Obj
            $zip = new ZipArchive;
            if ($zip->open($public_dir . '/' . $zipFileName, ZipArchive::CREATE) === TRUE) {
            	// Add File in ZipArchive
                $zip->addFile(file_path,'file_name');
                // Close ZipArchive     
                $zip->close();
            }
            // Set Header
            $headers = array(
                'Content-Type' => 'application/octet-stream',
            );
            $filetopath=$public_dir.'/'.$zipFileName;
            // Create Download Response
            if(file_exists($filetopath)){
                return response()->download($filetopath,$zipFileName,$headers);
            }
        }
        return view('createZip');
    }
}
