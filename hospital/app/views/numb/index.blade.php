
@extends('master.login')

@section('header')

{{ HTML::style('css/fish.css') }}

<title>Welcome</title>

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
				<td id="bd"> <a href="http://localhost:8000/book"><img src="{{URL::asset('image/book.svg')}}" id="circle"></a>
			</br><h2>Book</h2></td>
			</tr>
			<tr>
				<td  id="bd"><a href="http://localhost:8000/consultation"><img src="{{URL::asset('image/consult.svg')}}" id="circle1"></a>
			</br><h4>Consultation</h4></br></td>
			</tr>
			<tr>
				<td  id="bd"><a href="http://localhost:8000/lab"><img src="{{URL::asset('image/Chart.svg')}}" id="circle1"></a>
			</br><h3>Lab</h3></td>
			</tr>
			<tr>
				<td  id="bd"><a href="http://localhost:8000/diagnosis"><img src="{{URL::asset('image/diagnosis.svg')}}" id="circle2"></a>
			</br><h5>Diagnosis</h5></td>
			</tr>
			<tr>
				<td  id="bd"><a href="http://localhost:8000/payment"><img src="{{URL::asset('image/payment.svg')}}" id="circle3"></a>
			</br><h3>Payment</h3></br></td>
			</tr>
			<tr>
				<td  id="bd"><a href="http://localhost:8000/pharmacy"><img src="{{URL::asset('image/phramcy.svg')}}" id="circle4"></a>
			</br><h1>Pharmacy</h1></br></td>
			</tr>
			<tr>
				<td  id="bd"><a href="http://localhost:8000/admission"><img src="{{URL::asset('image/admission.svg')}}" id="circle5"></a>
			</br><h3>Admission</h3></td>
			<tr>
				<td  id="bd"><a href="http://localhost:8000/clearance"><img src="{{URL::asset('image/clear.svg')}}" id="circle5"></a></br><h3>Clearance</h3></td>
			</tr>

		</table>
	
    </article>

</td>
<td >
    <div id="container">

         
         <img  id ="pak" src="{{URL::asset('image/is(13)')}}"width="1100px" height="568px" >

    </div>
</td>

    </tr>

</table>
@stop


@section('footer')

@stop