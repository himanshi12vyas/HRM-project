<?php
require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>company policy</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="ss/normalize.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
   <!--  <link rel="stylesheet" href="assets/css/style.css"> -->
</head>
<body>
	<div class="table">
		<div class="cardld">
			<div class="cardld header" style="margin-top: 60px;">
				<div class="row" style="background: #D6599A;">
					<div class="col-lg-12 col-md-12" style="margin-left: 7px;"><h1 class="box-title" style="font-size: 40px;"><i class="fa fa-file" aria-hidden="true" style="color: black;"></i> company policy </h1></div>
                    
                     
				</div>
			</div>
			<div class="carded-body">
                     
                       <span class="col-lg-6 col-md-6"><button onclick="goBack()" style="background:#D6599A;; color: black; margin-top: 25px;">Back</button></span>
                     
                <div class="card-body2" style="margin-top: 50px;">
                	<div class="table-start">
                		<table class="tableemp" id="datatable" border="1px solid black">
                			<thead style="background:#D6599A; ">
                				<tr>
                					
                					<th>leaves</th>
                					<th>allowance</th>
                					<th>holiday_list</th>
                					
                				</tr>
                			</thead>
                				 <tbody class="text-center">
                              <tr>
                                 <td><button style="background:#D6599A; color:black;"><a href="images/leave.pdf" style="color: black;" >Leave Policy</a></button></td>
                                 <td>
                                    <button style="background:#D6599A;"><a href="images/allowanceold.pdf" style="color: black;">Old</a></button>
                                    <br>
                                    <button style="background:#D6599A; margin-top: 5px;"><a href="images/revisedallowance.pdf" style="color: black;" >Revised</a></button>
                                 </td>
                                <td><button style="background:#D6599A; color:black;"><a href="images/holiday.pdf" style="color: black;" >holiday list</a></button></td>
                              </tr>
                          </tbody>
                    </table>
          </div>
        </div>
			</div>
		</div>
	</div>
</body>
</html>
<script src="table2excel.js" type="text/javascript"></script>
<script>
    function goBack() {
        window.history.back();
    }
</script>
