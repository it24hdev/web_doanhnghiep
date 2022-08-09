<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'id' => 69,
            'name' => 'User',
            'key_code' => NULL,
            'parent_id' => 0,
        ]);
        DB::table('permissions')->insert([
            'id' => 70,
            'name' => 'Xem',
            'key_code' => 'view_user',
            'parent_id' => 69,
        ]);
        DB::table('permissions')->insert([
            'id' => 71,
            'name' => 'Thêm',
            'key_code' => 'create_user',
            'parent_id' => 69,
        ]);
        DB::table('permissions')->insert([
            'id' => 72,
            'name' => 'Sửa',
            'key_code' => 'update_user',
            'parent_id' => 69,
        ]);
        DB::table('permissions')->insert([
            'id' => 73,
            'name' => 'Xóa',
            'key_code' => 'delete_user',
            'parent_id' => 69,
        ]);
        DB::table('permissions')->insert([
            'id' => 74,
            'name' => 'Phân quyền',
            'key_code' => 'role_user',
            'parent_id' => 69,
        ]);

        DB::table('permissions')->insert([
            'id' => 84,
            'name' => 'Quyền quản trị',
            'key_code' => NULL,
            'parent_id' => 0,
        ]);
        DB::table('permissions')->insert([
            'id' => 85,
            'name' => 'Xem',
            'key_code' => 'view_role',
            'parent_id' => 84,
        ]);
        DB::table('permissions')->insert([
            'id' => 86,
            'name' => 'Thêm',
            'key_code' => 'create_role',
            'parent_id' => 84,
        ]);
        DB::table('permissions')->insert([
            'id' => 87,
            'name' => 'Sửa',
            'key_code' => 'update_role',
            'parent_id' => 84,
        ]);
        DB::table('permissions')->insert([
            'id' => 88,
            'name' => 'Xóa',
            'key_code' => 'delete_role',
            'parent_id' => 84,
        ]);

        DB::table('permissions')->insert([
            'id' => 89,
            'name' => 'Bài viết',
            'key_code' => NULL,
            'parent_id' => 0,
        ]);

        DB::table('permissions')->insert([
            'id' => 91,
            'name' => 'Xem chi tiết',
            'key_code' => 'view_post',
            'parent_id' => 89,
        ]);
        DB::table('permissions')->insert([
            'id' => 92,
            'name' => 'Thêm',
            'key_code' => 'create_post',
            'parent_id' => 89,
        ]);
        DB::table('permissions')->insert([
            'id' => 93,
            'name' => 'Sửa',
            'key_code' => 'update_post',
            'parent_id' => 89,
        ]);
        DB::table('permissions')->insert([
            'id' => 94,
            'name' => 'Xóa',
            'key_code' => 'delete_post',
            'parent_id' => 89,
        ]);

        //dich vu
        DB::table('permissions')->insert([
            'id' => 430,
            'name' => 'Dịch vụ',
            'key_code' => NULL,
            'parent_id' => 0,
        ]);

        DB::table('permissions')->insert([
            'id' => 431,
            'name' => 'Xem chi tiết',
            'key_code' => 'view_post2',
            'parent_id' => 430,
        ]);
        DB::table('permissions')->insert([
            'id' => 432,
            'name' => 'Thêm',
            'key_code' => 'create_post2',
            'parent_id' => 430,
        ]);
        DB::table('permissions')->insert([
            'id' => 943,
            'name' => 'Sửa',
            'key_code' => 'update_post2',
            'parent_id' => 430,
        ]);
        DB::table('permissions')->insert([
            'id' => 434,
            'name' => 'Xóa',
            'key_code' => 'delete_post2',
            'parent_id' => 430,
        ]);


        DB::table('permissions')->insert([
            'id' => 300,
            'name' => 'Slider',
            'key_code' => Null,
            'parent_id' => 0,
        ]);
        DB::table('permissions')->insert([
            'id' => 301,
            'name' => 'Xem',
            'key_code' => 'view_slider',
            'parent_id' => 300,
        ]);
        DB::table('permissions')->insert([
            'id' => 302,
            'name' => 'Thêm',
            'key_code' => 'create_slider',
            'parent_id' => 300,
        ]);
        DB::table('permissions')->insert([
            'id' => 303,
            'name' => 'Sửa',
            'key_code' => 'update_slider',
            'parent_id' => 300,
        ]);
        DB::table('permissions')->insert([
            'id' => 304,
            'name' => 'Xoá',
            'key_code' => 'delete_slider',
            'parent_id' => 300,
        ]);

        DB::table('permissions')->insert([
            'id' => 305,
            'name' => 'Đánh giá, bình luận',
            'key_code' => Null,
            'parent_id' => 0,
        ]);

        DB::table('permissions')->insert([
            'id' => 306,
            'name' => 'Xem đánh giá bài viết',
            'key_code' => 'view_vote_post',
            'parent_id' => 305,
        ]);
        DB::table('permissions')->insert([
            'id' => 307,
            'name' => 'Thêm đánh giá bài viết',
            'key_code' => 'create_vote_post',
            'parent_id' => 305,
        ]);
        DB::table('permissions')->insert([
            'id' => 308,
            'name' => 'Sửa đánh giá bài viết',
            'key_code' => 'update_vote_post',
            'parent_id' => 305,
        ]);
        DB::table('permissions')->insert([
            'id' => 309,
            'name' => 'Xóa đánh giá bài viết',
            'key_code' => 'delete_vote_post',
            'parent_id' => 305,
        ]);
        DB::table('permissions')->insert([
            'id' => 310,
            'name' => 'Xem đánh giá sản phẩm',
            'key_code' => 'view_vote_product',
            'parent_id' => 305,
        ]);
        DB::table('permissions')->insert([
            'id' => 311,
            'name' => 'Thêm đánh giá sản phẩm',
            'key_code' => 'create_vote_product',
            'parent_id' => 305,
        ]);
        DB::table('permissions')->insert([
            'id' => 312,
            'name' => 'Sửa đánh giá sản phẩm',
            'key_code' => 'update_vote_product',
            'parent_id' => 305,
        ]);
        DB::table('permissions')->insert([
            'id' => 313,
            'name' => 'Xóa đánh giá sản phẩm',
            'key_code' => 'delete_vote_product',
            'parent_id' => 305,
        ]);
    }
}
