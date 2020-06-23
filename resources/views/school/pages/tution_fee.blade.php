@extends('layouts.master')
@section('title','school tution_fee')
@section('content')
<h1 align="center">Tution Fees</h1>
<div align="center"><a class="btn btn-info" href="{{ route('create') }}" align="center">Create new Products</a></div>
<table border="0"class="table table-responsive table-hover">
		<tr>
			<th>SL</th>
			<th>Date</th>
			<th>stdName</th>
			<th>Section</th>
            <th>Receipt No</th>
			<th>Roll</th>
            <th>Months</th>
			<th>Re_Admission</th>
			<th>Guide</th>
			<th>Red_Crecent</th>
			<th>Current</th>
			<th>Dues</th>
            <th>Advance</th>
			<th>Exam_Fee</th>
			<th>School</th>
			<th>CCC</th>
			<th>Others</th>
			<th>Admit_Card</th>
            <th>Syllebus</th>
            <th>Total</th>
			<th>Action</th>
		</tr>
		@php $i=0; @endphp
		@foreach($tutionFees as $tutionFee)
		@php $i++ @endphp
		<tr >
			<td>{{ $i }}</td>
			<td>{{$tutionFee->sn}}</td>
			<td>{{$tutionFee->date}}</td>
			<td>{{$tutionFee->stdName}}</td>
			<td>{{$tutionFee->section}}</td>
            <td>{{$tutionFee->receiptNo}}</td>
			<td>{{$tutionFee->roll}}</td>
			<td>{{$tutionFee->months}}</td>
			<td>{{$tutionFee->re_admission}}</td>
            <td>{{$tutionFee->guide}}</td>
			<td>{{$tutionFee->red_crecent}}</td>
			<td>{{$tutionFee->current}}</td>
			<td>{{$tutionFee->dues}}</td>
            <td>{{$tutionFee->advance}}</td>
			<td>{{$tutionFee->exam_fee}}</td>
			<td>{{$tutionFee->school}}</td>
			<td>{{$tutionFee->ccc}}</td>
            <td>{{$tutionFee->others}}</td>
			<td>{{$tutionFee->admit_card}}</td>
			<td>{{$tutionFee->syllebus}}</td>
			<td>{{$tutionFee->total}}</td>
	        <td>
            <a class="btn btn-success btn-sm" href="{{route('edit', $tutionFee->id)}}">Edit</a><br />
            <form class="form-inline" action="{{route('delete',$tutionFee->id)}}" method="post">
				{{ csrf_field() }}
				<input type="submit" class="btn btn-danger btn-sm" value="Delete"/></form>
        </td>
    </tr>
    @endforeach
</table>
	@endsection