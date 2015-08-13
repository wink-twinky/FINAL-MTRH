
@extends('master.login')
@section('header')

{{ HTML::style('css/lab.css') }}

<title>User</title>

<div id="top">

<table id="createlogo">
<tr>
<td> <img src="{{URL::asset('image/awsome.png')}}"width="351px" height="37px" > </td>
</tr>
</table>
<div id="lt"><img src="{{URL::asset('image/about.svg')}}"width="60px" height="60px" > 
</div>
</div>


@section('content')

<center>

<div id="cover">
  

                <center>
                        {{Form::open(['route'=>'lab.store'])}}

                                                           
                                                            <table id="stand" >
                                                                   
                                                                      <td><center> {{Form::label('filenumber','File Number:')}}</br>{{Form::input('text','filenumber')}} </center>    </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('symptoms','Symptoms:')}}</br>{{Form::textarea('symptoms')}}</center>      </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td> <center>{{Form::label('test','Test DOne:')}}</br>{{Form::input('text','test')}} </center>    </td>
                                                                   </tr>
                                                  
                                                                    <tr>
                                                                      <td><center> {{Form::label('observation','Observations:')}}</br>{{Form::input('text','observation')}}</center>     </td>
                                                                   </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('hivaids','Hiv And Aids Resuilts:')}}</br>{{Form::input('text','hivaids')}} </center>    </td>
                                                                   </tr>
                                                                     <tr>
                                                                      <td><center> {{Form::label('resuilt','Lab Resuilts:')}}</br>{{Form::input('text','resuilt')}} </center> </td>
                                                                   </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('technician','Technicians Name:')}}</br>{{Form::input('text','technician')}}</center>     </td>
                                                                   </tr>
                                                    
                                                                   <tr>
                                                                       </br></br> <td><center>{{Form::submit('Save')}}</center></td>
                                                                   </tr>
              


                                                             </table>
                        
              


                        {{Form::close()}}
                     </center>
</div>
</center>

@stop

@section('footer')



@stop