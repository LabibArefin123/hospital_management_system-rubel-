@extends('adminlte::page')

@section('title', 'Lifeline City Hospital Dashboard')

@section('content')

    <div class="container py-4">

        <h3 class="mb-4">Lifeline City Hospital Dashboard</h3>

        <div class="row">

            <!-- Total Doctors -->
            <div class="col-md-3 col-6">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h4>00</h4>
                        <p class="mb-0">Total Doctors</p>
                    </div>
                </div>
            </div>

            <!-- Total Patients -->
            <div class="col-md-3 col-6">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h4>00</h4>
                        <p class="mb-0">Total Patients</p>
                    </div>
                </div>
            </div>

            <!-- Total Appointments -->
            <div class="col-md-3 col-6 mt-3 mt-md-0">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h4>00</h4>
                        <p class="mb-0">Appointments</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-4">

            <!-- Today's Patients -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Today's Patients</h5>
                        <h4>00</h4>
                    </div>
                </div>
            </div>

            <!-- Today's Appointments -->
            <div class="col-md-6 mt-3 mt-md-0">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Today's Appointments</h5>
                        <h4>00</h4>
                    </div>
                </div>
            </div>

        </div>

    </div>

@stop
