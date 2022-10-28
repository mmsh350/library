<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Function return datatables and user view  
    public function index(Request $request)
    {
        // //Check the current user
        if(auth()->user()->role != 'admin') {
            //dashboard 
            //return approriate view if user not admin
            return view('dashboard'); 
        }
        else
        {
           
            //ajax to return datatable to the view page
            if ($request->ajax()) {
                $data = User::select("*", DB::raw("CONCAT(users.first_name,' ',users.last_name) as fullname"))->get();//where('id', '!=', 1)->get();
                return Datatables::of($data)->addIndexColumn()
                    ->addColumn('action', function($row){
                        $userid = $row->id;
                        $active = $row->is_active;
                        $disallow = '';
                        $modal_link = '#';
                        $modal_link2 = '#';
                        $fullname = $row->first_name.' '.$row->last_name;
                        $status = '';
                    
                        if ($userid == 1)
                        {
                            $disallow = 'disabled';
                        }
                        else
                        {
                            $disallow = 'enabled';
                            $modal_link = '#updateModal';
                            $modal_link2 = '#resetModal';
                            
                        }
                        if ($active == 1) { $status = 'Disable';   } else { $status = 'Enable&nbsp;';  }

                        // Button Customizations
                        $btn = "
                        <button  id='activateUser' $disallow> $status </button>
                        <button data-toggle='modal' data-target=$modal_link  $disallow data-id=$userid data-meta='$row->role' data-meta2='$fullname'><i class='fa fa-edit' aria-hidden='true'> Modify</i></button>
                        <button data-toggle='modal' data-target=$modal_link2 data-id=$userid  data-meta='$fullname' $disallow><i class='fa fa-key' aria-hidden='true'> Reset </i></button>";
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                }
            return view('auth.users');
        
                  
            }
       }
       //Function to update user role 
    public function updateUserRole(Request $request){

        //Update User Role
       $affected = User::where('id', $request->userid)
                   ->update(['role' => $request->roleUpdate]);

        //get requested user information
        $user = DB::table('users')->find($request->userid);

           // Check if the update is done
           if ($affected) {
               //message to return to users page 
               $message = "User role update Successful.";
           }//js handles the error part

           //redirect back to the users page
           redirect()->back()
           ->with('status', $message);
          
   }

    //Disable User function
    public function disableUsers(Request $request)
    {
         //Disable user
        $affected = User::where('id', $request->id)
                          ->update(['is_active' => 0]);

          //get requested user information
         $user = DB::table('users')->find($request->id);

         // Check if the update is done
         if ($affected) {
              //message to return to users page 
              $message = "User disabled Successfully.";
             } //js handles the error path

            //redirect back to the users page
            redirect()->back()
                      ->with('status', $message);
        
    }
    //Enable Users function
    public function enableUsers(Request $request)
    {
        //enable user 
        $affected = User::where('id', $request->id)
                        ->update(['is_active' => 1]);
        //get requested user information
        $user = DB::table('users')->find($request->id);

        // Check if the update is done
        if ($affected) { 
            //message to return to users page 
            $message = "User enabled successfully."; 
            }  //js handles the error path
            
            //redirect back to the users page with a message
            redirect()->back()
                        ->with('status', $message);
    }

   //Resetting users password function
   public function updatePassword(Request $request){
    //Reset User Password
    $affected = User::where('id', $request->userid)
                  ->update(['password' => Hash::make($request->newPass)]);

     //get requested user information
     $user = DB::table('users')->find($request->userid);

        // Check if the update is done
        if ($affected) {
             //message to return to users page 
             $message = "Password reset successful.";
             }//js handles the error part
                     redirect()->back()
                              ->with('status', $message);
    }

    

}