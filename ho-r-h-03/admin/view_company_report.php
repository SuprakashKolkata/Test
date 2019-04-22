<?php
include ('header.php');
$data_report=$obj_user->basic_fetch("td_logo");
?>
        <div class="breadcrumbwidget">
        	<ul class="breadcrumb">
                <li><a href="dashboard">Home</a> <span class="divider">/</span></li>
                <li><a href="#">View Logo</a></li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>View Logo</h1>
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner">
                  <div id="mail">
                    	 <br />
                        <table class="table table-bordered mailview_employee">
                           <thead>
                            <tr>
                                
                      <th class="head1">Logo</th>          
                      <th class="head0">Company Name</th>
                      <th class="head1">Address</th>
                      <th class="head1">Phone</th>
                      <!-- <th class="head1">Fax</th>
                      <th class="head0">Document</th> -->
                      <th class="head0">Action</th>
                               
                            </tr>

                            </thead>
                            <tbody>
                                <?php
                                $icount=1;
                                foreach($data_report as $value_report)
                                {
                                ?>
                                 <tr class="unread">
                                 <td><img src="../img/logo/<?php echo $value_report['image']; ?>" style="height:84px;width:100px;" ></td>
                                  <td><?php echo $value_report['company_name']; ?></td>
                                  <td><?php echo $value_report['company_address']; ?></td>
                                  <td><?php echo $value_report['phone'];?></td>
                                 <!--  <td><?php echo $value_report['fax'];?></td> 
                                  <td><?php echo $value_report['document'];?></td> -->
                                  <td>
                                  <input type="button"   style="background-color:green;color:white;width:55px; margin-bottom:2px;"  value="Edit"  onclick="edit_data(<?php echo $value_report['logo_id'];?>)">
                                  </td>
                                </tr>
                                <?php
                                $icount++;
                                }
                                ?>
                                <input type="hidden" name="txt_count" id="txt_count" value="<?php echo $icount; ?>">
                           </tbody>
                        </table>             
                    </div>
                <!--#tabs-->
            </div><!--contentinner-->
        </div><!--maincontent-->
        
<?php
include ('footer.php');
?>
<script>
	function edit_data(logo_id)
	{
      window.location.href='company_report.php?logo_id='+logo_id;
	}
</script>