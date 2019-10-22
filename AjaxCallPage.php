<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body><br><br>
	<div class="container">
		
	<div class="row form-group">
		<div class="col-md-5 ">
			<input type="text" placeholder="Enter Employee Name" class="form-control" name="EmpName" id="EmpName">
		</div>
		<div class="col-md-5">
			<input type="text" name="Comp" placeholder="Enter Employee Compay" class="form-control" id="Comp">			
		</div>
		<div class="col-md-2">
		
			<input type="button" class="btn btn-primary" onclick="SaveData()" name="SaveData" id="SaveData" value="Add">
		</div>
	</div>
<!-- 	<div class="row">
		<div class="col-md-6 col-sm-offset-3">
		</div>
	</div>
 -->
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Namne </th>
						<th>Company</th>
					</tr>
				</thead>
				<tbody id="displayData">
					
				</tbody>

			</table>
	</div>
</body>
<script type="text/javascript">
	function SaveData() {
		var EName= $("#EmpName").val();
		var EComp= $("#Comp").val();
		$.ajax({
			type:"post",
			url:"savedatainphp.php",
			data:{name:EName,company:EComp},
			success:function (argument) {
				console.log(argument);
				$("#displayData").append(argument);
			}
		})
	}
</script>
</html>