@extends('doctor.app')

@section('title' , 'Add Survey')

@section('content')


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid ">
            <h1 class="mt-4">Survey</h1>
            <ol class="breadcrumb mb-4" style="background: none;">
                <li class="breadcrumb-item active">Create New survey</li>
            </ol>

            <div class="row">
                <div class="col-md-12">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Survey</h5>

                            @if(session()->has('surveycreated'))
                                    
                            {!!session('surveycreated')!!}
                        
                        @endif
                            <a href="/doctor/surveys" class="btn btn-primary">Surveys <i
                                    class="fas fa-arrow-right"></i></a>
                                  
                        </div>
                        <div class="modal-body">
                            <form action="/doctor/survey/store" method="post" id="surveyform">
                                @csrf

                                <div class="survey">
                                    <div class="form-group mb-2 question"><label>Name</label> <input type="text"
                                            name="name" class="form-control" placeholder="Name..."></div>
                                    <div class="form-group mb-2 question"><label>Description</label> <input type="text"
                                            name="description" class="form-control" placeholder="Description..."></div>

                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">

                            <button  onclick="this.disabled='disabled';document.forms[1].submit();"  class="btn btn-primary" type="submit">Submit</button>
                        </div>    
                    </div>
                    
                </div>
            </div>

        </div>


</main>

@endsection
