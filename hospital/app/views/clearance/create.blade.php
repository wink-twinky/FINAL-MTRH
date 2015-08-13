
@extends('master.login')

@section('header')

{{ HTML::style('css/paymentvote') }}
{{ HTML::style('css/showdata.css') }}

<title>Clear Admission</title>

<div id="top">

<table id="logo">
<tr>
<td><img src="{{URL::asset('image/awsome.png')}}"width="351px" height="37px" > </td>
</tr>
</table>
</div>

@stop


@section('content')
</br>
</br>
<table>
	<tr>
<td>
	<article>
		<table >
			<tr>

				<td id="bd"></br>
		</br>
	</br>
</br>
</br>
</br>
</br></br>
            <?php echo '<form method="post" action="'.URL::to('admitionform').'">'; ?>
          
                      
              <table><tr>
              	     <td>{{Form::label('filenumber','File Number:')}}</br>{{Form::input('text','filenumber')}}</td>
              	    </tr>
              	    <tr>
              	    <td>
                      {{Form::submit('show Records')}}
			        </td>

			{{Form::close()}}


		</tr>	
		     </table>
	
    </article>

</td>
<td >
    <div id="cover">
	

                <center>
                        {{Form::open(['route'=>'clearance.store'])}}
                                                           
                                                            <table id="stand" >
                                                              <center>
                                                              <tr>
                                                                  <td><center> {{Form::label('filenumber','File Number:')}}</br>{{Form::input('text','filenumber')}} </center>    </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('clearancedate','Clearance Date:')}}</br>{{Form::input('text','clearancedate')}}</center>      </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td> <center>{{Form::label('comments','Doctors Comments:')}}</br>{{Form::textarea('comments')}} </center>    </td>
                                                                   </tr>
                                                                    <tr>
                                                                      <td> <center>{{Form::label('clearedby','Cleared by:')}}</br>{{Form::input('text','clearedby')}} </center>    </td>
                                                                   </tr>
                                                      
                                                            
                                                            
                                                                        
                                                                   <tr>
                                                                       </br></br> <td><center>{{Form::submit('Save')}}</center></td>
                                                                   </tr>
              
                                                                </center>

                                                             </table>

														
																							
																							
																							
                                                                                                              
                                                                                                              
                                                                                                              
                                                                                                              
                                                                                                              
                                                                                                              
                                                                                                              


                                                              
                                                              
                                                              
                        
                </center>


                        {{Form::close()}}
</div>
</td>

    </tr>

</table>
@stop


@section('footer')

@stop