
@extends('master.login')
@section('header')

{{ HTML::style('css/consultation.css') }}

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
</br>
</br>
</br>
</br>
</br>
</br>

<center>

<div id="cover">
	

                <center>
                        {{Form::open(['route'=>'consultation.store'])}}

                                                           
                                                            <table id="stand" >
                                                                   <tr>
                                                                    <td rowspan="7" id="w"><center>
                                                                      
                                                                         <div id="help"> <img src="{{URL::asset('image/help.svg')}}"width="80px" height="80px" ></br><center><p>Consultation</p></center></div> 

                                                                      </center></td>
                                                                   </tr>
                                                                   <tr>
                                                                      <td><center> {{Form::label('filenumber','File Number:')}}</br>{{Form::input('text','filenumber')}}     </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('symptoms','Symptoms:')}}</br>{{Form::textarea('symptoms')}}      </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td> <center>{{Form::label('doctor','Doctor:')}}</br>{{Form::input('text','doctor')}}     </td>
                                                                   </tr>
                                                                   <tr>
                                                                       </br></br> <td><center>{{Form::submit('schedule')}}</center></td>
                                                                   </tr>


                                                             </table>
                        
              


                        {{Form::close()}}
                     </center>
</div>
</center>

@stop

@section('footer')



@stop