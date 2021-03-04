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
        <title>Change photo</title>
    </head>
    <body>
        <?php
            include_once "header.php";

            $room_id = $_GET["room_id"];            
        ?>
        <main class="container mb-3">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Please select new photo for your room</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg">
                                <form action="editHotelPhotoConfirm.php?room_id=<?=$room_id?>" method="POST" enctype="multipart/form-data">
                                    <div class="card mb-3 bg-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Room image</h5>
                                                        <input type="file" class="form-control-file" name="room-img" id="room-img" required>
                                                    </div>
                                                </div>
                                            </div>                                              
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Change</button>
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