<x-app-layout>
    <div style="background-color: #EDEBDA;">
      <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product List
          </h2>
      </x-slot>
    </div>
      
  
      <div style="background-color:#F8F7EE" class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div style="background-color:#EDEBDA" class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font">
                  <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -m-4">
                    @foreach($posts as $post)
                      <div class="lg:w-1/4 md:w-1/2 p-4 w-full" >
                        <a href="{{ route('post.edit',$post->id) }}" class="block relative h-48 rounded overflow-hidden">
                          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('storage/images/'.$post->image) }}">
                        </a>
                        <div class="mt-4">
                          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $post->seller->name }}</h3>
                          <h2 class="text-gray-900 title-font text-lg font-medium">{{ $post->name }}</h2>
                          <p class="mt-1"><i class="fas fa-tag fa-rotate-90" style="margin-right: 10px;"></i>{{ $post->category}}</p>
                          <p class="mt-1">{{ $post->available_time }}</p>
                          <p class="mt-1">{{ $post->content }}</p>
                          <p class="mt-1">{{ $post->price }}Php</p>
                          @if ($post->quantity <= 0)
                          <p class="@if ($post->quantity <= 0) text-red-500 @endif">SOLD OUT</p>
                          @elseif(now() >= $post->created_at->addHour(24))
                          <p class="@if ($post->quantity <= 0) text-red-500 @endif">TIME OUT</p>
                          @else
                          <p class="mt-1  @if ($post->quantity <= 3) text-red-500 @endif">{{ $post->quantity }} left</p>
                          @endif
                        </div>
                        <div class="py-3">
                          <button class="text-white bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded">
                            <a href="{{ route('post.edit', $post->id) }}">{{ __('Edit') }}</a>
                          </button>
                          {{-- <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded" onclick="return confirm('本当に削除しますか？')">{{ __('Delete') }}</button>
                          </form> --}}
                        </div>
                        {{-- <div class="lg:w-1/4 md:w-1/2 p-4 w-full flex">
                          <div class="w-1/2">
                            <a class="block relative h-48 rounded overflow-hidden">
                              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('storage/images/'.$post->image) }}">
                            </a>
                          </div>
                          <div class="w-1/2"> 
                            <div class="mt-4">
                              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">レストラン名（仮） </h3>
                              <h2 class="text-gray-900 title-font text-lg font-medium">{{ $post->name }}</h2>
                              <p class="mt-1">{{ $post->price }}円</p>
                            </div>
                          </div>
                        </div> --}}
                      </div> 
                    @endforeach
                    </div>
                  </div>
                </section>
              </div>
          </div>
      </div>
  </x-app-layout>