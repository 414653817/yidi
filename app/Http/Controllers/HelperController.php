<?php
namespace App\Http\Controllers;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function captcha()
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 150, $height = 41, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        session()->flash('milkcaptcha', $phrase);
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }
}