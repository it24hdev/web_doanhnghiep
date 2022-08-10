@extends('admin.layouts.main')
@section('title')
    <title>Dịch vụ</title>
@endsection
@section('css')
    <script src="{{ asset('lib/tinymce/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
@endsection
@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{$title}}
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            @can('view2',\App\Models\Post::class)
                <a class="btn btn-primary shadow-md mr-2" href="{{route('post2.index')}}">Danh sách dịch vụ</a>
            @endcan
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12">

            <form action="{{route('post2.store')}}" method="post" enctype="multipart/form-data" id="form-post">
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">Tên dịch vụ(<span class="text-red-600">*</span>)</label>
                        <input id="crud-form-1" type="text" name="title" value="{{old('title')}}" class="form-control w-full" placeholder="Nhập tiêu đề" required>
                        @error('title')
                            <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mt-3" style="display: none;">
                        <label for="crud-form-2" class="form-label">Danh mục</label>
                        <select name="categories[]" data-placeholder="Chọn danh mục" class="tom-select w-full" id="crud-form-2" multiple>
                            @foreach($arrCate as $index => $item)
                                <option value="{{$index}}"
                                    {{ (collect(old('categories'))->contains($index)) ? 'selected': false }}
                                >{{$item}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label>Trạng thái</label>
                        <div class="mt-2">
                            <input type="checkbox" checked="checked" name="status" class="form-check-switch">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label>Icon</label>
                        <input type="text" class="form-control" name='icon' value=" {{old('icon')}}">
                    </div>
                     <div class="form-group mb-4">
                        <a type="button" class="btn btn-primary" href="https://fontawesome.com/v5/search" target="_blank">Lấy icon</a>
                     </div>
                    <div class="mt-3">
                        <label>Ảnh đại diện</label>
                        <div class="mt-2">
                            <div class="w-40 show-image"></div>
                            <input name="thumb" type="file" class="mt-2" id="file-image" required>
                            @error('thumb')
                                <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Mô tả</label>
                        <div class="mt-2">
                            <textarea class="form-control" name="excerpt" rows="3"  placeholder="Nhập mô tả ngắn">{{old('excerpt')}}</textarea>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Nội dung</label>
                        <div class="mt-2">
                            <textarea name="content" id="tiny-editor" rows="7">{{old('content')}}</textarea>
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        @can('view2',\App\Models\Post::class)
                            <a type="button" href="{{route('post2.index')}}" class="btn btn-outline-secondary w-24 mr-1">Hủy</a>
                        @endcan
                        <button type="submit" class="btn btn-primary w-24">Lưu</button>
                    </div>
                    @csrf
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('/js/post-form.js') }}"></script>
@endsection
