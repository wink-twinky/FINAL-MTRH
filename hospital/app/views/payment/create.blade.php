
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
                        {{Form::open(['route'=>'payment.store'])}}
                                                           
                                                            <table id="stand" >
                                                              <center>
                                                              <tr>
                                                                  <td><center> {{Form::label('filenumber','File Number:')}}</br>{{Form::input('text','filenumber')}} </center>    </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('consultationfee','Consultationfee:')}}</br>{{Form::input('text','consultationfee')}}</center>      </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td> <center>{{Form::label('labfee','Labfee :')}}</br>{{Form::input('text','labfee')}} </center>    </td>
                                                                   </tr>
                                                  
                                                                    <tr>
                                                                      <td><center> {{Form::label('medicationfee','Medicationfee:')}}</br>{{Form::input('text','medicationfee')}}</center>     </td>
                                                                   </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('admissionfee','Admissionfee:')}}</br>{{Form::input('text','admissionfee')}} </center>    </td>
                                                                   </tr>
                                                                    
                                                                    <tr>
                                                                      <td><center> {{Form::label('totalcharges','Totalcharges:')}}</br>{{Form::input('text','totalcharges')}}</center>     </td>
                                                                   </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('paid','Paid:')}}</br>{{Form::input('text','paid')}} </center>    </td>
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