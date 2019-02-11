<?php

namespace App\Mail;
use App\Partenariat;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PartMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $partenariat;
    public function __construct(Partenariat $partenariat)
    {
        $this->partenariat = $partenariat;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->partenariat->validation === "0"){
            return $this->from('projet4@molengeek.com')->view('email.partemail_attente');

        }
        else if($this->partenariat->validation === "1") {
            return $this->from('projet4@molengeek.com')->view('email.partemail_accepter');
        }
        else if($this->partenariat->validation === "2") {
            return $this->from('projet4@molengeek.com')->view('email.partemail_refuser');
        } else {

            return $this->from('projet4@molengeek.com')->view('email.partemail_erreur');
        }
    }
}
