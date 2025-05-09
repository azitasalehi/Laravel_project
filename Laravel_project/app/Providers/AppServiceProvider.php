<?php

namespace App\Providers;

use App\Models\Banner_ads;
use App\Models\Brands;
use App\Models\Category;
use App\Models\Footer;
use App\Models\Mag_Category;
use App\Models\Magazine;
use App\Models\Mini_icon;
use App\Models\Offer_carousel;
use App\Models\Product;
use App\Models\Product_Category;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        /*Cache Handle*/


        /*_Setting*/
        if (Cache::has('_setting'))
        {
            $setting = Cache::get('_setting');

        } else {
            $setting = Setting::find(1);
            Cache::put('_setting', $setting, Carbon::now()->addMinutes(30));

        }
        /*end _Setting*/

        /*icons*/
        if (Cache::has('_icons'))
        {
            $icons = Cache::get('_icons');

        } else {
            $icons = json_decode($setting['icons'], true);
            Cache::put('_icons', $icons, Carbon::now()->addMinutes(30));
        }
        /*end icons*/


        /*$footer_services*/
        $_footer_services =Footer::where('footer_service', '=', '1')->get();
//        if (Cache::has('_footer_services'))
//        {
//            $_footer_services = Cache::get('_footer_services');
//
//        } else {
//           $_footer_services =Footer::where('footer_service', '=', '1')->get();
//            Cache::put('_footer_services', $_footer_services, Carbon::now()->addMinutes(30));
//        }

        /*End $footer_services*/

        /*_footer_items*/
        if (Cache::has('_footer_items'))
        {
            $footer_items = Cache::get('_footer_items');

        } else {
            $footer_items = Footer::where('footer_service', '=', '0')->get();
            Cache::put('_footer_services', $footer_items, Carbon::now()->addMinutes(30));
        }

        /*End _footer_items*/


        /*_mag_cats*/

        if (Cache::has('_mag_cats'))
        {
            $mag_cats = Cache::get('_mag_cats');

        } else {
            $mag_cats = Mag_Category::all();
            Cache::put('_mag_cats', $mag_cats, Carbon::now()->addMinutes(30));
        }

        /*End _mag_cats*/


        /*  _categories */

        if (Cache::has('_categories'))
        {
            $categories = Cache::get('_categories');

        } else {
            $categories = Category::all();
            Cache::put('_categories', $categories, Carbon::now()->addMinutes(30));
        }

        /*  End _categories */

        /*  _magazines  */

        if (Cache::has('_magazines'))
        {
            $_magazines= Cache::get('_magazines');
        }
        else
        {
            $_magazines =Magazine::orderBy('id','asc')->take(5)->get();
            Cache::put('_magazines', $_magazines, Carbon::now()->addMinutes(30));
        }

        /*  End _magazines  */



        /* _products  */

        if (Cache::has('products'))
        {
            $products = Cache::get('products');
        }
        else {
            $products=Product::all();
            Cache::put('products', $products, Carbon::now()->addMinutes(30));
        }

        /*   End _products   */


        /* product_cats  */
        if (Cache::has('product_cats'))
        {
            $product_cats = Cache::get('product_cats');
        }
        else {
            $product_cats=Product_Category::all();
            Cache::put('product_cats', $product_cats, Carbon::now()->addMinutes(30));
        }

        /*   End product_cats   */


        /* brands  */
        if (Cache::has('brands'))
        {
            $brands = Cache::get('brands');
        }
        else {
            $brands=Brands::all();
            Cache::put('brands', $brands, Carbon::now()->addMinutes(30));
        }

        /*   End brands   */

        /* mini_icons  */
        if (Cache::has('mini_icons'))
        {
            $mini_icons = Cache::get('mini_icons');
        }
        else {
            $mini_icons=Mini_icon::all();
            Cache::put('mini_icons', $mini_icons, Carbon::now()->addMinutes(30));
        }

        /*   End mini_icons   */



        /* offer_carousels  */

        if (Cache::has('offer_carousels'))
        {
            $offer_carousels = Cache::get('offer_carousels');
        }
        else {
            $offer_carousels=Offer_carousel::all();
            Cache::put('offer_carousels', $offer_carousels, Carbon::now()->addMinutes(30));
        }
        /*   End offer_carousels   */



        /* banner_ads  */

        if (Cache::has('banner_ads'))
        {
            $banner_ads = Cache::get('banner_ads');
        }
        else {
            $banner_ads=Banner_ads::all();
            Cache::put('banner_ads', $banner_ads, Carbon::now()->addMinutes(30));
        }
        /*   End banner_ads   */

        View::share('_setting', $setting);
        View::share('_icons', $icons);
        View::share('_footer_services', $_footer_services);
        View::share('_footer_items', $footer_items);
        View::share('_mag_cats', $mag_cats);
        View::share('_categories', $categories,);
        View::share('_magazines', $_magazines);
        View::share('products', $products);
        View::share('product_cats', $product_cats);
        View::share('brands', $brands);
        View::share('mini_icons', $mini_icons);
        View::share('offer_carousels', $offer_carousels);
        View::share('banner_ads', $banner_ads);

    }
}
