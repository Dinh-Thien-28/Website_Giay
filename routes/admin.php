    <?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\UserController;

Route::view('/', 'admin.layouts.main')->name('admin');

Route:: prefix('san-pham')->group(function(){
    Route::get('/',[ProductController::class,'index'])->name('product.index');
    Route::get('/xoa{id}',[ProductController::class,'remove'])->name('product.remove')->middleware('check_auth');
    Route::get('/tao-moi',[ProductController::class,'addForm'])->name('product.add')->middleware('check_auth');
    Route::post('/tao-moi',[ProductController::class,'saveAdd'])->middleware('check_auth');
    Route::get('/cap-nhat/{id}',[ProductController::class,'editForm'])->name('product.edit')->middleware('check_auth');
    Route::post('/cap-nhat/{id}',[ProductController::class,'saveEdit'])->middleware('log_edit_product')->middleware('check_auth');
    
});
Route:: prefix('chi-tiet')->group(function(){
    Route::get('/',[DetailController::class,'index'])->name('detail.index');
   
});
Route:: prefix('danh-muc')->group(function(){
    Route::get('/',[CategoryController::class,'index'])->name('category.index');
    Route::get('/xoa{id}',[CategoryController::class,'remove'])->name('category.remove')->middleware('check_auth');
    Route::get('/tao-moi',[CategoryController::class,'addForm'])->name('category.add')->middleware('check_auth');
    Route::post('/tao-moi',[CategoryController::class,'saveAdd'])->middleware('check_auth');
    Route::get('/cap-nhat/{id}',[CategoryController::class,'editForm'])->name('category.edit')->middleware('check_auth');
     Route::post('/cap-nhat/{id}',[CategoryController::class,'saveEdit'])->middleware('check_auth');
   
});

Route:: prefix('tai-khoan')->group(function(){
    Route::get('/',[UserController::class,'index'])->name('user.index');
    Route::get('/xoa{id}',[UserController::class,'remove'])->name('user.remove');
    Route::get('/tao-moi',[UserController::class,'addForm'])->name('user.add');
    Route::post('/tao-moi',[UserController::class,'saveAdd']);
    Route::get('/cap-nhat/{id}',[UserController::class,'editForm'])->name('user.edit');
    Route::post('/cap-nhat/{id}',[UserController::class,'saveEdit']);
   
});

?>