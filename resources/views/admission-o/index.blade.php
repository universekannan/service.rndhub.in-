@extends('layout')
@section('content')
<div class="content-wrapper">
<section class="content">
<div class="card card-primary card-outline card-outline-tabs">
<div class="card-header p-0 border-bottom-0">
<ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">All</a>
</li>
<div class="col-sm-5">
<center>
   <div class="nav-link">Users List</div>
</center>
</div>
<div class="col-sm-5">
<input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Students Full Name">
</div>
<div class="col-sm-1">
<td>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add_students"><i class="fa fa-plus"> </i> Add</button>
</td>
</div>
</ul>
</div>

<div class="card-body">
@if(session()->has('success'))
<div class="alert alert-success alert-dismissable">
<a href="#" style="color:white !important" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong> {{ session('success') }} </strong>
</div>
@endif
<div class="tab-content" id="custom-tabs-four-tabContent">
<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
 <table id="example2" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Id</th>
                           <th>Candidate Name</th>
                           <th>Parent Guardian</th>
                           <th>Branch</th>
                           <th>Parent Ocupation</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($manageadmission as $key=>$manageadmissionlist)
                        <tr id="arrayorder_<?php echo $manageadmissionlist->id?>">
                           <td>{{ $key + 1 }}</td>
                           <td>{{ $manageadmissionlist->first_name }} {{ $manageadmissionlist->last_name }}</td>
                           <td>{{ $manageadmissionlist->parent_guardian }}</td>
                           <td>{{ $manageadmissionlist->branch_of_study }}</td>
                           <td>{{ $manageadmissionlist->parent_occupation }}</td>
                           @if($manageadmissionlist->status == 1)
                           <td>Active</td>
                           @else
                           <td>Inactive</td>
                           @endif 
                <td>
                  <div class="margin">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">More</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a href="" class="dropdown-item"  data-toggle="modal" data-target="#edit{{ $manageadmissionlist->id }}">Edit</a>
               <!-- <a href="" class="dropdown-item"  data-toggle="modal" data-target="#assign{{ $manageadmissionlist->id }}">Assign</a> -->
                        </div>
                    </td>
                        </tr>
                        <div class="modal fade" id="edit{{ $manageadmissionlist->id }}">
                           <form action="{{url('/edit_students')}}" method="post">
                              {{ csrf_field() }}
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h4 class="modal-title">Edit</h4>
                                       <button type="button" class="close" data-dismiss="modal" 
                                          aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">  
                                    <div class="row">
                                    <div class="col-md-6"> 
                                       <input type="hidden" class="form-control" name="id" 
                                          value="{{ $manageadmissionlist->id }}"/>

                                       <input type="text" class="form-control mb-3" name="candidate_name" 
                                          value="{{ $manageadmissionlist->candidate_name }}" placeholder="Candidate Name"/>

                                       <input type="text" class="form-control mb-3" name="parent_occupation" 
                                          value="{{ $manageadmissionlist->parent_guardian }}" placeholder="Parent Occupation"/>

                                       <input type="text" class="form-control mb-3" name="mobile_no"
                                          value="{{ $manageadmissionlist->branch_of_study }}" placeholder="Mobile No"/>

                                       <input type="text" class="form-control mb-3" name="aadhar_no"
                                          value="{{ $manageadmissionlist->parent_occupation }}" placeholder="Aadhar No"/>

                                       <select  class="form-control mb-3" name="mother_tongue">
                                          <option>Mother Tongue</option>
                                          <option value="tamil">Tamil</option>
                                          <option value="english">English</option>
                                          <option value="malayalam">Malayalam</option>
                                          <option value="others">Others</option>
                                       </select>

                                       <input type="text" class="form-control mb-3" name="place_of_birth"
                                          value="{{ $manageadmissionlist->parent_occupation }}" placeholder="Place Of Birth"/>

                                          <select  class="form-control mb-3" name="gender">
                                          <option>Religion</option>
                                          <option value="hindu">Hindu</option>
                                          <option value="christian">Christian</option>
                                          <option value="muslim">Muslim</option>
                                          <option value="others">Others</option>
                                       </select>

                                       <input type="text" class="form-control mb-3" name="nationality"
                                          value="{{ $manageadmissionlist->parent_occupation }}" placeholder="Nationality"/>

                                       <input type="text" class="form-control mb-3" name="wheather_appeared_tancet"
                                          value="{{ $manageadmissionlist->parent_occupation }}" placeholder="Wheather Appeared TANCET"/>

                                          <textarea type="text" class="form-control" rows="3"  name="address" placeholder="Address"></textarea>

</div>



                                          <div class="col-md-6"> 

                                       <input type="text" class="form-control mb-3" name="parent/guardian"
                                          value="{{ $manageadmissionlist->parent_occupation }}" placeholder="Parent/Guardian"/>

                                       <select  class="form-control mb-3" name="caste">
                                           <option>Select Caste</option>
                                           <option value="oc">OC</option>
                                           <option value="bc">BC</option>
                                           <option value="mbc">MBC</option>
                                           <option value="sc">SC</option>
                                           <option value="st">ST</option>
                                           <option value="bcm">BCM</option>
                                           <option value="sca">SCA</option>
                                       </select> 

                                       <input type="text" class="form-control mb-3" name="whatapp_no"
                                          value="{{ $manageadmissionlist->parent_occupation }}" placeholder="Whatapp No"/>

                                       <input type="text" class="form-control mb-3" name="pin_code"
                                          value="{{ $manageadmissionlist->parent_occupation }}" placeholder="Pin Code"/>

                                       <input type="date" class="form-control mb-3" name="date_of_birth"         placeholder="DOB"/>

                                       <input type="text" class="form-control mb-3" name="age"
                                          value="{{ $manageadmissionlist->parent_occupation }}" placeholder="Age"/>

                                       <input type="text" class="form-control mb-3" name="branch_of_study"
                                          value="{{ $manageadmissionlist->parent_occupation }}" placeholder="Branch Of Study"/>

                                       <select name="gender" class="form-control">
                                          
                                          <option value="">Select Gender</option>
                                          <option value="Male" <?php if($manageadmissionlist->gender == 1){ echo "selected"; }?>>Male</option>
                                          <option value="Female" <?php if($manageadmissionlist->gender == 0){ echo "selected"; }?>>Female</option>

                                       </select>

                                       </br>

                                       <input type="text" class="form-control mb-3" name="email"
                                          value="{{ $manageadmissionlist->parent_occupation }}" placeholder="Email"/>
                                          
                                       <input type="text" class="form-control mb-3" name="tancet_score"
                                          value="{{ $manageadmissionlist->parent_occupation }}" placeholder="Tancet Score"/>

                                      </div>

                                    </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                       <button type="button" class="btn btn-default" 
                                          data-dismiss="modal">Close</button>
                                       <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                        @endforeach
<!-- Edit -->
                        
         <div class="modal fade" id="add_students">
            <form action="{{url('/add_students')}}" method="post">
            {{ csrf_field() }}
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Application For Admission</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">     
                        <div class="row">
                        <div class="col-md-6"> 
            @foreach($admissionAcademic as $key=>$admissionAcademiclist)
			  <input value="{{ $admissionAcademiclist->id }}" type="hidden" class="form-control mb-3" name="academic_id"/>
            @endforeach
						
                        <input type="text" class="form-control mb-3" name="branch_of_study" placeholder="Branch Of Study/UG"/>
            <select  class="form-control mb-3" name="degree_id" id="degree" required="required">
                <option>---- Select Degree ----</option>
            @foreach($managedegree as $key=>$managedegreelist)
                <option value="{{ $managedegreelist->id }}">{{ $managedegreelist->degree_name }}</option>
            @endforeach
            </select> 
            <select  class="form-control mb-3" name="department_id" id="department" required="required">
                <option>---- Select Department ----</option>
            </select> 
            <input type="text" class="form-control mb-3" name="candidate_name" placeholder="Candidate Name"/>

            <input type="text" class="form-control mb-3" name="parent_occupation" placeholder="Parent Occupation"/>
       
            <input type="text" class="form-control mb-3" name="mobile_no" placeholder="Mobile No"/> 

            <input type="text" class="form-control mb-3" name="aadhar_no" placeholder="Aadhar No"/> 
          
            <select  class="form-control mb-3" name="mother_tongue">
                            <option>Mother Tongue</option>
                            <option value="tamil">Tamil</option>
                            <option value="english">English</option>
                            <option value="malayalam">Malayalam</option>
                            <option value="others">Others</option>
                        </select> 
             
                   <input type="text" class="form-control mb-3" name="place_of_birth" placeholder="Place Of Birth"/>

                   <select  class="form-control mb-3" name="gender">
                            <option>Religion</option>
                            <option value="hindu">Hindu</option>
                            <option value="christian">Christian</option>
                            <option value="muslim">Muslim</option>
                            <option value="others">Others</option>
                        </select>  
          
       
                   <input type="text" class="form-control mb-3" name="nationality" placeholder="Nationality"/>
  
                   <input type="text" class="form-control mb-3" name="wheather_appeared_tancet" placeholder="Wheather Appeared TANCET"/>

                   <textarea type="text" class="form-control" rows="3"  name="address" placeholder="Address"></textarea>
          
</div>
<div class="col-md-6"> 

                <input type="text" class="form-control mb-3" name="parent_guardian" placeholder="Parent/Guardian"/>

                   <select  class="form-control mb-3" name="caste">
                            <option>Select Caste</option>
                            <option value="oc">OC</option>
                            <option value="bc">BC</option>
                            <option value="mbc">MBC</option>
                            <option value="sc">SC</option>
                            <option value="st">ST</option>
                            <option value="bcm">BCM</option>
                            <option value="sca">SCA</option>
                        </select> 

                        <input type="text" class="form-control mb-3" name="whatsapp_no" placeholder="Whatapp No"/> 
             
                        <input type="text" class="form-control mb-3" name="pin_code" placeholder="Pin Code"/>
          
                        <input type="date" class="form-control mb-3" name="date_of_birth" placeholder="DOB"/>

                        <input type="text" class="form-control mb-3" name="age" placeholder="Age"/>
             
             
                        <select  class="form-control mb-3" name="gender">
                            <option>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>  
           
                        <input type="text" class="form-control mb-3" name="email" placeholder="Email"/> 

                        <input type="text" class="form-control mb-3" name="tancet_score" placeholder="TANCET score"/> 
          
</div>
          </div>
                  <div class="modal-footer justify-content-between">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.card -->
      </div>
</div>
</section>
<!-- /.content -->
</div>
@endsection