@extends('layouts.master')
@section('title','school create')
@section('content')

	<h2 align="center">Create new student</h2>
<div class="container">
<form class="form-horizontal" action="{{ route('store') }}" method="post">
	{{ csrf_field() }} 


	 <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="sn">SL No:</label>
    <input type="text" class="form-control" id="sn" placeholder="Ener Serial No" name="sn" required>
  </div>


  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="date">Date:</label>
    <input type="text" class="form-control" id="date" placeholder="Ener date" name="date" >
  </div>

  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="stdName">Student Name:</label>
    <input type="text" class="form-control" id="stdName" placeholder="Ener your name" name="stdName" >
  </div>


  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="section">Section:</label>
    <input type="text" class="form-control" id="section" placeholder="Ener section" name="section" >

  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="receiptNo">Receipt No:</label>
    <input type="text" class="form-control" id="receiptNo" placeholder="Ener your receipt No" name="receiptNo" >
  </div>


  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="roll">Roll:</label>
    <input type="text" class="form-control" id="roll" placeholder="Ener roll" name="roll" >

  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="months">Months:</label>
    <input type="text" class="form-control" id="stdName" placeholder="Ener months" name="months" >
  </div>


  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="re_admission">Section:</label>
    <input type="text" class="form-control" id="re_admission" placeholder="Ener re-admission fees" name="re_admission" >
  </div>
  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="guide">Guide:</label>
    <input type="text" class="form-control" id="guide" placeholder="Ener guide fee" name="guide" >
  </div>


  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="red_crecent">Red_Crecent:</label>
    <input type="text" class="form-control" id="red_crecent" placeholder="Ener red_crecent fee" name="red_crecent" >
  </div>

  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="dues">current:</label>
    <input type="text" class="form-control" id="current" placeholder="Ener current fee" name="current" >
  </div>

  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="dues">Dues:</label>
    <input type="text" class="form-control" id="dues" placeholder="Ener dues" name="dues" >
  </div>

  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="advance">Advance:</label>
    <input type="text" class="form-control" id="advance" placeholder="Ener advance fee" name="advance">
  </div>

  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="exam_fee">Exam Fee:</label>
    <input type="text" class="form-control" id="exam_fee" placeholder="Ener Exam_fee" name="exam_fee" >
  </div>


  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="School">Anual School Fee:</label>
    <input type="text" class="form-control" id="school" placeholder="Enter anual school fee" name="school" >
  </div>

  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="ccc">Anual Corporation Fee:</label>
    <input type="text" class="form-control" id="ccc" placeholder="Ener anual corporation fee" name="ccc" >
  </div>


  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="others">Others Fee:</label>
    <input type="text" class="form-control" id="others" placeholder="Ener others fees" name="others" >

  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="admit_card">Admit_Card:</label>
    <input type="text" class="form-control" id="admit_card" placeholder="Enter admit_card fee" name="admit_card" >
  </div>

  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="syllebus">Syllebus:</label>
    <input type="text" class="form-control" id="syllebus" placeholder="Ener syllebus fee" name="syllebus" >
  </div>


  <div class="form-group col-sm-offset-2 col-sm-10">
    <label class="col-sm-10" for="total">Total:</label>
    <input type="text" class="form-control" id="total" placeholder="Ener total" name="total" >
  </div>

  <button type="submit" class="btn btn-primary">Ragister Student</button>
</form>
</div>
@endsection

