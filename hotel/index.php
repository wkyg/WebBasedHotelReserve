<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--Local CSS-->
        <link rel="stylesheet" type=text/css href="css/indexStyle.css">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">
        <title>Hotel Reservation</title>
    </head>
    <body>
        <?php
            include_once "header.php";
        ?>
        <main class="container text-center">
            <form action="search.php" method="GET">
                <div class="container">
                    <!--Title-->
                    <div class="row">
                        <div class="col-lg">
                            <div class="jumbotron bg-transparent">
                                <h1 class="display-4">Hotel Reservation</h1>
                                <h6 class="lead">Your satisfaction, our motivation</h6>        
                            </div>
                        </div>
                    </div>
                    <!--Form box-->
                    <!--Search box-->
                    <div class="row">
                        <div class="col-lg">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="searchForm" name="search" placeholder="Enter your a location or hotel name..." required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Date-->
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <!--<input type="date" class="form-control form-control-lg" placeholder="Date-in">-->
                                <input type="text" class="form-control form-control-lg" name="datein" placeholder="Check in date" onfocus="(this.type='date')" onblur="(this.type='text')" >
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <!--<input type="date" class="form-control form-control-lg">-->
                                <input type="text" class="form-control form-control-lg" name="dateout" placeholder="Check out date" onfocus="(this.type='date')" onblur="(this.type='text')" >
                            </div>
                        </div>
                    </div>
                    <!--Guests-->
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <input type="number" class="form-control form-control-lg" placeholder="Adults" id="stepper_0" name="adults" step="1" min="0">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-light" onclick="step()">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-light" onclick="downStep()">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <input type="number" class="form-control form-control-lg" placeholder="Children" id="stepper_1" name="children" step="1" min="0">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-light" onclick="step_1()">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-light" onclick="downStep_1()">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <input type="number" class="form-control form-control-lg" placeholder="Room" id="stepper_2" name="room" step="1" min="0">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-light" onclick="step_2()">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-light" onclick="downStep_2()">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--Search button-->
                    <div class="row mb-5">
                        <div class="col-sm">
                            <div class="form-group">
                                <button type="submit" class="btn btn-light btn-lg btn-block">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>
        <?php
            include_once "footer.php";
        ?>
        <script>
            function step(){
                    document.getElementById("stepper_0").stepUp(1);
                } 
            function step_1(){
                document.getElementById("stepper_1").stepUp(1);
            }           
            function step_2(){
                document.getElementById("stepper_2").stepUp(1);
            }
            //------------//
            function downStep(){
                document.getElementById("stepper_0").stepDown(1);
            }
            function downStep_1(){
                document.getElementById("stepper_1").stepDown(1);
            }
            function downStep_2(){
                document.getElementById("stepper_2").stepDown(1);
            }
        </script>
    </body>
</html>