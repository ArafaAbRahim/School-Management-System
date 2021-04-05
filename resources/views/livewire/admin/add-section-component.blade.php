    
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
                                    <a href="{{route('admin.section')}}" class="btn btn-right pull-right">All Section</a>                                    
                                </div>                               
                            </div>
                        </div>
                    
                        <div class="panel-body well">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <form class="form-horizontal" wire:submit.pervent="storesection">                            
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
                                    <label class="col-md-4 control-label">Version</label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="version">
                                            <option value="">Select</option>
                                            <option value="EV">English Version</option>
                                            <option value="BM">Bangla Medium</option>
                                        </select>
                                        @error('version') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="col-md-4 control-label">Section</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Enter Section" class="form-control input-md" wire:model="sections" />
                                    @error('sections') <p class="text-danger">{{$message}}</p> @enderror
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
