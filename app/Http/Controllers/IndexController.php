<?php

namespace App\Http\Controllers;

use App\Models\dropdown;
use App\Models\navbar;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request, $type)
    {
        if (empty($type)) {
            return view('welcome', ['title' => "ReiHouse"]);
        }
        $arrTitlePage = [
            'lien_he' => 'ReiHouse-Liên Hệ',
            'gioi_thieu' => 'ReiHouse-Giới Thiệu',
            'dau_an' => 'ReiHouse-Dấu Ấn Công Trình',
            'thiet_ke' => 'ReiHouse-Mẫu Thiết Kế',
            'du_an' => 'ReiHouse-Dự Án',
            'tin_tuc' => 'ReiHouse-Tin Tức',
            'xuong_san_xuat' => 'ReiHouse-Xưởng Sản Xuất',
            'search' => 'ReiHouse-Tìm Kiếm',
            'bao_hanh' => 'ReiHouse-Bảo Hành',
        ];
        $title = $arrTitlePage[$type];

        $obj1 = new navbar();
        $navbar = $obj1->all();
        
        $result = [
            'title' => $title,
            'navbar' => $navbar,
            'navbarModel' => $obj1
        ];
        // var_dump($result['navbarModel']->getDropdownNavBar(3)[1]->url);die;
        

        return view('welcome', ['result' => $result]);
    }
}
