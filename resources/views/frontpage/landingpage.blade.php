<x-home-layout>
<body>
  @include('layouts.navigation')

<!-- Halaman awal-->
<div class="halamandepan">
  <div class=" bg-[url('https://pinhome-blog-assets-public.s3.ap-southeast-1.amazonaws.com/2021/01/51d885c5e2f18bb80aae7f3f5ccad8d5.jpg')]
  bg-gradient-from-[rgba(0,0,0.5)]-to-[rgba(0,0,0,.5)] h-screen bg-cover bg-center flex flex-col items-center justify-center">
    <h1 class="text-center font-bold text-9xl text-gray-300">
      Selamat datang di <hr>
      KosKita
    </h1>
    </div>
  </div>


<!--Start Product list-->

  <div class="flex h-screen flex-warp">
    <div class="m-auto rounded border-solid border-blue-200">
    <h1 class="text-center font-bold text-8xl items-center">
    Product list <br><br>
    </h1>
      <div class="flex flex-row flex-wrap space-x-16">
        <!-- Box Basic-->
        <div class="p-5 py-auto px-auto max-w-sm rounded overflow-hidden shadow-lg border-solid border-blue-200 border-4 backdrop-blur-xl">
          <div class="bg-auto hover:bg-contain w-1080 h-1080"> 
            <img src="https://idkos.com/images/gallery_property/a-60.jpeg" alt="kos-basic">
          </div>
          <h1 class="font-bold text-xl mb-2 text-center">Basic</h1>
          <p class="text-center">Fasilitas</p>
          <ul class="">
            <li class="text-left">- Meja Belajar</li>
            <li class="text-left">- Satu Kursi Kayu</li>
            <li class="text-left">- Satu Lemari ukuran kecil</li>
            <li class="text-left">- Satu Kipas Angin</li>
            <li class="text-left">- Kamar Mandi Dalam</li>
            <li class="text-left">- Kasur Nyaman</li>
          </ul>
        </div>
        <!-- Box Premium-->
        <div class=" p-5 py-auto px-auto max-w-sm rounded overflow-hidden shadow-lg border-solid border-yellow-200 border-4">
          <div class="bg-center bg-auto w-auto h-auto"> 
            <img src="https://www.sewakost.com/files/07-2020/ad40296/kost-tipe-a-ct35-sukajadi-1488837618_large.png" alt="Kos-Premium">
          </div>
          <h1 class="font-bold text-3xl mb-2 text-center">Premium</h1>
          <p class="text-center font-semibold text-xl">Fasilitas</p>
          <ul class="">
            <li class="text-left font-semibold">- Meja Belajar</li>
            <li class="text-left font-semibold">- Satu Kursi Kayu</li>
            <li class="text-left font-semibold">- Satu Kipas Angin</li>
            <li class="text-left font-semibold">- Satu Lemari ukuran sedang</li>
            <li class="text-left font-semibold">- Sudah include air dan listrik</li>
            <li class="text-left font-semibold">- Kamar Mandi Dalam</li>
            <li class="text-left font-semibold">- Dapur</li>
            <li class="text-left font-semibold">- Kasur Nyaman</li>
          </ul>
          </div>
        <!-- Box Eklusive-->
        <div class=" p-5 py-auto px-auto max-w-sm rounded overflow-hidden shadow-lg border-solid border-red-200 border-4">
          <div class="bg-center bg-auto w-auto h-auto"> 
            <img src="https://d3p0bla3numw14.cloudfront.net/news-content/img/2020/09/03133703/kost-eksklusif-atau-elit.jpg" alt="Kos-Eklusive">
          </div>
          <h1 class="font-bold text-xl mb-2 text-center">Eklusive</h1>
          <p class="text-center font-italic">Fasilitas</p>
          <ul class="">
            <li class="text-left font-semibold">- Meja kerja luas</li>
            <li class="text-left font-semibold">- ruangan lebih luas dari premium</li>
            <li class="text-left font-semibold">- Satu Kursi Kayu</li>
            <li class="text-left font-semibold">- Satu lemari ukuran besar</li>
            <li class="text-left font-semibold">- Satu Air Conditioner</li>
            <li class="text-left font-semibold">- Sudah include air dan listrik</li>
            <li class="text-left font-semibold">- Kamar Mandi Dalam</li>
            <li class="text-left font-semibold">- Dapur</li>
            <li class="text-left font-semibold">- Kasur Nyaman</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Product List-->


<div class="container">
  <div class="m-auto">
  <h1 class="text-center font-bold text-8xl items-center justify-center">
    Tertarik untuk memesan?<br><br>
    </h1>
    <p class="text-center items-center font-semibold text-4xl">Segera memesan kamar sebelum slot penuh!<br>
      Pemesanan dapat dilakukan<br><br><br>
      <a href="">
        <button class="py-2 px-4 grid-cols-6 bg-blue-500 flex-initial w-64 rounded border-solid border-5 border-blue-500 text-white">
        Di Sini
        </button>
      </a>    
    </p>
  </div>
</div>


<footer>
  <div>
    <div>
      
    </div>
  </div>
</footer>

</body>
</x-home-layout>