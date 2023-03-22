@extends('layout')
@section('content')

<!-- /.content -->
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Edit Profile</h1>
            </div>
         </div>
      </div>
   </div>
 
   <section class="content">
  
       
          <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
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
                    <form action="{{url('/edit_users')}}" method="post">
                      <div class="card-body">

                      @foreach($beedit as $key=>$beedit)

                      <div class="row">
                        <div class="col-md-6">

					
            <input value="{{ $beedit->first_name	 }}" type="text" class="form-control mb-3" name="first_name	" placeholder="Candidate Name"/>

            <input value="{{ $beedit->father_name }}" type="text" class="form-control mb-3" name="father_name" placeholder="Father/Guardian"/>
        
            <input value="{{ $beedit->mobile }}" type="text" class="form-control mb-3" name="mobile" placeholder="Mobile No"/> 

            <input value="{{ $beedit->father_no }}" type="text" class="form-control mb-3" name="father_no" placeholder="Father No"/> 

            <input value="{{ $beedit->adhar }}" type="text" class="form-control mb-3" name="adhar" placeholder="Aadhar No"/> 
          
            <input value="{{ $beedit->mother_tongue }}" type="text" class="form-control mb-3" name="mother_tongue" placeholder="Mother Tongue"/>


            <input value="{{ $beedit->place_of_birth }}" type="text" class="form-control mb-3" name="place_of_birth" placeholder="Place Of Birth"/>

            <input value="{{ $beedit->religion }}" type="text" class="form-control mb-3" name="religion" placeholder="Religion"/>
                           
            <input value="{{ $beedit->nationalty }}" type="text" class="form-control mb-3" name="nationalty" placeholder="Nationality"/>
  

     <textarea name="address" value="{{ $beedit->address }}" class="form-control" rows="3" placeholder="Enter Address..."></textarea>
          
</div>

<div class="col-md-6"> 

                <input value="{{ $beedit->last_name }}" type="text" class="form-control mb-3" name="last_name" placeholder="Father/Guardian"/>

                <input value="{{ $beedit->father_job }}" type="text" class="form-control mb-3" name="father_job" placeholder="Parent Occupation"/>                           
                
                  <input value="{{ $beedit->whats_up }}" type="text" class="form-control mb-3" name="whats_up" placeholder="Whatapp No"/> 

                  <input value="{{ $beedit->mother_no }}" type="text" class="form-control mb-3" name="mother_no" placeholder="Mother No"/>
             
                    <input value="{{ $beedit->pincode }}" type="text" class="form-control mb-3" name="pin_code" placeholder="Pin Code"/>
          
                    <input value="{{ $beedit->date_of_birth }}"type="date" class="form-control mb-3" name="date_of_birth" placeholder="DOB"/>

                        <input value="{{ $beedit->age }}" type="text" class="form-control mb-3" name="age" placeholder="Age"/>
             
             
                        <input value="{{ $beedit->gender }}" type="text"  class="form-control mb-3" name="gender" placeholder="Gender"/>
                            
           
                        <input value="{{ $beedit->email }}" type="text" class="form-control mb-3" name="email" placeholder="Email"/> 

                        <input value="{{ $beedit->tancent_score }}" type="text" class="form-control mb-3" name="tancent_score" placeholder="Tancent Score"/> 
          
                        <input value="{{ $beedit->wheather }}" type="text" class="form-control mb-3" name="wheather_appeared_tancet" placeholder="Wheather"/>

                   <div class="col-sm- float-right">
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

                           <input type="text" class="form-control mb-3" name="first_name" placeholder="First Name"/>

                           <input type="text" class="form-control mb-3" name="father_name" placeholder="Name Of The Parent Guardian"/>

                           <input type="text" class="form-control mb-3" name="father_job" placeholder="Occupation Of The Parent"/>
                           
                           <input type="text" class="form-control mb-3" name="department" placeholder="Depart"/>
      
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

                     

                      <div class="custom-file">
                       <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                           </div>
                       


                        <input type="text" class="form-control mb-3" name="first_graduate" placeholder="First Graduate"/>

                               <div class="form-group clearfix">
                               <div class="icheck-primary d-inline ">
                               <input type="checkbox" id="checkboxPrimary1" checked>
                              <label for="checkboxPrimary1">
                                Yes
                     </label>
                  

                       <div class="icheck-primary d-inline">
                       <input type="checkbox" id="checkboxPrimary2">
                       <label for="checkboxPrimary2">
                        No
                       </label>
                     </div>
                     </div>
                     </div>

                        <select  class="form-control mb-3" name="mother_tongue">
                            <option>Mother Tongue</option>
                            <option value="tamil">Tamil</option>
                            <option value="english">English</option>
                            <option value="malayalam">Malayalam</option>
                            <option value="others">Others</option>
                        </select> 

                        <input type="date" class="form-control mb-3" name="date_of_birth" id="bday" onchange="submitBday()">
                          
                           <select class="form-control mb-3" name="gender">
                              <option>Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                           </select>
                          
                           <input type="email" class="form-control mb-3" name="email" placeholder="Email"/>

                        
                        
                        </div>

                        <div class="col-md-6"> 

                        <input type="text" class="form-control mb-3" name="last_name" placeholder="Last Name"/>

                        <input type="text" class="form-control mb-3" name="mother_name" placeholder="Mother Name"/>

                        <input type="text" class="form-control mb-3" name="mobile" placeholder="Phone "/>	

                        <input type="text" class="form-control mb-3" name="adhar" placeholder="Adhar"/>

                        <select  class="form-control mb-3" name="gender">
                            <option>Religion</option>
                            <option value="hindu">Hindu</option>
                            <option value="christian">Christian</option>
                            <option value="muslim">Muslim</option>
                            <option value="others">Others</option>
                        </select> 


                        <select  class="form-control mb-3" name="degree_id" id="degree" required="required">
                <option>---- Select Degree ----</option>
            @foreach($managedegree as $key=>$managedegreelist)
                <option value="{{ $managedegreelist->id }}">{{ $managedegreelist->degree_name }}</option>
            @endforeach
            </select> 
            
            <select  class="form-control mb-3" name="department_id" id="department" required="required">
                <option>---- Select Department ----</option>
            </select> 

                        <input type="text" class="form-control mb-3" name="pincode" placeholder="PinCode"/>

                        <input type="text" class="form-control mb-3" name="age" id="resultBday" placeholder="Age"/>
                     	         
                        <textarea name='address' class="form-control" rows="3" placeholder="Address..." ></textarea>
                        
                        </div>
                     </div>
                      </div>
                    </div>
                  </div>

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
                      <div class="row">
                        <div class="col-md-6">
                           <input type="text" class="form-control mb-3" name="first_name" placeholder="First Name"/>

                           <input type="text" class="form-control mb-3" name="father_name" placeholder="Father Name"/>

                           <input type="text" class="form-control mb-3" name="father_job" placeholder="Father Work"/>
                           
                           <input type="text" class="form-control mb-3" name="department" placeholder="Depart"/>

                        <input type="date" class="form-control mb-3" name="date_of_birth" id="bday" onchange="submitBday()">
                          
                           <select class="form-control mb-3" name="gender">
                              <option>Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                           </select>
                          
                           <input type="email" class="form-control mb-3" name="email" placeholder="Email"/>
                          
                        </div>

                        <div class="col-md-6"> 

                        <input type="text" class="form-control mb-3" name="last_name" placeholder="Last Name"/>

                        <input type="text" class="form-control mb-3" name="mother_name" placeholder="Mother Name"/>

                        <input type="text" class="form-control mb-3" name="mobile" placeholder="Phone "/>	

                        <input type="text" class="form-control mb-3" name="adhar" placeholder="Adhar"/>

                        <input type="text" class="form-control mb-3" name="age" id="resultBday" placeholder="Age"/>

                        <input type="text" class="form-control mb-3" name="pincode" placeholder="PinCode"/>
                     	         
                        <textarea name='address' class="form-control" rows="3" placeholder="Address..." ></textarea>
                        
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
