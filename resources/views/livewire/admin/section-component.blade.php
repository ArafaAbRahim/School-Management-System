<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Sections</h1>
                    </div>
                    
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Class</a></li>
                            <li class="breadcrumb-item active">Sections</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Main Container -->
        <div>
            <div class="container" style="padding: 30px 0;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>All Classes</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.addsection')}}" class="btn float-right btn-right" style="margin-bottom: 5px;">Add New</a>
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
                                            <th>Class</th>
                                            <th>Version</th>
                                            <th>Section</th>                                    
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sections as $section)
                                            <tr>
                                                <td>{{$section->id}}</td>
                                                <td>{{$section->class}}</td>
                                                <td>{{$section->version}}</td>
                                                <td>{{$section->sections}}</td>                                                                             
                                                <td>
                                                    <a href="#"><i class="fa fa-edit fa-2x"></i></a>
                                                    <a href="#" onclick="confirm('Are you sure, You want to delete this class?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSection({{$section->id}})" style="margin-left: 20px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                
