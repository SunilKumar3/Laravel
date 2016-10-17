@extends('master')
@section('content')
<style>
table{
	width:500px;
}
td{
	cellpadding:20px;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Employees
						<a href="{{ url('/employeepost/create') }}" style="float:right;">Create New</a>
				</div>

				<div class="panel-body">
				<table>	
				
				<th>Emp#</th>	
				
				<th>Emp.Name</th>

				<th>Username</th>

				<th>password</th>

				<th> address</th>

				<th> mobile</th>

				<th> Email</th>

				<th> dept_name</th>

				<th> role </th>

				<th> </th>
				<th> </th>
				<?php

					foreach ($empps as $key => $value) {
						//print_r($value);
						# code...
						?>
							<tr>
							        <td>
									<?php echo $value->id; ?>
									</td>
									
									<td>
									<?php echo $value->name; ?>
									</td>

									<td>
									<?php echo $value->username; ?>
									</td>

									<td>
									<?php echo $value->password; ?>
									</td>


									<td>
									<?php echo $value->address; ?>
									</td>

									<td>
									<?php echo $value->mobile; ?>
									</td>

									<td>
									<?php echo $value->email; ?>
									</td>

									<td>
									<?php echo $value->dept_name; ?>
									</td>

									<td>
									<?php echo $value->role; ?>
									</td>

									<td> 
									
									<a href="{{ url('/editempp/') }}/<?=$value->id?>">Edit</a>
									
									</td>

									<td>
									
									<a  href="{{ url('/deleteemp/') }}/<?=$value->id?>" >Delete</a>
									
										
									</td>
							</tr>
						<?php
					}
				?>
				</table>	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

