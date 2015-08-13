
@extends('master.login')

@section('header')

{{ HTML::style('css/main.css') }}

<title>Login</title>





<div id="headcover">

           <div id="logo">
               <img src="{{URL::asset('image/awsome.png')}}"width="351px" height="37px" > 


           </div>

       
            

           <div id="login">

                   <!--{{Form::open(['route'=>'login.show'])}}-->
                   
             
                     <table id="logtable">
                
                        <tr>
                         

                            <td>
                                 <table>
                                   <?php echo '<form method="post" action="'.URL::to('loginform').'">'; ?>
                                  <tr>
                                  <td>
                                 {{Form::label('username','Username')}}</br>{{Form::input('text','username')}}
                                  </td>
                            
                                  <td>
                                 {{Form::label('password','Password')}}</br>{{Form::input('password','password')}}
                                   </td>
                                   <td>
                                   </br>     {{Form::submit('login')}}
                                   </td>
                                  </tr>
                                       {{Form::close()}}
                                 </table>
                            </td>

                         </tr>
                                       
                
                         <tr>
                          
                             <td>
                              <table>
                                <tr>
                                  <td>  
                                     <a href="http://localhost:8000/login/show"><input type="submit" value="Forgot password?" /></a>
                                 </td>
                   
                                 <td>
                                    <a href="http://localhost:8000/login/create"><input type="submit" value="Sign up" />
                                 </td>
                                <tr>
                              </table>
                             </td>
                              
                         </tr>

                     </table>
      
                
                 
            </div>
           
</div>
@stop
</br></br>
@section('content')


</br></br></br>
<center>
<div id= "pictureframe">
</br>
</br>
</br>


       <img src="{{URL::asset('image/about.svg')}}"width="202px" height="196px" > 




</div>

</center>


@stop

@section('footer')
<div id ="bottom">
<center> </center> 
</div>
@stop