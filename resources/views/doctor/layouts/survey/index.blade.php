@extends('doctor.app')
@section('title' , 'Sueveys')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-5">
            <div class="d-flex justify-content-end mt-4">                  
                <a href="/doctor/survey/create" class="btn btn-primary "
                    title="create survey for this patient">Create Survey <i class="fas fa-arrow-right"></i></a>

            </div>
            
            <div class="row">

                <div class="col-md-12">
                    <h3 class="mt-1 mb-4">Surveys</h3>
                    
                    @forelse ($surveys as $survey )
                        <div class="card mb-3">
                            <div class="card-header">
                            <a href="/doctor/survey/{{$survey->id}}"  class="text-decoration-none"><h5>{{$survey->name}}</h5></a>
                            </div>
                            <div class="card-body">
                            <p>{{$survey->description}}</p>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-info">
                            <span>No Surveys.</span>
                        </div>
                    @endforelse
            
                </div>
            </div>
        </div>
    </main>


@endsection
