
@extends('layout')
@section('content')

<!-- /.content -->
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
 
   <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div id="accordion">
                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse1">
                     Edit Basic Profile
                        </a>
                      </h4>
                    </div>
                    <div id="collapse1" class="collapse show" data-parent="#accordion">
                    <form action="{{url('/edit_admission')}}" method="post">
                              {{ csrf_field() }}
                              
                      <div class="card-body">
                      @foreach($beedit as $key=>$beedit)
        <input value="{{ $beedit->id }}" type="hidden" class="form-control mb-3" name="id"/>

                      <div class="row">
                        <div class="col-md-6"> 
           
                        <div class="form-group">
                            <select name="quota" class="form-control">
								 <option value="GQ" <?php if($beedit->quota == 'GQ'){ echo "selected"; }?>>Goverment Quota</option>
                         <option value="MQ" <?php if($beedit->quota == 'MQ'){ echo "selected"; }?>>Management Quota</option>	 
                            </select>
                        </div>
                     
        <input value="{{ $beedit->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Last Name"/>

        <input value="{{ $beedit->father_name }}" type="text" class="form-control mb-3" name="father_name" placeholder="Father/Guardian"/>

        <input value="{{ $beedit->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Mobile No"/> 

        <input value="{{ $beedit->father_no }}" type="text" class="form-control mb-3" name="father_no" placeholder="Father No"/> 

        <input value="{{ $beedit->date_of_birth }}"type="date" class="form-control mb-3" name="date_of_birth"placeholder="DOB" />

        <input value="{{ $beedit->adhar }}" type="text" class="form-control mb-3" name="adhar" placeholder="Aadhar No"/> 

        <textarea name="address" value="{{ $beedit->address }}" class="form-control" rows="3" placeholder="Enter Address..."></textarea>

            </div>

               <div class="col-md-6"> 

        <input value="{{ $beedit->first_name }}" type="text" class="form-control mb-3" name="first_name" placeholder="First Name"/>
 
        <input value="{{ $beedit->father_job }}" type="text" class="form-control mb-3" name="father_job" placeholder="Parent Occupation"/>                           

        <input value="{{ $beedit->whats_up }}" type="text" class="form-control mb-3" name="whats_up" placeholder="Whatapp No"/> 

        <input value="{{ $beedit->mother_no }}" type="text" class="form-control mb-3" name="mother_no" placeholder="Mother No"/>

        <input value="{{ $beedit->pincode }}" type="text" class="form-control mb-3" name="pin_code" placeholder="Pin Code"/>

        <input value="{{ $beedit->age }}" type="text" class="form-control mb-3" name="age" placeholder="Age"/>

        <input value="{{ $beedit->email }}" type="text" class="form-control mb-3" name="email" placeholder="Email"/> 

        <input value="{{ $beedit->profile_photo }}" type="file" name="profile_photo" placeholder="Photo"/>

        <div class="modal-footer justify-content-between">
            <button type="submit" id="save" class="btn btn-primary">Submit</button>
         </div>
</div>
</div>
</div>
@endforeach
					</div>
                       </div>
                          </div>
</form>

<!-- page 2 -->               


                  <div id="accordion">
                  <div class="card card-purple">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse2">
                  BE Admission Form - page 2
                        </a>
                      </h4>
                    </div>
                    <div id="collapse2" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                     <div class="row">
                        <div class="col-md-6">
					
				
				<div class="form-group row">
                  <label for="service_name" class="col-sm-4 col-form-label"><span style="color:red"></span>Select Caste</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="caste">
                              <option>--- Select Caste ---</option>
                              <option value="caste1">caste1</option>
                              <option value="caste2">caste2</option>
                         </select>
                  </div>
                </div>
                <div class="form-group row">
                   <label for="community" class="col-sm-4 col-form-label"><span style="color:red"></span>Service Community</label>
                    <div class="col-sm-5">
                        <select class="form-control select2bs4" name="caste" required="requiered" style="width: 100%;" required="required">
                            <option>Select Community</option>
                            <option value="OC">OC</option>
						    <option value="BC">BC</option>
						    <option value="MBC">MBC</option>
							<option value="SC">SC</option>
						    <option value="ST">ST</option>
							<option value="BCM">BCM</option>
							<option value="SCA">SCA</option>
                        </select>
                    </div>
				    <div class="col-sm-3">
					    <input type="file" class="custom-file-input" id="customFile">
					    <label class="custom-file-label" for="customFile">Choose file</label>
				    </div>
                </div>
				<div class="form-group row">
                  <label for="whether_first_graduate" class="col-sm-4 col-form-label"><span style="color:red"></span>Whether First Graduate</label>
				    <div class="col-sm-8">
                        <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                    </div>
                </div>
				<div class="form-group row">
                  <label for="mother_tongue" class="col-sm-4 col-form-label"><span style="color:red"></span>Mother Tongue</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="mother_tongue">
                              <option>--- Select Mother Tongue ---</option>
                              <option value="Tamil">Tamil</option>
                              <option value="Malayalam">Malayalam</option>
							  <option value="Others">Others</option>
                         </select>
                  </div>
                </div>
				<div class="form-group row">
                  <label for="name_of_the_parent_guardian" class="col-sm-4 col-form-label"><span style="color:red"></span>Parent Of Guardian</label>
				  
				    <div class="col-sm-8">
                       <input  required="requiered" type="text" class="form-control" name="name_of_the_parent_guardian" id="name_of_the_parent_guardian" maxlength="50" placeholder="Name Of The Parent Or Guardian">
                     <span id="" style="color:red"></span>
                    </div>
                  </div>
	
                
						   
						    </div>

                        <div class="col-md-6"> 
<div class="form-group row">
                  <label for="occupation_of_the_parent" class="col-sm-4 col-form-label"><span style="color:red"></span>Occu...</label>
				  
				    <div class="col-sm-8">
                       <input  required="requiered" type="text" class="form-control" name="occupation_of_the_parent" id="occupation_of_the_parent" maxlength="50" placeholder="Occupation Of The Parent">
                     <span id="" style="color:red"></span>
                    </div>
                  </div>
				          
			<div class="form-group row">
                <label for="department_preference_1" class="col-sm-4 col-form-label"><span style="color:red"></span>Preference 1</label>
                <div class="col-sm-8">
                    <select class="form-control" name="department_preference_1">
                       <option>---- Select department Preference 1 ----</option>
					@foreach($department as $key=>$department1)
						<option value="{{ $department1->id }}">{{ $department1->department_name }}</option>
					@endforeach
                    </select>
                 </div>
            </div>
			<div class="form-group row">
                <label for="department_preference_2" class="col-sm-4 col-form-label"><span style="color:red"></span>Preference 2</label>
                <div class="col-sm-8">
                    <select class="form-control" name="department_preference_2">
                       <option>---- Select department Preference 2 ----</option>
					@foreach($department as $key=>$department1)
						<option value="{{ $department1->id }}">{{ $department1->department_name }}</option>
					@endforeach
                    </select>
                 </div>
            </div>
			<div class="form-group row">
                <label for="department_preference_3" class="col-sm-4 col-form-label"><span style="color:red"></span>Preference 3</label>
                <div class="col-sm-8">
                    <select class="form-control" name="department_preference_3">
                       <option>---- Select department Preference 3 ----</option>
					@foreach($department as $key=>$department1)
						<option value="{{ $department1->id }}">{{ $department1->department_name }}</option>
					@endforeach
                    </select>
                 </div>
            </div>
			<div class="form-group row">
                <label for="department_preference_4" class="col-sm-4 col-form-label"><span style="color:red"></span>Preference 4</label>
                <div class="col-sm-8">
                    <select class="form-control" name="department_preference_4">
                       <option>---- Select department Preference 4 ----</option>
					@foreach($department as $key=>$department1)
						<option value="{{ $department1->id }}">{{ $department1->department_name }}</option>
					@endforeach
                    </select>
                 </div>
            </div>
                        
                        </div>
                     </div>
					  <table class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Class </th>
                           <th style="width:70%">Name Of The School/College With Address </th>
                           <th style="width:10%">% ofMarks</th>
                           <th>Passout</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>S S L C</td>
                           <td><input  required="requiered" type="text" class="form-control" name="study_in_sslc_address" id="study_in_sslc_address" maxlength="50" placeholder="Enter Study In SSLC Address"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="sslc_marks" id="sslc_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="sslc_passout" id="sslc_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
						<tr>
                           <td>H S C</td>
                           <td><input  required="requiered" type="text" class="form-control" name="study_in_hsc_address" id="study_in_hsc_address" maxlength="50" placeholder="Enter Study In HSC Address"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_marks" id="hsc_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_passout" id="hsc_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
						<tr>
                           <td>Degree</td>
                           <td><input  required="requiered" type="text" class="form-control" name="study_in_degree_address" id="study_in_degree_address" maxlength="50" placeholder="Enter Study In College Address"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="degree_marks" id="degree_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="degree_passout" id="degree_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
                       </tbody>
                    </table>
				  </div>
                    </div>
                  </div>


<!--page3-->

                  <div class="card card-olive">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapse3">
                  BE Admission Form - page 3
                        </a>
                      </h4>
                    </div>
                    <div id="collapse3" class="collapse" data-parent="#accordion">
                     <div class="card-body">
                      <table class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>S No </th>
                           <th style="width:50%">Name Of The School/College With Address </th>
                           <th>% ofMarks</th>
                           <th>% ofMarks</th>
                           <th>Passout</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>Tamil / Malayalam</td>
                           <td><input  required="requiered" type="text" class="form-control" name="study_in_sslc_address" id="study_in_sslc_address" maxlength="50" placeholder="Enter Study In SSLC Address"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="sslc_marks" id="sslc_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="sslc_passout" id="sslc_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
						<tr>
                           <td>2</td>
                           <td>English</td>
                           <td><input  required="requiered" type="text" class="form-control" name="study_in_hsc_address" id="study_in_hsc_address" maxlength="50" placeholder="Enter Study In HSC Address"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_marks" id="hsc_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_passout" id="hsc_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
						<tr>
                           <td>3</td>
                           <td>Mathematics</td>
                           <td><input  required="requiered" type="text" class="form-control" name="study_in_degree_address" id="study_in_degree_address" maxlength="50" placeholder="Enter Study In College Address"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="degree_marks" id="degree_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="degree_passout" id="degree_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
						<tr>
                           <td>4</td>
                           <td>Physics</td>
                           <td><input  required="requiered" type="text" class="form-control" name="study_in_degree_address" id="study_in_degree_address" maxlength="50" placeholder="Enter Study In College Address"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="degree_marks" id="degree_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="degree_passout" id="degree_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
						<tr>
                           <td>5</td>
                           <td>Chemistry</td>
                           <td><input  required="requiered" type="text" class="form-control" name="study_in_degree_address" id="study_in_degree_address" maxlength="50" placeholder="Enter Study In College Address"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="degree_marks" id="degree_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="degree_passout" id="degree_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
						<tr>
                           <td>6</td>
                           <td>Biology / Computer Science</td>
                           <td><input  required="requiered" type="text" class="form-control" name="study_in_degree_address" id="study_in_degree_address" maxlength="50" placeholder="Enter Study In College Address"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="degree_marks" id="degree_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="degree_passout" id="degree_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
                       </tbody>
                    </table>
					</br>
					 <table class="table table-bordered table-hover">
                     <thead>
                        <tr>

                           <th>Passout</th>
                           <th>Passout</th>
                           <th>Passout</th>
                           <th>Passout</th>
                           <th>Passout</th>
                           <th>Passout</th>
                        </tr>
                     </thead>
                     <tbody>

						<tr>
                           <td>English</td>
                           <td><input  required="requiered" type="text" class="form-control" name="study_in_hsc_address" id="study_in_hsc_address" maxlength="50" placeholder="Enter Study In HSC Address"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_marks" id="hsc_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_passout" id="hsc_passout" maxlength="50" placeholder="Passout"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_passout" id="hsc_passout" maxlength="50" placeholder="Passout"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_passout" id="hsc_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
						
                       </tbody>
                    </table>
					
					</br>
					 <table class="table table-bordered table-hover">
                     <thead>
                        <tr>

                           <th>Passout</th>
                           <th>Passout</th>
                           <th>Passout</th>
                           <th>Passout</th>
                           <th>Passout</th>
                        </tr>
                     </thead>
                     <tbody>

						<tr>
                           <td>English</td>
                           <td><input  required="requiered" type="text" class="form-control" name="study_in_hsc_address" id="study_in_hsc_address" maxlength="50" placeholder="Enter Study In HSC Address"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_marks" id="hsc_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_passout" id="hsc_passout" maxlength="50" placeholder="Passout"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_passout" id="hsc_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
						
                       </tbody>
                    </table>
					</br>
					 <table class="table table-bordered table-hover">
                     <thead>
                        <tr>

                           <th>Passout</th>
                           <th>Passout</th>
                           <th>Passout</th>
                           <th>Passout</th>
                           <th>Passout</th>
                        </tr>
                     </thead>
                     <tbody>

						<tr>
                           <td>English</td>
                           <td><input  required="requiered" type="text" class="form-control" name="study_in_hsc_address" id="study_in_hsc_address" maxlength="50" placeholder="Enter Study In HSC Address"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_marks" id="hsc_marks" maxlength="50" placeholder="ofMarks"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_passout" id="hsc_passout" maxlength="50" placeholder="Passout"></td>
                           <td><input  required="requiered" type="text" class="form-control" name="hsc_passout" id="hsc_passout" maxlength="50" placeholder="Passout"></td>
                        </tr>
						
                       </tbody>
                    </table>
					</br>
				<div class="row">
                  <div class="col-sm-6">
				<div class="form-group row">
                  <label for="whether_first_graduate" class="col-sm-6 col-form-label"><span style="color:red"></span>Whether First Graduate</label>
				    <div class="col-sm-6">
                        <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                    </div>
                </div>
                </div>
                <div class="col-sm-6">
				<div class="form-group row">
                  <label for="whether_first_graduate" class="col-sm-6 col-form-label"><span style="color:red"></span>Whether First Graduate</label>
				    <div class="col-sm-6">
                        <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                    </div>
                </div>
				</div>
				</div>
                    </div>
                  </div>

                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
   </section>
</div>
          <!-- /.col -->
@endsection
