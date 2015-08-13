
@extends('master.login')
@section('header')

{{ HTML::style('css/diagnosis.css') }}

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
                        {{Form::open(['route'=>'diagnosis.store'])}}
                                                           
                                                            <table id="stand" >
                                                              <center>
                                                              <tr>
                                                                  <td><center> {{Form::label('filenumber','File Number:')}}</br>{{Form::input('text','filenumber')}} </center>    </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('diagnosis','Diagnosis:')}}</br>{{Form::textarea('diagnosis')}}</center>      </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td> <center>{{Form::label('prescription','Prescription:')}}</br>{{Form::textarea('prescription')}} </center>    </td>
                                                                   </tr>
                                                  
                                                                    <tr>
                                                                      <td><center> {{Form::label('comments','Comments:')}}</br>{{Form::textarea('comments')}}</center>     </td>
                                                                   </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('doctor','Doctor:')}}</br>{{Form::input('text','doctor')}} </center>    </td>
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