<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientsController extends Controller
{
    public function index(){
        $patients = Patient::all();

        if(count($patients) > 0){
            return response()->json($patients, 200);
        }
        return response()->json([], 200);
    }

    # Guardamos un paciente
    public function store(StorePatientRequest $request){
        # $patient = Patient::create($request->all());
        Patient::create($request->only(['name','date_born','gender','address','phone','email']));

        return response()->json(['message' => 'Successfully registeres'], 201);
    }

    #validando con la libreria Validator
    public function findById($id){
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|integer|exists:patients,id'
        ]);

        if($validator->fails()){
            return response()->json(
                ['message' => $validator->errors()] ,422
            );
        }

        $patient = Patient::find($id);
        if($patient){
            return response()->json($patient, 200);
        }
        return response()->json([], 200);
    }

    public function update(UpdatePatientRequest $request, $id){

        $patient = Patient::find($id);
        
        $patient->update($request->only(['name','address','phone','email']));

        return response()->json(['message' => 'Successfully updated'], 200);
    }
}
