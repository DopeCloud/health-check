<!DOCTYPE html>
<html lang="en">
<?php
function ping($domain){

    $starttime = microtime(true);
    $file      = @fsockopen($domain, 80, $errno, $errstr, 10);
    $stoptime  = microtime(true);
    $status    = 0;

    if (!$file) { 
        $status = -1;  // Site is down

    } else {

        fclose($file);
        $status = ($stoptime - $starttime) * 1000;
        $status = floor($status);
    }
    return $status;
}
$api         = ping("yourserver");
$node1       = ping("yourserver");
$node2       = ping("yourserver");
$cl0ud       = ping("yourserver");
$whmcs       = ping("yourserver");
$virtualizor = ping("yourserver");
?>
<body>
<div id="global-loader"></div>
  <section class="bg_dark">
     <div class="page-help section_space">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2><center>Service Status</center></h2>
                </div>
            </div>
        </div>
    </div>
  </section>
    <!-- ///////////////////////////////////////// -->
    <!-- START PING -->
    <!-- ///////////////////////////////////////// -->
    <section class="section_space bg_gray">
    	<div class="domainfeatures">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title"></h2>
                </div>
            </div>
            <div class="servers-table bg_gray">
               <div class="row">
                  <div class="col-sm-12 margin-top-1">
                     <table  class="products-table responsive  tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                        <thead>
                           <tr>
                              <th>Zone</th>
                              <th>Online/Offline</th>
                              <th>Ping</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><a class="btn btn-info btn-sm">API</a></td>
                               <?php
                               if ($api == "-1") {
                                   echo '<td><a class="btn btn-danger btn-sm">Offline</a></td>';
                               } else {
                                   echo '<td><a class="btn btn-success btn-sm">Online</a></td>';
                               }
                               ?>
                              <td><a class="btn btn-primary btn-sm"><?php print_r($api);?>ms</a></td>
                           </tr>
                           <tr>
                              <td><a class="btn btn-info btn-sm">NODE1</a></td>
                               <?php
                               if ($node1 == "-1") {
                                   echo '<td><a class="btn btn-danger btn-sm">Offline</a></td>';
                               } else {
                                   echo '<td><a class="btn btn-success btn-sm">Online</a></td>';
                               }
                               ?>
                              <td><a class="btn btn-primary btn-sm"><?php print_r($node1);?>ms</a></td>
                           </tr>
                           <tr>
                              <td><a class="btn btn-info btn-sm">NODE2</a></td>
                               <?php
                               if ($node2 == "-1") {
                                   echo '<td><a class="btn btn-danger btn-sm">Offline</a></td>';
                               } else {
                                   echo '<td><a class="btn btn-success btn-sm">Online</a></td>';
                               }
                               ?>
                              <td><a class="btn btn-primary btn-sm"><?php print_r($node2);?>ms</a></td>
                           </tr>
                           <tr>
                              <td><a class="btn btn-info btn-sm">CLOUD</a></td>
                               <?php
                               if ($cl0ud == "-1") {
                                   echo '<td><a class="btn btn-danger btn-sm">Offline</a></td>';
                               } else {
                                   echo '<td><a class="btn btn-success btn-sm">Online</a></td>';
                               }
                               ?>
                              <td><a class="btn btn-primary btn-sm"><?php print_r($cl0ud);?>ms</a></td>
                           </tr>
                           <tr>
                              <td><a class="btn btn-info btn-sm">WHMCS</a></td>
                               <?php
                               if ($whmcs == "-1") {
                                   echo '<td><a class="btn btn-danger btn-sm">Offline</a></td>';
                               } else {
                                   echo '<td><a class="btn btn-success btn-sm">Online</a></td>';
                               }
                               ?>
                              <td><a class="btn btn-primary btn-sm"><?php print_r($whmcs);?>ms</a></td>
                           </tr>
                           <tr>
                              <td><a class="btn btn-info btn-sm">VIRTUALIZOR</a></td>
                               <?php
                               if ($virtualizor == "-1") {
                                   echo '<td><a class="btn btn-danger btn-sm">Offline</a></td>';
                               } else {
                                   echo '<td><a class="btn btn-success btn-sm">Online</a></td>';
                               }
                               ?>
                              <td><a class="btn btn-primary btn-sm"><?php print_r($virtualizor);?>ms</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
        </div>
    </section>
    <!-- ///////////////////////////////////////// -->
    <!-- END PING -->
    <!-- ///////////////////////////////////////// -->
   </body>
</html>
