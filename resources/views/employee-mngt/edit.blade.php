@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 align="center" class="mt-5 bg-gray">Edit Employee Management</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="{{ route('uniqueemployee.update', $uniqueemployee->id) }}">
                {!! csrf_field() !!}
                @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <label>Firstname</label>
                            <input type="text" class="form-control" name="firstname" value="{{ $uniqueemployee->firstname }}">
                        </div>
                        <div class="col-md-6">
                            <label>Lastname</label>
                            <input type="text" class="form-control" name="lastname" value="{{ $uniqueemployee->lastname }}">
                        </div>
                    </div>
                    
                        <div class="col-md-12">
                            <label>Middlename</label>
                            <input type="text" class="form-control" name="middlename" value="{{ $uniqueemployee->middlename }}">
                        </div>
                       
                        <div class="col-md-12">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="{{ $uniqueemployee->address }}">
                        </div>
                    </div>
                    
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .form-area{
            padding: 40px;
            margin-top: 40px;
            background-color:#b3e5fc;
        }
        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }
        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush
