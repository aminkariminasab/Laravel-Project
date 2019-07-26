<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <!-- Bootstrap -->
    <link href="{{ url('assets').'/' }}css/bootstrap-4.2.1.css" rel="stylesheet">
</head>
<body>
<input type="hidden" id="root" value="{{ url('/') }}">
@yield('content')
<footer class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>Copyright © Laravel Project. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ url('assets').'/' }}js/jquery-3.3.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ url('assets').'/' }}js/popper.min.js"></script>
<script src="{{ url('assets').'/' }}js/bootstrap-4.2.1.js"></script>
<script src="{{ url('assets').'/' }}js/script.js"></script>
</body>
</html>
