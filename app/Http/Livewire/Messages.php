<?php

namespace App\Http\Livewire;
use App\Models\Message;
use App\Models\User;
use Livewire\Component;

class Messages extends Component
{
    public $allmessages;
    public $message;
    public $sender;
    //render
    public function render()
    {
        $users=User::all();
        $sender=$this->sender;
        $this->allmessages;
        return view('livewire.messages',compact('users','sender'));
    }
    //Message
    public  function mountdata(){
        if(isset($this->sender->id)){
            $this->allmessages=Message::where('user_id',auth()->id())->where('receiver_id',
                $this->sender->id)->orWhere('user_id',$this->sender->id)->where('receiver_id',auth()->id())->
            orderBy('id','desc')->get();

            $not_seen= Message::where('user_id',$this->sender->id)->
            where('receiver_id',auth()->id());
            $not_seen->update(['is_seen'=>true]);
        }
    }
    //Reset the Form
    public function resetForm(){
        $this->message='';
    }
    //Store the messages in the database
    public function SendMessage(){
        $data=new Message;
        $data->message=$this->message;
        $data->user_id=auth()->id();
        $data->receiver_id=$this->sender->id;
        $data->save();

        //after typing information in the input
        //click the send button and after that, the function resetform will run the variable below,
        //to clear the data was in the input
        $this->resetForm();
    }
    //GetUser collect the data from the database
    public function getUser($userId){
        $user=User::find($userId);
        $this->sender=$user; //Call the variable $user and pull the information from the database

        $this->allmessages=Message::where('user_id',auth()->id())->where('receiver_id',
            $userId)->orWhere('user_id',$userId)->where('receiver_id',auth()->id())->
            orderBy('id','desc')->get();
    }
}
