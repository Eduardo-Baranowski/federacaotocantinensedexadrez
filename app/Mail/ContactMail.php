<?php

namespace App\Mail;

use App\User;
use Faker\Provider\ar_JO\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $inputs;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->inputs = $inputs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.contact')->with([
            'nome' => $this->inputs['nome'],
            'email' => $this->inputs['email'],
            'telefone' => $this->inputs['telefone'],
            'descricao' => $this->inputs['descricao']
        ]);
    }
}
