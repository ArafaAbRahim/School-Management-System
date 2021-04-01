<div class="wrapper">
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Classes</h1>
                    </div>
                    
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Class</a></li>
                            <li class="breadcrumb-item active">Classes</li>
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
                                <div>                                    
                                    All Classes
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach ($sections as $section)
                                            <tr>
                                                <td>{{$section->id}}</td>
                                                <td>{{$section->class}}</td>
                                                <td>{{$section->version}}</td>
                                                <td>{{$section->sections}}</td> 
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
