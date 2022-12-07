<x-home-layout>
@foreach ($room_basics as $rb)
    
<div class="p-12 py-20">
    <div class="p-5 py-auto px-auto max-w-sm rounded-lg overflow-hidden shadow-lg border-solid border-blue-200 border-4 hover:border-green-600 bg-white">
        <div>
        <img src="https://www.harapanrakyat.com/wp-content/uploads/2022/08/Cara-Menata-Kamar-Kost-Ukuran-3x3-Nyaman-dan-Estetik.jpg" class="object-cover w-full h-52" alt="kos-basic">
        </div>
        <div>
        <h1 class="font-bold text-3xl mb-2 text-center py-1">Basic</h1>
        <p>{{$rb->basic_number}}</p>
        <p>Date Start<span>{{$rb->date_start}}</span></p>
        <p>Date End  {{$rb->date_end}}</p>
        </div>
        <div>
        <p class="text-center font-semibold text-xl py-1"></p>
        </div>

    </div>
    <div>
        
    </div>
</div>



@endforeach
</x-home-layout>