@extends('layouts.main')
@section('container')

<a href="#" class=" text-decoration-none"><h1 class="card card-body border-primary text-primary text-center shadow mt-3 mb-3" style="width: 28rem font">CONTAC US</h1></a>

  
        <input type="text" id="contact_form_name" style="width: 50rem; height: 50px;" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
        <div class="mt-3" style="margin-bottom: 150px">
            <input type="text" id="contact_form_email" style="width: 50rem; height: 50px;" class=" contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
        </div>

@endsection