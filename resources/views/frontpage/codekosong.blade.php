<!-- Booking Pages -->       
<div class="flex items-center justify-center min-h-screen px-4 py-16 bg-gray-200 2xl:container 2xl:mx-auto lg:py-16 md:py-12 md:px-6 xl:px-48 " id="BookPage">
    <div class="flex flex-col items-center justify-center w-full space-y-12 sm:w-9/12 lg:w-full lg:flex-row lg:space-x-10 2xl:space-x-36 lg:space-y-0" >
        <div class="flex flex-col items-start justify-start w-full">
            <div>
                <p class="text-3xl font-semibold leading-7 lg:text-4xl dark:text-white lg:leading-9">Booking Kost</p>
            </div>
            <div class="flex flex-col items-start justify-start w-full mt-8 space-y-8">
                <input class="w-full px-2 py-4 text-base leading-4 placeholder-gray-600 border-b border-gray-200 rounded-lg focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500" type="text" placeholder="Nama Depan" />
                <input class="w-full px-2 py-4 text-base leading-4 placeholder-gray-600 border-b border-gray-200 rounded-lg focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500" type="text" placeholder="Nama Belakang" />
                <input class="w-full px-2 py-4 text-base leading-4 placeholder-gray-600 border-b border-gray-200 rounded-lg focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500" type="text" placeholder="Alamat" />
                <input class="w-full px-2 py-4 text-base leading-4 placeholder-gray-600 border-b border-gray-200 rounded-lg focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500" type="number" placeholder="No Hanphone"/>
                <input class="w-full px-2 py-4 text-base leading-4 placeholder-gray-600 border-b border-gray-200 rounded-lg focus:outline-none dark:text-gray-400 dark:bg-transparent dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500" type="text" placeholder="Catatan"/>
            </div>
            <button class="w-full py-4 mt-8 text-base font-medium leading-4 text-white bg-yellow-400 rounded-lg focus:outline-none focus:ring-2 dark:bg-gray-800 dark:text-white focus:ring-gray-500 focus:ring-offset-2 focus:ring-ocus:ring-gray-800 hover:bg-teal-400 md:w-4/12 lg:w-full">Order</button>
        </div>

        <div class="flex flex-col items-start justify-start w-full p-6 bg-white rounded-lg dark:bg-gray-800 md:p-14">
            <div>
                <h1 class="text-2xl font-semibold leading-6 text-gray-800 dark:text-white">Order Summary</h1>
            </div>
            <div class="flex flex-col items-end w-full space-y-6 mt-7">
            <div class="flex items-center justify-between w-full">
                    <p class="text-lg leading-4 text-gray-600 dark:text-gray-300">Nama Kos :</p>
                    <p class="text-lg font-semibold leading-4 text-gray-600 dark:text-gray-300" id="kosName"></p>
                </div>
                <div class="flex items-center justify-between w-full">
                    <p class="text-lg leading-4 text-gray-600 dark:text-gray-300">Harga :</p>
                    <p class="text-lg font-semibold leading-4 text-gray-600 dark:text-gray-300" id="Harga">Rp. </p>
                </div>
                <div class="flex items-center justify-between w-full">
                    <p class="text-lg leading-4 text-gray-600 dark:text-gray-300">Diskon :</p>
                    <p class="text-lg font-semibold leading-4 text-gray-600 dark:text-gray-300" id="Disc">Rp. </p>
                </div>
            </div>
            <div class="flex items-center justify-between w-full mt-24">
                <p class="text-xl font-semibold leading-4 text-gray-800 dark:text-white">Estimasi Total :</p>
                <p class="text-lg font-semibold leading-4 text-gray-800 dark:text-white " id="Total">Rp. </p>
            </div>
        </div>
    </div>
</div>
<!-- End Book -->