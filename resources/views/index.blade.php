<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript" src="{{ URL::asset('js/solve.js') }}"></script>

    <title>PHP Calculator with AJAX</title>

</head>
<body>
<h3 class="text-center">PHP Calculator with AJAX</h3>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form>
                <div class="form-group">
                    <input type="hidden" id="token" value="{{ csrf_token() }}">
                    <input type="text" class="form-control" id="output" readonly>
                </div>
            </form>
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">7</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">8</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">9</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">*</button>
                </div>

            </div>

            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">4</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">5</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">6</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">/</button>
                </div>

            </div>

            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">1</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">2</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">3</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">-</button>
                </div>

            </div>

            <div class="btn-group btn-group-justified" role="group" aria-label="...">

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">0</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">C</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">=</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">+</button>
                </div>

            </div>

        </div>
    </div>
</div>
</body>


</html>
