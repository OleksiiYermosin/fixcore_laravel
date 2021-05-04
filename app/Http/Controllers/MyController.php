<?php


namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Group;

class MyController extends Controller
{
    public function clients(){
        $results = Group::find(request('statusfield'))->clients;
        return view('client', ['clients'=>$results]);
    }

    public function viewClients($id){
        $results = Group::find($id)->clients;
        return view('client', ['clients'=>$results]);
    }

    public function checkStatus($order_number){
        $results = Client::where('phone_number', $order_number)->get();
        return view('checkstatus', ['status'=>$results]);
    }

    public function check(){
        $results = Client::where('phone_number', request('statusfield'))->get();
        return view('checkstatus', ['status'=>$results]);
    }

    public function groups(){
        $results = Client::find(request('statusfield'))->groups;
        return view('group', ['groups'=>$results]);
    }

    public function viewGroups($id){
        $results = Client::find($id)->groups;
        return view('group', ['groups'=>$results]);
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
