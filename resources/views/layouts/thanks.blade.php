@extends('app')
@section('title' , 'Thanks')

@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-5">
                <div class="login-wrap p-4 p-md-5">

                    <h3 class="text-center mb-4">

                        @if(session()->has('SurveyFinished'))

                        {!!session('SurveyFinished')!!}

                        @endif
                    </h3>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
