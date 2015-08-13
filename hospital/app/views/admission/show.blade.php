
@extends('session.static')

@section('header')

{{ HTML::style('css/vote.css') }}

<title>User</title>

<div id="top">

<table id="logo">
<tr>
<td><img src="{{URL::asset('image/details.svg')}}" width="107px" height="100px"  ></td>
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
               <td><img src="{{URL::asset('image/mvote.png')}}" width="420px" height="50px"  ></td>  
				 </tr>
		</table>
	
    </article>

</td>
<td >
    <div id="container">
     <table>
      <tr>
           <td>
           	<table>
           		<tr>
                     <th colspan ="4">Patient Hospital  Admission Details</th>
           		</tr>
           		<tr>
                    <td> <ul>

                          <li>{{Form::label('Admission Date','Admission Date:')}}{{$Admission->admissiondate}}</li>
                          <li>{{Form::label('Wing','Wing:')}}{{$Admission->wing}}</li>
                          <li>{{Form::label('Word','Word:')}}{{$Admission->word}}</li>
                          <li>{{Form::label('Bed Number','Bed Number:')}}{{$Admission->bednumber}}</li> 

                     </ul></td>
            
           		</tr>
              <tr>
                <th colspan="4">Patient Details</th>     
              </tr>
              <tr>
                 <td>
                      <ul>
                            <li>{{Form::label('First Name','First Name:')}}{{$Client ->firstname}}</li>
                            <li>{{Form::label('NHIF Card','NHIF Card:')}}{{$Client ->nhif}}</li>
                            <li>{{Form::label('Next Of Keen','Next Of Keen:')}}{{$Client ->keen}}</li>
                            <li>{{Form::label('Keens Mobile Number','Keens Mobile NUmber:')}}{{$Client ->keenmobile}}</li> 

                      </ul>
                 </td>
              </tr>
              <tr>
                 <th colspan="4">Patient Diagnosis Details</th>
              </tr>
              <tr>
                  <td>
                       <ul>
                            <li>{{Form::label('Diagnosis','Diagnosis:')}}{{$Diagnosis ->diagnosis}}</li>
                            <li>{{Form::label('Prescription','Prescription:')}}{{$Diagnosis ->prescription}}</li>
                            <li>{{Form::label('comments','Doctors Comments:')}}{{$Diagnosis ->comments}}</li>
                            <li>{{Form::label('Diagnosed by','Diagnosed by:')}}{{$Diagnosis ->doctor}}</li> 

                      </ul>
                  </td>
              </tr>
              <tr>
                  <th colspan="4">Pharmacy Details</th>
              </tr>
              <tr>
                  <td>
                            <li>{{Form::label('Prescription','Prescription:')}}</br>{{$Pharmacy ->prescription}}</li>
                            <li>{{Form::label('Medication','Medication:')}}</br>{{$Pharmacy ->medication}}</li>
                            <li>{{Form::label('servedby','Served By:')}}</br>{{$Pharmacy ->servedby}}</li>
                  </td>
              </tr>
              <tr>
                  <th colspan="4">Payment Details</th>
              </tr>
              <tr>
                  <td>
                            <li>{{Form::label('consultationfee','Consultation fee:')}}{{$Payment ->consultationfee}}</li>
                            <li>{{Form::label('labfee','lab fee:')}}{{$Payment ->labfee}}</li>
                            <li>{{Form::label('Medicationfee','Medication fee:')}}{{$Payment ->medicationfee}}</li>
                  </td>
              </tr>
           	</table>
           </td>  
      </tr>
      <tr>

      </tr>
      <tr>

      </tr>
      <tr>

      </tr>
      <tr>

      </tr>
      <tr>

      </tr>

     </table>
      


    </div>
</td>

    </tr>

</table>
@stop


@section('footer')

@stop