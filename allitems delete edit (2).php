<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="file:///H|/project_dumps/EKTA/final/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="file:///H|/project_dumps/EKTA/final/admin/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="file:///H|/project_dumps/EKTA/final/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="file:///H|/project_dumps/EKTA/final/admin/index.html"> <img alt="" src="file:///H|/project_dumps/EKTA/final/admin/img/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="file:///H|/project_dumps/EKTA/final/admin/about.html">About</a>
                    </li>
                    
                    </li>
                    
                    
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="file:///H|/project_dumps/EKTA/final/admin/change-pass.php">Change Pasword</a>
                            </li>
                            <li class="active">
                                <a href="">Logout</a>
                            </li>
                            <li>
                                <a href="file:///H|/project_dumps/EKTA/final/admin/faq.html">FAQ</a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <br>
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard
                    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="file:///H|/project_dumps/EKTA/final/admin/index.html">Visit Site</a>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="file:///H|/project_dumps/EKTA/final/admin/dashboard.php" class="list-group-item">Dashboard</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/greetingmail.php" class="list-group-item">Add Greeting Mail</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/grid_view_php.php" class="list-group-item">View/Edit Greetings</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/mail_to_client.php" class="list-group-item">Mail to client</a>
                         <a href="file:///H|/project_dumps/EKTA/final/admin/add_item.php" class="list-group-item">Add Item</a>
                     <a href="file:///H|/project_dumps/EKTA/final/admin/view_edit_item.php" class="list-group-item">View/Edit Item</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/portfolio-3-col.html" class="list-group-item">3 Column Portfolio</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/portfolio-4-col.html" class="list-group-item">4 Column Portfolio</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/portfolio-item.html" class="list-group-item">Single Portfolio Item</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/blog-home-1.html" class="list-group-item">Blog Home 1</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/blog-home-2.html" class="list-group-item">Blog Home 2</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/blog-post.html" class="list-group-item">Blog Post</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/full-width.html" class="list-group-item">Full Width Page</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/sidebar.html" class="list-group-item active">Sidebar Page</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/faq.html" class="list-group-item">FAQ</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/404.html" class="list-group-item">404</a>
                    <a href="file:///H|/project_dumps/EKTA/final/admin/pricing.html" class="list-group-item">Pricing Table</a>
                </div>
            </div>

            <!-- Content Column -->
            <div class="col-md-9">
            <h1 class="text-primary"> ITEM LIST</h1>
<hr> 

<table class="form-horizontal" border=2>
        <tr> 
          <td ><strong><font color="#000000">Item Code</font></strong></td>
          <td><strong><font color="#000000">Item Name</font></strong></td>
          <td><strong><font color="#000000">Item Size</font></strong></td>
          <td><strong><font color="#000000">Rate In Rs.</font></strong></td>
          <td><strong><font color="#000000">Weight</font></strong></td>
          <td><strong><font color="#000000">Color</font></strong></td>
                    <td><strong><font color="#000000">Brand</font></strong></td>
          <td><strong><font color="#000000">Warenty</font></strong></td>

          <td><strong><font color="#000000">Min. Quantity</font></strong></td>
                    <td><strong><font color="#000000">Wholesale packing</font></strong></td>
          <td><strong><font color="#000000">Retail packing</font></strong></td>
                    <td><strong><font color="#000000">Item Image</font></strong></td>
                              <td><strong><font color="#000000">Age Group</font></strong></td>
                                        <td><strong><font color="#000000">Category</font></strong></td>





         
   <td class="col-xs-4"><strong><font color="#000000">Edit/Delete</font></strong></td>
        </tr>
  <?PHP
    
    $myserver="localhost";
$myuser="root";
$mypass="";
$mydb="david_sports";
$dbhandle=mysql_connect($myserver,$myuser,$mypass)
or
die("could not connect sql server on $myserver");
$selected=mysql_select_db("david_sports")
or
die("could not open $mydb");


    $sql = "SELECT * FROM item_master";
    //echo $sql;exit;
    $result = mysql_query($sql);
    while($row=mysql_fetch_array($result))
    {
    ?>
        <tr> 
          <td><?php echo $row['i_code']; ?></td>
          <td><?php echo $row['i_name']; ?></td>
          <td><?php echo $row['i_size']; ?></td>
          <td><?php echo $row['i_rate']; ?></td>
           <td><?php echo $row['i_weight']; ?></td>
           <td><?php echo $row['i_color']; ?></td>
           
           <td><?php echo $row['i_brand']; ?></td>
           <td><?php echo $row['i_warenty']; ?></td>
           <td><?php echo $row['i_min_quality']; ?></td>
           <td><?php echo $row['i_packing_wholesale']; ?></td>
           <td><?php echo $row['i_packing_retail']; ?></td>
           <td><?php echo $row['i_image']; ?>  </td>
           <td><?php echo $row['i_age_group']; ?></td>
           <td><?php echo $row['i_category']; ?></td>
         
    
          
    <td><a href="file:///H|/project_dumps/EKTA/final/admin/itemedit.php?cid=<?php echo $row['i_code']; ?>"><strong>Edit</strong></a> | <a href="file:///H|/project_dumps/EKTA/final/admin/itemdel.php?action=delete&cid=<?php echo $row['i_code']; ?>"><strong>Delete</strong></a></td>
        </tr>
  <?php
  }
  ?>
