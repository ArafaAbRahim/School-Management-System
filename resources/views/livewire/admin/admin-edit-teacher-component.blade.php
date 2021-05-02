<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Teacher Update</h1>
                    </div>
                    
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Teachers</a></li>
                            <li class="breadcrumb-item active">Update Teacher</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> 
         <!-- Main Container -->
         <div class="container"> 
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Teacher Update Form</h4> 
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.teacher')}}" class="btn btn-right pull-right">All Teacher</a>                                    
                        </div>                               
                    </div>
                </div>
                    
                <div class="panel-body">
                    @if(Session::has('update_message'))
                        <div class="alert alert-success" role="alert">{{Session::get('update_message')}}</div>
                    @endif
                                         
                    <form wire:submit.pervent="updateTeacher">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>First Name</label>
                                    <input type="text" placeholder="Enter First Name Here.." class="form-control" wire:model="first_name" />
                                    @error('first_name') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Enter Last Name Here.." class="form-control" wire:model="last_name" />
                                    @error('last_name') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>	
                            
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" id="birthDate" class="form-control" wire:model="dob" />
                                    @error('dob') <p class="text-danger">{{$message}}</p> @enderror
                                </div>		
                                <div class="col-sm-6 form-group">
                                    <label>NID</label>
                                    <input type="text" placeholder="Enter Company Name Here.." class="form-control" wire:model="NID" />
                                    @error('NID') <p class="text-danger">{{$message}}</p> @enderror
                                </div>	
                            </div>

                            <div class="form-group">
                                <label>Permanent Address</label>
                                <textarea placeholder="Enter Permanent Address Here.." rows="3" class="form-control" wire:model="permanent_address" ></textarea>
                                @error('permanent_address') <p class="text-danger">{{$message}}</p> @enderror
                            </div>
                            
                            <div class="form-group">
                                <label>Present Address</label>
                                <textarea placeholder="Enter Present Address Here.." rows="3" class="form-control" wire:model="present_address" ></textarea>
                                @error('present_address') <p class="text-danger">{{$message}}</p> @enderror
                            </div>

                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>City</label>
                                    <input type="text" placeholder="Enter City Name Here.." class="form-control" wire:model="city" />
                                    @error('city') <p class="text-danger">{{$message}}</p> @enderror
                                </div>	
                                <div class="col-sm-4 form-group">
                                    <label>State</label>
                                    <input type="text" placeholder="Enter State Name Here.." class="form-control" wire:model="state" />
                                    @error('state') <p class="text-danger">{{$message}}</p> @enderror
                                </div>	
                                <div class="col-sm-4 form-group">
                                    <label>Zip</label>
                                    <input type="text" placeholder="Enter Zip Code Here.." class="form-control" wire:model="zip" />
                                    @error('zip') <p class="text-danger">{{$message}}</p> @enderror
                                </div>		
                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" placeholder="Enter Title Here.." class="form-control" wire:model="title" />
                                @error('title') <p class="text-danger">{{$message}}</p> @enderror
                            </div>	
                            
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Phone Number</label>
                                    <input type="text" placeholder="Enter Phone Number Here.." class="form-control" wire:model="phone" />
                                    @error('phone') <p class="text-danger">{{$message}}</p> @enderror
                                </div>		
                                <div class="col-sm-6 form-group">
                                    <label>Emergancy Number</label>
                                    <input type="text" placeholder="Enter Emergancy Number Here.." class="form-control" wire:model="emergency_phn" />
                                    @error('emergency_phn') <p class="text-danger">{{$message}}</p> @enderror
                                </div>	
                            </div>
                                
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" placeholder="Enter Email Address Here.." class="form-control" wire:model="emailid" />
                            </div>

                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Profile Image</label>
                                    <input type="file"  class="form-control" wire:model="newimage" />
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120" />
                                    @else
                                        <img src="{{asset('assets/img/teachers')}}/{{$image}}" width="120" />
                                    @endif
                                    @error('newimage') <p class="text-danger">{{$message}}</p> @enderror                                        
                                </div>		
                                
                                <div class="col-sm-6 form-group">                                                                        
                                    <label>Gender</label>                                    
                                    <select id="Gender" class="form-control" wire:model="gender" >
                                        <option>Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>                                       
                                    </select> 
                                    @error('gender') <p class="text-danger">{{$message}}</p> @enderror                                                                                                       
                                </div>	
                            </div>
                            
                            <button style="margin-bottom: 20px;" type="submit" class="btn btn-right">Update</button>				
                        </div>
                    </form> 
                    
                </div>
            </div>
        </div>
    </div>
</div>

