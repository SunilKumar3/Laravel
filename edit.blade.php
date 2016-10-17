@extends('master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Employee				</div>

				<div class="panel-body">
					<?php
						echo Form::open(array('url' => '/editempp', 'method' => 'post'))
					?>
							<div>
								Emp # : <?=$empps[0]->id?>

							</div>
							

							<div>
								 name : <input type="text" name="name" id="name" value="<?=$empps[0]->name?>">

							</div>
							<div>
								 username: <input type="text" readonly name="username" id="username" value="<?=$empps[0]->username?>">
							</div>

							<div>
								 password: <input type="password" name="password" id="password" value="<?=$empps[0]->password?>">

							</div>

							<div>
								 address: <input type="text" name="address" id="address" value="<?=$empps[0]->address?>">

							</div>

							<div>
								 mobile : <input type="text" name="mobile" id="mobile" value="<?=$empps[0]->mobile?>">

							</div>

							<div>
								 email: <input type="text" name="email" id="email" value="<?=$empps[0]->email?>">

							</div>

							<div>
								 dept_name : <input type="text" readonly name="dept_name" id="dept_name" value="<?=$empps[0]->dept_name?>">

							</div>

							<div>
								 role : <input type="text"  readonly name="role" id="role" value="<?=$empps[0]->role?>">

							</div>




							<div>
								<input type="hidden" name="id" id="id" value="<?=$empps[0]->id?>">
									<input type="submit" name="" id="" value="Save">
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
