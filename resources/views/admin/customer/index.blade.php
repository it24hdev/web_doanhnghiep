@extends('admin.layouts.main')
@section('title')
    <title>Khách hàng</title>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/user.css">
@endsection
@section('subcontent')

    <a href="{{ route('customer.list') }}" class="inline-block uppercase intro-y text-lg font-medium mt-10">
        Danh sách khách hàng
    </a>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-gray-700 dark:text-gray-300">
                    <form action="" autocomplete="off">
                        <input type="text" name="search" value="{{ request()->input('search') }}"
                            class="form-control w-56 box pr-10 placeholder-theme-13" placeholder="Tìm kiếm">
                        <button type="submit" class="absolute w-5 h-5 my-auto inset-y-0 mr-3 right-0"><i
                                class="w-4 h-4 my-auto inset-y-0 mr-3 right-0 cursor-pointer"
                                data-feather="search"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-wrap">#</th>
                        <th class="whitespace-wrap">HỌ TÊN</th>
                        <th class="whitespace-wrap">EMAIL</th>
                        <th class="whitespace-wrap">SỐ ĐIỆN THOẠI</th>
                        <th class="whitespace-wrap">GHI CHÚ</th>
                        <th class="text-center whitespace-wrap">TÁC VỤ</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- ========= HTML đổ ra khi số user lớn hơn 0 ========= --}}
                    @if ($customers->count() > 0)
                        @php
                            if (empty(request()->page)) {
                                $t = 0;
                            } else {
                                $page = request()->page;
                                $t = ($page - 1) * 20;
                            }
                        @endphp
                        @foreach ($customers as $customer)
                            @php
                                $t++;
                            @endphp
                            <tr class="intro-x" id="html-user-{{ $customer->id }}">
                                <td>{{ $t }}</td>

                                {{-- ========== HỌ TÊN ========= --}}
                                <td class="mr-0">
                                   {{ $customer->name }}
                                </td>

                                {{-- =========== EMAIL ================ --}}
                                <td>
                                    <div style="word-wrap: break-word;" class="w-52 lg:w-44 xl:w-60 2xl:72 mr-0">
                                        <p>{{ $customer->email }}</p>
                                    </div>
                                </td>


                                <td class="text-center">{{ $customer->phone_number }}</td>

                                <td>
                                    <div style="word-wrap: break-word;" class="w-52 lg:w-44 xl:w-60 2xl:72 mr-0">
                                        <p>{{ $customer->note }}</p>
                                    </div>
                                </td>
                                {{-- ================ CÁC TÁC VỤ ================ --}}
                                <td class="table-report__action w-50">
                                    <div class="flex justify-center items-center">
                                            @can('delete', App\Models\Customer::class)
                                                <a class="tooltip flex items-center btn btn-sm btn-danger" href="javascript:;"
                                                    data-toggle="modal" title="Xóa"
                                                    data-target="#delete-modal-preview-{{ $customer->id }}"> <i
                                                        class="fa-solid fa-trash-can"></i></a>
                                                <div id="delete-modal-preview-{{ $customer->id }}" class="modal"
                                                    tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body p-0">
                                                                <div class="p-5 text-center"> <i data-feather="x-circle"
                                                                        class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                                                    <div class="text-3xl mt-5">Xóa vĩnh viễn!</div>
                                                                    <div class="text-gray-600 mt-2">Bạn có chắc muốn xóa vĩnh
                                                                        viễn
                                                                        mục này</div>
                                                                </div>
                                                                <div class="px-5 pb-8 text-center">
                                                                    <button type="button" data-dismiss="modal"
                                                                        class="btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300 mr-1">Hủy</button>
                                                                    <button type="button" data-dismiss="modal"
                                                                        data-user_id="{{ $customer->id }}"
                                                                        class="force-del-user btn btn-danger w-24">Thực
                                                                        hiện</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endcan

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        {{-- ======== HTML đổ ra khi số user bằng 0 =========== --}}
                        <td colspan="6">
                            <div class="intro-y col-span-12 text-center mt-10">
                                <p class="italic">Không tìm thấy thông tin đã yêu cầu</p>
                            </div>
                        </td>
                    @endif
                </tbody>
            </table>
            <!-- BEGIN: Pagination -->
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                {!! $customers->appends(['search' => request()->search])->links('admin.layouts.pagination') !!}
            </div>
            <!-- END: Pagination -->
        </div>
        <!-- END: Data List -->
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {

            /* Xóa vĩnh viễn user */
            $('.force-del-user').click(function() {
                var id = $(this).data('user_id');
                var _token = $('meta[name="csrf-token"]').attr('content');
                var data = {
                    id: id,
                    _token: _token
                };
                $.ajax({
                    url: "{{ route('customer.forceDelete') }}",
                    method: "POST",
                    data: data,
                    success: function() {
                        $('#html-user-' + id).remove();
                    }
                });
            });
        });
    </script>
@endsection
