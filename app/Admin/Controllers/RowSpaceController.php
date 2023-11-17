<?php

namespace App\Admin\Controllers;

//use Dcat\Admin\Http\Controllers\UserController;
use Dcat\Admin\Http\Controllers\GoodController;

class RowSpaceController extends GoodController
{
    use PreviewCode;

    protected $title = '表格行间距模式';

    public function grid()
    {
        return parent::grid()
            ->tableCollapse(false)
            ->tools($this->buildPreviewButton());
    }
}
