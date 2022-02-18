<!DOCTYPE html>
<html>
    <head>
        <title>Administrator Menu</title>
        @include('includes.script')
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4 offset-3">
                    <figure class="text-center m-5">
                    <p class="h3">Administrator Login</p>
                    </figure>
                    @if(\Session::has('error'))
                        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                    @endif
                    <form method="post" action="{{ route('admin.login') }}">
                        @csrf
                                <div class="row mt-3">
                                    <input type="email" style="border-radius: 50px" class="form-control" id="email" name="email" placeholder="Input email address">
                                </div>
                                <div class="row mt-3">
                                    <input type="password" style="border-radius: 50px" class="form-control" id="password" name="password" placeholder="Input password">
                                </div>
                                <div class="row mt-3">
                                <button type="submit" class="btn btn-primary" style="border-radius: 50px">Submit</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>