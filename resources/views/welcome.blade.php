<x-app-layout>
    <x-slot name="header">
            <div class="container flex justify-center lg:justify-end">
                <div class="pr-3">
                    <form action="">
                        <div class="relative">
                            <input type="text" placeholder="search..." name="search" class="w-80 rounded">
                            <button class="absolute left-72 bottom-3 rotate-45"><svg class="w-6 h-6" fill="none" stroke="#777" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg></button>
                        </div>     
                    </form>
                </div>     
            </div>
    </x-slot>
    {{-- <section class="mt-3">
        <div class="flex justify-center bg-slate-50 py-10 lg:py-20 mx-20 shadow-md ">
            
        </div>
    </section> --}}
    <section class="px-20 mx-auto grid grid-cols-3">
        <div>

        </div>
        <div>
            @foreach($posts as $post)
                <x-cards :post="$post"/>
            @endforeach
            <div class="flex justify-end">
                <button class="px-5 py-2 bg-orange-600 text-white rounded ">see more</button>
            </div>
           
        </div>
        
       <div>

       </div>
    </section>
</x-app-layout>