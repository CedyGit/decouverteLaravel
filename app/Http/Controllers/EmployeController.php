<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Employe;
use \App\Models\Conge;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{
    //interface employe
    public function employe()
    {
        return view('employe');
    }
    // registration employe
    public function newEmploye()
    {
        return view('NewEmploye');
    }

    public function registerEmploye(Request $request)
    {
        $registerEmploye = $request->validate([
            'nom'                   =>'required',
            'prenom'                =>'required',
            'email'                 =>'required|email|unique:employes',
            'date_de_naissance'     =>'required',
            'sexe'                  =>'required',
            'numero'                =>'required|unique:employes',
            'poste'                 =>'required',
            'date_de_recrutement'   =>'required',
            'status'                =>'required',
            'matricule'             =>'required|string|unique:employes|max:255',
            'adress'                =>'required|string|max:255',
            'avatar'                =>'required|mimes:jpg,png,jpeg|max:5000'
        ]);

        // uploads profil
        $newImageName = time() . '-' . $request->name . '-' .
        $request->avatar->extension();

        // chemin de l'image
        $request->avatar->move('uploads', $newImageName);

        $employe = new Employe();
        $employe->nom                   =$request->nom;
        $employe->prenom                =$request->prenom;
        $employe->email                 =$request->email;
        $employe->date_de_naissance     =$request->date_de_naissance;
        $employe->sexe                  =$request->sexe;
        $employe->numero                =$request->numero;
        $employe->poste                 =$request->poste;
        $employe->date_de_recrutement   =$request->date_de_recrutement;
        $employe->status                =$request->status;
        $employe->matricule             =$request->matricule;
        $employe->adress                =$request->adress;
        $employe->avatar                =$newImageName;
        
        $resultat = $employe->save();
        if($resultat){
            return back()->with('success','Nouveau employé Insérer avec Succés');
        }else{
            return back()->with('fail','Erreur d\'insertion!!');
        }
    }
    

     // table Employe
     public function tableEmploye(Request $request)
     {    
         $resultat = Employe::paginate(5);
         return view('employe', compact('resultat'));
     }

    //  rechercher
     public function rechercher(Request $request)
     {
        $recherche = $_GET['search'];
        $resultat = Employe::where('nom','LIKE','%'.$recherche.'%')->get();
        return view('employe', compact('resultat'));
     }

     // CONTRAT
    public function cdd()
    {
        return view('cdd');
    }

    public function cdi()
    {
        return view('cdi');
    }

    public function stagiaire()
    {
        return view('stagiaire');
    }

    // Row count Contrat
    public function CDdetermine()
    {
        $data = Employe::select()->where('status','=','CDD')->paginate(4);
        return view('cdd', compact('data'));
    }
    
    public function CDIndetermine()
    {
        $data = Employe::select()->where('status','=','CDI')->paginate(4);
        return view('cdi', compact('data'));
    }

    public function Cstagiaire()
    {
        $data = Employe::select()->where('status','=','stagiaire')->paginate(4);
        return view('stagiaire', compact('data'));
    }
//    Ends of Controller Contrat


    // details employes
    public function details()
    {
        return view('details');
    }

    public function employeDetails($id)
    {
        $employe = DB::table('employes')->where('id',$id)->get();
        return view('details', compact('employe'));
    }

    // suppression
    public function delete(Request $request, $id)
    {
        $employe  = Employe::FindOrFail($id);
        $resultat = $employe->delete();

        if($resultat)
        {
            return back()->with('success',$employe->nom.' bien supprimer!');
        }else{
            return back()->with('fail','Erreur de suppression');
        }
       
    }
    //  page modifier

    public function editPage($id)
    {
        $employe = Employe::find($id);
        return view('editEmploye', compact('employe'));
    }

    // update l'employer
    public function updateEmploye(Request $request, $id)
    {
        $employe = Employe::find($id);

        $employe->nom                      =$request->input('nom');
        $employe->prenom                   =$request->input('prenom');
        $employe->email                    =$request->input('email');
        $employe->date_de_naissance        =$request->input('date_de_naissance');
        $employe->sexe                     =$request->input('sexe');
        $employe->numero                   =$request->input('numero');
        $employe->poste                    =$request->input('poste');
        $employe->date_de_recrutement      =$request->input('date_de_recrutement');
        $employe->status                   =$request->input('status');
        $employe->matricule                =$request->input('matricule');
        $employe->adress                   =$request->input('adress');

        if($request->hasFile('avatar'))
        {
            $file =  $request->file('avatar');
            $extension = $file->getClientOriginalExtension(); //maka extension
            $filename = time() . '.' .$extension;
            $file->move('uploads', $filename);
            $employe->avatar = $filename;

        }
        $resultat = $employe->save();
        if($resultat)
        {
            return back()->with('success', 'Les données personnelles de '.$employe->nom. ' sont modifier!');
        }else{
            return back()->with('fail', 'Erreur de modification');
        }

    }
// end of Employe

 // begining congé
    public function congeForm()
    {
        return view('congeForm');
    }

     // page congé employe
     public function congeEmploye()
     {
         return view('congeEmploye');
     }

     // entrer les demandes de conges
     public function congeId($id)
     {
         $employe = DB::table('employes')->where('id',$id)->first();
         return view('congeForm', compact('employe'));
     }

     // enregistrements des conges
    public function newConge(Request $request)
    {
        $newConge = $request->validate([ 
        
        'demandeur'            =>'required',
        'poste_occuper'        =>'required',
        'type_de_conge'        =>'required',
        'date_de_debut'        =>'required',
        'heure_de_debut'       =>'required',
        'date_de_fin'          =>'required',
        'heure_de_fin'         =>'required',
        'nombre_de_jours'      =>'required|integer|max:30',
        'motifs'               =>'required|string|max:255',

        'employe_id'           =>'required',

        ]);
                              
        $conge = new Conge();                                                            

        $conge->demandeur         =$request->demandeur;
        $conge->poste_occuper     =$request->poste_occuper;
        $conge->type_de_conge     =$request->type_de_conge;
        $conge->date_de_debut     =$request->date_de_debut;
        $conge->heure_de_debut    =$request->heure_de_debut;
        $conge->date_de_fin       =$request->date_de_fin;
        $conge->heure_de_fin      =$request->heure_de_fin;
        $conge->nombre_de_jours   =$request->nombre_de_jours;
        $conge->motifs            =$request->motifs;

        $conge->employe_id        =$request->employe_id;
        
           
        $resultat = $conge->save();
        if($resultat){
            return back()->with('success','Nouveau conge ajouter avec Succés');
        }else{
            return back()->with('fail','Erreur d\'insertion!!');
        }

    }

    // edit and Update Conge
    public function editCongePage($id)
    {
        $congeEmploye = Conge::find($id);
        return view('editConge', compact('congeEmploye'));
    }

    public function updateConge(Request $request, $id)
    {
        $conge = Conge::find($id);

        $conge->demandeur                 =$request->input('demandeur');     
        $conge->poste_occuper             =$request->input('poste_occuper');
        $conge->type_de_conge             =$request->input('type_de_conge');
        $conge->date_de_debut             =$request->input('date_de_debut');
        $conge->heure_de_debut            =$request->input('heure_de_debut');
        $conge->date_de_fin               =$request->input('date_de_fin');
        $conge->heure_de_fin              =$request->input('heure_de_fin');
        $conge->nombre_de_jours           =$request->input('nombre_de_jours');
        $conge->motifs                    =$request->input('motifs');

        $conge->employe_id                =$request->input('employe_id');

        $resultat = $conge->save();
        if($resultat)
        {
            return back()->with('success', 'Les donnees de conges de '.$conge->demandeur.' sont modifier! ');
        }else{
            return back()->with('fail', 'Erreur de modification des conges');
        }
    }


      //  all conges tables
      public function allConge(Request $request)
      {
         $data = Conge::paginate(5);
         return view('congeEmploye', compact('data'));
      }
      
    //   congerPayer

    public function congeP()
    {
    return view('congePayer');
    }

    public function congePayer()
    {
        $data = Conge::select()->where('type_de_conge','=','conge payer')->paginate(4);
        return view('congePayer', compact('data'));
    }
    
    // conge sans solde
    public function congeSS()
    {
        return view('congeSansSolde');
    }

    public function congeSansSolde()
    {
        $data = Conge::select()->where('type_de_conge','=','conge sans solde')->paginate(4);
        return view('congeSansSolde', compact('data'));
    }
    
    // delete conge
    public function deleteConge(Request $request, $id)
    {
        $conge = Conge::FindOrFail($id);
        $resultat = $conge->delete();

        if($resultat)
        {
            return back()->with('success', 'Le conge de'. $conge->demandeur. 'bien supprimer');

        }else{
            return back()->with('fail', 'Erreur de suppression');
        }
    }

    public function attestationPage()
    {
        return view('attestation');
    }

    public function attestationId($id)
    {
        $attestation = DB::table('employes')->where('id',$id)->get();
        return view('attestation', compact('attestation'));
    }
}
