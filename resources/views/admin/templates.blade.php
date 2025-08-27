@extends('admin.layouts.main')
@section('main-container')

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Templates</h4>

                            <div class="page-title-right">
                               <a href="{{url('admin/templates-add')}}" class="waves-effect">Add New Template</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Name</th>
                                                <th>Url</th>
                                                <th>Added Date & Time</th>
                                                <th>Updated Date & Time</th>
                                                <th>Edit</th>
                                              
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                @php $i=1; @endphp
                                                @foreach ($templatesData as $templatesRow)
                                            <tr>
                                               <td>{{ $i++ }}</td>
                                                <td>{{ $templatesRow->tmp_name }}</td>
                                                <td>{{ $templatesRow->tmp_url }}</td>
                                                 <td>
                                                    @if (!empty($templatesRow->tmp_added_date))
                                                        {{ date('j F Y h:i:s', strtotime($templatesRow->tmp_added_date)) }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (!empty($templatesRow->tmp_updated_date))
                                                        {{ date('j F Y h:i:s', strtotime($templatesRow->tmp_updated_date)) }}
                                                    @endif
                                                </td>
                                                <td><a
                                        href="{{ url('admin/templates-edit/' . $templatesRow->template_id) }}">Edit</a>
                                </td>
                                               
                                               
                                            </tr>
                                              @endforeach
                                           
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Url</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                               
                                            </tr>
                                           
                                           
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

@endsection