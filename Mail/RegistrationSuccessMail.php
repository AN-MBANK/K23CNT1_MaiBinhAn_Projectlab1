<?php
namespace App\Mail;

use App\Models\aCustomer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class RegistrationSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $acustomer;

    public function __construct(aCustomer $acustomer)
    {
        $this->acustomer = $acustomer;
    }

    public function build()
    {
        return $this->subject('Thông báo đăng ký thành công')
                    ->view('emails.registration_success');
    }
}
