@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">كل الرسائل</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">
            </div>
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
                <div class="card-body">

                    @if (isset($contacts) && $contacts->count() != 0)

                        <div class="table-responsive">
                            <table class="table text-md-nowrap" id="example1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>@lang('site.name_send')</th>
                                        <th>@lang('site.email')</th>
                                        <th>@lang('site.phone')</th>
                                        <th>@lang('site.action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $value)
                                        <tr>
                                            <th scope="row">{{ $value->id }}</th>
                                            <th scope="row">{{ $value->name }}</th>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->email }}</td>
                                            <td>
                            <button class="btn btn-info"
                            onclick="getSubject({{$value->id}})" 
                            data-target="#modaldemo1_{{$value->id}}" 
                            data-toggle="modal">
                               <i class="fa fa-edit"></i>    
                               @lang('site.edit')
                           </button>

                                                <form method="post" action="{{ route('contact.destroy', $value->id) }}"
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
                        <h6 class="modal-title">تعديل</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                        <form action="{{route('contact.update',$value->id)}}" method="POST" 
                            enctype="multipart/form-data">
                        @csrf
                        {{ method_field('put') }}                    
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                   <label class="" for="customFile">@lang('site.name_send')</label>
                                   <input name="name" value="{{$value->name}}" class="form-control"  type="text">
                               </div>                                 
                            </div>
                          
                            <div class="col-md-6">
                               <div class="form-group">
                                   <label class="" for="customFile">@lang('site.email')</label>
                                   <input name="email" value="{{$value->email}}" class="form-control"  type="email">
                               </div>                                 
                            </div> 

                            <div class="col-md-12">
                               <div class="form-group">
                                   <label class="" for="customFile">@lang('site.phone')</label>
                                   <input name="phone" value="{{$value->phone}}" class="form-control"  type="phone">
                               </div>                                 
                            </div>                             

                            <div class="col-md-12">
                                <div class="form-group ">
                                    <div class="form-group">
                                        <textarea 
                                        name="subject"
                                            class="form-control mg-t-20" 
                                            placeholder="@lang('site.subject')"
                                            rows="3">{{$value->subject}}</textarea>
                                    </div>
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

                            <div class="content-center">
                                {{-- {{ $contacts->appends(request()->query())->links() }} --}}
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
@endsection
@section('js')

@endsection
