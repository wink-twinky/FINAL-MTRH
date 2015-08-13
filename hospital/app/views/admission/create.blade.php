
@extends('master.login')

@section('header')

{{ HTML::style('css/paymentvote') }}
{{ HTML::style('css/showdata.css') }}

<title>User</title>

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
                        {{Form::open(['route'=>'admission.store'])}}
                                                           
                                                            <table id="stand" >
                                                              <center>
                                                              <tr>
                                                                  <td><center> {{Form::label('filenumber','File Number:')}}</br>{{Form::input('text','filenumber')}} </center>    </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('admissiondate','Admission Date:')}}</br>{{Form::input('text','admissiondate')}}</center>      </td>
                                                                    </tr>

                                                                    <tr>
                                                                      <td> <center>{{Form::label('wing','Word Wing :')}}</br>{{Form::input('text','wing')}} </center>    </td>
                                                                   </tr>
                                                  
                                                                    <tr>
                                                                      <td><center> {{Form::label('word','Word:')}}</br>{{Form::input('text','word')}}</center>     </td>
                                                                   </tr>

                                                                    <tr>
                                                                      <td><center> {{Form::label('bednumber','Bed number:')}}</br>{{Form::input('text','bednumber')}} </center>    </td>
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