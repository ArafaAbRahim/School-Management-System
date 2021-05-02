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
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $book)
                                            <tr>
                                                <td>{{$book->id}}</td>
                                                <td>{{$book->book_name}}</td>
                                                <td>{{$book->slug}}</td>
                                                <td>{{$book->writer_name}}</td> 
                                                <td>{{$book->class}}</td>
                                                <td>{{$book->quantity}}</td>
                                                <td>{{$book->stock_status}}</td>                                                                            
                                                <td>
                                                    <a href="#"><i class="fa fa-edit fa-2x"></i></a>
                                                    <a href="#" onclick="confirm('Are you sure, You want to delete this book?') || event.stopImmediatePropagation()" wire:click.prevent="deleteBook({{$book->id}})" style="margin-left: 5px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table> 
                                {{$books->links()}}                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                
