
@extends('master.login')
@section('header')

{{ HTML::style('css/vote.css') }}

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
                        {{Form::open(['route'=>'book.store'])}}
                                                           
                                                            <table id="stand" >
                                                                  
                                                                   <tr>
                                                                      <td><center> {{Form::label('filenumber','File Number:')}}</br>{{Form::input('text','filenumber')}}     </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('name','Name:')}}</br>{{Form::input('text','name')}}      </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td> <center>{{Form::label('visit2','Visiting Place:')}}</br>{{Form::input('text','visit2')}}     </td>
                                                                   </tr>
                                                  
                                                                    <tr>
                                                                      <td><center> {{Form::label('time','Visiting Time:')}}</br>{{Form::input('text','time')}}     </td>
                                                                   </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('reason','Reason For Visit:')}}</br>{{Form::input('text','reason')}}     </td>
                                                                   </tr>
                                                    
                                                                   <tr>
                                                                       </br></br> <td><center>{{Form::submit('schedule')}}</center></td>
                                                                   </tr>
                                                                    <tr>
                                                                    <td rowspan="7" id="w"><center>
                                                                      
                                                                          <img src="{{URL::asset('image/help.svg')}}"width="50px" height="50px" > </br>
                                                                          <img src="{{URL::asset('image/booking.png')}}"width="617px" height="227px" >

                                                                      </center></td>
                                                                   </tr>


                                                             </table>
                        
                </center>


                        {{Form::close()}}
</div>

@stop

@section('footer')



@stop