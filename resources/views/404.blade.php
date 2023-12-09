@extends('blog.layouts.app')
@section('title', '404- Page Not Found')
@section('content')
    <main class="main">
        <!--Page404-->
        <section class="section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="page404">
                            <div class="page404-content">
                                <h3>Oops! This page can’t be found </h3>
                                <p>The page which you are looking for does not exist. </p>
                                <a href="{{ route('index') }}" class="btn-custom">Go back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

