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
				<div class="panel-heading">Departments
						<a href="{{ url('/deptpost/create') }}" style="float:right;">Create New</a>
				</div>

				<div class="panel-body">
				<table>	
				
				<th>Dep#</th>	
				
				<th>Dep.Name</th>

				<th>Dep.email</th>

				
				<th> </th>
				<th> </th>
				<?php

					foreach ($depps as $key => $value) {
						//print_r($value);
						# code...
						?>
							<tr>
							        <td>
									<?php echo $value->id; ?>
									</td>
									
									<td>
									<?php echo $value->dept_name; ?>
									</td>

									<td>
									<?php echo $value->dept_email; ?>
									</td>

									

									<td> 
									
									<a href="{{ url('/editdept/') }}/<?=$value->id?>">Edit</a>
									
									</td>

									<td>
									
									<a  href="{{ url('/deletedept/') }}/<?=$value->id?>" >Delete</a>
									
										
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

