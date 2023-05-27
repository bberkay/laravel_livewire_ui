<div>
    <table class="table table-hovered table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('admin.name') }}</th>
                <th scope="col">{{ __('admin.email') }}</th>
                <th scope="col">{{ __('admin.subject') }}</th>
                <th scope="col">{{ __('admin.message') }}</th>
                @if($show == 'answered')
                    <th scope="col">{{ __('admin.answer') }}</th>
                    <th scope="col">{{ __('admin.answered_date') }}</th>
                    <th scope="col">{{ __('admin.answerer') }}</th>
                @else
                    <th scope="col">{{ __('admin.give_answer') }}</th>
                @endif
                <th scope="col">{{ __('admin.created_date') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $message)
                <tr>
                    <th scope="row">{{ $message->id }}</th>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>
                        <button class = "btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#showMessageModal" wire:click="showMessageModal('Message', '{{ $message->message }}')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                            </svg>
                        </button>
                    </td>
                    @if($show == 'answered')
                        <td>
                            <button class = "btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#showMessageModal" wire:click="showMessageModal('Answer', '{{ $message->answer }}')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                                    <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
                                </svg>
                            </button>
                        </td>
                        <td>
                            {{ $message->answered_at }}
                        </td>
                        <td>
                            {{ $message->answerer }}
                        </td>
                    @else
                        <td>
                            <button class = "btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#giveAnswerModal" wire:click="giveAnswerModal('{{ $message->id }}')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                                </svg>
                            </button>
                        </td>
                    @endif 
                    <td>{{ $message->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
