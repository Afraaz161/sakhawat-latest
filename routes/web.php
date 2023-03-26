<?php

use App\Http\Controllers\TestUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::controller(TestUserController::class)->group(function () {
    Route::get('test','index');
});
// Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('index');
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});
Route::post('/check-credentials', [App\Http\Controllers\FrontController::class, 'check_credentials'])->name('check-credentials');
Route::get('/admin-logout', [App\Http\Controllers\FrontController::class, 'admin_logout'])->name('admin-logout');

Route::get('/about-us', [App\Http\Controllers\FrontController::class, 'about_us'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\FrontController::class, 'contact_us'])->name('contact-us');
Route::post('/contact-us-action', [App\Http\Controllers\FrontController::class, 'contact_us_action'])->name('contact-us-action');

Route::get('/', [App\Http\Controllers\UserController::class, 'login_page'])->name('login-page');
// Route::post('/admin-check-credentials', [App\Http\Controllers\UserController::class, 'admin_check_credentials'])->name('admin.check-credentials');
// Route::get('/admin-logout', [App\Http\Controllers\FrontController::class, 'admin_logout'])->name('admin-logout');

// Admin
Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin-dashboard');
Route::get('/profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('profile');
Route::post('/update-profile', [App\Http\Controllers\DashboardController::class, 'updateProfile'])->name('update-user-profile');
Route::get('/profile/remove-logo/{id}', [App\Http\Controllers\DashboardController::class, 'removeLogo'])->name('remove-logo');
Route::get('/admin/front-sliders', [App\Http\Controllers\ItemController::class, 'front_sliders'])->name('front-sliders');
Route::post('/admin/front-sliders-action', [App\Http\Controllers\ItemController::class, 'front_sliders_action'])->name('front-sliders-action');
Route::get('/admin/front-sliders/delete-slider/{id}', [App\Http\Controllers\ItemController::class, 'delete_slider'])->name('front-slider-delete');
Route::get('/admin/front-products', [App\Http\Controllers\ItemController::class, 'front_products'])->name('front-products');
Route::post('/admin/front-products-action', [App\Http\Controllers\ItemController::class, 'front_products_action'])->name('front-products-action');
Route::get('/admin/front-product-delete', [App\Http\Controllers\ItemController::class, 'front_product_delete'])->name('front-product-delete');
Route::get('/admin/front-categories', [App\Http\Controllers\ItemController::class, 'front_categories'])->name('front-categories');
Route::post('/admin/front-categories-action', [App\Http\Controllers\ItemController::class, 'front_categories_action'])->name('front-categories-action');
Route::get('/admin/front-category-delete', [App\Http\Controllers\ItemController::class, 'front_category_delete'])->name('front-category-delete');

/*-- Items Route --*/
Route::get('/my-items', [App\Http\Controllers\ItemController::class, 'items'])->name('my-items');
Route::get('/add-new-item/get-categories', [App\Http\Controllers\ItemController::class, 'get_categories'])->name('item.get-categories');
Route::get('/add-new-item/get-subcategories', [App\Http\Controllers\ItemController::class, 'get_subcategories'])->name('item.get-subcategories');
Route::get('/add-new-item/get-manufacture',[App\Http\Controllers\ItemController::class, 'get_manufacture'])->name('item.get-manufacture');
Route::get('/add-new-item/get-brand',[App\Http\Controllers\ItemController::class, 'get_brand'])->name('item.get-brands');
Route::post('/add-new-item/add-brand',[App\Http\Controllers\ItemController::class, 'add_brand'])->name('item.add-brand');

Route::post('/add-new-item-action', [App\Http\Controllers\ItemController::class, 'add_new_item_action'])->name('items.add-item-action');
Route::get('/items-list',[App\Http\Controllers\ItemController::class, 'view_items_list'])->name('items.view-items-list');
Route::get('/items-list/delete-item/{id}', [App\Http\Controllers\ItemController::class, 'delete_item'])->name('item.delete-item');
Route::get('/items-list/edit-item/{id}', [App\Http\Controllers\ItemController::class, 'edit_item'])->name('item.edit-item');
Route::post('/items-list/update-item/{id}', [App\Http\Controllers\ItemController::class, 'update_item'])->name('item.update-item');
Route::post('/add-manufacture', [App\Http\Controllers\ItemController::class, 'add_manufacture'])->name('item.add-manufacture');
Route::post('/add-category', [App\Http\Controllers\ItemController::class, 'add_category'])->name('item.add-category');
Route::post('/add-subcategory', [App\Http\Controllers\ItemController::class, 'add_subcategory'])->name('item.add-subcategory');
Route::post('/add-customer', [App\Http\Controllers\ItemController::class, 'add_customer'])->name('item.add-customer');

// Account Route
Route::get('/accounts', [App\Http\Controllers\AccountController::class, 'accounts'])->name('accounts');
Route::get('/accounts/delete-account/{id}', [App\Http\Controllers\AccountController::class, 'delete_account'])->name('account.delete-account');
Route::get('/accounts/edit-account/{id}', [App\Http\Controllers\AccountController::class, 'edit_account'])->name('account.edit-account');
Route::post('/accounts/update-account/', [App\Http\Controllers\AccountController::class, 'update_account'])->name('account.update-account');
Route::post('/create-new-account', [App\Http\Controllers\AccountController::class, 'create_new_account'])->name('accounts-action');


// Salesman
 Route::get('/users', [App\Http\Controllers\UserController::class, 'users'])->name('users');
Route::view('/user','users.users-list');
Route::post('/users/new-user-action', [App\Http\Controllers\UserController::class, 'new_user_action'])->name('users.new-user-action');
Route::get('/users/delete-account-action/{id}', [App\Http\Controllers\UserController::class, 'admin_account_delete'])->name('users.delete-user-account');



// Categories
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'categories'])->name('categories');
Route::get('/edit-category', [App\Http\Controllers\CategoryController::class, 'edit_category'])->name('edit-category');
Route::post('/update-category', [App\Http\Controllers\CategoryController::class, 'update_category'])->name('update-category');
Route::get('/categories/delete-category/{id}', [App\Http\Controllers\CategoryController::class, 'delete_category'])->name('categories.delete-category');
Route::post('/new-categories-action', [App\Http\Controllers\CategoryController::class, 'new_categories_action'])->name('categories.new-categories-action');

// Sub-Categories
Route::get('/sub-categories', [App\Http\Controllers\CategoryController::class, 'subcategories'])->name('sub-categories');
Route::get('/edit-subcategory', [App\Http\Controllers\CategoryController::class, 'edit_subcategory'])->name('edit-subcategory');
Route::post('/update-subcategory', [App\Http\Controllers\CategoryController::class, 'update_subcategory'])->name('update-subcategory');
Route::post('/new-subcategories-action', [App\Http\Controllers\CategoryController::class, 'new_subcategories_action'])->name('subcategories.new-subcategories-action');
Route::get('/sub-categories/delete-subcategory/{id}', [App\Http\Controllers\CategoryController::class, 'delete_subcategory'])->name('subcategories.delete-subcategory');

// Brands
Route::get('/brands', [App\Http\Controllers\CategoryController::class, 'brands'])->name('brands');
Route::get('/edit-brand', [App\Http\Controllers\CategoryController::class, 'edit_brand'])->name('edit-brand');
Route::post('/update-brand', [App\Http\Controllers\CategoryController::class, 'update_brand'])->name('update-brand');
Route::post('/new-brand-action', [App\Http\Controllers\CategoryController::class, 'new_brand_action'])->name('categories.new-brand-action');

// ManuFactures
Route::get('/manufactures', [App\Http\Controllers\CategoryController::class, 'manufactures'])->name('manufactures');
Route::get('/edit-manufacture', [App\Http\Controllers\CategoryController::class, 'edit_manufacture'])->name('edit-manufacture');
Route::post('/update-manufacture', [App\Http\Controllers\CategoryController::class, 'update_manufacture'])->name('update-manufacture');
Route::post('/new-manufacture-action', [App\Http\Controllers\CategoryController::class, 'new_manufacture_action'])->name('manufactures.new-manufacture-action');
Route::get('/manufactures/delete-manufacture/{id}', [App\Http\Controllers\CategoryController::class, 'delete_manufacture'])->name('manufactures.delete-manufacture');


// Sales Route
Route::get('/new-sale', [App\Http\Controllers\SalesController::class, 'new_sale'])->name('sales.new-sale');
Route::post('/new-sale-action', [App\Http\Controllers\SalesController::class, 'new_sale_action'])->name('sales.new-sale-action');
Route::get('/sale-print-urdu/', [App\Http\Controllers\SalesController::class, 'sale_print_urdu'])->name('sale-print-urdu');
Route::get('/sale-print-english/', [App\Http\Controllers\SalesController::class, 'sale_print_english'])->name('sale-print-english');
Route::get('/new-sale/get-receivable-amount', [App\Http\Controllers\SalesController::class, 'get_receivable_amount'])->name('items.get-receivable-amount');
Route::get('/sales', [App\Http\Controllers\SalesController::class, 'sales_list'])->name('sales.sales-list');
Route::get('/sales/delete-sale/{id}', [App\Http\Controllers\SalesController::class, 'salesDelete'])->name('sale.sale-delete');

Route::get('/sales/get-session-items', [App\Http\Controllers\SalesController::class, 'get_session_items'])->name('sale.get-session-items');

Route::get('/new-sale/get-item-detail', [App\Http\Controllers\SalesController::class, 'get_item_detail'])->name('sales.get-item-detail');
Route::post('/new-sale/add-customer', [App\Http\Controllers\SalesController::class, 'add_customer'])->name('sales.add-customer');
Route::post('/new-sale/add-item', [App\Http\Controllers\SalesController::class, 'add_item'])->name('sales.add-item');
Route::get('/new-sale/get-cutomers', [App\Http\Controllers\SalesController::class, 'get_customers'])->name('sale.get-vendors');
Route::get('/new-sale/get-items', [App\Http\Controllers\SalesController::class, 'get_items'])->name('sale.get-items');
Route::get('/new-sale/get-customer-detail', [App\Http\Controllers\SalesController::class, 'get_customer_detail'])->name('sales.get-customer-detail');
Route::get('/new-sale/get-customer-account-detail', [App\Http\Controllers\SalesController::class, 'get_customer_account_detail'])->name('sales.get-customer-account-detail');
Route::get('/new-sale/add-item-to-session', [App\Http\Controllers\SalesController::class, 'add_item_to_session'])->name('sales.add-item-to-session');
Route::get('/new-sale/add-item-to-hold-session', [App\Http\Controllers\SalesController::class, 'add_item_to_hold_session'])->name('sales.add-item-to-hold-session');
Route::get('/new-sale/get-item-from-hold-session', [App\Http\Controllers\SalesController::class, 'get_item_from_hold_session'])->name('sales.get-item-from-hold-session');
Route::get('/new-sale/get-item-from-hold-into-list', [App\Http\Controllers\SalesController::class, 'get_item_from_hold_into_list'])->name('sales.get-item-from-hold-into-list');
Route::delete('/new-sale/delete-item-to-session', [App\Http\Controllers\SalesController::class, 'delete_item_to_session'])->name('sales.delete-item-to-session');
Route::get('/new-sale/edit-item-to-session-quantity', [App\Http\Controllers\SalesController::class, 'edit_item_to_session_quantity'])->name('sales.edit-item-to-session-quantity');
Route::get('/new-sale/edit-item-to-session-price', [App\Http\Controllers\SalesController::class, 'edit_item_to_session_price'])->name('sales.edit-item-to-session-price');
Route::delete('/new-sale/reset-page', [App\Http\Controllers\SalesController::class, 'reset_page'])->name('sales.reset-session');
Route::get('/sales/sale-return-detail/{id}', [App\Http\Controllers\SalesController::class, 'sale_return_detail'])->name('sale.sale-return-detail');
Route::get('/sales/sale-detail/{id}', [App\Http\Controllers\SalesController::class, 'sale_detail'])->name('sale.sale-detail');
Route::get('/sales-list/transfer-sales', [App\Http\Controllers\SalesController::class, 'transfer_sales'])->name('sales.transfer-sale');
Route::get('/sales-list/transfer-sales/hisory', [App\Http\Controllers\SalesController::class, 'transfer_sales_history'])->name('sale.sale-tranfer-history');
Route::get('/sales-list/transfer-sales/get-account-types', [App\Http\Controllers\SalesController::class, 'get_account_types'])->name('transfer-sale.get-account-types');
Route::post('/sales-list/transfer-sales/search-result', [App\Http\Controllers\SalesController::class, 'search_transfer_sales'])->name('sales.search-transfer-sale');
Route::post('/sales-list/transfer-sales-action', [App\Http\Controllers\SalesController::class, 'transfer_sales_action'])->name('sales.transfer-sale-action');
Route::post('/sales-list/transfer-previous-sale-into-today', [App\Http\Controllers\SalesController::class, 'transfer_previous_sale_into_today'])->name('sales.transfer-previous-sale-into-today');
Route::get('/new-sale/get-sku-product', [App\Http\Controllers\SalesController::class, 'getSkuProduct'])->name('sales.get-sku-product');
Route::get('/sales/sale-edit/{id}', [App\Http\Controllers\SalesController::class, 'SaleEdit'])->name('sale.sale-edit');
Route::post('/sales/sale-edit/get-items', [App\Http\Controllers\SalesController::class, 'SaleEdit_GetItems'])->name('edit-sale.get-items');
Route::get('/sales/edit-sale/edit-item-to-session-quantity', [App\Http\Controllers\SalesController::class, 'saleEdit_edit_item_to_session_quantity'])->name('edit-sale.edit-item-to-session-quantity');
// Sale Return Route
Route::get('/sales/sale-return', [App\Http\Controllers\SalesController::class, 'SaleReturn'])->name('sales.sales-return');

// Purchase Route
Route::get('/purchase-item', [App\Http\Controllers\PurchaseController::class, 'purchase_item'])->name('purchase.purchase-form');
Route::get('/new-purchase/get-customer-account-detail', [App\Http\Controllers\PurchaseController::class, 'get_customer_account_detail'])->name('purchase.get-customer-account-detail');
Route::get('/purchase-item/add-item-to-session', [App\Http\Controllers\PurchaseController::class, 'add_item_to_session'])->name('purchase.add-item-to-session');
Route::delete('/purchase-item/delete-item-to-session', [App\Http\Controllers\PurchaseController::class, 'delete_item_to_session'])->name('purchase.delete-item-to-session');
Route::delete('/purchase-item/reset-page', [App\Http\Controllers\PurchaseController::class, 'reset_page'])->name('purchase.reset-session');
Route::post('/purchase/purchase-action', [App\Http\Controllers\PurchaseController::class, 'purchase_item_action'])->name('purchase.purchase-action');
Route::get('/purchase-print-english/', [App\Http\Controllers\PurchaseController::class, 'purchase_print_english'])->name('purchase-print-english');
Route::get('/purchase-print-urdu/', [App\Http\Controllers\PurchaseController::class, 'purchase_print_urdu'])->name('purchase-print-urdu');
Route::get('/purchases', [App\Http\Controllers\PurchaseController::class, 'purchase_list'])->name('purchase.purchase-list');
Route::post('/purchases/search-purchase-by-lot', [App\Http\Controllers\SearchController::class, 'searchPurchaseByLot'])->name('purchase.search-purchase-by-lot');
Route::get('/purchases/delete-purchase/{id}', [App\Http\Controllers\PurchaseController::class, 'purchaseDelete'])->name('purchase.purchase-delete');
Route::get('/purchases/purchase-detail/{id}', [App\Http\Controllers\PurchaseController::class, 'purchase_detail'])->name('purchase.purchase-detail');
Route::post('/purchase-item/add-vendor', [App\Http\Controllers\PurchaseController::class, 'add_vendor'])->name('purchase.add-vendor');
Route::get('/purchase-item/get-vendors', [App\Http\Controllers\PurchaseController::class, 'get_vendors'])->name('purchase.get-vendors');
Route::get('/purchases/get-session-items', [App\Http\Controllers\PurchaseController::class, 'get_session_items'])->name('purchase.get-session-items');
Route::get('/new-purchase/get-sku-product', [App\Http\Controllers\PurchaseController::class, 'getSkuProduct'])->name('purchase.get-sku-product');

// Expenses
Route::get('/expenses', [App\Http\Controllers\ExpenseController::class, 'expenses'])->name('expenses');
Route::post('/expenses/add-expense', [App\Http\Controllers\ExpenseController::class, 'addExpense'])->name('expense.add-expense');
Route::get('/expenses-delete-expense/{id}', [App\Http\Controllers\ExpenseController::class, 'deleteExpense'])->name('expense.delete-expense');
Route::post('/expenses/add-category', [App\Http\Controllers\ExpenseController::class, 'addCategory'])->name('expense.add-category');
Route::get('/expenses/get-categories', [App\Http\Controllers\ExpenseController::class, 'getCategories'])->name('expense.get-categories');

// Banks
Route::get('/banks', [App\Http\Controllers\BankController::class, 'Banks_list'])->name('Banks');
Route::post('/banks/add-bank-action', [App\Http\Controllers\BankController::class, 'add_bank_action'])->name('banks.add-bank-action');
Route::post('/banks/tranfer-amount-into-today-sale', [App\Http\Controllers\BankController::class, 'tranfer_amount_into_today_sale'])->name('banks.tranfer-amount-into-today-sale');
Route::get('/banks/delete-bank/{id}', [App\Http\Controllers\BankController::class, 'delete_bank'])->name('banks.delete-bank');
Route::get('/banks/bank-transactions/{id}', [App\Http\Controllers\BankController::class, 'bank_transactions'])->name('bank.view-bank-detail');

// Payments
Route::get('/payments/purchase-payment', [App\Http\Controllers\PaymentController::class, 'purchase_payment'])->name('payment.purchase-payment');
Route::get('/payments/purchase-payment-detail/{id}', [App\Http\Controllers\PaymentController::class, 'vendorPaymentDetail'])->name('vendor.view-payment-detail');
Route::get('/get-purchase-payment-detail', [App\Http\Controllers\PaymentController::class, 'get_purchase_payment_detail'])->name('get-purchase-payment-detail');
Route::post('/payments/purchase-payment/add-payment-to-purchase-account-action', [App\Http\Controllers\PaymentController::class, 'add_payment_to_purchase_account_action'])->name('add-payment-to-purchase-account-action');

Route::get('/payments/sale-payment', [App\Http\Controllers\PaymentController::class, 'sale_payment'])->name('payment.sale-payment');
Route::get('/payments/delete-sale-payment/{id}', [App\Http\Controllers\PaymentController::class, 'deleteSalePayment'])->name('payments.delete-sale-payment');
Route::get('/payments/sale-payment-detail/{id}', [App\Http\Controllers\PaymentController::class, 'customerPaymentDetail'])->name('customer.view-payment-detail');
Route::get('/payments/print-customer-ledger/{id}', [App\Http\Controllers\PaymentController::class, 'printCustomerLedger'])->name('print-customer-ledger');
Route::get('/payments/email-customer-ledger/{id}', [App\Http\Controllers\PaymentController::class, 'emailCustomerLedger'])->name('email-customer-ledger');
Route::get('/get-sale-payment-detail', [App\Http\Controllers\PaymentController::class, 'get_sale_payment_detail'])->name('get-sale-payment-detail');
Route::post('/payments/sale-payment/add-payment-to-sale-account-action', [App\Http\Controllers\PaymentController::class, 'add_payment_to_sale_account_action'])->name('add-payment-to-sale-account-action');
Route::get('/add-previous-payment', [App\Http\Controllers\PaymentController::class, 'addPreviousPayment'])->name('add-previous-payment-detail');
Route::post('/add-previous-payment-action', [App\Http\Controllers\PaymentController::class, 'addPreviousPaymentAction'])->name('add-previous-payment-action');

Route::get('/payments/other-payment', [App\Http\Controllers\PaymentController::class, 'other_payment'])->name('payment.other-payment');
Route::get('/get-other-payment-detail', [App\Http\Controllers\PaymentController::class, 'get_other_payment_detail'])->name('get-other-payment-detail');
Route::post('/payments/other-payment/add-payment-to-other-account-action', [App\Http\Controllers\PaymentController::class, 'add_payment_to_other_account_action'])->name('add-payment-to-other-account-action');

// Stock
Route::get('/stock-management', [App\Http\Controllers\StockController::class, 'stock_management'])->name('stock-management');

// Re-Order
Route::get('/reorder-items', [App\Http\Controllers\StockController::class, 'reorder_items'])->name('reorder-items');
Route::post('/reorder-items/search-result', [App\Http\Controllers\StockController::class, 'search_reorder_list_items'])->name('search-reorder-list-items');
Route::get('/reorder-items/black-list_action/{id}', [App\Http\Controllers\StockController::class, 'black_list_action'])->name('re-order-item.black-list');
Route::get('/reorder-items/green-list_action/{id}', [App\Http\Controllers\StockController::class, 'green_list_action'])->name('re-order-item.green-list');

//  BlackList Items
Route::get('/blacklist-items', [App\Http\Controllers\StockController::class, 'blacklist_items'])->name('blacklist-items');


// Search Module
Route::post('/purchases/search-result', [App\Http\Controllers\SearchController::class, 'search_purchase'])->name('purchase.search-purchase');
Route::post('/sales/search-result', [App\Http\Controllers\SearchController::class, 'search_sale'])->name('sales.search-sales');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/produdts/{id}', [App\Http\Controllers\FrontController::class, 'category_product'])->name('category-product');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/print/print-reorder-list', [App\Http\Controllers\PrintController::class, 'print_reorder_list'])->name('print.print-reorder-list');
Route::get('/print/print-purchase-list-urdu/{id}', [App\Http\Controllers\PrintController::class, 'print_purchase_list_urdu'])->name('purchase-list-print-urdu');
Route::get('/print/print-purchase-list-english/{id}', [App\Http\Controllers\PrintController::class, 'print_purchase_list_english'])->name('purchase-list-print-english');
Route::get('/print/print-sales-list-urdu/{id}', [App\Http\Controllers\PrintController::class, 'print_sales_list_urdu'])->name('sales-list-print-urdu');
Route::get('/print/print-sales-list-english/{id}', [App\Http\Controllers\PrintController::class, 'print_sales_list_english'])->name('sales-list-print-english');
Route::get('/print/print-sales-return-list-english/{id}', [App\Http\Controllers\PrintController::class, 'print_sales_return_list_english'])->name('sales-return-list-print-english');
Route::get('/print/print-backlist', [App\Http\Controllers\PrintController::class, 'print_blacklist_list'])->name('print.print-blacklist');



// Reports
Route::get('/reports/purchase-report', [App\Http\Controllers\ReportController::class, 'purchaseReport'])->name('report.purchase-report');
Route::get('/reports/purchase-report/print-all-urdu', [App\Http\Controllers\ReportController::class, 'purchaseReportPrintAllUrdu'])->name('reports.purchase.print-all-urdu');
Route::get('/reports/purchase-report/print-all-urdu-search/{from}/{to}', [App\Http\Controllers\ReportController::class, 'purchaseReportPrintAllUrduSearch'])->name('reports.purchase.print-all-urdu-search');
Route::get('/reports/purchase-report/print-all-english', [App\Http\Controllers\ReportController::class, 'purchaseReportPrintAllEnglish'])->name('reports.purchase.print-all-english');
Route::get('/reports/purchase-report/print-all-english-search/{from}/{to}', [App\Http\Controllers\ReportController::class, 'purchaseReportPrintAllEnglishSearch'])->name('reports.purchase.print-all-english-search');
Route::post('/reports/search-purchase-report', [App\Http\Controllers\ReportController::class, 'searchPurchaseReport'])->name('reports.search-purchase');

Route::get('/reports/sale-report', [App\Http\Controllers\ReportController::class, 'saleReport'])->name('report.sale-report');
Route::get('/reports/sale-report/print-all-urdu', [App\Http\Controllers\ReportController::class, 'saleReportPrintAllUrdu'])->name('reports.sale.print-all-urdu');
Route::get('/reports/sale-report/print-all-english', [App\Http\Controllers\ReportController::class, 'saleReportPrintAllEnglish'])->name('reports.sale.print-all-english');
Route::post('/reports/search-sale-report', [App\Http\Controllers\ReportController::class, 'searchSaleReport'])->name('reports.search-sale');
Route::post('/reports/search-sale-report-brand', [App\Http\Controllers\ReportController::class, 'searchSaleReportByBrand'])->name('reports.search-sale-by-brand');
Route::get('/sales/sale-detail-by-brand/{id}/{brand}', [App\Http\Controllers\ReportController::class, 'saleDetailByBrand'])->name('sale.sale-detail-by-brand');
Route::get('/reports/ssearch-sale-report/print-search-english/{from}/{to}', [App\Http\Controllers\ReportController::class, 'saleReportPrintSearchEnglish'])->name('reports.sale.print-search-english');

Route::get('/reports/sale-analysis', [App\Http\Controllers\ReportController::class, 'saleAnalysis'])->name('report.sale-analysis');
Route::post('/reports/search-sale-analysis', [App\Http\Controllers\ReportController::class, 'searchSaleAnalysis'])->name('reports.search-sale-analysis');

Route::get('/reports/profit-report', [App\Http\Controllers\ReportController::class, 'profitReport'])->name('report.profit-report');
Route::post('/reports/search-profit-report', [App\Http\Controllers\ReportController::class, 'searchProfitReport'])->name('report.search-profit-report');
Route::get('/reports/view-profit-report/{id}', [App\Http\Controllers\ReportController::class, 'viewProfitReport'])->name('report.view-profit-report');


// Bracodes
Route::get('/generate-barcode', [App\Http\Controllers\BarcodeController::class, 'generateBarcode'])->name('generate-barcode');
Route::get('/print-barcode', [App\Http\Controllers\BarcodeController::class, 'printBarcode'])->name('print-barcode');
Route::post('/generate-barcode-action', [App\Http\Controllers\BarcodeController::class, 'generateBarcodeAction'])->name('generate-barcode-action');
Route::post('/print-generated-barcode', [App\Http\Controllers\BarcodeController::class, 'printGeneratedBarcode'])->name('print-generated-barcode');