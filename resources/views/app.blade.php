<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<body>
    <!-- {{session('subdomain')}} -->
    <header class="hidden md:block">
        <!-- Navbar -->
        <nav class="relative w-full flex flex-wrap items-center justify-between p-0 h-20 navbar navbar-expand-lg navbar-light fixed z-20 top-0">
            <div class="container w-full flex flex-wrap items-center justify-between px-6 h-20" style="overflow:hidden">
                <div class="flex items-center h-20" style="margin-left:2.47%">
                    <img src="{{URL::asset('/image/vector.png')}}" style="" alt=""loading="lazy" />
                </div>

                <!-- Right elements -->
                <div class="flex items-center relative">
                    <!-- Icon -->
                    <div class="relative" style="margin-right:20px">
                        <img src="{{URL::asset('/image/Bell.png')}}" style="" alt=""loading="lazy" />
                    </div>
                    <div class="relative" style="margin-right:7px">
                        <img src="{{URL::asset('/image/Frame 68.png')}}" style="" alt=""loading="lazy" />
                    </div>
                    <div class="relative" style="margin-right:70px">
                        <p>Luthfi Dzul</p>
                    </div>
                </div>
                <!-- Right elements -->
            </div>
        </nav>
        
    </header>
    
    <main>
        <div class="flex flex-col md:flex-row">
        <!-- Side Bar -->
        <div class="md:flex flex-col md:flex-row md:min-h-screen md:w-[22.7%] w-full">
        <div @click.away="open = false" class="flex flex-col w-full flex-shrink-0" x-data="{ open: false }">
            <div class="flex flex-row">
            <div class="container w-full flex flex-wrap items-center justify-between h-fit" style="overflow:hidden">
                <div class="flex items-center h-20 md:hidden" style="margin-left:2.47%">
                    <img src="{{URL::asset('/image/vector.png')}}" style="" alt=""loading="lazy" />
                </div>
                <li class="hidden md:flex py-8 pr-2" style="padding-left:40px; align-items : center; border-style:solid; border-width: 0px 0px 0px 0px; border-color: #9CA3AF; ">
                    <img src="{{URL::asset('/image/Frame 68.png')}}" class="" style="opacity:0" alt=""loading="lazy" />
                    <span class="pl-2.5"><p  class="" style="font-size:16px; color:#00466C">{{__('messages.manage')}}</p></span>
                </li>

                <!-- Right elements -->
                <div class="flex items-center relative md:hidden">
                    <!-- Icon -->
                    <div class="relative" style="margin-right:20px">
                        <img src="{{URL::asset('/image/Bell.png')}}" style="" alt=""loading="lazy" />
                    </div>
                    <div class="relative" style="margin-right:7px">
                        <img src="{{URL::asset('/image/Frame 68.png')}}" style="" alt=""loading="lazy" />
                    </div>
                    <div class="relative" style="margin-right:70px">
                        <p>Luthfi Dzul</p>
                    </div>
                </div>
                <!-- Right elements -->
            </div>
            <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline mr-4" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            </div>
            <nav :class="{'block': open, 'hidden': !open}" class="flex md:block pb-4 md:pb-0">
            <div class="fixed bottom-0 mt-0 md:relative md:h-screen z-10 w-full content-center">
                    <div class="">
                        <ul class="list-reset flex flex-row md:flex-col text-center md:text-left">
                            <li class="flex py-8" style="padding-left:40px; align-items : center; background: #0088D5;">
                                <img src="{{URL::asset('/image/tachometer.png')}}" class="" alt=""loading="lazy" />
                                <span class="pl-2.5"><p  class="" style="font-size:16px; color:#FFFFFF; width:181px">{{__('messages.sboverview')}}</p></span>
                            </li>
                            <li class="borderlist flex py-8" style="padding-left:40px; align-items : center;">
                                <img src="{{URL::asset('/image/transactions.png')}}" class="" alt=""loading="lazy" />
                                <span class="pl-2.5"><p  class="" style="font-size:16px; color:#6B7280; width:181px">{{__('messages.sbtransaction')}}</p></span>
                            </li>
                            <li class="borderlist flex py-8" style="padding-left:40px; align-items : center;">
                                <img src="{{URL::asset('/image/account.png')}}" class="" alt=""loading="lazy" />
                                <span class="pl-2.5"><p  class="" style="font-size:16px; color:#6B7280; width:181px">{{__('messages.sbaccount')}}</p></span>
                            </li>
                            <li class="borderlist flex py-8" style="padding-left:40px; align-items : center;">
                                <img src="{{URL::asset('/image/report.png')}}" class="" alt=""loading="lazy" />
                                <span class="pl-2.5"><p  class="" style="font-size:16px; color:#6B7280; width:181px">{{__('messages.sbreports')}}</p></span>
                            </li>
                            <li class="borderlist flex py-8" style="padding-left:40px; align-items : center;">
                                <img src="{{URL::asset('/image/setting.png')}}" class="" alt=""loading="lazy" />
                                <span class="pl-2.5"><p  class="" style="font-size:16px; color:#6B7280; width:181px">{{__('messages.sbsetting')}}</p></span>
                            </li>
                            <li class="borderlist" style="padding:50px 40px 110px;border-width: 0.5px 0px 0px 0px;">
                                <div class="flex justify-center">
                                    <div class="block max-w-sm rounded-lg p-6" style="background: linear-gradient(111.75deg, #0097EC 0%, #0068A3 100%); width:250px;">
                                        <p class="text-center" style="font-weight:600; color: #F9FAFB;">
                                            Dompet Premium
                                        </p>
                                        <ul class="pt-3 list-reset flex flex-row md:flex-col text-center md:text-left">
                                            <li class="flex ml-4" style="align-items : center;">
                                                <img src="{{URL::asset('/image/star.png')}}" class="" style="" alt=""loading="lazy" />
                                                <span class="pl-2"><p  class="" style="font-size:12px; color: #F9FAFB;">{{__('messages.dompetunlimited')}}</p></span>
                                            </li>  
                                            <li class="flex ml-4 mt-2" style="align-items : center;">
                                                <img src="{{URL::asset('/image/star.png')}}" class="" style="" alt=""loading="lazy" />
                                                <span class="pl-2"><p  class="" style="font-size:12px; color: #F9FAFB;">{{__('messages.dompetaccount')}}</p></span>
                                            </li>
                                            <li class="flex ml-4 mt-2" style="align-items : center;">
                                                <img src="{{URL::asset('/image/star.png')}}" class="" style="" alt=""loading="lazy" />
                                                <span class="pl-2"><p  class="" style="font-size:12px; color: #F9FAFB;">{{__('messages.dompetmulti')}}</p></span>
                                            </li>
                                            <li class="flex ml-4 mt-2" style="align-items : center;">
                                                <img src="{{URL::asset('/image/star.png')}}" class="" style="" alt=""loading="lazy" />
                                                <span class="pl-2"><p  class="" style="font-size:12px; color: #F9FAFB;">{{__('messages.dompetadvancechart')}}</p></span>
                                            </li>
                                            <li class="flex ml-4 mt-2" style="align-items : center;">
                                                <img src="{{URL::asset('/image/star.png')}}" class="" style="" alt=""loading="lazy" />
                                                <span class="pl-2"><p  class="" style="font-size:12px; color: #F9FAFB;">{{__('messages.dompettw')}}</p></span>
                                            </li>
                                        </ul>
                                        <button
                                            type="button"
                                            class="mt-4 ml-8 inline-block rounded-[8px] py-2 px-4 leading-normal hover:bg-sky-400"
                                            style="background: #F9FAFB;">
                                                <p style="font-weight: 600; color: #1F2937;">{{__('messages.dompetupgrade')}}</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </div>
            <!-- Side Bar -->
            <!-- <nav style="width:22.7%">
                <div class="fixed bottom-0 mt-0 md:relative md:h-screen z-10 w-full content-center">
                    <div class="">
                        <ul class="list-reset flex flex-row md:flex-col text-center md:text-left">
                            <li class="flex py-8 pr-2" style="padding-left:40px; align-items : center; border-style:solid; border-width: 0px 0px 0px 0px; border-color: #9CA3AF; ">
                                <img src="{{URL::asset('/image/Frame 68.png')}}" class="" style="opacity:0" alt=""loading="lazy" />
                                <span class="pl-2.5"><p  class="" style="font-size:16px; color:#00466C">{{__('messages.manage')}}</p></span>
                            </li>
                            <li class="flex py-8" style="padding-left:40px; align-items : center; background: #0088D5;">
                                <img src="{{URL::asset('/image/tachometer.png')}}" class="" alt=""loading="lazy" />
                                <span class="pl-2.5"><p  class="" style="font-size:16px; color:#FFFFFF; width:181px">{{__('messages.sboverview')}}</p></span>
                            </li>
                            <li class="borderlist flex py-8" style="padding-left:40px; align-items : center;">
                                <img src="{{URL::asset('/image/transactions.png')}}" class="" alt=""loading="lazy" />
                                <span class="pl-2.5"><p  class="" style="font-size:16px; color:#6B7280; width:181px">{{__('messages.sbtransaction')}}</p></span>
                            </li>
                            <li class="borderlist flex py-8" style="padding-left:40px; align-items : center;">
                                <img src="{{URL::asset('/image/account.png')}}" class="" alt=""loading="lazy" />
                                <span class="pl-2.5"><p  class="" style="font-size:16px; color:#6B7280; width:181px">{{__('messages.sbaccount')}}</p></span>
                            </li>
                            <li class="borderlist flex py-8" style="padding-left:40px; align-items : center;">
                                <img src="{{URL::asset('/image/report.png')}}" class="" alt=""loading="lazy" />
                                <span class="pl-2.5"><p  class="" style="font-size:16px; color:#6B7280; width:181px">{{__('messages.sbreports')}}</p></span>
                            </li>
                            <li class="borderlist flex py-8" style="padding-left:40px; align-items : center;">
                                <img src="{{URL::asset('/image/setting.png')}}" class="" alt=""loading="lazy" />
                                <span class="pl-2.5"><p  class="" style="font-size:16px; color:#6B7280; width:181px">{{__('messages.sbsetting')}}</p></span>
                            </li>
                            <li class="borderlist" style="padding:50px 40px 110px;border-width: 0.5px 0px 0px 0px;">
                                <div class="flex justify-center">
                                    <div class="block max-w-sm rounded-lg p-6" style="background: linear-gradient(111.75deg, #0097EC 0%, #0068A3 100%); width:250px;">
                                        <p class="text-center" style="font-weight:600; color: #F9FAFB;">
                                            Dompet Premium
                                        </p>
                                        <ul class="pt-3 list-reset flex flex-row md:flex-col text-center md:text-left">
                                            <li class="flex ml-4" style="align-items : center;">
                                                <img src="{{URL::asset('/image/star.png')}}" class="" style="" alt=""loading="lazy" />
                                                <span class="pl-2"><p  class="" style="font-size:12px; color: #F9FAFB;">{{__('messages.dompetunlimited')}}</p></span>
                                            </li>  
                                            <li class="flex ml-4 mt-2" style="align-items : center;">
                                                <img src="{{URL::asset('/image/star.png')}}" class="" style="" alt=""loading="lazy" />
                                                <span class="pl-2"><p  class="" style="font-size:12px; color: #F9FAFB;">{{__('messages.dompetaccount')}}</p></span>
                                            </li>
                                            <li class="flex ml-4 mt-2" style="align-items : center;">
                                                <img src="{{URL::asset('/image/star.png')}}" class="" style="" alt=""loading="lazy" />
                                                <span class="pl-2"><p  class="" style="font-size:12px; color: #F9FAFB;">{{__('messages.dompetmulti')}}</p></span>
                                            </li>
                                            <li class="flex ml-4 mt-2" style="align-items : center;">
                                                <img src="{{URL::asset('/image/star.png')}}" class="" style="" alt=""loading="lazy" />
                                                <span class="pl-2"><p  class="" style="font-size:12px; color: #F9FAFB;">{{__('messages.dompetadvancechart')}}</p></span>
                                            </li>
                                            <li class="flex ml-4 mt-2" style="align-items : center;">
                                                <img src="{{URL::asset('/image/star.png')}}" class="" style="" alt=""loading="lazy" />
                                                <span class="pl-2"><p  class="" style="font-size:12px; color: #F9FAFB;">{{__('messages.dompettw')}}</p></span>
                                            </li>
                                        </ul>
                                        <button
                                            type="button"
                                            class="mt-4 ml-8 inline-block rounded-[8px] py-2 px-4 leading-normal hover:bg-sky-400"
                                            style="background: #F9FAFB;">
                                                <p style="font-weight: 600; color: #1F2937;">{{__('messages.dompetupgrade')}}</p>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> -->
            <!-- Main Frame Gray -->
            <div class="flex-1 pb-[50px]" style="background: #E5E7EB;">
                <div class="flex-row lg:flex mx-10 mt-12">
                    <div class="flex-row" style="">
                        <!-- Card Cash Flow -->
                        <div class="cardshadow md:flex-row rounded-2xl" style="background:#F9FAFB; width:100%; padding: 8px 0px 16px;">
                            <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                <div class="mt-3 container w-full flex flex-wrap items-center justify-between lg:px-4" style="overflow:hidden; height:30px">
                                    <div class="ml-4 lg:ml-0 flex items-center" style="">
                                        <h6>{{__('messages.cf')}}</h6>
                                    </div>

                                    <!-- Right elements -->
                                    <div class="flex items-center relative">
                                        <!-- Icon -->
                                        <button
                                            type="button"
                                            class="bordertab inline-block rounded-[5px] p-2 lg:w-[70px]"
                                            style="background: #F9FAFB;">
                                                <p style="font-size:12px; color:#9CA3AF ;">{{__('messages.daily')}}</p>
                                        </button>
                                        <button
                                            type="button"
                                            class="ml-2 bordertab inline-block rounded-[5px] p-2"
                                            style="background: #0088D5;">
                                                <p style="font-size:12px; color:#F9FAFB ;">{{__('messages.weekly')}}</p>
                                        </button>
                                        <button
                                            type="button"
                                            class="ml-2 mr-4 bordertab inline-block rounded-[5px] p-2"
                                            style="background: #F9FAFB;">
                                                <p style="font-size:12px; color:#9CA3AF ;">{{__('messages.monthly')}}</p>
                                        </button>
                                    </div>
                                    <!-- Right elements -->
                                </div>
                            </nav>
                            <div class="flex flex-wrap px-4 mt-[20px] justify-center">
                                <div class="cardshadow flex-row rounded-[10px] min-[523px]:max-[1086px]:mt-2" style="background:#0068A3;padding: 0px 20px; width:205.33px">
                                        <p class="mt-6" style="font-weight:400; color:#F9FAFB">{{__('messages.totin')}}</p>       
                                        <h6 class="mt-9" style="color:#F9FAFB">Rp1.782.421.00</h6>
                                        <div class="flex mt-2.5 mb-6" style="align-items : center;">
                                            <p class="" style="font-weight:400;font-size:12px;  color:#F9FAFB">20%</p>
                                            <span class="ml-1.5"><img src="{{URL::asset('/image/arrow-up.png')}}" class="" style="" alt=""loading="lazy" /></span>
                                        </div>
                                </div>
                                <div class="mt-2 min-[540px]:max-lg:ml-4 min-[1086px]:ml-4 min-[1086px]:mt-0 cardshadow flex-row rounded-[10px]" style="background:#EF4444;padding: 0px 20px; width:205.33px">
                                        <p class="mt-6" style="font-weight:400; color:#F9FAFB">{{__('messages.toten')}}</p>       
                                        <h6 class="mt-9" style="color:#F9FAFB">Rp1.122.421.00</h6>
                                        <div class="flex mt-2.5 mb-6" style="align-items : center;">
                                            <p class="" style="font-weight:400;font-size:12px;  color:#F9FAFB">30%</p>
                                            <span class="ml-1.5"><img src="{{URL::asset('/image/arrow-down.png')}}" class="" style="" alt=""loading="lazy" /></span>
                                        </div>
                                </div>
                                <div class="mt-2 min-[760px]:max-lg:ml-4 min-[1086px]:ml-4 min-[1086px]:mt-0 cardshadow flex-row rounded-[10px]" style="background:#F1FAFF;padding: 0px 20px; width:205.33px">
                                        <p class="mt-6" style="font-weight:400; color:#00466C">{{__('messages.balance')}}</p>       
                                        <h6 class="mt-9" style="color:#00466C">Rp4.567.234.00</h6>
                                        <div class="flex mt-2.5 mb-6" style="align-items : center;">
                                            <p class="" style="font-weight:400;font-size:12px;  color:#15803D">50%</p>
                                            <span class="ml-1.5"><img src="{{URL::asset('/image/arrow-up-green.png')}}" class="" style="" alt=""loading="lazy" /></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-6 flex-wrap">    
                            <div class="cardshadow flex-row rounded-2xl w-full min-[1437px]:w-[327.5px]" style="background:#F9FAFB;">
                                <div class="flex items-center pl-6 pt-4" style="color:#1F2937">
                                    <h6>{{__('messages.mygoals')}}</h6>
                                </div>
                                <div class="flex pl-6 mt-8" style="align-items : center;">
                                    <div class="flex rounded-[30px] p-[5px]" style="background:#0088D5;width:50px;height:50px;align-items: center;justify-content:center">
                                        <img src="{{URL::asset('/image/macbook.png')}}" class="" style="width:18.33px;height:16.67px" alt=""loading="lazy" />        
                                    </div>                                    
                                    <span class="ml-4">
                                        <p class="" style="font-weight:400; font-size:12px; color:#111827">{{__('messages.item1')}}</p>
                                        <p class="mt-2" style="font-weight:600; font-size:12px; color:#111827">Rp10.231.002,00/Rp20.872.000,00</p>
                                        <div class="flex flex-wrap mt-2">
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#1F2937;border-radius: 5px 0px 0px 5px;">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#1F2937;border-radius: 0px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#1F2937;border-radius: 0px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#D1D5DB;border-radius: 0px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#D1D5DB;border-radius: 5px 0px 0px 5px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="flex pl-6 mt-8" style="align-items : center;">
                                    <div class="flex rounded-[30px] p-[5px]" style="background:#0088D5;width:50px;height:50px;align-items: center;justify-content:center">
                                        <img src="{{URL::asset('/image/home.png')}}" class="" style="width:18.33px;height:16.67px" alt=""loading="lazy" />        
                                    </div>                                    
                                    <span class="ml-4">
                                        <p class="" style="font-weight:400; font-size:12px; color:#111827">{{__('messages.item2')}}</p>
                                        <p class="mt-2" style="font-weight:600; font-size:12px; color:#111827">Rp5.231.002,00/Rp20.872.000,00</p>
                                        <div class="flex flex-wrap mt-2">
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#1F2937;border-radius: 5px 0px 0px 5px;">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#D1D5DB;border-radius: 0px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#D1D5DB;border-radius: 0px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#D1D5DB;border-radius: 0px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#D1D5DB;border-radius: 5px 0px 0px 5px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="flex px-4 py-2 mt-4">
                                    <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                        <div class="mt-3 container w-full flex flex-wrap items-center justify-between" style="overflow:hidden; height:36px">
                                            <div class="flex items-center" style="">
                                                <p style="font-weight:400; font-size:12px; color:#111827">{{__('messages.seemore')}}</p>
                                            </div>

                                            <!-- Right elements -->
                                            <div class="flex items-center relative">
                                                <img class="inline-block" src="{{URL::asset('/image/toggle.png')}}" style="width:15px;height:6.8px" alt=""loading="lazy" />        
                                            </div>
                                            <!-- Right elements -->
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="w-full ml-0 mt-6 min-[1437px]:ml-6 min-[1437px]:mt-0 min-[1437px]:w-[327.5px] cardshadow flex-row rounded-2xl" style="background:#F9FAFB;">
                                <div class="flex items-center pl-6 pt-4" style="color:#1F2937">
                                    <h6>{{__('messages.budgets')}}</h6>
                                </div>
                                <div class="flex pl-6 mt-8" style="align-items : center;">
                                    <div class="flex rounded-[30px] p-[5px]" style="background:#0088D5;width:50px;height:50px;align-items: center;justify-content:center">
                                        <img src="{{URL::asset('/image/food.png')}}" class="" style="width:18.33px;height:16.67px" alt=""loading="lazy" />        
                                    </div>                                    
                                    <span class="ml-4">
                                        <p class="" style="font-weight:400; font-size:12px; color:#111827">{{__('messages.item3')}}</p>
                                        <p class="mt-2" style="font-weight:600; font-size:12px; color:#111827">Rp3.231.002,00/Rp3.500.000,00</p>
                                        <div class="flex flex-wrap mt-2">
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#1F2937;border-radius: 5px 0px 0px 5px;">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#1F2937;border-radius: 0px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#1F2937;border-radius: 0px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#1F2937;border-radius: 0px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#D1D5DB;border-radius: 5px 0px 0px 5px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="flex pl-6 mt-8" style="align-items : center;">
                                    <div class="flex rounded-[30px] p-[5px]" style="background:#0088D5;width:50px;height:50px;align-items: center;justify-content:center">
                                        <img src="{{URL::asset('/image/investment.png')}}" class="" style="width:18.33px;height:16.67px" alt=""loading="lazy" />        
                                    </div>                                    
                                    <span class="ml-4">
                                        <p class="" style="font-weight:400; font-size:12px; color:#111827">{{__('messages.item4')}}</p>
                                        <p class="mt-2" style="font-weight:600; font-size:12px; color:#111827">Rp1.231.002,00/Rp10.000.000,00</p>
                                        <div class="flex flex-wrap mt-2">
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#1F2937;border-radius: 5px 0px 0px 5px;">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#D1D5DB;border-radius: 0px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#D1D5DB;border-radius: 0px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#D1D5DB;border-radius: 0px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                            <div class="box-border h-[5px] w-[39.8px]" style="background:#D1D5DB;border-radius: 5px 0px 0px 5px;transform: rotate(-180deg);">
                                                <!--  -->
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="flex px-4 py-2 mt-4">
                                    <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                        <div class="mt-3 container w-full flex flex-wrap items-center justify-between" style="overflow:hidden; height:36px">
                                            <div class="flex items-center" style="">
                                                <p style="font-weight:400; font-size:12px; color:#111827">{{__('messages.seemore')}}</p>
                                            </div>

                                            <!-- Right elements -->
                                            <div class="flex items-center relative">
                                                <img class="inline-block" src="{{URL::asset('/image/toggle.png')}}" style="width:15px;height:6.8px" alt=""loading="lazy" />        
                                            </div>
                                            <!-- Right elements -->
                                        </div>
                                    </nav>
                                </div>
                            </div>    
                        </div>
                        <div class="flex mt-6 flex-wrap">
                            <div class="w-full min-[1437px]:w-[327.5px] px-2 py-4 cardshadow flex-row rounded-2xl" style="background:#F9FAFB;">
                                <div class="flex items-center pl-2 pb-2" style="color:#1F2937">
                                    <h6>{{__('messages.rt')}}</h6>
                                </div>
                                <div class="flex-row items-center px-2 mt-2">
                                    <div class="flex py-2">
                                        <p class="" style="font-size:12px">{{__('messages.date1')}}</p>    
                                    </div>
                                    <div class="flex-row mt-2">
                                        <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                            <div class="container w-full flex flex-wrap items-center justify-between" style="overflow:hidden; height:40px">
                                                <div class="flex items-center" style="">
                                                    <img src="{{URL::asset('/image/plus.png')}}" class="" style="width:20.83px;height:20.83px" alt=""loading="lazy" />        
                                                    <span class="ml-2">
                                                        <p class="" style="font-size:12px;">{{__('messages.senttova')}}</p>
                                                        <p class="" style="font-weight:300; font-size:8px">{{__('messages.emoneytu')}}</p>
                                                    </span>
                                                </div>

                                                <!-- Right elements -->
                                                <div class="flex items-center relative">
                                                    <p style="font-size:16px">Rp100.000.00</p>
                                                </div>
                                                <!-- Right elements -->
                                            </div>
                                        </nav>
                                        <nav class="mt-4 relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                            <div class="container w-full flex flex-wrap items-center justify-between" style="overflow:hidden; height:40px">
                                                <div class="flex items-center" style="">
                                                    <img src="{{URL::asset('/image/minus.png')}}" class="" style="width:20.83px;height:20.83px" alt=""loading="lazy" />        
                                                    <span class="ml-2">
                                                        <p class="" style="font-size:12px;">{{__('messages.senttova')}}</p>
                                                        <p class="" style="font-weight:300; font-size:8px">{{__('messages.emoneytu')}}</p>
                                                    </span>
                                                </div>

                                                <!-- Right elements -->
                                                <div class="flex items-center relative">
                                                    <p style="font-size:16px">Rp100.000.00</p>
                                                </div>
                                                <!-- Right elements -->
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="flex-row items-center px-2 mt-2">
                                    <div class="flex py-2">
                                        <p class="" style="font-size:12px">{{__('messages.date2')}}</p>    
                                    </div>
                                    <div class="flex-row mt-2">
                                        <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                            <div class="container w-full flex flex-wrap items-center justify-between" style="overflow:hidden; height:40px">
                                                <div class="flex items-center" style="">
                                                    <img src="{{URL::asset('/image/plus.png')}}" class="" style="width:20.83px;height:20.83px" alt=""loading="lazy" />        
                                                    <span class="ml-2">
                                                        <p class="" style="font-size:12px;">{{__('messages.senttova')}}</p>
                                                        <p class="" style="font-weight:300; font-size:8px">{{__('messages.emoneytu')}}</p>
                                                    </span>
                                                </div>

                                                <!-- Right elements -->
                                                <div class="flex items-center relative">
                                                    <p style="font-size:16px">Rp100.000.00</p>
                                                </div>
                                                <!-- Right elements -->
                                            </div>
                                        </nav>
                                        <nav class="mt-4 relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                            <div class="container w-full flex flex-wrap items-center justify-between" style="overflow:hidden; height:40px">
                                                <div class="flex items-center" style="">
                                                    <img src="{{URL::asset('/image/minus.png')}}" class="" style="width:20.83px;height:20.83px" alt=""loading="lazy" />        
                                                    <span class="ml-2">
                                                        <p class="" style="font-size:12px;">{{__('messages.senttova')}}</p>
                                                        <p class="" style="font-weight:300; font-size:8px">{{__('messages.emoneytu')}}</p>
                                                    </span>
                                                </div>

                                                <!-- Right elements -->
                                                <div class="flex items-center relative">
                                                    <p style="font-size:16px">Rp100.000.00</p>
                                                </div>
                                                <!-- Right elements -->
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="flex pt-2 px-2 mt-2">
                                    <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                        <div class="container w-full flex flex-wrap items-center justify-between" style="overflow:hidden; height:36px">
                                            <div class="flex items-center" style="">
                                                <p style="font-weight:400; font-size:12px; color:#111827">{{__('messages.seemore')}}</p>
                                            </div>

                                            <!-- Right elements -->
                                            <div class="flex items-center relative">
                                                <img class="inline-block" src="{{URL::asset('/image/toggle.png')}}" style="width:15px;height:6.8px" alt=""loading="lazy" />        
                                            </div>
                                            <!-- Right elements -->
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="w-full ml-0 mt-6 min-[1437px]:ml-6 min-[1437px]:mt-0 min-[1437px]:w-[327.5px] px-2 py-4 cardshadow flex-row rounded-2xl" style="background:#F9FAFB; height:fit-content">
                                <div class="flex items-center pl-2 pb-2" style="color:#1F2937">
                                    <h6>{{__('messages.ut')}}</h6>
                                </div>
                                <div class="flex-row items-center px-2 mt-2">
                                    <div class="flex py-2">
                                        <p class="" style="font-size:12px">{{__('messages.date1')}}</p>    
                                    </div>
                                    <div class="flex-row mt-2">
                                        <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                            <div class="container w-full flex flex-wrap items-center justify-between" style="overflow:hidden; height:40px">
                                                <div class="flex items-center" style="">
                                                    <img src="{{URL::asset('/image/minus.png')}}" class="" style="width:20.83px;height:20.83px" alt=""loading="lazy" />        
                                                    <span class="ml-2">
                                                        <p class="" style="font-size:12px;">{{__('messages.senttova')}}</p>
                                                        <p class="" style="font-weight:300; font-size:8px">{{__('messages.emoneytu')}}</p>
                                                    </span>
                                                </div>

                                                <!-- Right elements -->
                                                <div class="flex items-center relative">
                                                    <p style="font-size:16px">Rp100.000.00</p>
                                                </div>
                                                <!-- Right elements -->
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="flex-row items-center px-2 mt-2">
                                    <div class="flex py-2">
                                        <p class="" style="font-size:12px">{{__('messages.date3')}}</p>    
                                    </div>
                                    <div class="flex-row mt-2">
                                        <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                            <div class="container w-full flex flex-wrap items-center justify-between" style="overflow:hidden; height:40px">
                                                <div class="flex items-center" style="">
                                                    <img src="{{URL::asset('/image/plus.png')}}" class="" style="width:20.83px;height:20.83px" alt=""loading="lazy" />        
                                                    <span class="ml-2">
                                                        <p class="" style="font-size:12px;">{{__('messages.senttova')}}</p>
                                                        <p class="" style="font-weight:300; font-size:8px">{{__('messages.emoneytu')}}</p>
                                                    </span>
                                                </div>

                                                <!-- Right elements -->
                                                <div class="flex items-center relative">
                                                    <p style="font-size:16px">Rp100.000.00</p>
                                                </div>
                                                <!-- Right elements -->
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="flex-row items-center px-2 mt-2">
                                    <div class="flex py-2">
                                        <p class="" style="font-size:12px">{{__('messages.date2')}}</p>    
                                    </div>
                                    <div class="flex-row mt-2">
                                        <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                            <div class="container w-full flex flex-wrap items-center justify-between" style="overflow:hidden; height:40px">
                                                <div class="flex items-center" style="">
                                                    <img src="{{URL::asset('/image/minus.png')}}" class="" style="width:20.83px;height:20.83px" alt=""loading="lazy" />        
                                                    <span class="ml-2">
                                                        <p class="" style="font-size:12px;">{{__('messages.senttova')}}</p>
                                                        <p class="" style="font-weight:300; font-size:8px">{{__('messages.emoneytu')}}</p>
                                                    </span>
                                                </div>

                                                <!-- Right elements -->
                                                <div class="flex items-center relative">
                                                    <p style="font-size:16px">Rp100.000.00</p>
                                                </div>
                                                <!-- Right elements -->
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="flex pt-2 px-2 mt-2">
                                    <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                        <div class="container w-full flex flex-wrap items-center justify-between" style="overflow:hidden; height:36px">
                                            <div class="flex items-center" style="">
                                                <p style="font-weight:400; font-size:12px; color:#111827">{{__('messages.seemore')}}</p>
                                            </div>

                                            <!-- Right elements -->
                                            <div class="flex items-center relative">
                                                <img class="inline-block" src="{{URL::asset('/image/toggle.png')}}" style="width:15px;height:6.8px" alt=""loading="lazy" />        
                                            </div>
                                            <!-- Right elements -->
                                        </div>
                                    </nav>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="w-full lg:w-[328px] mt-6 lg:mt-0 ml-0 lg:ml-6 px-4 pb-8 cardshadow rounded-2xl" style="background:#F9FAFB; height:fit-content">
                        <div class="flex">
                            <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                <div class="p-4 container w-full flex flex-wrap items-center justify-between" style="overflow:hidden; height:67px">
                                    <div class="py-2 flex items-center lg:max-[1385px]:w-[80px]" style="">
                                        <p style="font-size:16px; color:#1F2937">{{__('messages.ma')}}</p>
                                    </div>

                                    <!-- Right elements -->
                                    <div class="flex items-center relative rounded-[8px] lg:max-[1385px]:w-[80px] p-2" style="background: #0088D5;">
                                        <img class="inline-block" src="{{URL::asset('/image/addacc.png')}}" class="" style="width:12.5px;height:12.5px" alt=""loading="lazy" />        
                                        <span class="ml-[10.25px]"><p style="font-weight:600;font-size:12px; color:#F9FAFB">{{__('messages.aa')}}</p></span>
                                    </div>
                                    <!-- Right elements -->
                                </div>
                            </nav>
                        </div>
                        <div class="flex mt-8 justify-center">
                            <div class="absolute mt-[-22px]" style="background: url(aldri-suganda-VbU9cVZ5Dh4-unsplash.jpg), linear-gradient(67.84deg, #19AFDE -1.82%, #05394A 106.59%);border-radius: 15px 15px 0px 0px; width:215px; color: rgba(0, 0, 0, 0);">
                                --
                            </div>
                            <div class="flex-row cardshadow" style="filter: drop-shadow(0px 4px 8px rgba(0, 0, 0, 0.08));width:245px;height:144px; border-radius: 15px 15px 16px 16px;">
                                <div class="grow flex p-6" style="background: url(aldri-suganda-VbU9cVZ5Dh4-unsplash.jpg), linear-gradient(67.84deg, #19AFDE -1.82%, #05394A 106.59%);border-radius: 15px 15px 0px 0px; height:97px;">
                                    <div class="flex grow">
                                        <div class="flex items-center" style="height:17px">
                                            <img class="inline-block" src="{{URL::asset('/image/link.png')}}" class="" style="width:13.59px;height:7.03px" alt=""loading="lazy" />
                                            <span class="ml-2"><p style="color:#FFFFFF;">{{__('messages.natbank')}}</p></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4" style="border-radius: 0px 0px 16px 16px; height:47px">
                                    <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                        <div class="container w-full flex flex-wrap items-center justify-between" style="overflow:hidden">
                                            <div class="flex items-center " style="">
                                                <p style="font-size:12px; color:#000000">Luthfi Dzul</p>
                                            </div>

                                            <div class="flex items-center relative">
                                                <p style="font-weight:500;font-size:12px; color:#000000">0018 8982 9899</p>
                                                <span class="ml-1"><img class="inline-block" src="{{URL::asset('/image/copy.png')}}" class="" style="" alt=""loading="lazy" /></span>
                                            </div>                                            
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="class mt-8">
                            <div class="flex py-2">
                                <p style="font-size:16px;color:#1F2937">{{__('messages.qr')}}</p>
                            </div>
                            <div class="flex mt-6">
                                <div class="flex" style="width: -webkit-fill-available;">
                                    <div class="grow py-[10px] px-2 items-center justify-center" style="border: 0.25px solid #D1D5DB;">
                                        <p style="text-align:center;font-size:12px">{{__('messages.income')}}</p>                                        
                                    </div>
                                    <div class="grow py-[10px] px-2 items-center justify-center" style="border: 0.25px solid #D1D5DB; background: #E5E7EB;">
                                        <p style="text-align:center;font-size:12px">{{__('messages.expense')}}</p>                                        
                                    </div>
                                    <div class="grow py-[10px] px-2 items-center justify-center" style="border: 0.25px solid #D1D5DB;">
                                        <p style="text-align:center;font-size:12px">{{__('messages.transfer')}}</p>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="flex mt-6">
                                <div class="flex" style="width: -webkit-fill-available;">
                                    <div class="flex-row" style="width:fit-content;">
                                        <div class="flex">
                                            <p style="font-size:12px;color: #374151;">{{__('messages.cat')}}</p>    
                                        </div>
                                        <div class="flex mt-2 rounded-lg py-[12px] px-[10px]" style="background: #E5E7EB;height:fit-content">
                                            <div class="flex rounded-[30px] p-[5px]" style="background:#0088D4;align-items: center;justify-content:center; height:min-content">
                                                <img src="{{URL::asset('/image/food.png')}}" class="" style="width:5px;height:5px" alt=""loading="lazy" />        
                                            </div>    
                                            <span class="ml-1"><p style="font-size:12px; color:#374151">{{__('messages.item3')}}</p></span>
                                        </div>    
                                    </div>
                                    <div class="flex-row ml-4 grow">
                                        <div class="flex">
                                            <p style="font-size:12px;color: #374151;">{{__('messages.sbaccount')}}</p>    
                                        </div>
                                        
                                        <div class="flex mt-2 rounded-lg py-[12px] px-[10px]" style="background: #E5E7EB;height:39px">
                                            <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                                <div class="container w-full flex flex-wrap items-center justify-between" style="overflow:hidden;">
                                                    <div class="flex items-center" style="">
                                                        <div class="flex rounded-[30px] p-[5px]" style="background:#4B5563;align-items: center;justify-content:center">
                                                            <img src="{{URL::asset('/image/account.png')}}" class="" style="width:5px;height:5px" alt=""loading="lazy" />        
                                                        </div>    
                                                        <span class="ml-1"><p style="font-size:12px; color:#374151">{{__('messages.cash')}}</p></span>            
                                                    </div>

                                                    <!-- Right elements -->
                                                    <div class="flex items-center relative">
                                                        <img class="inline-block" src="{{URL::asset('/image/toggle.png')}}" class="width:15px;height:6.8px" alt=""loading="lazy" />        
                                                    </div>
                                                    <!-- Right elements -->
                                                </div>
                                            </nav>
                                        </div>    
                                    </div>    
                                </div>
                            </div>
                            <div class="flex mt-6">
                                <div class="flex" style="width: -webkit-fill-available;">
                                    <div class="flex-row" style="width:157px">
                                        <div class="flex">
                                            <p style="font-size:12px;color: #374151;">{{__('messages.ta')}}</p>    
                                        </div>
                                        <div class="flex mt-2 rounded-lg py-[12px] px-[10px]" style="background: #E5E7EB;height:39px">
                                            <p style="font-size:12px; color:#374151">Rp100.000.00</p>
                                        </div>    
                                    </div>
                                    <div class="flex-row ml-4 grow">
                                        <div class="flex">
                                            <p style="font-size:12px;color: #374151;">{{__('messages.curr')}}</p>    
                                        </div>
                                        
                                        <div class="flex mt-2 rounded-lg py-[12px] px-[10px]" style="background: #E5E7EB;height:39px">
                                            <nav class="relative w-full flex flex-wrap items-center justify-between p-0 navbar navbar-expand-lg navbar-light fixed top-0">
                                                <div class="container w-full flex flex-wrap items-center justify-between" style="overflow:hidden;">
                                                    <div class="flex items-center" style="">
                                                        <p style="font-size:12px; color:#374151">IDR</p>
                                                    </div>

                                                    <!-- Right elements -->
                                                    <div class="flex items-center relative">
                                                        <img class="inline-block" src="{{URL::asset('/image/toggle.png')}}" class="width:15px;height:6.8px" alt=""loading="lazy" />        
                                                    </div>
                                                    <!-- Right elements -->
                                                </div>
                                            </nav>
                                        </div>    
                                    </div>    
                                </div>
                            </div>
                            <div class="flex mt-6">
                                <div class="flex" style="width: -webkit-fill-available;">
                                    <div class="flex-row" style="width:130px">
                                        <div class="flex">
                                            <p style="font-size:12px;color: #374151;">{{__('messages.date')}}</p>    
                                        </div>
                                        <div class="flex mt-2 rounded-lg py-[12px] px-[10px] justify-center" style="background: #E5E7EB;height:39px">
                                            <p style="font-size:12px; color:#374151;">Aug 10, 2022</p>
                                        </div>    
                                    </div>
                                    <div class="flex-row ml-4 grow">
                                        <div class="flex">
                                            <p style="font-size:12px;color: #374151;">{{__('messages.time')}}</p>    
                                        </div>
                                        <div class="flex mt-2 rounded-lg py-[12px] px-[10px] justify-center" style="background: #E5E7EB;height:39px">
                                            <p style="font-size:12px; color:#374151; text-align:center">10:30 AM</p>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="flex grow mt-6 items-center justify-center py-[12px] px-[10px] rounded-lg" style="background: #0068A3;">
                                <p style="font-size:12px; font-weight:600; color:#F9FAFB">{{__('messages.ar')}}</p>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>