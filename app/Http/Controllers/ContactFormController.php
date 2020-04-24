<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactForm;
use Illuminate\Support\Facades\DB;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //エロクアント or マッパーと言うらしい
        // $contact = ContactForm::all();

        // クエリビルダと言う
        $contacts = DB::table('contact_forms')
        // ここはdb名で良い
                  ->select('id', 'your_name', 'title', 'created_at')
                  ->orderBy('created_at', 'asc')
                  ->get();

        return view('contact/index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $contact = new ContactForm;

        $contact->your_name = $request->input('your_name');
        $contact->title = $request->input('title');
        $contact->email = $request->input('email');
        $contact->url = $request->input('url');
        $contact->gender = $request->input('gender');
        $contact->age = $request->input('age');
        $contact->contact = $request->input('contact');
        // ContactFormのデータベースの各カラム(your_nameなど)に入力された($requestで送られてきている)your_nameを代入している
        $contact->save();
        // saveで保存している
        return redirect('contact/index');
        // $input = $request->all();
        // 全ての情報を取得できる
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $contact = ContactForm::find($id);

        if ($contact->gender === 1) {
            $gender = '男性';
        }

        if ($contact->gender === 0) {
            $gender = '女性';
        }

        if ($contact->age === 1) {
            $age = '~19歳';
        }

        if ($contact->age === 2) {
            $age = '20~29歳';
        }

        if ($contact->age === 3) {
            $age = '30~39歳';
        }

        if ($contact->age === 4) {
            $age = '40~49歳';
        }

        if ($contact->age === 5) {
            $age = '50~59歳';
        }

        if ($contact->age === 6) {
            $age = '~60歳';
        }

        return view('contact/show', compact('contact', 'gender', 'age'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contact = ContactForm::find($id);

        return view('contact/edit', compact('contact'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $contact = ContactForm::find($id);

        $contact->your_name = $request->input('your_name');
        $contact->title = $request->input('title');
        $contact->email = $request->input('email');
        $contact->url = $request->input('url');
        $contact->gender = $request->input('gender');
        $contact->age = $request->input('age');
        $contact->contact = $request->input('contact');
        // ContactFormのデータベースの各カラム(your_nameなど)に入力された($requestで送られてきている)your_nameを代入している
        $contact->save();
        // saveで保存している
        return redirect('contact/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
