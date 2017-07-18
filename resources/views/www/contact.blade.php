@extends('layouts.app')

@section('content')
    <div class="container">
    <form class="form-horizontal">

            <h1>Contact Form</h1>
        <div class="well well-lg clearfix">
            <div class="form-group">
                <label for="inputName" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputName" placeholder="Name" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Your Email Address" required="required">
                </div>
            </div>

            <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">Message</label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="textArea" required="required"></textarea>
                    <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                </div>
            </div>

                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </div>

    </form>
    </div>
@endsection