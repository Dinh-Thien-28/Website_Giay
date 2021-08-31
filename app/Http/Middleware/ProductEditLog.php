<?php

namespace App\Http\Middleware;

use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProductEditLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   
        //dd($request->ip());
        // dd(Auth::user()->id);
        // dd(Carbon::now()->format("Y-m-d H:i:s"));
        Log::info("Edit Product: id = ". $request->id
        ."- user:" .Auth::id()
        ."-time: ".Carbon::now()->format("Y-m-d H:i:s") );
        
        $obj = Product::find($request->id);
        if($obj->created_by != Auth::id()){
            return redirect()->back()->with('msg','Bạn không có quyền sửa sản phẩm này');
        }
        return $next($request);
    }
}
