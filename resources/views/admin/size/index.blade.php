@extends('admin.app')
@section('index')
    <section class="content-header">
        <h1>{{ $tab }}</h1>       
        <div class="row">
            <div class="timeline-footer general col-md-3" style="padding-left: 10px">
                <a href="{{ route('sizes.create') }}" class="btn btn-primary btn general">
                    <i class="fa fa-plus-square general"></i> Thêm mới
                </a>
            </div>
            <div class="col-md-9 ">
                <form action="" method="get">
                    <div class="input-group col-3">                   
                        <input type="text" class="form-control"
                                placeholder="Search" aria-label="Search" 
                                style="margin-left: 400px; width: 300px"
                                name="keyword" id="keyword">
                        <input type="submit" class="btn btn-submit" />
                    </div>              
                </form>
            </div>
        </div>
        @if (session()->has('messageSuccess'))
            <div class="col-md-3 infoMessage">
                <div class="box box-warning box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <i class="fa fa-bell-o"></i>
                            Thông báo
                        </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        {{ session()->get('messageSuccess') }}
                    </div>
                </div>
            </div>
        @endif
    </section>
    <section class="content">
        <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách</h3>
                </div>
                <div id="livesearch"></div>
                    <div class="box-body table-responsive no-padding" id="tableContent">
                        <table class="table table-hover text-center">
                            @if ($sizes->isEmpty())
                                <tr>
                                    <th>Không có thông tin</th>
                                </tr>
                            @else
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tình trạng</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                    @foreach ($sizes as $size)
                                        <tr>
                                            <td>{{ $size->id }}</td>
                                            <td>{{ $size->name }}</td>
                                            <td>{{ $size->status == 0 ? "Đang ẩn" : "Đang hiển thị" }}</td>
                                            <td class="td general">
                                                <a href="{{ route('sizes.edit', $size->id) }}">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('sizes.destroy', $size->id) }}" method="POST" class="delete-form general delete">
                                                    @method('DELETE')
                                                    @csrf   
                                                    <button type="submit" title="Xóa" onClick="return confirm('Bạn có chắc chắn muốn xóa')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            @endif
                        </table>
                        <div class="col-sm-12 text-right">
                            <div class="dataTables_paginate paging_simple_numbers">
                                <ul class="pagination pagination-sm no-margin pull-right">
                                    @foreach ($sizes->links()->elements[0] as $key => $item)
                                        @if ($sizes->links()->paginator->currentPage() == $key)
                                            <li class="active">
                                                <a>{{ $key }}</a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ $item }}">{{ $key }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection