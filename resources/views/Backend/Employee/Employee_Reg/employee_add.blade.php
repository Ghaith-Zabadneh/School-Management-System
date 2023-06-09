@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="container-full">
       
      <!-- Main content -->

		<section class="content">
            
		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Employee </h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{route('em_reg.store')}}" enctype="multipart/form-data">
                        @csrf
					  <div class="row">
							<div class="col-md-4">						
							    <div class="form-group">
                                    <h5>Employee Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif   
                                </div>
                            </div>{{--  End col --}}

                            <div class="col-md-4">						
							    <div class="form-group">
                                    <h5>Father Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="father_name" value="{{old('father_name')}}" class="form-control"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        @if ($errors->has('father_name'))
                                            <span class="text-danger">{{ $errors->first('father_name') }}</span>
                                        @endif   
                                </div>
                            </div>{{--  End col --}}

                            <div class="col-md-4">						
							    <div class="form-group">
                                    <h5>Mother Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="mother_name" value="{{old('mother_name')}}" class="form-control"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        @if ($errors->has('mother_name'))
                                            <span class="text-danger">{{ $errors->first('mother_name') }}</span>
                                        @endif   
                                </div>
                            </div>{{--  End col --}}
                      </div> {{-- End 1st Row --}}

                      <div class="row">

                        <div class="col-md-4">						
                            <div class="form-group">
                                <h5>Email <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="email" name="email" class="form-control" value="{{old('email')}}"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif   
                            </div>
                        </div>{{--  End col --}}

                        <div class="col-md-4">						
                            <div class="form-group">
                                <h5>Mobile Number <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="mobile" class="form-control" value="{{old('mobile')}}"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                    @if ($errors->has('mobile'))
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    @endif   
                            </div>
                        </div>{{--  End col --}}

                        <div class="col-md-4">						
                            <div class="form-group">
                                <h5> Address <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="address" class="form-control" value="{{old('address')}}"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif   
                            </div>
                        </div>{{--  End col --}}

                        
                    </div> {{-- End 2st Row --}}

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
								<h5>Gender <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="gender" value="" id="select" required="" class="form-control">
										<option value="">Select Your Gender</option>
										<option value="Male" {{old('gender')=="Male" ? "selected" : ""}}>Male</option>
										<option value="Female" {{old('gender')=="Female" ? "selected" : ""}}>Female</option>
									</select>
								<div class="help-block"></div></div>
							</div>
                        </div> {{--  End col --}}
                        
                        <div class="col-md-4">						
                            <div class="form-group">
                                <h5> Date Of Birth <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="date_of_birth" value="{{old('date_of_birth')}}" class="form-control"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                    @if ($errors->has('date_of_birth'))
                                        <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                                    @endif   
                            </div>
                        </div>{{--  End col --}}

                        <div class="col-md-4">

                            <div class="form-group">
                            <h5> Designation <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="designation" required="" value="" class="form-control">
                                        <option value="" selected="" disabled="">Select Designation</option>
                                        @foreach($all_data as $designation)
                                        <option value="{{$designation->id}}" {{old('designation') == $designation->id ? 'selected' : "" }} >{{ $designation->name }}</option>
                                        @endforeach	 
                                    </select>
                                </div>
                            </div> <!-- // end form group -->
                        </div> <!-- End col-md-4 -->


                      </div> {{-- End 3st Row --}}


                      <div class="row">

                        <div class="col-md-4">						
                            <div class="form-group">
                                <h5>Salary <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="salary" value="{{old('salary')}}" class="form-control"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                    @if ($errors->has('salary'))
                                        <span class="text-danger">{{ $errors->first('salary') }}</span>
                                    @endif   
                            </div>
                        </div>{{--  End col --}}

                        <div class="col-md-4">						
                            <div class="form-group">
                                <h5> Join Date <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="join_date" value="{{old('join_date')}}" class="form-control"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                    @if ($errors->has('join_date'))
                                        <span class="text-danger">{{ $errors->first('join_date') }}</span>
                                    @endif   
                            </div>
                        </div>{{--  End col --}}

                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="image" required class="form-control" id="image"  data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif 
                            </div>
                        </div>{{--  End col --}}                     

                      </div> {{-- End 4st Row --}}

                      <div class="row">

                        <div class="col-md-4">
                          
                        </div> <!-- End col-md-4 -->

                        <div class="col-md-4">
                          
                        </div> <!-- End col-md-4 -->  

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="controls">
                                    <img id="showimage" src="{{ url('upload/no_image.jpg')}}"  style= "width: 100px; hight :100px; border:1px; soild #0000 ">
                                </div>
                            </div>
                        </div>{{--  End col --}}

                      </div> {{-- End 5st Row --}}
                      
		
							
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showimage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection