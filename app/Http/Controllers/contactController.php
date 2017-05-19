<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;

class contactController extends Controller
{
    public function getFormData(Request $request) {
		
		$data = array(
			'name' => ucwords($request->name),
			'email' => $request->email,
			'subject' => ucwords($request->subject),
			'bodyMessage' => $request->message
		);

		Mail::send('emails.contact', $data, function($message) use ($data) {
			$message->from($data['email']);
			$message->replyTo($data['email']);
			$message->to('aaron.warner.web@gmail.com');
			$message->subject($data['subject']);
		});

		Session::flash('success', 'Thanks for your message!');

		//return redirect()->route('contact.show');

	}
}
