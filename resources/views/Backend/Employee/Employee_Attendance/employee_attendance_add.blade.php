@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->

		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Attendance</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{route('attendance.store')}}">
                        @csrf
					  <div class="row">
							<div class="col-md-12">	
                                <div class="row">
                                    <div class="col-md-6">				
                                        <div class="form-group">
                                            <h5>Attendance Date <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="date" name="date" class="form-control" required  data-validation-required-message="This field is required"> <div class="help-block"></div></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped" style="width: 100%">
                                            <thead>
                                              <tr>
                                                <th rowspan="2" class="text-center" style="vertical-align: middle; width: 8%" >SL</th>
                                                <th rowspan="2" class="text-center" style="vertical-align: middle;">Employee List</th>
                                                <th colspan="2" class="text-center" style="width: 50%">Attendance Status</th>
                                              </tr>
                                              <tr>
                                                <th class="text-center">Present</th>
                                                <th class="text-center">Absent</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($employees as $key => $employee)
                                                <tr id = "div{{$employee->id}}" class="text-center">
                                                    <input type="hidden" value="{{$employee->id}}" name="employee_id[]">
                                                    <td >{{$key+1}}</td>
                                                    <td >{{$employee->name}}</td>
                                                    <td class="text-center">
                                                        <input type="radio" id="radio_9{{$key}}" class="radio-col-success" name="attend_status{{$key}}" value="present">
                                                        <label for="radio_9{{$key}}">Present</label>
                                                      </td>
                                                      <td class="text-center">
                                                        <input type="radio" id="radio_13{{$key}}" class="radio-col-danger" name="attend_status{{$key}}" value="Absent">
                                                        <label for="radio_13{{$key}}">Absent</label>
                                                      </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                          </table>
                                    </div>
                                </div>
                            </div>{{--  End col --}}
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