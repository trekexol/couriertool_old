<?php

namespace App\Notifications;

use App\Channels\Messages\WhatsAppMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Channels\WhatsAppChannel;
use App\Order;


class OrderProcessed extends Notification
{
  use Queueable;


  public function via($notifiable)
  {
    return [WhatsAppChannel::class];
  }
  
  public function toWhatsApp($notifiable)
  {
    return (new WhatsAppMessage)
        ->content("Yo dfgfdg");
  }
}
