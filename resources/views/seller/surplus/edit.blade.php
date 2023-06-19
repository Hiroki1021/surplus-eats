<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <form method="post" action="{{ route('post.update', ['id'=>$post->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <x-auth-validation-errors />
                <section class="text-gray-600 body-font relative">
                    <div class="container px-5 py-24 mx-auto">
                      <div class="flex flex-col text-center w-full mb-12">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Edit</h1>
                      </div>
                      <div class="lg:w-1/2 md:w-2/3 mx-auto">
                        <div class="flex flex-wrap -m-2">
                          <div class="p-2 w-full">
                            <div class="relative">
                              <label for="name" class="leading-7 text-sm text-gray-600">Product Name</label>
                              <input type="text" id="name" name="name" value="{{ $post->name }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="p-2 w-full flex">
                            <div class="relative flex-grow">
                                <label for="price" class="leading-7 text-sm text-gray-600">Price</label>
                                <div class="flex items-center">
                                  <input type="text" id="price" name="price" value="{{ $post->price }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  <p class="ml-1">Peso</p>
                                </div>
                            </div>
                          </div>
                          <div class="p-2 w-full flex">
                            <div class="relative flex-grow">
                                <label for="quantity" class="leading-7 text-sm text-gray-600">Quantity</label>
                                <div class="flex items-center">
                                  <input type="number" id="quantity" name="quantity" value="{{ $post->quantity }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  <p class="ml-1"></p>
                                </div>
                            </div>
                          </div>
                          <div class="p-2 w-full">
                            <div class="relative">
                                <label for="category" class="leading-7 text-sm text-gray-600">Category</label>
                                <select id="category" name="category" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <option value="">{{ $post->category  }}</option>
                                    <option value="category1">category1</option>
                                    <option value="category2">category2</option>
                                    <option value="category3">category3</option>
                                </select>
                            </div>
                          </div>
                          <div class="p-2 w-full">
                            <div class="relative">
                              <label for="content" class="leading-7 text-sm text-gray-600">Introduction</label>
                              <textarea id="content" name="content" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $post->content }}</textarea>
                            </div>
                          </div>
                          <div class="p-2 w-full">
                            <div class="relative">
                                <label for="start_time" class="leading-7 text-sm text-gray-600">Available Pickup Time（Start）</label>
                                <input type="time" id="start_time" name="start_time" value="{{ $post->start_time}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="p-2 w-full">
                            <div class="relative">
                                <label for="end_time" class="leading-7 text-sm text-gray-600">Available Pickup Time（End）</label>
                                <input type="time" id="end_time" name="end_time" value="{{ $post->end_time }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="p-2 w-full">
                            <div class="relative">
                              <label class="leading-7 text-sm text-gray-600">Image</label>
                            <div class="p-2 w-full">
                              <img src={{ asset('storage/images/'.$post->image) }} alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4">
                            </div>  
                              <input type="file" id="image" name="image" accept="image/png, image/jpeg, image/jpg"{{ $post->image }} value="" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          {{-- <div class="p-2 w-full">
                            <div class="relative">
                              <label for="contents" class="leading-7 text-sm text-gray-600">内容</label>
                              <textarea id="contents" name="contents" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('contents') }}</textarea>
                            </div>
                          </div> --}}
                          <div class="p-2 w-1/2">
                            <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" style="padding-left: 32px; padding-right: 32px;">Register</button>
                            <button type="button" onclick="window.history.back()" class="text-white bg-gray-500 border-0 py-2 px-8 focus:outline-none hover:bg-gray-600 rounded text-lg" style="padding-left: 32px; padding-right: 32px;">Return</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </section>
              </form>
            </div>
        </div>
    </div>
</x-app-layout>