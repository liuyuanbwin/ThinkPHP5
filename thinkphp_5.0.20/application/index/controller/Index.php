<?php
namespace app\index\controller;

use think\Controller;

use think\Db;

class Index extends Controller
{
  public function index()
  {
    $data = Db::name('data')->find();
    $this->assign('result', $data);
    return $this->fetch();
  //  $this->assign()
    return "fuck";
  }


  public function hello($name = 'liu')
  {
    $this->assign('name',$name);
    return $this->fetch();
  }

}
 ?>
