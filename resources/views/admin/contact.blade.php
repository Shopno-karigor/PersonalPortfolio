<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">              
                    <div class="mt-8 text-2xl">
                        Random queries!
                    </div>
                </div>
                
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1">
                    @if(count($data)===0)
                        {{-- Item --}}
                        <div class="p-6 border-t border-gray-200 md:border-l px-12">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                                    <path  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div class="ml-3 text-lg text-gray-600 leading-7 font-semibold">Query list empty</div>
                            </div>
                            <div class="ml-12 text-sm text-gray-600 leading-7 font-semibold"></div>
                        </div>
                        {{-- Item --}}
                    @endif
                    @foreach ($data as $key=>$row)
                        {{-- Item --}}
                        <div class="p-6 border-t border-gray-200 md:border-l px-12" id="{{'item'.$row->id}}">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                                    <path  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div class="ml-3 text-lg text-gray-600 leading-7 font-semibold">{{$row->name}}</div>
                            </div>
                            <div class="ml-12 text-sm text-gray-600 leading-7 font-semibold">Contact: {{$row->email}} or {{$row->phone}}</div>
                            <div class="ml-12">
                                <div class="mt-2 text-sm text-gray-500">
                                    {{$row->message}}
                                </div>
                            </div>
                            <div class="mt-3 text-sm text-gray-600 leading-7 font-semibold">
                                <button onClick="loadDeleteModal({{$row->id}})" data-toggle="modal" data-target="#exampleModal" type="button" class="ml-12 inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    <span>Delete</span>
                                </button>
                            </div>
                        </div>
                        {{-- Item --}}
                    @endforeach
                </div>
            </div>
            <div class="mt-10 grid grid-cols-2 gap-4">
                <div class="col-span-2">
                    {{ $data->links('vendor.pagination.tailwind') }}
                </div>
            </div>
            <!-- Delete User Confirmation Modal -->
            <!-- Main modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Confirm the action!</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete this query?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-sky-600 focus:outline-none focus:bg-sky-600 focus:ring focus:bg-sky-600 active:bg-sky-600 disabled:opacity-25 transition" data-dismiss="modal">Close</button>
                      <button type="button" id="modal-confirm_delete" onclick="" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Confirm Delete</button>
                    </div>
                  </div>
                </div>
              </div>
            <!-- Delete User Confirmation Modal -->
        </div>
    </div>
</x-app-layout>
