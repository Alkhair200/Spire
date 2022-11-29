@extends('layouts.master')
@section('css')
<style type="text/css">
    .modal-footer{
        justify-content: flex-start !important;
    }
</style>
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">كل المنشورات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">
            </div>
        </div>
    </div>

    <!-- breadcrumb -->
@endsection
@section('content')

    <!-- row opened -->
    <div class="row row-sm">
        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <td>
                            <a class="btn btn-info" 
                            data-target="#modaldemo1" 
                            data-toggle="modal">
                               <i class="fa fa-pulse"></i>    
                               @lang('site.add')
                           </a>
                        </td>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">

                    @if (isset($blogs) && $blogs->count() != 0)

                        <div class="table-responsive">
                            <table class="table text-md-nowrap" id="example1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>@lang('site.description')</th>
                                        <th>@lang('site.image')</th>
                                        <th>@lang('site.date')</th>
                                        <th>@lang('site.action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $value)
                                        <tr>
                                            <th scope="row">{{ $value->id }}</th>
                                            <td>{{ $value->description }}</td>
                                            <td><img src="{{ $value->image_path }}" alt="No image available"
                                                    style="width: 65px;
height: 65px; class="img-thumbnail"></td>
                                            <td>{{ $value->created_at->toFormattedDateString() }}</td>
                                            <td>
                            <button class="btn btn-info" 
                            data-target="#modaldemo1_{{$value->id}}" 
                            data-toggle="modal">
                               <i class="fa fa-edit"></i>    
                               @lang('site.edit')
                           </button>

                                                <form method="post" action="{{ route('blog.destroy', $value->id) }}"
                                                    style="display: inline-block">
                                                    @csrf
                                                    {{ method_field('delete') }}

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-danger "><i
                                                                class="fa fa-trash"></i>@lang('site.delete')</button>
                                                    </div>
                                                </form>
                                            </td>

                                        </tr>
        <!-- Basic modal -->
        <div class="modal" id="modaldemo1_{{$value->id}}">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">إضافه</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                        <form action="{{route('blog.update',$value->id)}}" method="POST" 
                            enctype="multipart/form-data">
                        @csrf
                        {{ method_field('put') }}                    
                    <div class="modal-body">

                        <div class="row">
                          
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <div class="form-group">
                                        <textarea name="description"
                                            class="form-control mg-t-20" 
                                            placeholder="@lang('site.description')"
                                            rows="3">{{$value->description}}</textarea>
                                    </div>
                                </div>                                
                            </div>

                            <div class="col-md-12">
                            <div class="form-group">
                                <div class="">
                                    <div class=" custom-file"
                                    style="margin-bottom: 10px">
                                    <input name="image" class="custom-file-input input_img" id="customFile" type="file">
                                    <label class="custom-file-label" for="customFile">إختر صورة</label>
                                </div>
                            </div>
                        </div> 
                        <div class="form-group  mg-b-0">
                            <img src="{{ asset('uploads/img/default.png') }}" style="width: 100px;"
                                class="thumbnail image-preview" alt="">
                        </div>                                                       
                            </div>                              
                            
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary btn-sm" type="submit">
                        @lang('site.edit')</button>
                        <button class="btn ripple btn-secondary btn-sm" data-dismiss="modal" type="button">@lang('site.close')</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Basic modal -->                                         
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="content-center" style="margin-top: 20px">
                                {{-- {{ $services->appends(request()->query())->links() }} --}}
                            </div>

                        </div><!-- bd -->

                    @else
                        لا يوجد بيانات حاليا
                    @endif
                </div><!-- bd -->
            </div><!-- bd -->
        </div>
        <!--/div-->
    </div>
    <!-- /row -->

        <!-- Basic modal -->
        <div class="modal" id="modaldemo1">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">إضافه</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                        <form action="{{route('blog.store')}}" method="POST" id="form_data" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('post') }}                    
                    <div class="modal-body">

                        <div class="row">
                          
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <div class="form-group">
                                        <textarea name="description"
                                            class="form-control mg-t-20" 
                                            placeholder="@lang('site.description')"
                                            rows="3"></textarea>
                                    </div>
                                </div>                                
                            </div>

                            <div class="col-md-12">
                            <div class="form-group">
                                <div class="">
                                    <div class=" custom-file"
                                    style="margin-bottom: 10px">
                                    <input name="image" class="custom-file-input input_img" id="customFile" type="file">
                                    <label class="custom-file-label" for="customFile">إختر صورة</label>
                                </div>
                            </div>
                        </div> 
                        <div class="form-group  mg-b-0">
                            <img src="{{ asset('uploads/img/default.png') }}" style="width: 100px;"
                                class="thumbnail image-preview" alt="">
                        </div>                                                       
                            </div>                              
                            
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary btn-sm" type="submit">
                        @lang('site.save')</button>
                        <button class="btn ripple btn-secondary btn-sm" data-dismiss="modal" type="button">@lang('site.close')</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Basic modal -->    
@endsection
@section('js')
<script type="text/javascript">
 
</script>
@endsection
