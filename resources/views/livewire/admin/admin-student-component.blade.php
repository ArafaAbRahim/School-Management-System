<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Student</h1>
                    </div>
                    
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Students</a></li>
                            <li class="breadcrumb-item active">Student List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Main Container -->       
        
        <div style="padding: 30px;">
            <div class="row">                    
                <div class="panel panel-default">   
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="checkbox-field">
                                    <input class="frm-input" id="have-code" value="1" type="checkbox" wire:model="show_all_info"><span>Show All Info</span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addstudent')}}" class="btn float-right btn-right" style="margin-bottom: 5px;">Add New</a>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <div class="panel-body">                        
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>                                    
                                    <th>Class</th>                                        
                                    <th>Version</th>
                                    <th>Section</th>                                                                                                                                                                               
                                    <th>Phone</th>
                                    <th>Emergancy No.</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Present Address</th>                                     
                                    @if($show_all_info)
                                        <th>Permanent Address</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Zip</th>
                                        <th>Father Name</th>
                                        <th>Mother Name</th>
                                        <th>DOB</th>                                       
                                    @endif
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td><img src="{{asset('assets/img/students')}}/{{$student->image}}" width="60"/></td>
                                        <td>{{$student->fname}}</td>
                                        <td>{{$student->lname}}</td>                                       
                                        <td>{{$student->class}}</td>
                                        <td>{{$student->version}}</td>
                                        <td>{{$student->section_id}}</td>                                                                                                                      
                                        <td>{{$student->phone}}</td>
                                        <td>{{$student->emergency_phn}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->gender}}</td> 
                                        <td>{{$student->address1}}</td> 
                                        @if($show_all_info)
                                            <td>{{$student->address2}}</td>
                                            <td>{{$student->city}}</td>
                                            <td>{{$student->state}}</td>
                                            <td>{{$student->zip}}</td>    
                                            <td>{{$student->father_name}}</td>
                                            <td>{{$student->mother_name}}</td>
                                            <td>{{$student->dob}}</td>                                     
                                        @endif                                                                                                                           
                                        <td>
                                            <a href="#"><i class="fa fa-edit "></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this student?') || event.stopImmediatePropagation()" wire:click.prevent="deleteStudent({{$student->id}})" ><i class="fa fa-times fa-x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>  
                        {{$students->links()}}                      
                    </div>
                </div>                    
            </div>
        </div>
        
    </div>
</div>
                                

