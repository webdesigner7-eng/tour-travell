<?php include("../header.php")?>

<style>
    .mainheading{
        font-size: 36px;
        text-align: center;
        color:#26a3cc;
    }
    .heading1{
        font-size: 28px;
        text-align: center;
        color:#26a3cc;
    }
    .sub_heading{
        font-size: 28px;
        color: black;
        padding-top: 5px;

    }
    .con{
        font-size: 16px;
    }
    .d1{
        height:auto;
        width: 100%;
        /*overflow-y: scroll;
        overflow: auto;*/
        margin: 10px;
        padding:10px;
       background-color: #f9f3f3;
    }
    .d2{
        height:auto;
         margin: 10px;
        padding:10px;
       background-color: #f9f3f3;
    }
    .d3{
        overflow-y: scroll;
        overflow-x: auto;
        height:auto;
        width:320px;
         margin: 10px;
        padding:10px;
       background-color: #f9f3f3;
    }
    
     
    .dtable{
         margin: 10px;
        padding:10px;
       background-color: #f9f3f3;
    }
    @media screen and (max-width: 450px) {
        .sub_heading{
            font-size: 16px;
        }
        .h1{
            font-size: 16px;
        }
        .h2{
            font-size: 14px;
        }
        .h3{
            font-size: 12px;
        }
        .h4{
            font-size: 10px;
        }
        .h5{
            font-size: 8px;
        }
        .h6{
            font-size: 6px;
        }
        .prgm{
            width:300px;
            color:#f107a9;
        }
        .bt{
            float: right;
        }
        .im{
            text-align: center;

        }
        .fade:not(.show) {
    }
</style>
<section class="banner-area relative about-banner" id="home" style="height:300px !important"> 
    <div class="overlay overlay-bg" style="height:300px !important"></div>
    <div class="container">       
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12" style="padding: 70px 0px !important;">
          <h1 class="text-white" style="font-size:30px !important; ">
                  Bootstrap       
          </h1> 
          <p class="text-white link-nav"><a href="../index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="BOOTSTRAP/index.php"> Bootstrap</a> <span class="lnr lnr-arrow-right"></span>  <a href="P_progressbar.php"> Progress-Bar</a></p>
        </div>  
      </div>
    </div>
</section>
<div class="container section-gap">
        <div class="row">
            <div class="col-md-3">
                <div class="box-shadow">
                    <h5>Bootstrap Section</h5>
                    <ul class="side-panel">
                        <li ><a href="index.php">Introduction</a></li>
                        <li><a href="jumbotron.php">Jumbotron</a></li>
                        <li><a href="P_alert.php">Alert</a></li>
                        <li><a href="P_button.php">Button</a></li>
                        <li><a href="P_images.php">images</a></li>
                        <li><a href="P_progressbar.php">images</a></li>
                        <li><a href="P_table.php">Table</a></li>
                        <li><a href="P_typography.php">Typography</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 box-shadow" style="height: auto;">
                <div class="mainheading">
                    Bootstrap Tutorial
                </div><hr>
                <div class="heading1">Bootstrap ProgressBar</div>
                <div class="div_design" width="100%">
                    <h2 class="sub_heading">ProgressBar</h2>
                    <div class="d1">
                        -It used to show a user how far along he/she is in a process.   
                    </div>
                     <h2 class="sub_heading ">ProgressBar Classes</h2>  
                        <div class="dtable">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Examples</th>
                                    </tr>
                                </thead> 
                                <tbody>
                                   
                                    <tr>
                                        <td>.progess-bar</td>
                                         <td> 
                                             <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width:60%;">60%</div>
                                            </div> 
                                        </td>
                                    </tr>

                                     <tr>
                                        <td>.progess-bar-success</td>
                                         <td> 
                                             <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" style="width:60%; background-color: #28a745!important;">60%</div>
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>.progess-bar-info</td>
                                         <td> 
                                             <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar" style="width:60%; background-color: #17a2b8!important;">60%</div>
                                            </div> 
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>.progress-bar-warning</td>
                                         <td> 
                                             <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" style="width:60%;
                                                background-color: #ffc107!important;">60%</div>
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>.progerss-bar-danger</td>
                                         <td> 
                                             <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" style="width:60%; background-color: #dc3545!important;">60%</div>
                                            </div> 
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>.progerss-bar-secondary</td>
                                         <td> 
                                             <div class="progress">
                                                <div class="progress-bar progress-bar-secondary" role="progressbar" style="width:60%; background-color: #6c757d!important;">60%</div>
                                            </div> 
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>.progress-bar-striped</td>
                                         <td> 
                                             <div class="progress">
                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width:60%;">60%</div>
                                            </div> 
                                        </td>
                                    </tr> <tr>
                                        <td>.active</td>
                                         <td> 
                                             <div class="progress">
                                                <div class=" progress-bar progress-bar-striped active" role="progressbar" style="width:60%;">60%</div>
                                            </div> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                   
                </div>
            </div>
        </div>
    </div>
<?php include("../footer.php")?>

 