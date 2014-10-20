

<?php  
include '../include/global/config.php';

if(!isset($_SESSION['userid']) || $_SESSION['userid'] == ''){
  echo '<script type="text/javascript">window.location = "../login.php"; </script>';
}

  $today= date("Y-m-d");
  $tahun = substr($today,0,4);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Konsolidasi Pembelian item PlanetKredit</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    

    <!--script untuk grafik morris-->
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="../index.php" class="logo"><b>PlanetKredit</b> <!--<img width='200px' height='50px' src="../assets/img/sparta_logo.jpg">--> </a>
            <!--logo end-->
          
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../include/global/logout.php">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="../assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php  echo $_SESSION['username']?></h5>
                    
                  <li class="mt">
                      <a href="../index.php" class="">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-bar-chart-o"></i>
                          <span>View Grafik Item</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.php"><i class="fa fa-angle-double-right"></i>Inventory</a></li>
                          <li><a  href="chartjs.php"><i class="fa fa-angle-double-right"></i>Stock Value</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                        <a href="javascript:;" >
                          <i class="fa fa-table"></i>
                          <span>List Item</span>
                      </a>
                      <ul class="sub">
                       <a href="item_list.php" class=""><i class="fa fa-angle-double-right"></i>View Item List</a>             
                       <a href="list_pembelian.php" class=""><i class="fa fa-angle-double-right"></i>View Record Pembelian</a>
                       <a href="list_penjualan.php" class=""><i class="fa fa-angle-double-right"></i>View Record Penjualan</a>
                      </ul>
            
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-upload"></i>
                          <span>Upload Manual Database</span>
                      </a>
                     
                        <ul class="sub">
      
                            <a href="item_baru.php" ><i class="fa fa-angle-double-right"></i>Form data item baru</a>
                            <a href="history_data.php" ><i class="fa fa-angle-double-right"></i>Upload Transactional data item</a>
                             <a href="uploadb.php" ><i class="fa fa-angle-double-right"></i>Upload Master Data Item</a>
                        </ul>
                      
                     
                  </li>

                   <?php if($_SESSION['jabatan'] == 'admin'){ ?>
                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-users"></i>
                          <span>User management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="listuser.php">List User</a></li>
                        
                      </ul>
                  </li>


                    <?php }?> 

                  <li class="sub-menu">
                      <a href="../include/global/logout.php" >
                          <i class="fa fa-power-off"></i>
                          <span>Logout</span>
                      </a>
                     
                  </li>
                 
                 
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
     
       <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class=""></i> List pembelian item planet</h3>
            <div class="row mt">
              <div class="col-lg-12">
              		<div>
                    Search By Date:<br> 
                   From <input type="text" id="datepicker1">
                   To <input type="text" id="datepicker2">
                  </div>
                  <br>
              			 <div id="wrapper">
                        <table id="listpembelian" class="display compact" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No Faktur</th>
                <th>Tanggal Faktur</th>
                <th>Nama Vendor</th>
                <th>No.</th>
                 <th>Tanggal Terima</th>
                <th class="">Quantity</th>
                 <th class="numeric">Harga</th>
                <th class="numeric">Total Biaya</th>
                <th class="numeric">ID Cabang</th>
                
               
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>No Faktur</th>
                <th>Tanggal Faktur</th>
                <th>Nama Vendor</th>
                <th>No.</th>
                 <th>Tanggal Terima</th>
                <th class="">Quantity</th>
                 <th class="numeric">Harga</th>
                <th class="numeric">Total Biaya</th>
                <th class="numeric">ID Cabang</th>            
            </tr>
        </tfoot>
    </table>
              			 </div>
              	
              </div>
            </div>



      <div class="element_to_pop_up" id="element_to_pop_up">Pilih Menu 
          <button id="viewgrafik" >View Grafik</button>
      </div>
      <div  class="element_to_pop_up" id="element_to_pop_up2">Menu View Grafik</div>
     
     

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->



      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
             2014 -PlanetKredit
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>

    <script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>

   
    <script type="text/javascript" src="../assets/js/jquery.bpopup.min.js"></script>
    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>
    <script type="text/javascript" src="../include/listpembelianpage/clientside/listpembelianController.js"></script>



    <!--script for this page-->


 

  <!--scc untuk ngatur pop up-->
  	<style type="text/css">

    div.container {
        width: 80%;
    }
 

    .element_to_pop_up { 
        background-color:#fff;
        display:none;
        border-radius:15px;
        color:#000;
        display:none; 
        padding:20px;
        min-width:900px;
        min-height: 450px;
      display:none; 
      }

  	</style>

  </body>
</html>

