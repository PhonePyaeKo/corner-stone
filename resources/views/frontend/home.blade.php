@extends('layouts.frontend')
@section('content')
    {{-- banner section --}}
    <section class="w-full mb-5">
        <div class="relative">
            <img src="{{ asset('assets/images/Banner Background.jpg') }}" alt="banner" class="object-cover">

            <h2 class="absolute top-5 left-[100px] font-bold text-[54px] leading-[100%] w-[843px] h-[110px]">Welcome
                to Cornerstone English Language Academy
            </h2>
            <p class="font-medium text-[24px] w-[943px] h-[350px] absolute left-[100px] top-[140px]">
                where your professional English journey begins. Cornerstone English Language
                Academy is proud to be a CPD Approved Provider (The CPD Group, UK) and
                an Accredited Institution by the Global Higher Education Association (UK),
                ensuring our students receive world-class English language
                education. Our curriculum is rigorously audited to meet
                international standards, ensuring that every certificate
                and diploma that you earn carries real-world value.
            </p>

            <div class="absolute border border-black border-3 w-[109px] rounded top-26 left-[820px]"></div>

            <div
                class="flex justify-around items-center absolute left-[100px] bottom-0 w-[400px] h-[80px] rounded-2xl bg-white shadow-2xl hover:shadow-yellow-700 font-bold text-[27px] text-[#A95634] px-5">
                <a href="#" class=" ">
                    Certificate Verification
                </a>
                <img src="{{ asset('assets/images/solar_arrow-up-bold.png') }}" alt="" class="w-[40px]">
            </div>
        </div>
    </section>

    {{-- about us --}}
    <section class="w-full">
        <h2 class="text-[60px] font-bold text-center">About Us</h2>
        <div class="flex flex-row mx-25 gap-4">
            <p class="font-bold text-[24px] w-[950px] h-[676px] tracking-[5%] mt-5">
                Hello, Cornerstone English Language Academy is located in Yangon, Myanmar. Our mission statement of the academy is, "Learn English with Cornerstone English Language Academy - English is always simple and easy." We provide and teach English classes to Myanmar students who are studying English as a second language. We are also glad to teach students who need assistance to improve English Four skills that include Speaking, Listening, Reading, and Writing. In addition, we use international English textbooks integrated with higher education method and student centered interactive approach in order to improve and enhance our students' English language proficiency.
            </p>
            <img src="{{ asset('assets/images/aboutUsImg.png') }}" alt="aboutUs" class="my-10 h-[550px]" >
        </div>
    </section>
@endsection
