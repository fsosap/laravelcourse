@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Confirmation</div>
                <div class="card-body">
                    Your product was created!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
