<x-app-layout>
    <div style="background-color: #EDEBDA">
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Review
        </h2>
    </x-slot>
    </div>
    

    <div style="background-color:#FBFBF6" class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg">
              <form method="post" action="{{ route('review.store') }}">
              @csrf
                <section class="text-gray-600 body-font relative">
                    <div class="container px-5 py-24 mx-auto">
                      <div class="flex flex-col text-center w-full mb-12">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Review</h1>
                        {{-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p> --}}
                      </div>
                      <div class="container px-5 py-24 mx-auto">
                        <div class="lg:w-4/5 mx-auto flex flex-wrap">
                          <img alt="ecommerce" class="lg:w-1/4 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('storage/images/'.$product->image) }}">
                          <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                            <p class="mt-1">購入日:{{ date('Y-m-d H:i', strtotime($purchaseHistory->created_at)) }}</p>
                            <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $product->seller->name }}</h2>
                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
                          </div>
                        </div>
                      </div>
                      <div class="lg:w-1/2 md:w-2/3 mx-auto">
                        <x-auth-validation-errors />
                        <div class="flex flex-wrap -m-2">
                          <div class="p-2 w-1/2">
                            <input type="hidden" name='seller_id' value="{{ $seller->id }}">
                            <input type="hidden" name='product_id' value="{{ $product->id }}">
                            <div class="relative">
                              <label for="name" class="leading-7 text-lg text-gray-600">Restaurant</label>
                              {{-- <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"> --}}
                              <h2>{{ $seller->name }}</h2>
                            </div>
                          </div>
                          {{-- <div class="p-2 w-1/2">
                            <div class="relative">
                              <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                              <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div> --}}
                          <div class="p-2 w-full">
                            <div class="relative">
                              <label for="comment" class="leading-7 text-lg text-gray-600">Rating</label>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="rating" class="mr-2">Taste :</label>
                                  <select name="rating_taste" id="rating">
                                      <option value="Excellent">{{ __('Excellent') }}</option>
                                      <option value="Very Good">{{ __('Very Good') }}</option>
                                      <option value="Good">{{ __('Good') }}</option>
                                      <option value="Average">{{ __('Average') }}</option>
                                      <option value="Poor">{{ __('Poor') }}</option>
                                  </select>
                                </div>
                              </div>
                              <div class="p-2 w-1/2">
                                <div class="relative">
                                  <label for="rating" class="mr-2">Price :</label>
                                  <select name="rating_price" id="rating">
                                    <option value="Excellent">{{ __('Excellent') }}</option>
                                    <option value="Very Good">{{ __('Very Good') }}</option>
                                    <option value="Good">{{ __('Good') }}</option>
                                    <option value="Average">{{ __('Average') }}</option>
                                    <option value="Poor">{{ __('Poor') }}</option>
                                  </select>
                                </div>
                              </div>
                              <div class="p-2 w-1/2">
                                <div class="relative">
                                  <label for="rating" class="mr-2">Service :</label>
                                  <select name="rating_service" id="rating">
                                    <option value="Excellent">{{ __('Excellent') }}</option>
                                    <option value="Very Good">{{ __('Very Good') }}</option>
                                    <option value="Good">{{ __('Good') }}</option>
                                    <option value="Average">{{ __('Average') }}</option>
                                    <option value="Poor">{{ __('Poor') }}</option>
                                  </select>
                                </div>
                              </div>
                              <div class="p-2 w-1/2">
                                <div class="relative">
                                  <label for="rating" class="mr-2">Total :</label>
                                  <select name="rating_total" id="rating">
                                      <option value="5">5</option>
                                      <option value="4">4</option>
                                      <option value="3">3</option>
                                      <option value="2">2</option>
                                      <option value="1">1</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="p-2 w-full">
                            <div class="relative">
                              <label for="comment" class="leading-7 text-lg text-gray-600">Comment</label>
                              <textarea id="comment" name="comment" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                          </div>
                          <div class="p-2 w-full">
                            <div class="relative">
                              <label for="comment" class="leading-7 text-lg text-gray-600">Title（optional）</label>
                              <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                          </div>
                          {{-- <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                            <a class="text-indigo-500">example@email.com</a>
                            <p class="leading-normal my-5">49 Smith St.
                              <br>Saint Cloud, MN 56301
                            </p>
                            <span class="inline-flex">
                              <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                              </a>
                              <a class="ml-4 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                </svg>
                              </a>
                              <a class="ml-4 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                              </a>
                              <a class="ml-4 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>
                              </a>
                            </span>
                          </div> --}}
                        </div>
                      </div>
                    </div>
                </section>
              </form>  
            </div>
        </div>
    </div>
</x-app-layout>