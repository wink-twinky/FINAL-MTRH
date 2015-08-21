


@extends('master.login')

@section('header')

{{ HTML::style('css/main.css') }}

<title>Sign Up</title>





<div id="headcover">

           <div id="logo">
               <img src="{{URL::asset('image/awsome.png')}}"width="351px" height="37px" > 

           </div>

       
            

           <div id="login">

                 {{Form::open(['route'=>'login.index'])}}
             
                     <table id="logtable">
               
                        <tr>
                            <td>
                                 
                                 {{Form::label('regno','Reg No')}}</br>{{Form::input('text','regno')}}

                            </td>

                            <td>

                                 {{Form::label('password','Passsword')}}</br>{{Form::input('password','password')}}

                            </td>

                            <td>
                                  </br> {{Form::submit('login')}}

                             </td>
                                                                 {{Form::close()}}
                         </tr>

                         <tr>
                    
                             <td>

                                   <a href="forgot"><input type="submit" value="Forgot password?" />
                     
                             </td>
                    
                             <td>
                      
                                    <a href="signup"><input type="submit" value="Sign up" />
                    
                             </td>

                         </tr>

                     </table>
      
                 

            </div>
           
</div>

@stop

</br>
</br>

@section('content')
</br>
</br>
</br>

<div>
	

                <center>
                        {{Form::open(['route'=>'login.store'])}}
                                                           
                                                            <table>
                                                                   <tr>
                                                                      <td> {{Form::label('name',' Name:')}}</br>{{Form::input('text','name')}}     </td>
                                                                      <td> {{Form::label('residence','Residence:')}}</br>{{Form::input('text','residence')}}      </td>
                                                                      <td> {{Form::label('regdate','Reg date:')}}</br>{{Form::input('text','regdate')}}     </td>
                                                                   </tr>
                                          
                                                                   <tr>
                                                                       <td>{{Form::label('regno','Reg Number:')}}</br>{{Form::input('text','regno')}}</td>
                                                                       <td>{{Form::label('address','Address:')}}</br>{{Form::input('text','address')}}</td>
                                                                       <td>{{Form::label('qualifications','Qualifications:')}}</br>{{Form::input('text','qualifications')}}</td>
                                                                   </tr>
                                                                      <tr>
                                                                      <td> {{Form::label(' speciality','  Speciality:')}}</br>{{Form::input('text',' speciality')}}     </td>
                                                                      <td> {{Form::label('subspeciality','Sub-Speciality:')}}</br>{{Form::input('text','subspeciality')}}      </td>
                                                                      <td> {{Form::label('mobile','Mobile Number:')}}</br>{{Form::input('text','mobile')}}     </td>
                                                                   </tr>
                                          
                                                                   <tr>
                                                                       <td>{{Form::label('email','Email Address:')}}</br>{{Form::input('text','email')}}</td>
                                                                       <td>{{Form::label('password1','Password:')}}</br>{{Form::input('text','password1')}}</td>
                                                                       <td>{{Form::label('password2','Verify Password:')}}</br>{{Form::input('text','password2')}}</td>
                                                                   </tr>
                                                                   
                                                                   <tr>
                                                                       </br> <td>{{Form::submit('sign up')}}</td>
                                                                   </tr>

                                                             </table>
                        
                </center>
                                                                                                  
                                                                                                  
                                                                                                  
                                                                                                  
                                                                                                  
                                                                                                  
                                                                                                 
                                                                                                  
                                                                                                  
                                                                                                  
                                                                                                  



                        {{Form::close()}}
</div>

@stop

@section('footer')
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<center><p><b>C</b> A<b>Privet creativety</b> production . All rights reserved to <b>The Developer</b>.No copy of whatever way is allowed . Helpline Number<b> (+254701998579) </b>Email address : help@privetwork.com</p></center> 
@stop