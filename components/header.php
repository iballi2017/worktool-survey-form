<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" href="../assets/images/settings-group-icon.png" type="image/gif" sizes="16x16">
    <title>Worktool Survey</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom css -->
    <link rel="stylesheet" href="../stylesheet/css/style.min.css">
</head>

<body>
    <!-- header -->
    <header class="">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-2 custom-navbar shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal brand-component">
                <img src="../assets/images/settings-group-icon.png" class="img-fluid brand-logo-sm" alt="">
                <a href="../" class="brand-tagline">Work Tool Survey</a>
            </h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <div>
                    <div class="dropdown default-bg">
                        <div class="btn dropdown-toggle border rounded-0 w-100 uppercase" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-5">Select a form</span>
                        </div>
                        <div class="dropdown-menu default-bg" aria-labelledby="dropdownMenuButton" style="margin-left:-100% !important">                            
                        <a class="dropdown-item uppercase" href="../views/technology-equipment-repair-request.php">Technology equipment repair request</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item uppercase" href="../views/non-technology-equipment-repair-request.php">Non-technology equipment repair request</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item uppercase" href="../views/vehicles-and-logistics-repair-request.php">Vehicles and logistics repair request</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item uppercase" href="../views/other-repair-request.php">Other repair requests</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>