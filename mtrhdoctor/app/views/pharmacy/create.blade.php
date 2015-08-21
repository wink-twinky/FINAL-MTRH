
@extends('master.login')
@section('header')

{{ HTML::style('css/payment.css') }}

<title>User</title>

<div id="top">

<table id="createlogo">
<tr>
<td> <img src="{{URL::asset('image/awsome.png')}}"width="351px" height="37px" > </td>
</tr>
</table>
</div>


@section('content')


<div id="cover">
	

                <center>
                        {{Form::open(['route'=>'pharmacy.store'])}}
                                                           
                                                            <table id="stand" >
                                                              <center>
                                                              <tr>
                                                                  <td><center> <table><tr><td>{{Form::label('filenumber','File Number:')}}</br>{{Form::input('text','filenumber')}}</td><td>{{Form::label('username','User Name:')}}</br>{{Form::input('text','username')}}</td></tr></table> </center>    </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('diagnosis','Diagnosis:')}}</br>{{Form::textarea('diagnosis')}}</center>      </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td> <center>{{Form::label('prescription','Prescription :')}}</br>{{Form::textarea('prescription')}} </center>    </td>
                                                                   </tr>
                                                  
                                                                    <tr>
                                                                      <td><center> {{Form::label('medication','Medication:')}}</br>{{Form::textarea('medication')}}</center>     </td>
                                                                   </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('servedby','Served by:')}}</br>{{Form::input('text','servedby')}} </center>    </td>
                                                                   </tr>
                                                                   <tr>
                                                                       </br></br> <td><center>{{Form::submit('Save')}}</center></td>
                                                                   </tr>
                                                                 
                                            
              
                                                                </center>

                                                             </table>


                                                                                                              
                                                                                                              
                                                                                                              
                                                                                                              
                                                                                                              
                                                                                                              
                                                                                                              


                                                              
                                                              
                                                              
                        
                </center>


                        {{Form::close()}}
</div>

@stop

@section('footer')



@stop