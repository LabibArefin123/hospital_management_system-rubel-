@extends('adminlte::page')

@section('title', 'Add Appointment')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="mb-0">Create Appointment</h3>
        <a href="{{ route('appointments.index') }}" class="btn btn-sm btn-secondary">Back</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('appointments.store') }}" method="POST">
                @csrf
                <div class="row">

                    <div class="form-group col-md-6 mb-3">
                        <label>Patient *</label>
                        <select name="patient_id" class="form-control">
                            @foreach ($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label>Doctor *</label>
                        <select name="doctor_id" class="form-control">
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label>Date *</label>
                        <input type="date" name="appointment_date" class="form-control">
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label>Time *</label>
                        <input type="time" name="appointment_time" class="form-control">
                    </div>

                </div>
                <button class="btn btn-success px-4">Create Appointment</button>
            </form>
        </div>
    </div>
@stop
