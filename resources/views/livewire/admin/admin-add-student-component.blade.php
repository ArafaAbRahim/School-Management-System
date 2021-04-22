<div class="wrapper">
    
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Student Registretion</h1>
                    </div>
                    
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Students</a></li>
                            <li class="breadcrumb-item active">Add Student</li>
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
                            <h4>Registration Form</h4> 
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.teacher')}}" class="btn btn-right pull-right">All Student</a>                                    
                        </div>                               
                    </div>
                </div>

                <div class="panel-body ">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif  
                                                   
                    <form wire:submit.pervent="addStudents">
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
                                    <label>Father Name</label>
                                    <input type="text" placeholder="Enter Father Name Here.." class="form-control" wire:model="father_name" />
                                    @error('father_name') <p class="text-danger">{{$message}}</p> @enderror  
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Mother Name</label>
                                    <input type="text" placeholder="Enter Mother Name Here.." class="form-control" wire:model="mother_name" />
                                    @error('mother_name') <p class="text-danger">{{$message}}</p> @enderror  
                                </div>
                            </div>	
                            
                            <div class="form-group">
                                <label>Date of Birth</label>                                    
                                <input type="date" id="birthDate" class="form-control" wire:model="dob" />
                                @error('dob') <p class="text-danger">{{$message}}</p> @enderror  
                            </div>

                            <div class="row">                               	
                                <div class="col-sm-4 form-group">
                                    <label>Class</label>                                    
                                    <select id="country" class="form-control" wire:model="class" >
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>   
                                    @error('class') <p class="text-danger">{{$message}}</p> @enderror                                   
                                </div>	
                                <div class="col-sm-4 form-group">
                                    <label>Version</label>                                    
                                    <select  class="form-control" wire:model="version" >
                                        <option>Select Version</option>
                                        <option>English version</option>
                                        <option>Bangla Medium</option>                                       
                                    </select>    
                                    @error('version') <p class="text-danger">{{$message}}</p> @enderror                                  
                                </div>	
                                <div class="col-sm-4 form-group">
                                    <label>Section</label>
                                    <select class="form-control" wire:model="section_id">
                                        <option value="">Select section</option>
                                        @foreach ($sections as $sections)
                                            <option value="{{$sections->id}}">{{$sections->sections}}</option>
                                        @endforeach
                                    </select>
                                </div>		
                                @error('section_id') <p class="text-danger">{{$message}}</p> @enderror   
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
                                <input type="text" placeholder="Enter Email Address Here.." class="form-control" wire:model="email" />
                            </div>

                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Profile Image</label>
                                    <input type="file"  class="form-control" wire:model="image" />
                                    @if($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @endif
                                    @error('image') <p class="text-danger">{{$message}}</p> @enderror                                        
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
                            
                            <button style="margin-bottom: 20px;" type="submit" class="btn btn-right">Submit</button>				
                        </div>
                    </form>  
                    
                </div>
            </div>
            
        </div>
    </div>
</div>

