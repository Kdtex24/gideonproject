<?php
if(isset($_POST['submit'])){
    $temperature = $_POST['temperature'];
    $cough = isset($_POST['cough']) ? $_POST['cough'] : 0;
    $shortness_of_breath = isset($_POST['shortness_of_breath']) ? $_POST['shortness_of_breath'] : 0;
    $fatigue = isset($_POST['fatigue']) ? $_POST['fatigue'] : 0;
    $body_aches = isset($_POST['body_aches']) ? $_POST['body_aches'] : 0;
    $sore_throat = isset($_POST['sore_throat']) ? $_POST['sore_throat'] : 0;
    $diarrhea = isset($_POST['diarrhea']) ? $_POST['diarrhea'] : 0;

    // Check if the user has any COVID-19 symptoms
    if ($cough || $shortness_of_breath || $fatigue || $body_aches || $sore_throat || $diarrhea) {
        switch (true) {
            case ($temperature >= 100.4):
                $output = "You Are Diagnose of COVID-19. Please contact info@ncdc.gov.ng For Immediate Attention.";
                break;
            case ($temperature >= 99.5 && $temperature < 100.4):
                $output = "You Have a mild fever. Please see a doctor for diagnosis.";
                break;
            default:
                $output = "You Are Diagnose of COVID-19. Please contact info@ncdc.gov.ng <br>For Immediate Attention.";
                break;
        }
    } else {
        $output = "You do not have any symptoms of COVID-19.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- SweetAlert library -->
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>COVID-19 DIAGNOSIS FORM</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Input Your Details To begin</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Temperature</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" placeholder="Enter Your Temperature" name="temperature" value="1">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Do you have Cough:?</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="cough" value="1">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Shortness of Breath:?</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="shortness_of_breath" value="1">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Do you have Fatigue:?</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="fatigue" value="1">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Do you have Body Aches:?</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="body_aches" value="1">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Do you have Body Sore Throat:?</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="sore_throat" value="1">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Do you have Body Diarrhea:?</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="diarrhea" value="1">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" name="submit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->


    <?php
    if(isset($_POST['submit'])){
        echo "<script>swal('$output')</script>";
    }
    ?>

</html>
<!-- end document-->