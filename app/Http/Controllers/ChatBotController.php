<?php
  
namespace App\Http\Controllers;
  
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
  
class ChatBotController extends Controller
{
    public function handle()
    {
        $botman = app('botman');
  
        
        $botman->hears('{message}', function($botman, $message) {
  
            if ($message == 'hi') {
                $botman->reply("Hello");
            }
            elseif ($message == 'Tell me about Aarambha Motors.') { 
                $botman->reply("Aarambha Motors is a platform to enhance the efficiency of buying and selling second-hand vehicles such as car, bike and scooters in Nepal.<br> <br> <b>For more inquiry, contact us at </b> <br> aarambhamotors@gmail.com <br> +977-9806773885");
            }
            elseif ($message == 'Location of Aarambha Motors?') {
                $botman->reply("Our physical store is located at various places of Pokhara.");
            }
            else{
                $botman->reply("I don't know about that..Feel free to contact us on the following number <br> <b> +977-9806773885 </b> <br> or on our email <br> <b> aarambhamotors@gmail.com </b>");
            }
        
        });
  
        $botman->listen();
    }
  
}