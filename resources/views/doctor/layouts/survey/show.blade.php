@extends('doctor.app')
@section('title' , 'Survey')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-5">
            <div class="pull-right btn-group">
                
            <a href="/doctor/survey/{{$survey->id}}/question/create" class="btn btn-primary "
                    title="create survey for this patient">Create Question <i class="fas fa-arrow-right"></i></a>

            </div>
            <h1 class="mt-4">Survey</h1>
            <ol class="breadcrumb mb-4" style="background: none;">
                <li class="breadcrumb-item"><a href="/doctor">Dashboard</a></li>
                <li class="breadcrumb-item active">Survey</li>
            </ol>

            <div class="row">

                <div class="col-md-12">
                    <h3 class="mt-1 mb-4">Survey`s Questions</h3>
                
                    @forelse ($survey->questions as $question)
                        <div class="card mt-3">
                        <div class="card-header">
                        <h5 class="text-muted">{{($loop->index + 1)}} - {{$question->question}} <span class="badge badge-success pull-right">{{$question->responses->count()}}</span></h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach ($question->answers as $answer )
                            <li class="list-group-item"><span class="text-success">{{($loop->index + 1)}} -</span> {{$answer->answer}} <span class="badge badge-info pull-right">{{$answer->responses->count()}}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        </div>

                    @empty
                        <p class="text-center alert alert-info">No Questions</p>
                    @endforelse
                </div>

            </div>
        </div>
    </main>


@endsection
