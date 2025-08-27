<?php

// ******* Front End

use App\Exports\businessListingExport;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\dashboardController;
use App\Http\Controllers\frontend\authController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\aboutUsController;
use App\Http\Controllers\frontend\contactUsController;
use App\Http\Controllers\frontend\shoppingBlogController;
use App\Http\Controllers\frontend\businessListingController;
use App\Http\Controllers\frontend\blogsCategoryController;
use App\Http\Controllers\frontend\writeForUsController;
use App\Http\Controllers\frontend\ourServicesController;
use App\Http\Controllers\frontend\mallController;
use App\Http\Controllers\frontend\brandController;
use App\Http\Controllers\frontend\userController;
use App\Http\Controllers\frontend\websiteContentController;
use App\Http\Controllers\frontend\searchController;
use App\Http\Controllers\frontend\couponController;
use App\Http\Controllers\frontend\franchiseController;
use App\Http\Controllers\frontend\offersController;
use App\Http\Controllers\frontend\productAndServiceController;

// ******* Admin
//use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\loginController;
use App\Http\Controllers\admin\adminBannerController;
use App\Http\Controllers\admin\adminAboutUsController;
use App\Http\Controllers\admin\blogController;
use App\Http\Controllers\admin\categoryMainController;
use App\Http\Controllers\admin\categorySubController;
use App\Http\Controllers\admin\blogCategoryController;
use App\Http\Controllers\admin\adminBusinessListingController;
use App\Http\Controllers\admin\adminWriteForUsController;
use App\Http\Controllers\admin\adminOurServicesController;
use App\Http\Controllers\admin\adminMallController;
use App\Http\Controllers\admin\adminBrandsController;
use App\Http\Controllers\admin\adminDashboardController;
use App\Http\Controllers\admin\adminCouponController;
use App\Http\Controllers\admin\adminOffersController;
use App\Http\Controllers\admin\adminFranchiseController;
use App\Http\Controllers\admin\adminProductAndServiceController;
use App\Http\Controllers\admin\adminUserController;
use App\Http\Controllers\admin\adminCouponAndOfferController;



// ******* User Admin
use App\Http\Controllers\user_admin\userAuthController;
use App\Http\Controllers\user_admin\userBusinessListingController;
use App\Http\Controllers\user_admin\userCouponController;
use App\Http\Controllers\user_admin\userDashboardController;
use App\Http\Controllers\user_admin\userFranchiseController;
use App\Http\Controllers\user_admin\userOfferController;
use App\Http\Controllers\user_admin\userProductAndServiceController;
use App\Http\Controllers\user_admin\userCouponAndOfferController;


// ************************ User Admin Routes ************************

// ----------- Dashboard Route -----------
Route::get('user-admin/dashboard',[userDashboardController::class,'dashboardView']);
Route::get('user-admin/register',[userAuthController::class,'registerView']);
Route::post('user-admin/register',[userAuthController::class,'register']);
Route::get('user-admin/login',[userAuthController::class,'loginView']);
Route::post('user-admin/login',[userAuthController::class,'login']);

Route::get('user-admin/googleLogin',[userAuthController::class,'googleLogin']);
Route::get('auth/google/callback',[userAuthController::class,'googleHandel']);
Route::get('user-admin/facebookLogin', [userAuthController::class,'facebookRedirect']);
Route::get('auth/facebook/callback', [userAuthController::class,'loginWithFacebook']);

Route::get('user-admin/profileEdit',[userAuthController::class,'profileEditView']);
Route::post('user-admin/passwordUpdate',[userAuthController::class,'passwordUpdate']);
Route::post('user-admin/profileUpdate',[userAuthController::class,'profileUpdate']);

// ----------- Offer Route -----------
Route::get('user-admin/offerAdd',[userOfferController::class,'OfferAddView']);
Route::post('user-admin/offerStore',[userOfferController::class,'offerStore']);
Route::get('user-admin/offerList',[userOfferController::class,'offerListView']);
Route::get('user-admin/offerEdit/{id}',[userOfferController::class,'OfferEditView']);
Route::post('user-admin/offerUpdate/{id}',[userOfferController::class,'offerUpdate']);


// ----------- Coupon Route -----------
Route::get('user-admin/couponAdd',[userCouponController::class,'couponAddView']);
Route::post('user-admin/couponStore',[userCouponController::class,'couponStore']);
Route::get('user-admin/couponList',[userCouponController::class,'couponListView']);
Route::get('user-admin/couponEdit/{id}',[userCouponController::class,'couponEditView']);
Route::post('user-admin/couponUpdate/{id}',[userCouponController::class,'couponUpdate']);


Route::get('user-admin/paymentHistory',[userBusinessListingController::class,'paymentHistoryListView']);
Route::get('user-admin/checkPlanPurchaseStatus/{planType}',[userBusinessListingController::class,'checkPlanPurchaseStatus']);
Route::get('user-admin/businessListing',[userBusinessListingController::class,'businessListingView']);


// ----------- Franchise Route -----------

Route::get('user-admin/franchiseAdd',[userFranchiseController::class,'franchiseAddView']);
Route::post('user-admin/getFranchiseSubCategory',[userFranchiseController::class,'getFranchiseSubCategory']);
Route::post('user-admin/franchiseStore',[userFranchiseController::class,'franchiseStore']);
Route::get('user-admin/franchiseList',[userFranchiseController::class,'franchiseListView']);
Route::get('user-admin/franchiseEdit/{id}',[userFranchiseController::class,'franchiseEditView']);
Route::post('user-admin/franchiseUpdate/{id}',[userFranchiseController::class,'franchiseUpdate']);
Route::get('user-admin/franchiseOtherDetailList/{id}',[userFranchiseController::class,'franchiseOtherDetailListView']);
Route::post('user-admin/franchiseImageStore',[userFranchiseController::class,'franchiseImageStore']);
Route::get('user-admin/franchiseImageRemove/{id}/{franchiseId}/{path}',[userFranchiseController::class,'franchiseImageRemove']);
Route::post('user-admin/franchiseLocationDetailStore',[userFranchiseController::class,'franchiseLocationDetailStore']);
Route::get('user-admin/franchiseLocationDetailRemove/{id}/{franchiseId}',[userFranchiseController::class,'franchiseLocationDetailRemove']);


/*
Old Backup
Route::post('user-admin/getFranchiseSubCategory',[userFranchiseController::class,'getFranchiseSubCategory']);
Route::post('user-admin/getFranchiseChildCategory',[userFranchiseController::class,'getFranchiseChildCategory']);
Route::get('user-admin/franchiseAdd',[userFranchiseController::class,'franchiseAddView']);
Route::post('user-admin/franchiseStore',[userFranchiseController::class,'franchiseStore']);

Route::get('user-admin/franchiseEdit/{id}',[userFranchiseController::class,'franchiseEditView']);
Route::post('user-admin/franchiseUpdate/{id}',[userFranchiseController::class,'franchiseUpdate']);
Route::get('user-admin/franchiseImageList/{id}',[userFranchiseController::class,'franchiseImagesListView']);
Route::post('user-admin/franchiseImageStore',[userFranchiseController::class,'franchiseImageStore']);
Route::get('user-admin/franchiseImageRemove/{id}/{franchiseId}/{path}',[userFranchiseController::class,'franchiseImageRemove']);
*/


// ----------- Product And Service Route -----------
Route::get('user-admin/productServiceAdd',[userProductAndServiceController::class,'productServiceAddView']);
Route::get('user-admin/productServiceList',[userProductAndServiceController::class,'productServiceListView']);
Route::post('user-admin/productServiceStore',[userProductAndServiceController::class,'productServiceStore']);
Route::get('user-admin/productServiceEdit/{id}',[userProductAndServiceController::class,'productServiceEdit']);
Route::post('user-admin/productServiceUpdate/{id}',[userProductAndServiceController::class,'productServiceUpdate']);


// ----------- Coupon And Offer Route -----------
Route::get('user-admin/couponOfferAdd',[userCouponAndOfferController::class,'couponOfferAddView']);
Route::post('user-admin/couponOfferStore',[userCouponAndOfferController::class,'couponOfferStore']);
Route::get('user-admin/couponOfferList',[userCouponAndOfferController::class,'couponOfferListView']);
Route::get('user-admin/couponOfferEdit/{id}',[userCouponAndOfferController::class,'couponOfferEditView']);




// ************************ Front End Routes ************************

// ----------- Auth Route -----------
// Route::get('register',[authController::class,'register_view']);
// Route::post('register',[authController::class,'register']);
// Route::get('login',[authController::class,'login_view']);
// Route::post('login',[authController::class,'login']);
Route::get('userLogout',[authController::class,'userLogout']);


// ----------- Common Route -----------
Route::get('/',[homeController::class,'indexView']);
Route::get('home',[homeController::class,'indexView']);
Route::get('about-us',[aboutUsController::class,'aboutUsView']);
Route::get('contact-us',[contactUsController::class,'contactUsView']);
Route::get('write-for-us',[writeForUsController::class,'writeForUsView']);
Route::post('writeForUsStore',[writeForUsController::class,'writeForUsStore']);
Route::get('our-services',[ourServicesController::class,'ourServicesView']);
Route::post('ourServiceStore',[ourServicesController::class,'ourServiceStore']);
Route::get('search',[searchController::class,'searchView']);
Route::post('newsLetterStore',[homeController::class,'newsLetterStore']);

// ----------- User Route -----------
Route::get('dashboard',[dashboardController::class,'dashboardView']);
//Route::get('paymentHistory',[userController::class,'paymentHistoryListView']);
Route::get('profile',[userController::class,'profileView']);
Route::post('profileUpdate',[userController::class,'profileUpdate']);
Route::get('userPasswordChange',[userController::class,'userPasswordView']);
Route::post('userPasswordUpdate',[userController::class,'userPasswordUpdate']);


//Route::get('businessListing/{status}',[businessListingController::class,'businessListingView']);
Route::get('businessListingEdit/{id}',[businessListingController::class,'businessListingEditView']);
Route::post('businessListingDetailUpdate/{id}',[businessListingController::class,'businessListingDetailUpdate']);
Route::get('businessListingTimingEdit/{id}',[businessListingController::class,'businessListingTimingEditView']);
Route::post('businessListingTimingUpdate/{id}',[businessListingController::class,'businessListingTimingUpdate']);
Route::get('businessListingImageEdit/{id}',[businessListingController::class,'businessListingImageEditView']);
Route::post('userBusinessListingImagesLogoStore/{id}',[businessListingController::class,'userBusinessListingImagesLogoStore']);
Route::post('userBusinessListingImagesIDProodStore/{id}',[businessListingController::class,'userBusinessListingImagesIDProodStore']);
Route::get('userBusinessListingImagesDelete/{id}/{business_id}/{type}/{path}',[businessListingController::class,'userBusinessListingImagesDelete']);


//Route::get('offerList/{status}',[offersController::class,'offerListView']);
// Route::get('offerAdd',[offersController::class,'OfferAddView']);
// Route::post('offerStore',[offersController::class,'offerStore']);
//Route::get('offerEdit/{id}',[offersController::class,'OfferEditView']);
//Route::post('offerUpdate/{id}',[offersController::class,'offerUpdate']);


Route::get('couponList/{status}',[couponController::class,'couponListView']);
Route::get('couponAdd',[couponController::class,'couponAddView']);
Route::post('couponStore',[couponController::class,'couponStore']);
Route::get('couponEdit/{id}',[couponController::class,'couponEditView']);
Route::post('couponUpdate/{id}',[couponController::class,'couponUpdate']);








// ----------- Website Content Route -----------
Route::get('privacy-policiy',[websiteContentController::class,'privacyPoliciyView']);
Route::get('term-conditions',[websiteContentController::class,'termsConditionsView']);


// ----------- Shopping Blogs Route -----------
Route::get('blogs',[shoppingBlogController::class,'shoppingBlogView']);
Route::get('detail-blog/{title}',[shoppingBlogController::class,'shoppingBlogDetailView']);
Route::post('blogCommentStore',[shoppingBlogController::class,'blogCommentStore']);


// ----------- Blog Categroy Route -----------
Route::get('blog-list/{title}/{title1}',[blogsCategoryController::class,'blogCategoryListView']);
Route::get('blog-info/{title}/{title1}',[blogsCategoryController::class,'blogCategoryDetailView']);
Route::post('blogCatCommentStore',[blogsCategoryController::class,'blogCatCommentStore']);



// ----------- Franchise Listing Route -----------

Route::get('franchise-list/{country}',[franchiseController::class,'franchiseLisitngView']);
Route::get('franchise-city/{city}',[franchiseController::class,'franchiseLisitngCityView']);
Route::get('franchise-category/{city}/{category}',[franchiseController::class,'franchiseCategoryListView']);
Route::get('franchise-detail/{city}/{category}/{title}',[franchiseController::class,'franchiseDetailView']);
Route::post('franchiseEnquiryStore',[franchiseController::class,'franchiseEnquiryStore']);



// Route::get('franchise-list/{country}',[franchiseController::class,'franchiseLisitngView']);
// Route::get('franchise-city/{city}',[franchiseController::class,'franchiseLisitngCityView']);
// Route::get('franchise-category/{city}/{category}',[franchiseController::class,'franchiseCategoryListView']);
// Route::get('franchise-detail/{city}/{category}/{title}',[franchiseController::class,'franchiseDetailView']);
// Route::get('franchiseAdd',[franchiseController::class,'franchiseAddView']);
// Route::post('getFranchiseSubCategory',[franchiseController::class,'getFranchiseSubCategory']);
// Route::post('getFranchiseChildCategory',[franchiseController::class,'getFranchiseChildCategory']);
// Route::post('franchiseStore',[franchiseController::class,'franchiseStore']);
// Route::get('franchiseList/{status}',[franchiseController::class,'franchiseListView']);


// ----------- Business Listing Route -----------
Route::get('business-list/{country}',[businessListingController::class,'businessLisitngView']);
Route::get('city/{city}',[businessListingController::class,'businessLisitngCityView']);
Route::get('category/{city}/{category}',[businessListingController::class,'businessLisitngCategoryView']);
Route::get('detail/{city}/{category}/{title}',[businessListingController::class,'businessLisitngDetailView']);
Route::get('add-business-details',[businessListingController::class,'businessLisitngAddView']);
Route::post('getBusinessSubCategory',[businessListingController::class,'getBusinessSubCategory']);
Route::post('businessDetailStore',[businessListingController::class,'businessDetailStore']);
Route::get('business-listing',[businessListingController::class,'businessLisitngPlanView']);
Route::post('choose-plan/{plan_type}',[businessListingController::class,'businessLisitngPlanSessionSet']);
Route::get('pay',[businessListingController::class,'businessListingPaymentView']);
Route::post('businessListingPaymentProcess',[businessListingController::class,'businessListingPaymentProcess']);
Route::post('businessListingPaymentProcessTemp',[businessListingController::class,'businessListingPaymentProcessTemp']);
Route::post('/razorpay/success', [businessListingController::class, 'paymentSuccess'])->name('razorpay.success');
//Route::get('checkPlanPurchaseStatus/{planType}',[businessListingController::class,'checkPlanPurchaseStatus']);
//Route::post('/razorpay/payment', [businessListingController::class, 'payment'])->name('razorpay.payment');


// ----------- Mall Route -----------
Route::get('detail-mall/{city}/{name}',[mallController::class,'mallDetailView']);

// ----------- Brand Route -----------
Route::get('detail-brand/{city}/{mall_name}/{brand_name}',[brandController::class,'brandDetailView']);

// ----------- Coupon Route -----------
Route::get('coupon-list/{country}',[couponController::class,'couponListingView']);
Route::get('coupon-city/{city}',[couponController::class,'couponCityView']);
Route::get('coupon-category/{city}/{category}',[couponController::class,'couponCategoryView']);
Route::get('coupon-detail/{city}/{category}/{title}',[couponController::class,'couponDetailView']);

// ----------- Offer Route -----------
Route::get('offer-list/{city}/{mall_name}',[offersController::class,'offerListingView']);
Route::get('offer-detail/{city}/{mall_name}/{title}',[offersController::class,'offerDetailView']);




// ----------- Shopping Blogs Route -----------
Route::get('product-service',[productAndServiceController::class,'productAndServiceView']);
Route::get('product-service-detail/{title}',[productAndServiceController::class,'productAndServiceDetailView']);



// ************************ Admin Routes ************************

Route::get('admin/dashboard',[adminDashboardController::class,'adminDashboardView']);
Route::get('admin/login',[loginController::class,'adminLoginView']);
Route::post('admin/adminLogin',[loginController::class,'adminLogin']);
Route::get('admin/adminLogout',[loginController::class,'adminLogout']);
Route::get('admin/aboutUsEdit',[adminAboutUsController::class,'aboutUsView']);
Route::post('admin/aboutUsUpdate',[adminAboutUsController::class,'aboutUsUpdate']);
Route::get('admin/writeForUsList',[adminWriteForUsController::class,'writeForUsListView']);
Route::get('admin/writeForUsDelete/{id}',[adminWriteForUsController::class,'writeForUsDelete']);
Route::get('admin/ourServicesList',[adminOurServicesController::class,'ourServicesListView']);
Route::get('admin/OurServiceDelete/{id}',[adminOurServicesController::class,'OurServiceDelete']);
Route::get('admin/newsLetterList',[homeController::class,'newsLetterListView']);
Route::get('admin/newsLetterDelete/{id}',[homeController::class,'newsLetterDelete']);


Route::get('admin/bannerList',[adminBannerController::class,'bannerListView']);
Route::post('admin/bannerStore',[adminBannerController::class,'bannerStore']);
Route::get('admin/bannerEdit/{id}',[adminBannerController::class,'bannerEditView']);
Route::post('admin/bannerUpdate/{id}',[adminBannerController::class,'bannerUpdate']);


// ----------- Blog Main Category Routes -----------
Route::get('admin/blogCategoryMainList',[categoryMainController::class,'blogCategoryMainListView']);
Route::get('admin/blogCategoryMainEdit/{id}',[categoryMainController::class,'blogCategoryMainEditView']);
Route::post('admin/blogMainCategoryStore',[categoryMainController::class,'blogMainCategoryStore']);
Route::post('admin/businessListingMainCategoryUpdate/{id}',[categoryMainController::class,'businessListingMainCategoryUpdate']);

// ----------- Blog Sub Category Routes -----------
Route::get('admin/blogCategorySubList',[categorySubController::class,'blogCategorySubListView']);
Route::get('admin/blogCategorySubEdit/{id}',[categorySubController::class,'blogCategorySubEditView']);
Route::post('admin/blogSubCategoryStore',[categorySubController::class,'blogSubCategoryStore']);
Route::post('admin/blogSubCategoryUpdate/{id}',[categorySubController::class,'blogSubCategoryUpdate']);



// ----------- Blog Category Routes -----------
Route::get('admin/blogCategoryList',[blogCategoryController::class,'blogCategoryListView']);
Route::get('admin/blogCategoryAdd',[blogCategoryController::class,'blogCategoryAddView']);
Route::get('admin/blogCategoryEdit/{id}',[blogCategoryController::class,'blogCategoryEditView']);
Route::post('admin/getBlogSubCategory',[blogCategoryController::class,'getBlogSubCategory']);
Route::post('admin/blogCategoryStore',[blogCategoryController::class,'blogCategoryStore']);
Route::post('admin/blogCategoryUpdate/{id}',[blogCategoryController::class,'blogCategoryUpdate']);

// ----------- Shopping Blog Routes -----------
Route::get('admin/blogList',[blogController::class,'index']);
Route::get('admin/blogAdd',[blogController::class,'blogAddView']);
Route::get('admin/blogEdit/{id}',[blogController::class,'blogEditView']);
Route::post('admin/blogStore',[blogController::class,'blogStore']);
Route::post('admin/blogUpdate/{id}',[blogController::class,'blogUpdate']);

// ----------- Business Listing Routes -----------
Route::get('admin/businessListing',[adminBusinessListingController::class,'businessListingListView']);
Route::get('admin/businessListingEdit/{id}',[adminBusinessListingController::class,'businessListingEditView']);
Route::get('admin/businessListingTimingEdit/{id}',[adminBusinessListingController::class,'businessListingTimingEditView']);
Route::post('admin/businessListingUpdate/{id}',[adminBusinessListingController::class,'businessListingUpdate']);
Route::post('admin/businessListingTimingUpdate/{id}',[adminBusinessListingController::class,'businessListingTimingUpdate']);

Route::get('admin/businessListingImagesEdit/{id}',[adminBusinessListingController::class,'businessListingImagesEditView']);
Route::post('admin/businessListingImagesLogoStore/{id}',[adminBusinessListingController::class,'businessListingImagesLogoStore']);
Route::post('admin/businessListingImagesIDProodStore/{id}',[adminBusinessListingController::class,'businessListingImagesIDProodStore']);

Route::get('admin/businessListingImagesDelete/{id}/{business_id}/{type}/{path}',[adminBusinessListingController::class,'businessListingImagesDelete']);

Route::get('admin/businessListingPaid',[adminBusinessListingController::class,'businessListingPaidView']);
Route::get('admin/businessListingUnPaid',[adminBusinessListingController::class,'businessListingUnPaidView']);

Route::get('admin/exportBusinessListingExcel',[adminBusinessListingController::class,'exportBusinessListingExcel']);
Route::post('admin/importBusinessListingExcel',[adminBusinessListingController::class,'importBusinessListingExcel']);



// ----------- Business Listing Main Category Routes -----------
Route::get('admin/businessListingCategoryMainList',[categoryMainController::class,'businessListingCategoryMainListView']);
Route::get('admin/businessListCategoryMainEdit/{id}',[categoryMainController::class,'businessListCategoryMainEditView']);
Route::post('admin/businessListingMainCategoryStore',[categoryMainController::class,'businessListingMainCategoryStore']);
Route::post('admin/businessListingMainCategoryUpdate/{id}',[categoryMainController::class,'businessListingMainCategoryUpdate']);


// ----------- Blog Sub Category Routes -----------
Route::get('admin/businessListingCategorySubList',[categorySubController::class,'businessListingCategorySubView']);
Route::get('admin/businessListingCategorySubEdit/{id}',[categorySubController::class,'businessListingCategorySubEditView']);
Route::post('admin/businessListingCategorySubStore',[categorySubController::class,'businessListingCategorySubStore']);
Route::post('admin/businessListingCategorySubUpdate/{id}',[categorySubController::class,'businessListingCategorySubUpdate']);


// ----------- Mall Routes -----------
Route::get('admin/mallList',[adminMallController::class,'mallList']);
Route::get('admin/mallAdd',[adminMallController::class,'mallAddView']);
Route::post('admin/mallStore',[adminMallController::class,'mallStore']);
Route::get('admin/mallEdit/{id}',[adminMallController::class,'mallEditView']);
Route::post('admin/mallUpdate/{id}',[adminMallController::class,'mallUpdate']);
Route::post('admin/mallImagesStore/{id}',[adminMallController::class,'mallImagesStore']);
Route::get('admin/mallImagesDelete/{id}/{mall_id}/{path}',[adminMallController::class,'mallImagesDelete']);
Route::post('admin/getmallBrands',[adminMallController::class,'getmallBrands']);

// ----------- Brand Routes -----------
Route::get('admin/brandList',[adminBrandsController::class,'brandListView']);
Route::get('admin/brandAdd',[adminBrandsController::class,'brandAddView']);
Route::post('admin/brandStore',[adminBrandsController::class,'brandStore']);
Route::get('admin/brandEdit/{id}',[adminBrandsController::class,'brandEditView']);
Route::post('admin/brandUpdate/{id}',[adminBrandsController::class,'brandUpdate']);
Route::post('admin/brandImagesStore/{id}',[adminBrandsController::class,'brandImagesStore']);
Route::get('admin/brandImagesDelete/{id}/{mall_id}/{path}',[adminBrandsController::class,'brandImagesDelete']);


// ----------- Coupon Routes -----------
Route::get('admin/couponAdd',[adminCouponController::class,'couponAddView']);
Route::post('admin/couponStore',[adminCouponController::class,'couponStore']);
Route::get('admin/couponEdit/{id}',[adminCouponController::class,'couponEditView']);
Route::post('admin/couponUpdate/{id}',[adminCouponController::class,'couponUpdate']);
Route::get('admin/couponList/{status}',[adminCouponController::class,'couponListView']);



// ----------- Offers Routes -----------
Route::get('admin/offerAdd',[adminOffersController::class,'offerAddView']);
Route::post('admin/offerStore',[adminOffersController::class,'offerStore']);
Route::get('admin/offerEdit/{id}',[adminOffersController::class,'offerEditView']);
Route::post('admin/offerUpdate/{id}',[adminOffersController::class,'offerUpdate']);
Route::get('admin/offerList/{status}',[adminOffersController::class,'offerListView']);





// ----------- Franchise Listing Routes -----------
Route::get('admin/franchiseList',[adminFranchiseController::class,'franchiseListView']);

Route::get('admin/franchiseCategoryMainList',[adminFranchiseController::class,'franchiseCategoryMainListView']);
Route::post('admin/franchiseCategoryMainStore',[adminFranchiseController::class,'franchiseCategoryMainStore']);
Route::get('admin/franchiseCategoryMainEdit/{id}',[adminFranchiseController::class,'franchiseCategoryMainEditView']);
Route::post('admin/franchiseCategoryMainUpdate/{id}',[adminFranchiseController::class,'franchiseCategoryMainUpdate']);

Route::get('admin/franchiseCategorySubList',[adminFranchiseController::class,'franchiseCategorySubListView']);
Route::post('admin/franchiseCategorySubStore',[adminFranchiseController::class,'franchiseCategorySubStore']);
Route::get('admin/franchiseCategorySubEdit/{id}',[adminFranchiseController::class,'franchiseCategorySubEditView']);
Route::post('admin/franchiseCategorySubUpdate/{id}',[adminFranchiseController::class,'franchiseCategorySubUpdate']);

Route::get('admin/franchiseCategoryChildList',[adminFranchiseController::class,'franchiseCategoryChildListView']);
Route::post('admin/franchiseCategoryChildStore',[adminFranchiseController::class,'franchiseCategoryChildStore']);
Route::get('admin/franchiseCategoryChildEdit/{id}',[adminFranchiseController::class,'franchiseCategoryChildEditView']);
Route::post('admin/franchiseCategoryChildUpdate/{id}',[adminFranchiseController::class,'franchiseCategoryChildUpdate']);

Route::get('admin/franchiseEdit/{id}',[adminFranchiseController::class,'franchiseEditView']);
Route::post('admin/franchiseUpdate/{id}',[adminFranchiseController::class,'franchiseUpdate']);

Route::get('admin/franchiseOtherDetailList/{id}',[adminFranchiseController::class,'franchiseOtherDetailListView']);
Route::post('admin/franchiseImageStore',[adminFranchiseController::class,'franchiseImageStore']);
Route::get('admin/franchiseImageRemove/{id}/{franchiseId}/{path}',[adminFranchiseController::class,'franchiseImageRemove']);
Route::post('admin/franchiseLocationDetailStore',[adminFranchiseController::class,'franchiseLocationDetailStore']);
Route::get('admin/franchiseLocationDetailRemove/{id}/{franchiseId}',[adminFranchiseController::class,'franchiseLocationDetailRemove']);


Route::get('admin/userList',[adminUserController::class,'userListView']);



Route::get('admin/productAndServiceList/{status}',[adminProductAndServiceController::class,'productAndServiceListView']);
Route::get('admin/productAndServiceEdit/{id}',[adminProductAndServiceController::class,'productAndServiceEditView']);
Route::post('admin/productAndServiceUpdate/{id}',[adminProductAndServiceController::class,'productAndServiceUpdate']);


Route::get('admin/couponAndServiceList',[adminCouponAndOfferController::class,'couponAndServiceListView']);