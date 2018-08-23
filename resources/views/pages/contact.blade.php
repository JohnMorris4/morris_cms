@extends('main')

@section('content')

    <div class="container contact">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1>Contact Me</h1>
                    <hr>
                <form>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">

                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Subject:</label>
                        <textarea id="message" class="form-control" name="message" placeholder="Subject">Type Your message here... </textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success " value="Send Message">
                    </div>
                </form>
        </div>
    </div>

@endsection
