@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-4 justify-content-center">
            <div class="col-md-8">
              
               
                @guest
                    <div class="mt-5">
                        <a href="{{ url('/register') }}"> <button class="btn btn-primary">Register as Patient</button></a>
                        <a href="{{ url('/login') }}"><button class="btn btn-success">Login</button></a>
                    </div>
                @endguest
            </div>
        </div>

        {{-- Display doctors --}}
        <div class="card">
            <div class="card-body">
                <div class="card-body table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Expertise</th>
                                <th>Book</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($doctors as $key=>$doctor)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><img src="{{ asset('images') }}/{{ $doctor->image }}" class="table-user-thumb" width="50" height="50" style="border-radius:50%"
                                                alt="">
                                        </td>
                                    <td>{{ $doctor->name }}</td>
                                    <td>{{ $doctor->department }}</td>
                                    @if (Auth::check() && auth()->user()->role->name == 'patient')
                                        <td>
                                            <a href="{{ route('create.appointment', [$doctor->user_id, $doctor->date]) }}"><button
                                                    class="btn btn-primary">Appointment</button></a>
                                        </td>
                                    @else
                                        <td>For patients ONLY</td>
                                    @endif
                                </tr>
                            @empty
                                <td>No doctors available</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection
