<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Details page
        </h2>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font overflow-hidden" style="background-color: #EDEBDA">
                    <div class="container px-5 py-24 mx-auto">
                      <div class="lg:w-4/5 mx-auto flex flex-wrap">
                        <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('storage/images/'.$post->image) }}">
                        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                          <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $post->seller->name }}</h2>
                          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $post->name }}</h1>
                      
                            <span class="text-gray-600 ml-3"><i class="fas fa-tag fa-rotate-90" style="margin-right: 10px;"></i>{{ $post->category}}</span>
                       
                          <div class="flex mb-4">
                            <span class="flex items-center">
                              {{-- <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                              </svg>
                              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                              </svg>
                              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                              </svg>
                              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                              </svg>
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                              </svg> --}}

                          
                            <span class="text-gray-600 ml-3">
                            {{ $post->available_time }}
                            </span>
                            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                                <span class="text-gray-600 ml-3  @if ($post->quantity <= 3) text-red-500 @endif">{{ $post->quantity }} left</span>
                              {{-- <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                              </a>
                              <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                </svg>
                              </a>
                              <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>
                              </a> --}}
                            </span>
                           
                          </div>
                          <p class="leading-relaxed">{{ $post->content }}</p>
                          @if ($post->quantity > 0)
                          <form action="/products/{{ $post->id }}/cart" method="POST">
                          @csrf
                          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                            {{-- <div class="flex">
                              <span class="mr-3">Color</span>
                              <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
                              <button class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                              <button class="border-2 border-gray-300 ml-1 bg-indigo-500 rounded-full w-6 h-6 focus:outline-none"></button>
                            </div> --}}
                            <div class="flex ml-6 items-center">
                              <span class="mr-3">Quantity:</span>
                              <div class="relative">

                                <select name='cart_quantity' class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                  @for ($i = 1; $i <= $post->quantity; $i++)
                                        <option>{{ $i }}</option>
                                  @endfor
                                </select>
                                <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6"></path>
                                  </svg>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="flex">
                            <span class="title-font font-medium text-2xl text-gray-900">Price:{{ $post->price }}Php</span>
                            <button type="submit" class="flex ml-auto text-white bg-orange-300 border-0 py-2 px-6 focus:outline-none hover:bg-orange-400 rounded">Add to Your Cart</button>
                            {{-- <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                              {{-- <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24"> --}}
                                {{-- <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                              </svg> --}}
                            {{-- </button>  --}}
                          </div>
                          </form>
                          @else
                          <p class="@if ($post->quantity <= 0) text-red-500 @endif">{{ __('SOLD OUT') }}</p>
                          @endif
                        </div>
                      </div>
                    </div>
                </section>
                <section class="text-gray-600 body-font" style="background-color: #EDEBDA">
                  <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center w-full mb-20">
                      {{-- <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2> --}}
                      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Reviews</h1>
                      {{-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p> --}}
                    </div> 
                    <div class="flex flex-wrap">
                    @foreach($reviews as $review)  
                      <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        {{-- <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Shooting Stars</h2> --}}
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Name : {{ $review->user->name }}</h2>
                        <h2 class="leading-relaxed text-base mb-4">Date : {{ \Carbon\Carbon::parse($review->created_at)->format('Y-m-d') }}</h2>
                        {{-- <a class="text-indigo-500 inline-flex items-center">Learn More
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a> --}}
                      </div>
                      <div class="xl:w-3/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2"><span style="color: rgb(245, 156, 47);">Rating : {{ $review->rating_total }}</span></h2>
                        <p class="leading-relaxed text-base mb-4">Taste : <span style="color: rgb(245, 156, 47);">{{ $review->rating_taste }}</span> Price : <span style="color: rgb(245, 156, 47);">{{ $review->rating_price }}</span> Service : <span style="color: rgb(245, 156, 47);">{{ $review->rating_service }}</span></p>
                        <h3 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">{{ $review->name }}</h3>
                        <p class="leading-relaxed text-base mb-4">{{ $review->content }}</p>
                        {{-- <a class="text-indigo-500 inline-flex items-center">Learn More
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a> --}}
                      </div>
                      {{-- <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Neptune</h2>
                        <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                        <a class="text-indigo-500 inline-flex items-center">Learn More
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div> --}}
                      {{-- <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Melanchole</h2>
                        <p class="leading-relaxed text-base mb-4">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                        <a class="text-indigo-500 inline-flex items-center">Learn More
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                          </svg>
                        </a>
                      </div> --}}
                    @endforeach  
                    </div>
                    {{-- <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button> --}}
                  </div>
                </section>
                <section class="text-gray-600 body-font relative" style="background-color: #EDEBDA">
                    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">

                      {{-- <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                        <h2 class="text-gray-900 text-lg mb-1 font-midium title-font text-center">{{ $post->seller->name }}</h2>
                        <p class="leading-relaxed mb-5 text-gray-600 text-center">{{ $post->seller->content }}</p> --}}
                        {{-- <div class="relative mb-4">
                          <img src="" alt="">
                          <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                          <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                          <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                          <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                          <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                          <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                        <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                        <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
                      </div> --}}
                      <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0" style="background-color: #EDEBDA">
                        <h2 class="text-gray-900 text-2xl mb-1 font-medium title-font text-center">{{ $post->seller->name }}</h2>
                        <p class="leading-relaxed mb-5 text-gray-600 text-center">{{ $post->seller->content }}</p>
                        <div class="relative mb-4">
                          <div class="w-full h-64">
                            <img src="{{ asset('storage/images/'.$post->seller->image) }}" alt="写真の説明" class="w-full h-full object-cover">
                          </div>
                        </div>
                        {{-- <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p> --}}
                      </div>
                      <div class="ml-4 lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                        {{-- <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q={{ urlencode($post->seller->address) }}&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe> --}}
                        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q={{ urlencode($post->seller->address) }}&ie=UTF8&t=&z=14&iwloc=B&output=embed"></iframe>
                        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                          <div class="lg:w-1/2 px-6">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                            <p class="mt-1">{{ $post->seller->address }}</p>
                          </div>
                          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                            <a class="text-indigo-500 leading-relaxed">{{ $post->seller->email }}</a>
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                            <p class="leading-relaxed">{{ $post->seller->phone }}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>