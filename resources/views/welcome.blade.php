@extends('layout', ['title' => 'Home'])

@section('section')

{{-- Promo --}}
<div class="lg:px-20 md:px-6 px-4 md:py-12 py-8">
    <h1 class="lg:text-4xl text-3xl font-semibold text-gray-800 text-center dark:text-gray">Nieuw binnen</h1>
    <div class="flex justify-center">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 lg:gap-8 lg:mt-16 md:mt-12 mt-8 items-center">
            <div class="relative flex flex-col">
                <img src="https://i.ibb.co/b50f24j/carosel-1.png" alt="two girls" class="w-full h-full" />
                <img src="https://i.ibb.co/Tb5CKHn/Rectangle-49.png" alt="opacity bg" class="absolute w-full h-full top-0" />
                <div class="absolute m-6 bottom-0 z-30">
                    <p class="text-sm leading-none text-white">Special collection</p>
                    <h1 class="w-64 text-2xl font-semibold leading-8 mt-2 text-white">New Monochrome Collection</h1>
                    <p class="mt-4 text-base font-medium cursor-pointer leading-4 underline text-white">Discover</p>
                </div>
            </div>
            <div class="relative flex flex-col">
                <img src="https://i.ibb.co/cvN3gMZ/carousel-2.png" alt="black guy" class="w-full" />
                <img src="https://i.ibb.co/Tb5CKHn/Rectangle-49.png" alt="opacity bg" class="absolute w-full top-0" />
                <div class="absolute m-6 bottom-0 z-30">
                    <p class="text-sm leading-none text-white">Special collection</p>
                    <h1 class="w-64 text-2xl font-semibold leading-8 mt-2 text-white">New Monochrome Collection</h1>
                    <p class="mt-4 text-base font-medium cursor-pointer leading-4 underline text-white">Discover</p>
                </div>
            </div>
            <div class="relative flex flex-col">
                <img src="https://i.ibb.co/4JJnHpc/carousel-3.png" alt="black guy" class="w-full h-full" />
                <img src="https://i.ibb.co/Tb5CKHn/Rectangle-49.png" alt="opacity bg" class="absolute w-full h-full top-0" />
                <div class="absolute m-6 bottom-0 z-30">
                    <p class="text-sm leading-none text-white">Special collection</p>
                    <h1 class="w-64 text-2xl font-semibold leading-8 mt-2 text-white">New Monochrome Collection</h1>
                    <p class="mt-4 text-base font-medium cursor-pointer leading-4 underline text-white">Discover</p>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- Socialmedia --}}
<div class="2xl:mx-auto 2xl:container flex justify-center items-center md:py-12 py-9 xl:px-20 sm:px-6 px-4">
    <div class="xl:w-auto md:flex hidden flex-col space-y-6 xl:space-y-0 xl:flex-row justify-center items-center">
        <div class="flex justify-between w-full items-center space-x-6 xl:space-x-8">
            <div class="flex justify-center items-center">
                <img class="" src="https://i.ibb.co/YDKkv5H/heather-ford-5gk-Ysr-H-eb-Y-unsplash-1.png" alt="shoes and clothes" />
            </div>
            <div class="flex flex-col justify-between xl:mt-0 items-center space-y-6 xl:space-y-8">
                <div class="flex flex-col xl:flex-row justify-between h-full xl:justify-center items-center space-y-8 xl:space-y-0 xl:space-x-8">
                    <div class="md:w-72 mx-1 md:h-64 lg:mt-4 xl:mt-0 flex flex-col justify-center items-center text-center">
                        <p class="text-3xl dark:text-gray xl:text-4xl font-semibold leading-7 xl:leading-9 text-center text-gray-800">Our Instagram</p>
                        <p class="text-base dark:text-gray-400 leading-6 mt-3 text-center text-gray-600">Follow us on instagram and tag us to get featured on our timeline</p>
                        <a href="javascript:void(0)" class=" dark:text-gray-400 focus:outline-none mt-4 focus:underline text-base leading-4 hover:underline text-center text-gray-800">@Ourinstaname</a>
                    </div>
                    <div class="">
                        <img class="hidden xl:block" src="https://i.ibb.co/XYPJ0pQ/nordwood-themes-Nv4-QHk-TVEa-I-unsplash-1.png" alt="jewellery" />
                        <img class="xl:hidden" src="https://i.ibb.co/b51F6gj/nordwood-themes-Nv4-QHk-TVEa-I-unsplash-1-1.png" alt="shoes and clothes" />
                    </div>
                </div>
                <div class="hidden xl:flex flex-row justify-center items-center space-x-6 xl:space-x-8">
                    <div class="">
                        <img class="" src="https://i.ibb.co/FD9ZHbF/camilla-carvalho-Y9dc-Qp-OIMHQ-unsplash-1.png" alt="jewellery" />
                    </div>
                    <div class="">
                        <img class="" src="https://i.ibb.co/KxxFD8R/jonathan-francisca-YHbcum51-JB0-unsplash-1.png" alt="watch" />
                    </div>
                </div>
            </div>
        </div>
        <div class="xl:hidden flex flex-row justify-between space-x-6 xl:space-x-8">
            <div class="">
                <img class="" src="https://i.ibb.co/FD9ZHbF/camilla-carvalho-Y9dc-Qp-OIMHQ-unsplash-1.png" alt="jewellery" />
            </div>
            <div class="">
                <img class="" src="https://i.ibb.co/KxxFD8R/jonathan-francisca-YHbcum51-JB0-unsplash-1.png" alt="watch" />
            </div>
        </div>
    </div>

    <!-- mobile responsive -->
    <div class="md:hidden flex justify-center items-center flex-col">
        <div class="w-80 flex flex-col justify-center items-center text-center">
            <p class="text-3xl lg:text-4xl dark:text-white font-semibold leading-7 lg:leading-9 text-center text-gray-800">Our Instagram</p>
            <p class="text-base leading-6 mt-3 dark:text-gray-400 text-center text-gray-600">Follow us on instagram and tag us to get featured on our timeline</p>
            <a href="javascript:void(0)" class="focus:outline-none dark:text-gray-400 mt-4 focus:underline text-base leading-4 hover:underline text-center text-gray-800">@Ourinstaname</a>
        </div>
        <div class="mt-8 flex flex-col justify-center space-y-4">
            <img src="https://i.ibb.co/dpQZWPz/heather-ford-5gk-Ysr-H-eb-Y-unsplash-1.png" alt="shoes and clothes" />
            <img src="https://i.ibb.co/b51F6gj/nordwood-themes-Nv4-QHk-TVEa-I-unsplash-1-1.png" alt="shoes and clothes" />
            <img src="https://i.ibb.co/2c03gv4/camilla-carvalho-Y9dc-Qp-OIMHQ-unsplash-1.png" alt="jewellery" />
            <img src="https://i.ibb.co/PDMYNxh/jonathan-francisca-YHbcum51-JB0-unsplash-1.png" alt="watch" />
        </div>
    </div>
</div>

@endsection