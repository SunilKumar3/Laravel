@extends('master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Employee				</div>

				<div class="panel-body">
					<?php
						echo Form::open(array('url' => '/editdept', 'method' => 'post'))
					?>
							<div>
								Dep # : <?=$depps[0]->id?>

							</div>
							

							<div>
								 dept_name: <input type="text" name="dept_name" id="dept_name" value="<?=$depps[0]->dept_name?>">

							</div>
							<div>
								 dept_email: <input type="text" readonly name="dept_email" id="dept_email" value="<?=$depps[0]->dept_email?>">
							</div>

							



							<div>
								<input type="hidden" name="id" id="id" value="<?=$depps[0]->id?>">
									<input type="submit" name="" id="" value="Save">
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
