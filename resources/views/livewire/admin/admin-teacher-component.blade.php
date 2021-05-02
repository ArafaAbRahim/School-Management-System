<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Teacher</h1>
                    </div>
                    
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Teachers</a></li>
                            <li class="breadcrumb-item active">Teachers List</li>
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
                                    <a href="{{route('admin.addteacher')}}" class="btn float-right btn-right" style="margin-bottom: 5px;">Add New</a>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>                                                                                                                                                                                                                                    
                                        <th>Title</th>
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
                                            <th>DOB</th>
                                            <th>NID</th>                                                                                         
                                        @endif 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $teacher)
                                        <tr>
                                            <td>{{$teacher->id}}</td>
                                            <td><img src="{{asset('assets/img/teachers')}}/{{$teacher->image}}" width="60"></td>
                                            <td>{{$teacher->first_name}}</td>
                                            <td>{{$teacher->last_name}}</td>                                                                                                                                                                                                                         
                                            <td>{{$teacher->title}}</td>
                                            <td>{{$teacher->phone}}</td> 
                                            <td>{{$teacher->emergency_phn}}</td>                                            
                                            <td>{{$teacher->emailid}}</td>
                                            <td>{{$teacher->gender}}</td> 
                                            <td>{{$teacher->present_address}}</td> 
                                            @if($show_all_info)     
                                                <td>{{$teacher->permanent_address}}</td>
                                                <td>{{$teacher->city}}</td>
                                                <td>{{$teacher->state}}</td>
                                                <td>{{$teacher->zip}}</td>                                                      
                                                <td>{{$teacher->dob}}</td>                                          
                                                <td>{{$teacher->NID}}</td>                                                                                                                                                                                        
                                            @endif                                                                                                                     
                                            <td>
                                                <a href="{{route('admin.editteacher',['teacher_id'=>$teacher->id])}}"><i class="fa fa-edit "></i></a>
                                                <a href="#" onclick="confirm('Are you sure, You want to delete this teacher?') || event.stopImmediatePropagation()" wire:click.prevent="deleteTeacher({{$teacher->id}})" ><i class="fa fa-times fa-x text-danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>                               
                            </table>   
                            {{$teachers->links()}}                     
                        </div>
                    </div>                    
                </div>
            </div>
        
    </div>
</div>
                                

