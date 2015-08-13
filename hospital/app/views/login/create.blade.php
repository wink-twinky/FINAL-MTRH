


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
                                 
                                 {{Form::label('username','Username')}}</br>{{Form::input('text','username')}}

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
                                                                      <td> {{Form::label('firstname','First Name:')}}</br>{{Form::input('text','firstname')}}     </td>
                                                                      <td> {{Form::label('medianname','Median Name:')}}</br>{{Form::input('text','medianname')}}      </td>
                                                                      <td> {{Form::label('lastname','Last Name:')}}</br>{{Form::input('text','lastname')}}     </td>
                                                                   </tr>
                                                                   </br>
                                                                   </br>
                                                                   <tr>
                                                                       <td>{{Form::label('residence','Residence:')}}</br>{{Form::input('text','residence')}}</td>
                                                                       <td>{{Form::label('personalmobile','Personal Mobile Number:')}}</br>{{Form::input('text','personalmobile')}}</td>
                                                                       <td>{{Form::label('homemobile','Home Mobile Number:')}}</br>{{Form::input('text','homemobile')}}</td>
                                                                   </tr>
                                                                   <tr>
                                                                        <td>{{Form::label('email','Email Address')}}</br>{{Form::input('text','email')}}</td>
                                                                        <td>{{Form::label('nhif','NHIF CARD NUMBER:')}}</br>{{Form::input('text','nhif')}}</td>
                                                                         <td>{{Form::label('profesion','Profesion:')}}</br>{{Form::input('text','profesion')}}</td>
                                                                   </tr>
                                                                     <tr>
                                                                        <td>{{Form::label('location',' Work Location:')}}</br>{{Form::input('text','location')}}</td>
                                                                        <td>{{Form::label('keen','Next Of Keen:')}}</br>{{Form::input('text','keen')}}</td>
                                                                         <td>{{Form::label('keenmobile','Keens Mobile Number:')}}</br>{{Form::input('text','keenmobile')}}</td>
                                                                   </tr>
                                                                     <tr>
                                                                        <td colspan="3">{{Form::label('username','Username')}}</br>{{Form::input('text','username')}}</td>
                                                                        
                                                                   </tr>
                                                                   <tr>
                                                                        <td>{{Form::label('password1','Password')}}</br>{{Form::input('password','password1')}}</td>
                                                                        <td>{{Form::label('password2','Verify Your Password Please:')}}</br>{{Form::input('password','password2')}}</td>
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