    
<div class="wrapper">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Book</h1>
                    </div>
                    
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active">Book List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Main Container -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                   <h5>Add New Section</h5> 
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.books')}}" class="btn btn-right pull-right">All Book</a>                                    
                                </div>                               
                            </div>
                        </div>
                    
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <form class="form-horizontal" wire:submit.pervent="storeBook"> 

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Book Name</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Enter Section" class="form-control input-md" wire:model="book_name" wire:keyup="generateSlug" />
                                        @error('book_name') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>  

                                 <div class="form-group">
                                    <label class="col-md-4 control-label">Slug</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Enter Section" class="form-control input-md" wire:model="slug" />
                                        @error('slug') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div> 

                                 <div class="form-group">
                                    <label class="col-md-4 control-label">Writer Name</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Enter Section" class="form-control input-md" wire:model="writer_name" />
                                        @error('writer_name') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Class</label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="class">
                                            <option value="">Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option> 
                                            <option value="11">11</option> 
                                            <option value="12">12</option>                                                                                                                                            
                                        </select>
                                        @error('class') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>
                          
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Stock</label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="stock_status">
                                            <option value="instock">Instock</option>
                                            <option value="outofstock">Out of Stock</option>
                                        </select>
                                        @error('stock_status') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>   

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Quantity</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity" />
                                        @error('quantity') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-right">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
