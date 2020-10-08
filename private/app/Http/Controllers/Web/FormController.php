<?php

namespace App\Http\Controllers\Web;

use App\Mail\Contact as MailContact;
use App\Models\Entities\Contact;
use Exception;
use Illuminate\Http\Request;
use Mail;

class FormController extends WebController
{
    /**
     * Contact
     * @param Request $request
     * @return string
     */
    public function contact(Request $request)
    {
        $validatedFields = $request->validate($fields = [
            'name_surname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => '',
            // 'information_text' => 'required',
        ], [], [
            'name_surname' => 'Ad Soyad',
            'email' => 'E-posta',
            'subject' => 'Konu',
            'message' => 'Mesaj',
            // 'information_text' => 'Bilgilendirme Metni',
        ]);

        // Send Email
        if (config('app.debug') || config('app.env') == 'local') {
            $to = [
                [
                    'email' => 'ozgur@enustkat.com.tr',
                    'name' => 'Özgür KARAGÖZ',
                ]
            ];
        } else {
            $to = [
                [
                    'email' => setting()->get('email'),
                    'name' => config('app.name'),
                ],
            ];
        }

        try {
            Mail::to($to)->send(new MailContact($request));

            Contact::create($validatedFields);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }
}
