
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>couponerhaven - Setup Manager -> Categories</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<!-- bootstrap 3.0.2 -->
<!-- jQuery 2.0.2 -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>



<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body class="skin-blue">


  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side">

 
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Networks</h3>
			  <div class="buttons">
                
                <button class="btn btn-success margin" type="button" onClick="location.href='AddNewNetworks.php'">Add New</button>
                <button type="button" class="btn bg-navy margin" onClick="javascript:doDelete()" style="margin-right:auto">Delete</button>
               
                
                
              </div><form action="/admin/Networks.php" method="post" style="clear:both; margin:0 5px">
                    <div class="input-group input-group-sm">
                        <input value="" type="text" name="Keywords" class="form-control span2">
                        <span class="input-group-btn">
                        <button type="submit" class="btn btn-info btn-flat">Go!</button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
                            <form id="frmPages"  method="post" action="/admin/Networks.php">
                <input type="hidden" name="rpp" value="20" />
                <input type="hidden" name="PageIndex" value="1" />
                <input type="hidden" id="action" name="action" value="" />
                <table id="dataTable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="text-align:center"><input type="checkbox" name="chkAll" class="checkUncheckAll"></th>
                      <th>Network Name</th>
                      <th>Status</th>
                      <th>Added</th>
                      <th>Updated</th>
                      <th class="sorting"></th>
                    </tr>
                  </thead>
				  
                  <tbody>
                    				
				                    <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="4" />
                        <input type="hidden" name="ids1[]" value="4"></td>
                      <td><a href="javascript:getPages(4, 20)" state="1" class="main-page4">Shareaasale</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>5th Jul 2014<br>04:33:16 PM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=4">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="5" />
                        <input type="hidden" name="ids1[]" value="5"></td>
                      <td><a href="javascript:getPages(5, 20)" state="1" class="main-page5">linkshare</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>5th Jul 2014<br>04:33:24 PM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=5">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="6" />
                        <input type="hidden" name="ids1[]" value="6"></td>
                      <td><a href="javascript:getPages(6, 20)" state="1" class="main-page6">CJ</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>5th Jul 2014<br>04:33:34 PM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=6">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="7" />
                        <input type="hidden" name="ids1[]" value="7"></td>
                      <td><a href="javascript:getPages(7, 20)" state="1" class="main-page7">Impact Radius</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>7th Mar 2015<br>03:21:06 PM</td>
                      <td>22nd Mar 2015<br>05:03:37 AM</td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=7">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="8" />
                        <input type="hidden" name="ids1[]" value="8"></td>
                      <td><a href="javascript:getPages(8, 20)" state="1" class="main-page8">VigLink</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>17th Feb 2016<br>02:29:34 PM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=8">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="9" />
                        <input type="hidden" name="ids1[]" value="9"></td>
                      <td><a href="javascript:getPages(9, 20)" state="1" class="main-page9">skimLinks</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>17th Feb 2016<br>02:29:47 PM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=9">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="10" />
                        <input type="hidden" name="ids1[]" value="10"></td>
                      <td><a href="javascript:getPages(10, 20)" state="1" class="main-page10">Target</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>17th Feb 2016<br>02:30:01 PM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=10">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="11" />
                        <input type="hidden" name="ids1[]" value="11"></td>
                      <td><a href="javascript:getPages(11, 20)" state="1" class="main-page11">TradeDoubler</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>17th Feb 2016<br>02:30:17 PM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=11">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="12" />
                        <input type="hidden" name="ids1[]" value="12"></td>
                      <td><a href="javascript:getPages(12, 20)" state="1" class="main-page12">Webgain</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>4th Apr 2016<br>10:05:39 PM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=12">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="13" />
                        <input type="hidden" name="ids1[]" value="13"></td>
                      <td><a href="javascript:getPages(13, 20)" state="1" class="main-page13">Flexoffers</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>16th Apr 2016<br>10:42:46 AM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=13">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="14" />
                        <input type="hidden" name="ids1[]" value="14"></td>
                      <td><a href="javascript:getPages(14, 20)" state="1" class="main-page14">Commission Factory</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>25th Apr 2016<br>11:51:01 AM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=14">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="15" />
                        <input type="hidden" name="ids1[]" value="15"></td>
                      <td><a href="javascript:getPages(15, 20)" state="1" class="main-page15">Zanox</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>7th Jan 2017<br>12:35:17 PM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=15">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="16" />
                        <input type="hidden" name="ids1[]" value="16"></td>
                      <td><a href="javascript:getPages(16, 20)" state="1" class="main-page16">yieldkit</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>16th Feb 2017<br>06:41:04 PM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=16">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="17" />
                        <input type="hidden" name="ids1[]" value="17"></td>
                      <td><a href="javascript:getPages(17, 20)" state="1" class="main-page17">Affiliate Window</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>19th May 2017<br>06:41:26 PM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=17">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="18" />
                        <input type="hidden" name="ids1[]" value="18"></td>
                      <td><a href="javascript:getPages(18, 20)" state="1" class="main-page18">admitad</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>21st Jun 2017<br>12:52:03 PM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=18">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="19" />
                        <input type="hidden" name="ids1[]" value="19"></td>
                      <td><a href="javascript:getPages(19, 20)" state="1" class="main-page19">Partnerize</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>18th Jul 2017<br>07:08:44 PM</td>
                      <td>14th Apr 2023<br>04:18:32 AM</td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=19">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="20" />
                        <input type="hidden" name="ids1[]" value="20"></td>
                      <td><a href="javascript:getPages(20, 20)" state="1" class="main-page20">affilinet</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>20th Jan 2018<br>09:40:38 PM</td>
                      <td></td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=20">Edit</a></td>
                    </tr>
                                        <tr>
                      <td align="center" class="noPrint"><input class="chkIds" type="checkbox" name="ids[]" value="21" />
                        <input type="hidden" name="ids1[]" value="21"></td>
                      <td><a href="javascript:getPages(21, 20)" state="1" class="main-page21">Nisalink</a></td>
                      <td><i class="fa fa-fw fa-check-circle"></i></td>
                      <td>31st Oct 2020<br>01:08:48 PM</td>
                      <td>14th Apr 2023<br>04:17:33 AM</td>
					  <td align="center" class="noPrint"><a href="EditNetwork.php?NetworkID=21">Edit</a></td>
                    </tr>
                                      </tbody>
                </table>
              </form>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-6">
                <div class="dataTables_info" id="example2_info"> Total 18 entries </div>
              </div>
              <div class="col-xs-6">
                <div class="dataTables_paginate paging_bootstrap">
                  <ul class="pagination">
                    <li class="prev ">  </li>
                                        <li class="next">  </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </section>
    <!-- /.content -->
  </aside>
 
<script language="javascript">
	$(document).ready(function () {				
		$(".checkUncheckAll").click(function () {
			$(".chkIds").prop("checked", $(this).prop("checked"));			
		});
	});
	var counter = 0;
	
	
	function doDelete()
	{
		if($(".chkIds").is(":checked"))
		{
			if(confirm("Are you sure to delete."))
			{
				$("#action").val("delete");
				$("#frmPages").submit();
			}
		}
		else
			alert("Please select Networks to delete");
	}
	
</script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<!--<script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>-->
<script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="js/AdminLTE/app.js" type="text/javascript"></script>
<!-- page script -->

</body>
</html>
