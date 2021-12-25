@extends('doctor.app')

@section('title' , 'Add Question')

@section('content')


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Survey / Create Question</h1>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Survey</h5>
                            @if(session()->has('questioncreated'))
                                    
                            {!!session('questioncreated')!!}
                        
                        @endif
                            
                        </div>
                        <div class="modal-body">
                        <form action="/doctor/survey/{{$survey->id}}/question/store" method="POST" id="surveyform">
                                @csrf

                                <div class="survey">
                                    <div class="form-group mb-2 question"><label>Question</label> <input type="text"
                                            name="question[question]" class="form-control" placeholder="Question..."></div>
                                    
                                        <div class="form-group mb-2 answer"><label>Answer</label> <input
                                                type="text" name="answer[][answer]" placeholder="Answer..."
                                                class="form-control mb-2"></div>

                                        
                                    
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-success" id="addfield"><i class="fas fa-plus"></i> Add
                                Field</button>
                            <button onclick="this.disabled='disabled';document.forms[1].submit();" type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>


    @endsection
