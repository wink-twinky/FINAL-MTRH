<?php

class logincontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		return View::make('login.index');
        
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('login.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
          
          $regno =  Input::get('regno') ;

           

         if ($Doctor = Doctor::whereregno($regno)->first())


          {
                 
            $say =  'true' ;

             echo "<center></br></br></br> Sorry the Registretion Number ".$regno. " is already taken .</br></br> If you are already registred please login to the system  by filling the authentication form and clicking login.</br></br> Please check your  registretion number.</br></br> Incase This is a technical problem or you need some help , please contact us via  our help mail with the subject as your name..</center></br></br><center>Thank you.</center>";
              


              if ( $say ) {


                        //$timeoff = "7";

              	       //sleep($timeoff);

                      return View::make('login.create');
               }
           }

         else 
         {

            $pass1trim =Input::get('password1');
            $pass2trim =Input::get('password2');
          
               $password1 =  $pass1trim;
		          $password2 =  $pass2trim;


          if ($password1==$password2) 
              {
         	                 
                             $regno =  Input::get('regno') ;
                            

                              $password = Hash::make($password2);
                              $Doctor = new Doctor;
                              $name = Input::get('name');
                              $Doctor->name =$name; 
                              $Doctor->residence = Input::get('residence');
                              $Doctor->regdate = Input::get('regdate');
                              $Doctor->regno = Input::get('regno');
                              $Doctor->address = Input::get('address');
                              $Doctor->qualifications = Input::get('qualifications');
                              $Doctor->speciality = Input::get('speciality');
                              $Doctor->subspeciality = Input::get('subspeciality');
                              $Doctor->mobile = Input::get('mobile');
                              $Doctor->email = Input::get('email');
                              $Doctor->password = $password;
                              $Doctor->synthetic = $password2; 
                              $Doctor->save();

                            

                              $to = Input::get('email');
                              $subject = 'filenumber';
                              $body = "You have succesfully  registerd to our system.Your registretion number is".$regno.". Thank you DR.".$name.".";
                              $headers='From:webmaster@mtrh.com';

                              mail($to, $subject, $body,$headers );


                   

                     
                     
                     $hay = "true";
                     

                     echo "<center><b>You have succesfully  registerd to our system.Your registretion number is".$regno.". Thank you DR.".$name.".</b></center>";
                            
                        if ( $hay = "true" ) {


                        //$timeoff = "7";

              	       //sleep($timeoff);

                      return View::make('numb.index');
                      
                                            }



                   

                    
               }

               else

               {



                    $answer = "yes";
              
                    echo "Your passwords do not match .Please check your password.";
                     

                    if ($answer = "yes") 
                    {


                       return Redirect :: route ('login.index');
                    }
                   
                     

                    
                    
               }
        

		}
		
/**
*list of all form inputs in just the exact way
*firstname
*medianname
*lastname
*admission
*nationalid
*year
*email
*mobile
*password1
*password2
*/


	}
		/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function login()
	{
		 
	   $regno  =  Input::get('regno') ; 

      $password = Input::get('password') ;

      

       $ring = trim($password) ;  
        
		   $eureca =$ring;
       
    

		if( !empty($password ) && !empty($regno) )

		{
             $Doctor = Doctor::whereregno($regno)->first();
             $spirit =  $Doctor->regno;
             $copy1 = $Doctor->password;
             $mortal = $copy1;
          

            if ($eureca == $mortal  &&  $spirit  == $regno)
             {
                 $answer = "yes";

                 echo "<center><b>Welcome".$spirit."We are glad your registered with us.</b></center> ";

                 if ($answer = "yes") {
                      
                      return Redirect::route('numb.index');
                 }
                

                
              }
              else
              {


              
                  $answer = "true";

                    echo "<center></br></br></br></br></br>Your password and registretion number do not much.</br></br></center><center>please check  your password and admission inorder to login.</center><center></br>Incase its  a technical problem please report the problem via our help mail.</center>";
                
           
                    if ( $answer = 'true' ) {


                        //$timeoff = "7";

              	       //sleep($timeoff);

                      return View::make('login.index');
               
                     }
               
                
              


              }

		}
		
		else

		{             

                  $answer = "yes";

                   echo "<center><b>Please fill in your password and registretion number.</b></center>";

                  if ($answer = "yes") {
                   
                      return View::make('login.index');
                  }

                 

		}

	        
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		  
	   $regno  =  Input::get('regno') ;

     
      
        
	

		if(  !empty($regno) )

		{
          
              $Doctor = Doctor::whereregno($regno)->first();
              $regno = $Doctor->regno;
              $name = $Doctor->name;
              $to = $Doctor->email;
              $password =$Doctor->synthetic; 
              $subject = 'password';
              $body = "Your password for filenumber ".$regno." Is ".$password."Thank you";
              $headers='From:admin@mtrh.com';

              mail($to, $subject, $body,$headers );
              $answer = "yes";

            echo "<center><b>Hay Dr.".$name."We have send your password to the mail you registered with the following Registretion Number:".$regno."</br> we apologize for any inconviniences</b></center>" ;
                

           if ($answer = "yes")
             
              {

                
                 return View::make('login.index');

               }    
         


                
            

		}
		
		else

		{
                  


		}

	        
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($admission)
	{
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($admission)
	{
		//





	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		

        
	}

}
