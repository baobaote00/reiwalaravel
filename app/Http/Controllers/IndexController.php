<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\category;
use App\Models\contact;
use App\Models\navbar;
use App\Models\post;
use App\Models\product;
use App\Models\theme;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $obj1 = new navbar();
        $obj2 = new contact();
        $obj3 = new banner();
        $obj4 = new post();
        $obj5 = new theme();
        $obj6 = new product();
        $obj7 = new category();

        $gioiThieu = $obj4->getGioiThieu();
        $navbar = $obj1->all();
        $contact = $obj2->all();
        $banner = $obj3->all();
        $theme = $obj5->getImg();
        $productNew = $obj6->getProductNew();
        $category = $obj7->all();

        return view('welcome', [
            'title' => 'ReiHouse',
            'navbar' => $navbar,
            'navbarModel' => $obj1,
            'contact' => $contact,
            'banner' => $banner,
            'gioiThieu' => $gioiThieu,
            'theme' => $theme,
            'productNew' => $productNew,
            'category' => $category,
        ]);
    }
    public function lienHe(Request $request, $type)
    {
        $arrTitlePage = [
            'lien-he' => 'ReiHouse-Liên Hệ',
            'gioi-thieu' => 'ReiHouse-Giới Thiệu',
            'dau-an' => 'ReiHouse-Dấu Ấn Công Trình',
            'thiet-ke' => 'ReiHouse-Mẫu Thiết Kế',
            'du-an' => 'ReiHouse-Dự Án',
            'tin-tuc' => 'ReiHouse-Tin Tức',
            'xuong-san-xuat' => 'ReiHouse-Xưởng Sản Xuất',
            'search' => 'ReiHouse-Tìm Kiếm',
            'bao-hanh' => 'ReiHouse-Bảo Hành',
        ];

        $obj1 = new navbar();
        $navbar = $obj1->all();
        $obj2 = new contact();
        $contact = $obj2->all();
        $obj3 = new banner();
        $banner = $obj3->all();
        $obj4 = new post();
        $gioiThieu = $obj4->getGioiThieu();
        $obj5 = new theme();
        $theme = $obj5->getImg();

        $title = $arrTitlePage[$type];

        return view('welcome', [
            'title' => $title,
            'navbar' => $navbar,
            'navbarModel' => $obj1,
            'contact' => $contact,
            'banner' => $banner,
            'gioiThieu' => $gioiThieu,
            'theme' => $theme,
        ]);
    }
}
