<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class CtrlController extends Controller
{
    public function plain()
    {
        return response('こんにちは、世界！',200)
            ->header('Content-Type', 'text/plain');
    }

    public function outJson()
    {
        return response()
        ->json([
            'name' => 'TYAMADA,ikki',
            'sex' => 'male',
            'age' => 18,
        ]);
    }

    public function outFile()
    {
        return response()
        ->download("C:\Users\RYOJI IIDUKA\Desktop\outFile.csv", 'download.csv');
    }

    public function form()
    {
        return view('ctrl.form', ['result' => '']);
    }

    public function result(Request $req)
    {
        //a.リクエスト情報を取得
        $name = $req->name;

        //[名前]欄が入力されているか、10文字以内か
        if (empty($name) || mb_strlen($name) > 10) {
            //a.フォームを再表示
            return redirect('ctrl/form')
            ->withInput()
            ->with('alert', '名前は必須、または、10文字以内で入力してください');
        } else {
            return view('ctrl.form',[
                'result' => 'こんにちは、' . $req->name . 'さん！'
            ]);
        }

        return view('ctrl.form',[
            'result' =>'こんにちは、' . $name . 'さん！'
        ]);
    }

    public function middle()
    {
        return 'log is recorded';
    }
}
