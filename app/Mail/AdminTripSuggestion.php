<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Settings\SettingModel;

class AdminTripSuggestion extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $setting;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->setting = SettingModel::find(1);
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('New Trip Suggestion: {$this->data->title}')
            ->view('emails.admin-suggestion')
            ->with([
                'data' => $this->data,
                'setting'   => $this->setting,
            ]);
    }
}
