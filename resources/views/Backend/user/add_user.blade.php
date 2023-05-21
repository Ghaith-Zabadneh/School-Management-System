@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->

		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add User</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{route('users.store')}}">
                        @csrf
					  <div class="row">
						<div class="col-md-6">
                            <div class="form-group">
								<h5>Role Select <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="role" id="select" required="" class="form-control">
										<option value="">Select User Role</option>
										<option value="Admin">Admin</option>
										<option value="Operator">Operator</option>
									</select>
								<div class="help-block"></div></div>
							</div>
                        </div> {{--  End col --}}
							<div class="col-md-6">						
							<div class="form-group">
								<h5>User Name <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
								@if ($errors->has('name'))
									<span class="text-danger">{{ $errors->first('name') }}</span>
								@endif  
								
							</div>
                            </div>{{--  End col --}}
                      </div> {{-- End Row --}}
                        <div class="row">
                            <div class="col-md-6">
							<div class="form-group">
								<h5>Email <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
									@if ($errors->has('email'))
										<span class="text-danger">{{ $errors->first('email') }}</span>
									@endif  
							</div>
                            </div>
                        </div> {{-- End Row --}}
		
							
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-info" value="Add">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  
    
    </div>
</div>

@endsection