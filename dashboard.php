<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="custom css/webstyle.css">
        <link rel="stylesheet" href="custom css/createwebsite.css">
        <link rel="stylesheet" type="text/css" href="custom css/style.css">

        <style type="text/css">
            html, 
            body {
                height: 100%;
            }
        </style>
    </head>

    <body onload=dynamicpageload("landingpage.php")>
        <div class="row no-margin wrapper" style="background-color: pink; height: 100%;">
        <!-- <div class="wrapper"> -->
            
            <!-- <div class="col scrollContainerY" style="width: 30%"> -->
                <nav class="col" id="sidebar">
                    <div class="sidebar-header" style="position: relative;">
                        
                        <h3 style="margin-top: 0px;">A1 Pathshala</h3>
                        <strong>A1</strong>
                            <button type="button" id="sidebarCollapse" class="btn btn-info togbutton">
                            <i class="glyphicon glyphicon-align-left"></i>
                        </button>
                        
                    </div>
                    

                    <ul class="list-unstyled components sideBarScrollContainer">
                        <li onclick='dynamicpageload("createweb.php")'>
                           <!--  <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"> -->
                           <a href="#" >
                                <i class="glyphicon glyphicon-home"></i>
                                Create My Site
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-briefcase"></i>
                                Preview
                            </a>
                        </li>    
                        <li onclick='dynamicpageload("createweb.php")'>
                            <a href="#">
                                <i class="glyphicon glyphicon-duplicate"></i>
                                Update Site
                            </a>
                        </li>
                        <li onclick='dynamicpageload("addnotice.php")'>
                            <a href="#">
                                <i class="glyphicon glyphicon-link"></i>
                                Add Notice & Events
                            </a>
                        </li>
                        <li onclick='dynamicpageload("addimage.php")'>
                            <a href="#">
                                <i class="glyphicon glyphicon-paperclip"></i>
                                Add Images
                            </a>
                        </li>
                        <li onclick='dynamicpageload("addvacancy.php")'>
                            <a href="#">
                                <i class="glyphicon glyphicon-send"></i>
                                 Add Vacancy 
                            </a>
                        </li>
                    </ul>
                </nav>
            <!-- </div> -->
           <!--  <div class="col scrollContainerY" style="width: 70%" >
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
                <h1>dsfjygyjsd</h1>
            </div> -->
            <div class="col scrollContainerY" id="content">

            </div>
        <!-- </div> -->
        </div>
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
         <script type="text/javascript" src="jquery/dashboard.js"></script>
    </body>
</html>
