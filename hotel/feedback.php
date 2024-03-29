<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--Local CSS-->
        <link rel="stylesheet" type=text/css href="css/aboutStyle.css">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">
        <title>Profile</title>
    </head>
    <body>
        <?php
            include_once "header.php";

            $hotel_id = $_GET["hotel_id"];
            
            //echo $hotelier_id;
        ?>
        <main class="container mb-3">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Rate and Comment</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg">
                                <form action="rateComment.php?hotel_id=<?=$hotel_id?>" method="POST">
                                    <div class="card mb-3 bg-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel overall rating</h5>
                                                        <select class="form-control" name="rate" id="rate" required>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option selected>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Comments</h5>
                                                        <textarea class="form-control form-control-lg" name="comment" id="comment" placeholder="e.g luxurious, good cleaniness..."></textarea>                                                        
                                                    </div>
                                                </div>                                                
                                            </div>                                                                              
                                        </div>
                                    </div>                                                                        
                                    <div class="row">
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>                                            
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php
            include_once "footer.php";
        ?>
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    </body>
</html>