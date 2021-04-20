<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Device;

class MyController extends Controller
{
    public function checkStatus($order_number){
        $S = new Device($order_number);
        $S->findStatus();
        return view('check', ['status'=>$S->status]);
    }

    public function changePage($page){
        return view($page);
    }

    public function acceptForm(){
        $phone = request('phonefield');
        $message=array();
        if(isset($phone)){
            $data = trim($phone);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            if (strlen($data) >= 10 && strlen($data) <= 13) {
                $message[0] = 'Форму прийнято, скоро ми вам передзвонимо!';
                $message[1] = 'Дякуємо за співпрацю.';
                $message[2] = 'Будемо раді бачити вас знов';
            }else{
                $message[0] = 'Номеру телефону не існує';
            }
        }
        return redirect('/callAction')->with('message', $message);
    }
}
