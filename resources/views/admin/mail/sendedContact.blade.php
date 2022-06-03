@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-4 rounded sended-m mx-auto border border-success d-flex justify-content-evenly align-items-center">
                <div class="bg-success rounded-circle check-container">
                    <i class="fa-solid fa-check fs-1 text-light"></i>
                </div>
                <div>
                    <h3>Message was sent correctly</h3>
                </div>
            </div>
        </div>
    </div>
@endsection