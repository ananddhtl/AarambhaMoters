<?php
  
namespace App\Http\Controllers;
  
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
  
class ChatBotController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
  
        
        $botman->hears('{message}', function($botman, $message) {
  
            if ($message == 'hi') {
                $botman->reply("Hello");
            }
            elseif ($message == 'What is your name?') {
                $botman->reply("We are Aarambha Moters");
            }else{
                $botman->reply("We don't know about that..Feel free to contact us on the following number.");
            }
        
        });
  
        $botman->listen();
    }
  
    /**
     * Place your BotMan logic here.
     */
    // public function askName($botman)
    // {
    //     $botman->ask('Hello! What is your Name?', function(Answer $answer) {
  
    //         $name = $answer->getText();
  
    //         $this->say('Nice to meet you '.$name);
    //     });
    // }
}