<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use App\Http\Requests\StoreNiveauRequest;
use App\Http\Requests\UpdateNiveauRequest;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveaux = Niveau::all();
        return view("recuperation.niveau", compact("niveaux"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNiveauRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNiveauRequest $request)
    {
        $request->validate([
            'code' => 'sometimes|string|between:3,8|unique:niveaux,code',
            'intitule' => 'sometimes|string'
        ]);

        
        $file = $request->file('niveaux');

        if($request->code){
            Niveau::create([
                'code' => $request->code,
                'intitule' => $request->intitule
            ]);
        }
        else if($file){
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize(); //Get size of uploaded file in bytes
            //Check for file extension and size
            //$this->checkUploadedFileProperties($extension, $fileSize);
            //Where uploaded file will be stored on the server 
            $location = 'uploads'; //Created an "uploads" folder for that
            // Upload file
            $file->move($location, $filename);
            // In case the uploaded file path is to be stored in the database 
            $filepath = public_path($location . "/" . $filename);
            // Reading file
            $file = fopen($filepath, "r");
            $importData_arr = array(); // Read through the file and store the contents as an array
            $i = 0;
            //Read the contents of the uploaded file 
            while (($filedata = fgetcsv($file, 1000, ";")) !== FALSE) {
            $num = count($filedata);
            // Skip first row (Remove below comment if you want to skip the first row)
            if ($i == 0) {
            $i++;
            continue;
            }
            for ($c = 0; $c < $num; $c++) {
            $importData_arr[$i][] = $filedata[$c];
            }
            $i++;
            }
            fclose($file); //Close after reading
            $j = 0;
            foreach ($importData_arr as $importData) {
                $code = $importData[0];
                $intitule = $importData[1];
                $j++;
                try {
                    DB::beginTransaction();
                    
                    Niveau::create([
                    'code' => $code,
                    'intitule' => $intitule
                    ]);

                    DB::commit();
                } catch (\Exception $e) {
                //throw $th;
                    DB::rollBack();
                    return redirect('/');
                }
            }
        }

        return redirect('/niveaux');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function show(Niveau $niveau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function edit(Niveau $niveau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNiveauRequest  $request
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNiveauRequest $request, Niveau $niveau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Niveau $niveau)
    {
        //
    }
}
