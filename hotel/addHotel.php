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

            $hotelier_id = $_GET["hotelier_id"];
            
            //echo $hotelier_id;
        ?>
        <main class="container mb-3">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Please enter your hotel details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="addHotelConfirm.php?hotelier_id=<?=$hotelier_id?>" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel name</h5>
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="e.g MyHotel, iHotel" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel star rating</h5>
                                                        <select class="form-control" name="hotel-star" id="hotel-star">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel location</h5>
                                                        <input type="text" class="form-control" name="location" id="location" placeholder="e.g Kuala Lumpur, Penang, Melacca" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel description</h5>
                                                        <input type="text" class="form-control" name="des" id="des" placeholder="e.g luxurious, good cleaniness..." required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel info</h5>
                                                        <input type="text" class="form-control" name="info" id="info" placeholder="e.g background of the hotel, history of the hotel" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel check-in time</h5>
                                                        <input type="text" class="form-control" name="check-in" id="check-in" placeholder="Check-in time of your hotel" onfocus="(this.type='time')" onblur="(this.type='text')" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel check-out time</h5>
                                                        <input type="text" class="form-control" name="check-out" id="check-out" placeholder="Check-out time of your hotel" onfocus="(this.type='time')" onblur="(this.type='text')" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel price</h5>
                                                        <input type="number" class="form-control" name="price" id="price" placeholder="Lowest or average" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Main hotel image</h5>
                                                        <input type="file" class="form-control-file" name="main-img" id="main-img" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Supporting hotel image</h5>
                                                        <input type="file" class="form-control-file" name="hotel-img-1" id="hotel-img-1" >
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Supporting hotel image</h5>
                                                        <input type="file" class="form-control-file" name="hotel-img-2" id="hotel-img-1" >
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Supporting hotel image</h5>
                                                        <input type="file" class="form-control-file" name="hotel-img-3" id="hotel-img-1" >
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Supporting hotel image</h5>
                                                        <input type="file" class="form-control-file" name="hotel-img-4" id="hotel-img-1" >
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Supporting hotel image</h5>
                                                        <input type="file" class="form-control-file" name="hotel-img-5" id="hotel-img-1" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5 class="card-title">Hotel detail</h5>
                                                <input type="text" class="form-control" name="detail" id="detail" placeholder="Detail of your hotel e.g sector that you are proud of, speciality of your hotel" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel address</h5>
                                                        <input type="text" class="form-control" name="address" id="address" placeholder="Address of your hotel" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel contact</h5>
                                                        <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact of your hotel" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <button type="submit" class="btn btn-primary">Add hotel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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