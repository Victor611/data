<?php

namespace c8data\Http\Controllers;

use Illuminate\Http\Request;

use c8data\Http\Requests;
use Illuminate\Support\Facades\Validator;
use c8data\Http\Controllers\Controller;
use Mail;
use Session;

class MailController extends Controller
{

    public function demo(Request $request)
    {

        if ($request->has('vacant')) {
            $validator = MailController::checkVacancy($request);
            //var_dump($validator);exit;
            if ($validator->fails()) {
                return redirect("/vacancy")
                    ->withInput()
                    ->withErrors($validator);
            }
            $title = "Хочу работать";
            $subj['Должность'] = $request->vacant_vacancy;
            $subj['Фамилия, Имя'] = $request->vacant_name;
            $subj['E-mail'] = $request->vacant_email;
            $subj['Телефон'] = $request->vacant_phone;
            $mail = Mail::send('/email', ['title' => $title, 'subj' => $subj], function ($message) use ($title, $request) {

                $message->from('orderc8data@c8.net.ua', 'Christian Nwamba');
                $message->to('sorokin.victor.v@gmail.com');
                $message->subject($title);
                $message->attach($request->file('vacancy_file')->getRealPath(), [
                    'as' => $request->file('vacancy_file')->getClientOriginalName(),
                    'mime' => $request->file('vacancy_file')->getMimeType()
                ]);
            });
        } else {

            if ($request->has('present')) {

                $validator = MailController::checkPresent($request);
                if ($validator->fails()) {
                    return redirect("/demo")
                        ->withInput()
                        ->withErrors($validator);
                }
                $title = "Хочу подарок";
                $subj = [];
                switch ($request->present) {
                    case 1:
                        $subj['Подарок'] = 'Исcледования рынка мобильной рекламы';
                        break;
                    case 2:
                        $subj['Подарок'] = 'Исcледования рынка BIG Data';
                        break;
                    case 3:
                        $subj['Подарок'] = 'Исcледования рынка медийной рекламы';
                        break;
                }
                $subj['Фамилия, Имя'] = $request->m_name;
                $subj['E-mail'] = $request->m_email;
            } elseif ($request->has('demo')) {

                $validator = MailController::check($request);
                if ($validator->fails()) {
                    return redirect()
                        ->back()
                        ->withInput()
                        ->withErrors($validator);
                }

                $title = "Заявка";
                $subj['Компания, должность'] = $request->bid_company;
                $subj['Фамилия, имя'] = $request->bid_name;
                $subj['E-mail'] = $request->bid_email;
                $subj['Телефон'] = $request->bid_phone;

            } elseif ($request->has('contact')) {

                $validator = MailController::checkContact($request);
                if ($validator->fails()) {
                    return redirect("/contact")
                        ->withInput()
                        ->withErrors($validator);
                }
                $title = "Связаться";
                $subj['Компания, должность'] = $request->contact_company;
                $subj['Фамилия, имя'] = $request->contact_name;
                $subj['E-mail'] = $request->contact_email;
                $subj['Телефон'] = $request->contact_phone;
                $subj['Сообщение'] = $request->contact_message;

            }else{
                return redirect("/contact")
                    ->withInput();
            }

            $mail = Mail::send("/App::getLocale()/email", ['title' => $title, 'subj' => $subj], function ($message) use ($title) {

                $message->from('orderc8data@c8.net.ua', 'Christian Nwamba');
                $message->to('sorokin.victor.v@gmail.com');
                $message->subject($title);

            });

        }
        $mail ? $ok = "Спасибо за Ваш интерес к С8.Data наша команда в ближайшее время свяжется с Вами." : $ok = "что то не удалось";
        return redirect()->back()->with('ok', $ok);
    }

    public function check(Request $request)
    {
        return $validator = Validator::make($request->all(),
            [
                'bid_company' => 'required|max:255',
                'bid_name' => 'required|min:4',
                'bid_email' => 'required|email',
                'bid_phone' => 'required',
            ]);
    }

    public function checkContact(Request $request)
    {
        return $validator = Validator::make($request->all(),
            [
                'contact_company' => 'required|max:255',
                'contact_name' => 'required|min:4',
                'contact_email' => 'required|email',
                'contact_phone' => 'required',
                'contact_message' => 'required',
            ]);
    }

    public function checkVacancy(Request $request)
    {
        return $validator = Validator::make($request->all(),
            [
                'vacant_vacancy' => 'required',
                'vacant_name' => 'required|min:4',
                'vacant_email' => 'required|email',
                'vacant_phone' => 'required',
                'vacancy_file' => 'required'
            ]);
    }

    public function checkPresent(Request $request)
    {
        return $validator = Validator::make($request->all(),
            [
                'present' => 'required',
                'm_name' => 'required|min:4',
                'm_email' => 'required|email',
            ]);
    }
}
