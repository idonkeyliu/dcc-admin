<?php

namespace App\Admin\Metrics\Examples;

use Dcat\Admin\Widgets\Metrics\Line;
use Illuminate\Http\Request;

class NewUsers extends Line
{
    /**
     * @var string
     */
    protected $label = '下单用户';

    /**
     * 初始化卡片内容
     *
     * @return void
     */
    protected function init()
    {
        parent::init();

        $this->title($this->label);
        $this->dropdown([
            '1' => '今天',
            /*'7' => '最近一周',
            '30' => '最近一个月',
            '365' => '最近一年',*/
        ]);
    }

    /**
     * 处理请求
     *
     * @param Request $request
     *
     * @return mixed|void
     */
    public function handle(Request $request)
    {
        $generator = function ($len, $min = 10, $max = 300) {
            for ($i = 0; $i <= $len; $i++) {
                yield mt_rand($min, $max);
            }
        };

        switch ($request->get('option')) {
            case '365':
                // 卡片内容
                $this->withContent(mt_rand(1000, 5000).'k');
                // 图表数据
                $this->withChart(collect($generator(30))->toArray());
                // 直线
                break;
            case '30':
                // 卡片内容
                $this->withContent(mt_rand(400, 1000).'k');
                // 图表数据
                $this->withChart(collect($generator(30))->toArray());
                // 直线
                break;
            case '7':
                // 卡片内容
                $this->withContent(mt_rand(400, 1000).'k');
                // 图表数据
                $this->withChart(collect($generator(28))->toArray());
                // 直线
                break;
            case '1':
            default:
                // 卡片内容
                $this->withContent('89.2k');
                // 图表数据
                $this->withChart([28, 40, 36, 52, 38, 60, 55,]);
        }
    }

    /**
     * 设置图表数据.
     *
     * @param array $data
     *
     * @return $this
     */
    public function withChart(array $data)
    {
        return $this->chart([
            'series' => [
                [
                    'name' => $this->label,
                    'data' => $data,
                ],
            ],
        ]);
    }

    /**
     * 设置卡片内容.
     *
     * @param string $content
     *
     * @return $this
     */
    public function withContent($content)
    {
        return $this->content(
            <<<HTML
<div class="d-flex justify-content-between align-items-center mt-1" style="margin-bottom: 2px">
    <h2 class="ml-1 font-lg-1">{$content}</h2>
    <span class="mb-0 mr-1 text-80">{$this->label}</span>
</div>
HTML
        );
    }
}
