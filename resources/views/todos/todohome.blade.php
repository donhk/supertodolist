@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <h1>What do you need to do next?</h1>
                    <form method="post" action="#">
                        @csrf
                        <input type="text" name="title">
                        <input type="submit" name="submit">
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
