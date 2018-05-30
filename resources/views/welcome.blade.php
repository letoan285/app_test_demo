<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <div>
            <header>
              <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container">
                  <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" title="This is the rules of app">Rules</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </header>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card card-default">
                            <div class="card-header">Welcome to my app</div>
                            <div class="card-body">
                                <h4>Please enter the input to have fun !</h4><hr>
                                <form action="{{ route('games.getResult') }}" method="POST">
                                    {{ csrf_field()}}
                                    <div class="row">
                                        <div class="col-5"><strong>Enter Text</strong></div>
                                        <div class="col-7">
                                            <input name="text" type="text" class="form-control" placeholder="Type your Text ...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5"><strong class="demo">Enter Sub Text</strong></div>
                                        <div class="col-7 mt-2">
                                            <input type="text" class="form-control" placeholder="Type your sub-text ..." name="sub_text">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-5"></div>
                                        <div class="col-2">
                                            <button class="btn btn-primary" type="submit">Click to get the result</button>
                                        </div>
                                        <div class="col-2"></div>
                                        <div class="col-3">
                                            <select class="form-control" id="" name="case_sensitive">
                                                <option value="0">Case-insensitive</option>
                                                <option value="1">Case-sensitive</option>
                                            </select>
                                        </div>
                                    </div><hr>
                                </form>

                                <div class="row">
                                    <div class="col-4"><p>The text: </p></div>
                                    <div class="col-8 text-danger">the result</div>
                                </div>

                                <div class="row">
                                    <div class="col-4">The sub - text: </div>
                                    <div class="col-8 text-success"></div>
                                </div><br>

                                <div class="row">
                                    <div class="col-4">The matching positions: </div>
                                    <div class="col-8">the result</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
