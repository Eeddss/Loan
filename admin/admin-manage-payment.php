<?php
  session_start();
  include('vendor/inc/config.php');
  include('vendor/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['a_id'];
  //Add Booking
  if(isset($_POST['book_vehicle']))
    {
            $u_id = $_GET['u_id'];
            //$u_fname=$_POST['u_fname'];
            //$u_lname = $_POST['u_lname'];
            //$u_phone=$_POST['u_phone'];
            //$u_addr=$_POST['u_addr'];
            $u_car_type = $_POST['u_car_type'];
           $u_car_regno  = $_POST['u_car_regno'];
            $u_car_bookdate = $_POST['u_car_bookdate'];
            $u_car_book_status  = $_POST['u_car_book_status'];
            $query="update tms_user set u_car_type=?, u_car_bookdate=?, u_car_regno=?, u_car_book_status=? where u_id=?";
            $stmt = $mysqli->prepare($query);
            $rc=$stmt->bind_param('ssssi', $u_car_type, $u_car_bookdate, $u_car_regno, $u_car_book_status, $u_id);
            $stmt->execute();
                if($stmt)
                {
                    $succ = "User Booking Added";
                }
                else 
                {
                    $err = "Please Try Again Later";
                }
            }
?>
<?php include 'db_connect.php' ?> 
<?php 

if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM payments where id=".$_GET['id']);
	foreach($qry->fetch_array() as $k => $val){
		$$k = $val;
	}
}

?>
<div class="container-fluid">
	<div class="col-lg-12">
		<form id="manage-payment">
			<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="" class="control-label">Loan Reference No.</label>
						<select name="loan_id" id="" class="custom-select browser-default select2">
							<option value=""></option>
							<?php 
							$loan = $conn->query("SELECT * from loan_list where status =2 ");
							while($row=$loan->fetch_assoc()):
							?>
							<option value="<?php echo $row['id'] ?>" <?php echo isset($loan_id) && $loan_id == $row['id'] ? "selected" : '' ?>><?php echo $row['ref_no'] ?></option>
							<?php endwhile; ?>
						</select>
						
					</div>
				</div>
			</div>
			<div class="row" id="fields">
				
			</div>
		</form>
	</div>
</div>

<script>
	$('[name="loan_id"]').change(function(){
		load_fields()
	})
	$('.select2').select2({
		placeholder:"Please select here",
		width:"100%"
	})

	function load_fields(){
		start_load()
		$.ajax({
			url:'load_fields.php',
			method:"POST",
			data:{id:'<?php echo isset($id) ? $id : "" ?>',loan_id:$('[name="loan_id"]').val()},
			success:function(resp){
				if(resp){
					$('#fields').html(resp)
					end_load()
				}
			}
		})
	}
	 $('#manage-payment').submit(function(e){
	 	e.preventDefault()
	 	start_load()
	 	$.ajax({
	 		url:'ajax.php?action=save_payment',
	 		method:'POST',
	 		data:$(this).serialize(),
	 		success:function(resp){
	 			if(resp == 1){
	 				alert_toast("Payment data successfully saved.","success");
	 				setTimeout(function(e){
	 					location.reload()
	 				},1500)
	 			}
	 		}
	 	})
	 })
	 $(document).ready(function(){
	 	if('<?php echo isset($_GET['id']) ?>' == 1)
		load_fields()
	 })
</script>