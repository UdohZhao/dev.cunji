<?php
namespace app\index\controller;
class Blog extends Base
{
    /**
     * 构造方法
     */
    public function _auto()
    {
        // 模板变量赋值
        $this->assign('active','Blog');
    }

    /**
     * 博客页面
     */
    public function index()
    {
        // Get
        if ($this->request->isGet()) {
            // 渲染模板输出
            return $this->fetch('index');
        }
    }

    /**
     * 博客详细页面
     */
    public function detail()
    {
        // Get
        if ($this->request->isGet()) {
            // 渲染模板输出
            return $this->fetch('detail');
        }
    }

}
