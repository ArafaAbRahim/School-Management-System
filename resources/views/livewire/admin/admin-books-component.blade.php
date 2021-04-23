<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Books</h1>
                    </div>
                    
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Librery</a></li>
                            <li class="breadcrumb-item active">Books</li>
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
                                        <h5>All Books</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.addbook')}}" class="btn float-right btn-right" style="margin-bottom: 5px;">Add New</a>
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
                                            <th>Book Name</th>
                                            <th>Slug</th>
                                            <th>Writer name</th>                                    
                                            <th>Class</th>
                                            <th>Quantity</th>
                                            <th>Stock</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                </table>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                
