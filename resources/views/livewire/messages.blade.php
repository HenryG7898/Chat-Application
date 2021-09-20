<div>
    <div class="container">
        <div class="row justify-content-center">

                <div class="col-md-4">
                    <div class="card" style="background-color: #1a202c">
                    <div class="card-header" style="color: white; font-size: 25px">
                        Users
                    </div>
                    <div class="card-body chatbox p-0">
                        <ul class="list-group list-group-flush hover:text-white" style="background-color: #1a202c; color:white; ">
                            @foreach($users as $user)
                                @php
                                    $not_seen= App\Models\Message::where('user_id',$user->id)->
                                    where('receiver_id',auth()->id())->where('is_seen',false)->get() ?? null
                                @endphp
                            <a wire:click="getUser({{$user->id}})" class="text-dark link">
                                <li class="list-group-item" style="font-size: 20px;color:red"><img class="img-fluid avatar" src="
                                  https://isobarscience.com/wp-content/uploads/2020/09/default-profile-picture1.jpg">
                                    @if($user->is_online==true)
                                        <span class="connected text-green-500 ml-2" >
                            <svg width="6" height="6">
                                <circle cx="3" cy="3" r="3" fill="currentColor" color="green"></circle>
                                    @endif
                                </svg></span>
                                        {{$user->name}}
                                    @if(filled($not_seen))
                                    <div class="badge badge-success rounded">{{$not_seen->count()}}</div>
                                        @endif
                                </li></a>
                            @endforeach

                        </ul>
                    </div>
                  </div>
                </div>

                    <div class="col-md-6">
                        <div class="card" style="background-color: #1a202c">
                            <div class="card-header" style="color: #edf2f7; font-size:25px">
                                @if (isset($sender))
                                    {{$sender->name}}
                                @endif
                            </div>
                            <div class="card-body message-box" wire:poll="mountdata">
                                @if(filled($allmessages))
                                @foreach($allmessages as $mgs)
                                        <div class="single-message @if($mgs->user_id == auth()->id()) sent @else received @endif">
                                            <p class="font-weight-bolder my-0">{{$mgs->user->name}}</p>
                                            {{$mgs->message}}
                                            <br><small class="text-muted w-100">Sent <em>
                                                    {{$mgs->created_at}}</em></small>
                                        </div>
                                @endforeach
                                    @endif
                            </div>
                            <div class="card-footer">
                                <form wire:submit.prevent="SendMessage">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="text" wire:model="message" class="form-control input
                                                    shadow-none w-100 d-inline-block">
                                        </div>

                                        <div class="col-md-4"><button class="btn btn-primary d-inline-block w-100" type="submit">
                                                <i class="far fa-paper-plane"></i>Send</button></div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
         </div>
    </div>
</div>
