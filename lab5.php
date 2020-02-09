<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab No. 5</title>
</head>
<body>
    <?php 
    
    //requires to load in the 2 files that contain the navigation bar and the header content.
    require('inc/nav.html');
    require('inc/header.html');
    
    ?>
    

    <div class="container-fluid mt-3">
        
    <?php 
    
    //declare some flags that will help with logic later
    $araliaFlag = false;
    $arbFlag = false;
    $ashFlag = false;

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        //sets of ifs to decide the value of the aralia flag
        if(isset($_GET['aralia'])){
            if($_GET['aralia'] == 'yes'){
                $araliaFlag = true;
            } else {
                if($_GET['aralia'] == 'no'){
                    $araliaFlag = false;
                }
            }
        } else {
            $araliaFlag = true;
        }
        //sets of ifs to decide the value of the arborvitae flag
        if(isset($_GET['arborvitae'])){
            if($_GET['arborvitae'] == 'yes'){
                $arbFlag = true;
            } else {
                if($_GET['arborvitae'] == 'no'){
                    $arbFlag = false;
                }
            }
        } else {
            $arbFlag = true;
        }
        //sets of ifs to decide the value of the ash flag
        if(isset($_GET['ash'])){
            if($_GET['ash'] == 'yes'){
                $ashFlag = true;
            } else {
                if($_GET['ash'] == 'no'){
                    $ashFlag = false;
                }
            }
        } else {
            $ashFlag = true;
        }
    }


    //use the value of the flags to decide to show or not aralia trees
    if ($araliaFlag) {
        include('inc/aralia.html'); 
    }
    //use the value of the flags to decide to show or not arborvitae trees
    if ($arbFlag){
        include('inc/arborvitae.html');
    }
    //use the value of the flags to decide to show or not ash trees
    if ($ashFlag) {
        include('inc/ash.html');
    }
    
    ?>
    </div>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>