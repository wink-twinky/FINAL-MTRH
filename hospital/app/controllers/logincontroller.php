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
          
          $username =  Input::get('username') ;

          $fix =  mt_rand(1,200) ;  

         if ($client = Client::whereusername($username)->first())


          {
                 
            $say =  'true' ;

             echo "<center></br></br></br> Sorry the user name ".$username. " is already taken by another user .</br></br> If you are already registred please login to the system  by filling the authentication form and clicking login.</br></br> Please use another username perharps " .$fix.$username .".</br></br> Incase This is a technical problem or you need some help , please contact us via  our help mail with the subject as your username.</center></br></br><center>Thank you.</center>";
              


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
         	                  $file = mt_rand(1,20000000) ;

                            

                              $filenumber = "mtrh/".$file."/2015." ;
                              $password = $password2;
                              $Client = new Client;
                              $Client->firstname = Input::get('firstname');
                              $Client->medianname = Input::get('medianname');
                              $Client->lastname = Input::get('lastname');
                              $Client->filenumber = $filenumber;
                              $Client->residence = Input::get('residence');
                              $Client->personalmobile = Input::get('personalmobile');
                              $Client->homemobile = Input::get('homemobile');
                              $Client->email = Input::get('email');
                              $Client->nhif = Input::get('nhif');
                              $Client->profesion = Input::get('profesion');
                              $Client->location = Input::get('location');
                              $Client->keen = Input::get('keen');
                              $Client->keenmobile = Input::get('keenmobile');
                              $Client->username = Input::get('username');
                              $Client->password = $password;
                              $Client->synthetic = $password2;
                              $Client->save();

                              $to = Input::get('email');
                              $subject = 'filenumber';
                              $body = "You have succesfully  registerd to our system.Your filenumber is".$filenumber.". Thank you.";
                              $headers='From:webmaster@mtrh.com';

                              mail($to, $subject, $body,$headers );


                   

                     
                     
                     $hay = "true";
                     

                     echo "You've successfully sing up to our system.We have send  your file number to your email address.Please log in to book an appoindment and enjoy other intresting features that we offer." ;

                        if ( $hay ) {


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
		 
	 $username  =  Input::get('username') ; 

      $password = Input::get('password') ;

      

       $ring = trim($password) ;  
        
		   $eureca =$ring;
       
    

		if( !empty($password ) && !empty($username) )

		{
             $Client = Client::whereusername($username)->first();
             $spirit =  $Client->username;
             $copy1 = $Client->password;
             $mortal = $copy1;
          

            if ($eureca == $mortal  &&  $spirit  == $username)
             {
                 $answer = "yes";

                 echo "<center>Welcome".$spirit."We are glad your registered with us.</center> ";

                 if ($answer = "yes") {
                      
                      return Redirect::route('numb.index');
                 }
                

                
              }
              else
              {


              
                  $answer = "true";

                    echo "<center></br></br></br></br></br>Your password and admission do not much.</br></br></center><center>please check  your password and admission inorder to login.</center><center></br>Incase its  a technical problem please report the problem via our help mail.</center>";
                
           
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

                   echo "Please fill in your password and admission number.";

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
		  
	   $username =  Input::get('username') ; 

     
      
        
	

		if(  !empty($username) )

		{
          
              $Client = Client::whereusername($username)->first();
              $filenumber = $Client->filenumber;
              $to = $Client->email;
              $password = $Client->synthetic; 
              $subject = 'password';
              $body = "Your password for filenumber ".$filenumber." Is ".$password."Thank you";
              $headers='From:admin@mtrh.com';

              mail($to, $subject, $body,$headers );
              $answer = "yes";

            echo "We have send your password to the mail you registered with the following filenumber" ;
                

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
