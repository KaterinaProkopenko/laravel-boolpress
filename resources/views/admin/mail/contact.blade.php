@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 mx-auto">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1 class="my-3"> Contact us: </h1>
                <form action="{{ route('admin.sendContact') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="author">Write your name</label>
                        <input class="form-control" type="text" name="author" id="author">
                    </div>

                    <div class="mb-3">
                        <label for="authorMail">Write your email</label>
                        <input class="form-control" type="email" name="authorMail" id="authorMail">
                    </div>

                    <div class="mb-3">
                        <label for="authorMessage">Write your message</label>
                        <textarea class="form-control" id="authorMessage" type="text" name="authorMessage" rows="7"></textarea>
                    </div>

                    <button class="btn btn-lg btn-primary" type="submit">Send message</button>
                </form>
            </div>
        </div>
    </div>
@endsection