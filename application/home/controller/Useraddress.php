<?php
/**
 * Create By: PhpStorm
 * User: yihua
 * File: Useraddress.php
 * Date: 2016/11/27
 * Time: 23:48
 */

namespace app\home\controller;

use think\Controller;
use think\Log;
use app\home\model\UserAddress as UserAddressModel;
use think\Validate;

class UserAddress extends Controller
{
    public function __construct()
    {

    }
    public function add($param)
    {
        $result = $this->validate($param);
        return var_dump($result);
        var_dump("Insert userAddress Ok.");
        /*
           $address = new UserAddressModel();
           $address->address_name = $param['user_id'];
           $address->address_name = $param['address_name'];
           $address->address_name = $param['consignee'];
           $address->address_name = $param['country'];
           $address->address_name = $param['province'];
           $address->address_name = $param['city'];
           $address->address_name = $param['district'];
           $address->address_name = $param['address'];
           $address->address_name = $param['zipcode'];
           $address->address_name = $param['zipcode'];
           $address->address_name = $param['tel'];
           $address->address_name = $param['mobile'];
           if($address->save())
           {
           Log::info("Insert UserAddress OK");
           return true;
           }
           else
           {
           Log::info("Insert UserAddress Failed");
           return false;
           }
         */
    }

    public function validate($param)
    {
        $rule = [
            'address_name' => 'require|max:25',
            'user_id' => 'require',
            'consignee' => 'require ',
            'address' => 'require',
            'mobile' => 'require',
            'province' => 'require',
            'city' => 'require',
            'district' => 'require',
        ];
        $msg = [
            'address_name.require' => '���Ʊ���',
            'address_name.max' => '������಻�ܳ���25���ַ�',
            'user_id.require' => 'userid����',
            'consignee.require' => 'consignee����',
            'address.require' => 'address����',
            'mobile.require' => 'mobile����',
            'province.require' => 'province����',
            'city.require' => 'city����',
            'district.require' => 'district����',
            'age.number' => '�������������',
        ];
        $data = [
            'name' => 'thinkphp',
            'age' => 121,
            'email' => 'thinkphp@qq.com',
        ];
        $validate = new Validate($rule,$msg);
        $result = $validate->check($param);
        if(!$result){
            return $validate->getError();
        }
        return $result;
    }
}

