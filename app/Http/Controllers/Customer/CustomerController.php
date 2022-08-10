<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            \session(['module_active' => 'customer', 'active' => 'Khách hàng']);
            return $next($request);
        });
    }

    public function index(Request $request)
    {
        $this->authorize('view', Customer::class);
            $keyword = "";
            if ($request->input('search')) {
                $keyword = $request->input('search');
            }
            $customers = Customer::where('name', 'LIKE', "%{$keyword}%")
            ->orwhere('email', 'LIKE', "%{$keyword}%")
            ->orderByDesc('id')->paginate(20);
        return \view('admin.customer.index', \compact('customers'));
    }

    public function forceDelete(Request $request)
    {
        $this->authorize('delete', Customer::class);
        $data = $request->all();
        $id = $data['id'];

        try {
            DB::beginTransaction();
            Customer::where('id', $id)->delete();
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }
}
