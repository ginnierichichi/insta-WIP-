<div>
    <div class="grid grid-cols-3 space-x-4">
        <div>
            <livewire:chat.chat-list :chats="$user->chats"/>
        </div>
        <div class="col-span-2">
            This is the private message page
            <div class="bg-white rounded-lg w-3/4 p-4">
                <div>
{{--                    <livewire:chat.chat-users  />--}}
                </div>
                <div class="overflow-scroll">
                    <livewire:chat.chat-messages :messages="$messages"/>
                </div>
               <div>
                   reply
{{--                   <livewire:chat.reply :chat="$userchat"/>--}}
               </div>
            </div>
        </div>
    </div>
    {{-- In work, do what you enjoy. --}}
</div>