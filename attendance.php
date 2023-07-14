<?php
require('header.php');
$id='';
$day1='';
$day2='';
$day3='';
$day4='';
$day5='';
$day6='';
$day7='';
$day8='';
$day9='';
$day10='';
$day11='';
$day12='';
$day13='';
$day14='';
$day15='';
$day16='';
$day17='';
$day18='';
$day19='';
$day20='';
$day21='';
$day22='';
$day23='';
$day24='';
$day25='';
$day26='';
$day27='';
$day28='';
$day29='';
$day30='';
$day31='';
$emp_id='';

if(isset($_GET['id']))
{
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$res=mysqli_query($con,"select `attendance`.*, employee.name,employee.id as eid from `attendance`,employee where `attendance`.emp_id=employee.id and attendance.id='$id'");
	$row=mysqli_fetch_assoc($res);
	
	$emp_id=$row['emp_id'];
	$name=$row['name'];
	$day1=$row['day1'];
	$day2=$row['day2'];
	$day3=$row['day3'];
	$day4=$row['day4'];
	$day5=$row['day5'];
	$day6=$row['day6'];
	$day7=$row['day7'];
	$day8=$row['day8'];
	$day9=$row['day9'];
	$day10=$row['day10'];
	$day11=$row['day11'];
	$day12=$row['day12'];
	$day13=$row['day13'];
	$day14=$row['day14'];
	$day15=$row['day15'];
	$day16=$row['day16'];
	$day17=$row['day17'];
	$day18=$row['day18'];
	$day19=$row['day19'];
	$day20=$row['day20'];
	$day21=$row['day21'];
	$day22=$row['day22'];
	$day23=$row['day23'];
	$day24=$row['day24'];
	$day25=$row['day25'];
	$day26=$row['day26'];
	$day27=$row['day27'];
	$day28=$row['day28'];
	$day29=$row['day29'];
	$day30=$row['day30'];
	$day31=$row['day31'];
	
}

if(isset($_POST['submit']))
{
	$emp_id=mysqli_real_escape_string($con,$_POST['emp_id']);
	$day1=mysqli_real_escape_string($con,$_POST['day1']);
	$day2=mysqli_real_escape_string($con,$_POST['day2']);
	$day3=mysqli_real_escape_string($con,$_POST['day3']);
	$day4=mysqli_real_escape_string($con,$_POST['day4']);
	$day5=mysqli_real_escape_string($con,$_POST['day5']);
	$day6=mysqli_real_escape_string($con,$_POST['day6']);
	$day7=mysqli_real_escape_string($con,$_POST['day7']);
	$day8=mysqli_real_escape_string($con,$_POST['day8']);
	$day9=mysqli_real_escape_string($con,$_POST['day9']);
	$day10=mysqli_real_escape_string($con,$_POST['day10']);
	$day11=mysqli_real_escape_string($con,$_POST['day11']);
	$day12=mysqli_real_escape_string($con,$_POST['day12']);
	$day13=mysqli_real_escape_string($con,$_POST['day13']);
	$day14=mysqli_real_escape_string($con,$_POST['day14']);
	$day15=mysqli_real_escape_string($con,$_POST['day15']);
	$day16=mysqli_real_escape_string($con,$_POST['day16']);
	$day17=mysqli_real_escape_string($con,$_POST['day17']);
	$day18=mysqli_real_escape_string($con,$_POST['day18']);
	$day19=mysqli_real_escape_string($con,$_POST['day19']);
	$day20=mysqli_real_escape_string($con,$_POST['day20']);
	$day21=mysqli_real_escape_string($con,$_POST['day21']);
	$day22=mysqli_real_escape_string($con,$_POST['day22']);
	$day23=mysqli_real_escape_string($con,$_POST['day23']);
	$day24=mysqli_real_escape_string($con,$_POST['day24']);
	$day25=mysqli_real_escape_string($con,$_POST['day25']);
	$day26=mysqli_real_escape_string($con,$_POST['day26']);
	$day27=mysqli_real_escape_string($con,$_POST['day27']);
	$day28=mysqli_real_escape_string($con,$_POST['day28']);
	$day29=mysqli_real_escape_string($con,$_POST['day29']);
	$day30=mysqli_real_escape_string($con,$_POST['day30']);
	$day31=mysqli_real_escape_string($con,$_POST['day31']);
	
	
	if($id>0){
	$sql="update attendance set day1='$day1',day2='$day2',day3='$day3',day4='$day4',day5='$day5',day6='$day6',day7='$day7',day8='$day8',day9='$day9',day10='$day10',day11='$day11',day12='$day12',day13='$day13',day14='$day14',day15='$day15',day16='$day16',day17='$day17',day18='$day18',day19='$day19',day20='$day20',day21='$day21',day22='$day22',day23='$day23',day24='$day24',day25='$day25',day26='$day26',day27='$day27',day28='$day28',day29='$day29',day30='$day30',day31='$day31' where id='$id'";
	}
	else{
		$sql="insert into attendance(emp_id,day1,day2,day3,day4,day5,day6,day7,day8,day9,day10,day11,day12,day13,day14,day15,day16,day17,day18,day19,day20,day21,day22,day23,day24,day25,day26,day27,day28,day29,day30,day31) values('$emp_id','$day1','$day2','$day3','$day4','$day5','$day6','$day7','$day8','$day9','$day10','$day11','$day12','$day13','$day14','$day15','$day16','$day17','$day18','$day19','$day20','$day21','$day22','$day23','$day24','$day25','$day26','$day27','$day28','$day29','$day30','$day31')";
	}
	$data=mysqli_query($con,$sql);
	if($data)
	{
		echo "succefull";
	}
	else{
		echo "something is wrong";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>attendance</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="ss/normalize.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
</head>
<style type="text/css">
	input{
		width: 100px;
	}
</style>
<body>
	<div class="attendance">
		<div class="carda"></div>
		  	<div class="carde-header" style="margin-left: 5px; margin-top: 60px;">
				<div class="row">
					<div class="col-lg-6 col-md-6"><h1 class="box-title" style="font-size: 40px;"><i class="fa fa-clock-o" aria-hidden="	true" style="color: #52A8BD;"></i> attendance </h1></div>
				</div>
			</div>
			<div class="carde-body">
				<form method="POST">
					<table class="tableemp" id="datatable" width="100%">
                		<thead style="background:#A9EEB6;">
                			<tr>
                					<th>emp_id</th>
                					<th>day1</th>
                					<th>day2</th>
                					<th>day3</th>
                					<th>day4</th>
                					<th>day5</th>
                					<th>day6</th>
                					<th>day7</th>
                					
                					
						</thead>
						<tbody>
							<tr>
								<td>
									<?php if($id>0){ ?>
										<input type="text" name="name" value="<?php echo $name?>" readonly>
									
									<?php } ?>

									<?php if($id<=0){ ?>
										
										<select name="emp_id"><option value="">select emp_id</option><?php $res=mysqli_query($con,"select * from employee");
										while($row=mysqli_fetch_assoc($res)){
										echo "<option value=".$row['id'].">".$row['emp_id']."</option>";
										}
										?>
										</select>
									<?php } ?>
								</td>

								<td><input type="text" name="day1" value="<?php echo $day1 ?>" placeholder="day1" ></td>
								<td><input type="text" name="day2" value="<?php echo $day2 ?>" placeholder="day2" ></td>
								<td><input type="text" name="day3" value="<?php echo $day3 ?>" placeholder="day3" ></td>
								<td><input type="text" name="day4" value="<?php echo $day4 ?>" placeholder="day4" ></td>
								<td><input type="text" name="day5" value="<?php echo $day5 ?>" placeholder="day5" ></td>
								<td><input type="text" name="day6" value="<?php echo $day6 ?>" placeholder="day6" ></td>
								<td><input type="text" name="day7" value="<?php echo $day7 ?>" placeholder="day7" ></td>
								
								
							</tr>
						</tbody>
					</table>
					<table class="tableemp" id="datatable" width="100%" border="1px solid black">
                		<thead style="background:#A9EEB6;">
                			<tr>
                					<th>day8</th>
                					<th>day9</th>
                					<th>day10</th>
                					<th>day11</th>
                					<th>day12</th>
                					<th>day13</th>
                					<th>day14</th>
                					<th>day15</th>
                					
						</thead>
						<tbody>
							<tr>
								<td><input type="text" name="day8" value="<?php echo $day8 ?>" placeholder="day8" ></td>
								<td><input type="text" name="day9" value="<?php echo $day9 ?>" placeholder="day9" ></td>
								<td><input type="text" name="day10" value="<?php echo $day10 ?>" placeholder="day10" ></td>
								<td><input type="text" name="day11" value="<?php echo $day11 ?>" placeholder="day11" ></td>
								<td><input type="text" name="day12" value="<?php echo $day12 ?>" placeholder="day12" ></td>
								<td><input type="text" name="day13" value="<?php echo $day13 ?>" placeholder="day13" ></td>
								<td><input type="text" name="day14" value="<?php echo $day14 ?>" placeholder="day14" ></td>
								<td><input type="text" name="day15" value="<?php echo $day15 ?>" placeholder="day15" ></td>
								
								
							</tr>
						</tbody>
					</table>
					<table class="tableemp" id="datatable" width="100%" border="1px solid black">
                		<thead style="background:#A9EEB6;">
                			<tr>
                					<th>day16</th>
                					<th>day17</th>
                					<th>day18</th>
                					<th>day19</th>
                					<th>day20</th>
                					<th>day21</th>
                					<th>day22</th>
                					<th>day23</th>
                					
                					
                			</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" name="day16" value="<?php echo $day16 ?>" placeholder="day16" ></td>
								<td><input type="text" name="day17" value="<?php echo $day17 ?>" placeholder="day17" ></td>
								<td><input type="text" name="day18" value="<?php echo $day18 ?>" placeholder="day18" ></td>
								<td><input type="text" name="day19" value="<?php echo $day19 ?>" placeholder="day19" ></td>
								<td><input type="text" name="day20" value="<?php echo $day20 ?>" placeholder="day20" ></td>
								<td><input type="text" name="day21" value="<?php echo $day21 ?>" placeholder="day21" ></td>
								<td><input type="text" name="day22" value="<?php echo $day22 ?>" placeholder="day22" ></td>
								<td><input type="text" name="day23" value="<?php echo $day23 ?>" placeholder="day23" ></td>
								
								
							</tr>
						</tbody>
					</table>
					<table class="tableemp" id="datatable" width="100%" border="1px solid black">
                		<thead style="background:#A9EEB6;">
                			<tr>
                					<th>day24</th>
                					<th>day25</th>
                					<th>day26</th>
                					<th>day27</th>
                					<th>day28</th>
                					<th>day29</th>
                					<th>day30</th>
                					<th>day31</th>
                			</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" name="day24" value="<?php echo $day24 ?>" placeholder="day24" ></td>
								<td><input type="text" name="day25" value="<?php echo $day25 ?>" placeholder="day25" ></td>
								<td><input type="text" name="day26" value="<?php echo $day26 ?>" placeholder="day26" ></td>
								<td><input type="text" name="day27" value="<?php echo $day27 ?>" placeholder="day27" ></td>
								<td><input type="text" name="day28" value="<?php echo $day28 ?>" placeholder="day28" ></td>
								<td><input type="text" name="day29" value="<?php echo $day29 ?>" placeholder="day29" ></td>
								<td><input type="text" name="day30" value="<?php echo $day30 ?>" placeholder="day30" ></td>
								<td><input type="text" name="day31" value="<?php echo $day31 ?>" placeholder="day31" ></td>
							</tr>
						</tbody>
					</table>
					<button class="btn" type="submit" name="submit" value="submit" style="color: #CDA9EE;,background: white; font-size: 25px;">submit</button>
				</form>
		</div>
	</div>
</body>
</html>