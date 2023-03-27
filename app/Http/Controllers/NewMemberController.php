<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use App\Models\Member;

class NewMemberController extends Controller
{
    function index()
    {
        return view('index');
    }
    function Create(Request $request)
    {
        $m=new Member();
        $me=new Membership();
        $m->ime = $request->input('ime');
        $m->prezime = $request->input('prezime');
        $m->email = $request->input('email');
        $m->student = $request->input('student');
        $m->membership=$request->input('membership');
        $id=$request->input('membership');
        $s=$request->input('student');
        $a=$me->get()->find($id);
        if($s)
        {
            $m->cena_placanja=$a->cena-($a->cena*$a->popust);
        } else
        {
            $m->cena_placanja=$a->cena;
        }
        $m->save();
        return view('member');
    }
    function show(Request $request)
    {
       $m=new Member();
       $me=new Membership();
       $osoba=$m->get()->find($request->input('br'));
       if($osoba==null)
       {
        $datamessage = array(
            'message'=>'NEMA TOG CLANA!'
        );
        return view('member')->with($datamessage);
       } else
       {
        $ime=$osoba->ime;
        $prezime=$osoba->prezime;
        $email=$osoba->email;
        $id=$osoba->membership;
        $membership=$me->get()->find($id);
        $rok=$membership->trajanje;
        $cena=$osoba->cena_placanja;
        $data = array(
            'ime'=>$ime,
            'prezime'=>$prezime,
            'email'=>$email,
            'membership'=>$membership,
            'rok'=>$rok,
            'cena'=>$cena
            );
           return view('ispis')->with($data);
       }
    }
}
