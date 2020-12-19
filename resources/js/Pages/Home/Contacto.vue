<template>
    <app-layout>

        <div>
            <h1 class="mb-4 text-center font-black text-gray-700">STEPS</h1>
            <div class="flex">
                <div class="w-1/3 text-center px-6">
                    <div
                        class="bg-gray-300 rounded-lg flex items-center justify-center border border-gray-200"
                    >
                        <div
                            class="w-1/3 bg-transparent h-20 flex items-center justify-center icon-step"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.995 24h-1.995c0-3.104.119-3.55-1.761-3.986-2.877-.664-5.594-1.291-6.584-3.458-.361-.791-.601-2.095.31-3.814 2.042-3.857 2.554-7.165 1.403-9.076-1.341-2.229-5.413-2.241-6.766.034-1.154 1.937-.635 5.227 1.424 9.025.93 1.712.697 3.02.338 3.815-.982 2.178-3.675 2.799-6.525 3.456-1.964.454-1.839.87-1.839 4.004h-1.995l-.005-1.241c0-2.52.199-3.975 3.178-4.663 3.365-.777 6.688-1.473 5.09-4.418-4.733-8.729-1.35-13.678 3.732-13.678 4.983 0 8.451 4.766 3.732 13.678-1.551 2.928 1.65 3.624 5.09 4.418 2.979.688 3.178 2.143 3.178 4.663l-.005 1.241zm-13.478-6l.91 2h1.164l.92-2h-2.994zm2.995 6l-.704-3h-1.615l-.704 3h3.023z"/></svg>
                        </div>
                        <div
                            class="w-2/3 bg-gray-200 h-24 flex flex-col items-center justify-center px-1 rounded-r-lg body-step"
                        >
                            <h2 class="font-bold text-sm">Personal Info</h2>
                            <p class="text-xs text-gray-600">
                                Just your personal information
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex-1 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M14 2h-7.229l7.014 7h-13.785v6h13.785l-7.014 7h7.229l10-10z"/></svg>
                </div>
                <div class="w-1/3 text-center px-6">
                    <div
                        class="bg-gray-300 rounded-lg flex items-center justify-center border border-gray-200"
                    >
                        <div class="w-1/3 bg-transparent h-20 flex items-center justify-center icon-step">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 22h-24v-20h24v20zm-1-19h-22v18h22v-18zm-4 13v1h-4v-1h4zm-6.002 1h-10.997l-.001-.914c-.004-1.05-.007-2.136 1.711-2.533.789-.182 1.753-.404 1.892-.709.048-.108-.04-.301-.098-.407-1.103-2.036-1.305-3.838-.567-5.078.514-.863 1.448-1.359 2.562-1.359 1.105 0 2.033.488 2.545 1.339.737 1.224.542 3.033-.548 5.095-.057.106-.144.301-.095.41.14.305 1.118.531 1.83.696 1.779.41 1.773 1.503 1.767 2.56l-.001.9zm-9.998-1h8.999c.003-1.014-.055-1.27-.936-1.473-1.171-.27-2.226-.514-2.57-1.267-.174-.381-.134-.816.119-1.294.921-1.739 1.125-3.199.576-4.111-.332-.551-.931-.855-1.688-.855-.764 0-1.369.31-1.703.871-.542.91-.328 2.401.587 4.09.259.476.303.912.13 1.295-.342.757-1.387.997-2.493 1.252-.966.222-1.022.478-1.021 1.492zm18-3v1h-6v-1h6zm0-3v1h-6v-1h6zm0-3v1h-6v-1h6z"/></svg>
                        </div>
                        <div
                            class="w-2/3 bg-gray-200 h-24 flex flex-col items-center justify-center px-1 rounded-r-lg body-step"
                        >
                            <h2 class="font-bold text-sm">Account Info</h2>
                            <p class="text-xs text-gray-600">
                                Anything you want for your credentials
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex-1 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M14 2h-7.229l7.014 7h-13.785v6h13.785l-7.014 7h7.229l10-10z"/></svg>
                </div>
                <div class="w-1/3 text-center px-6">
                    <div
                        class="bg-gray-300 rounded-lg flex items-center justify-center border border-gray-200"
                    >
                        <div class="w-1/3 bg-transparent h-20 flex items-center justify-center icon-step">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z"/></svg>
                        </div>
                        <div
                            class="w-2/3 bg-gray-200 h-24 flex flex-col items-center justify-center px-1 rounded-r-lg body-step"
                        >
                            <h2 class="font-bold text-sm">Confirmation</h2>
                            <p class="text-xs text-gray-600">
                                Finish it!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- component -->
        <div class="container">
            <div class="px-4 py-4 mx-auto">
                <div class="grid sm:h-24 sm:grid-flow-row sm:gap-4 sm:grid-cols-3 grid-cols-1 md:grid-cols-4">
                    <div class="shadow-lg flex flex-col justify-center bg-white border border-gray-300 rounded">
                        <div class="flex w-full h-full">
                            <div class="w-1/3 flex items-center justify-center bg-green-500">
                                <p class="text-3xl font-semibold text-center text-white">12</p>
                            </div>
                            <div class="w-2/3 flex items-center justify-center ">
                                <p class="text-2xl text-center text-gray-900">Templates</p>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-lg flex flex-col justify-center bg-white border border-gray-300 rounded">
                        <div class="flex w-full h-full">
                            <div class="w-1/3 flex items-center justify-center bg-red-500">
                                <p class="text-3xl font-semibold text-center text-white">123</p>
                            </div>
                            <div class="w-2/3 flex items-center justify-center ">
                                <p class="text-2xl text-center text-gray-900">Categories</p>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-lg flex flex-col justify-center bg-white border border-gray-300 rounded">
                        <div class="flex w-full h-full">
                            <div class="w-1/3 flex items-center justify-center bg-blue-500">
                                <p class="text-3xl font-semibold text-center text-white">231</p>
                            </div>
                            <div class="w-2/3 flex items-center justify-center ">
                                <p class="text-2xl text-center text-gray-900">Companies</p>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-lg flex flex-col justify-center bg-white border border-gray-300 rounded">
                        <div class="flex w-full h-full">
                            <div class="w-1/3 flex items-center justify-center bg-indigo-500">
                                <p class="text-3xl font-semibold text-center text-white">49</p>
                            </div>
                            <div class="w-2/3 flex items-center justify-center ">
                                <p class="text-2xl text-center text-gray-900">Complete</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 w-full bg-white p-6 border border-gray-500 rounded-sm">

            <div class="my-8 text-left">
                <h2 class="text-gray-700">Basic Alert</h2>
            </div>

            <div class="block text-sm text-left text-gray-600 bg-gray-200 border border-gray-400 h-12 flex items-center p-4 rounded-sm" role="alert">
                This is a default alert—check it out!
            </div>

            <div class="block text-sm text-left text-purple-600 bg-purple-200 border border-purple-400 h-12 flex items-center p-4 rounded-sm" role="alert">
                This is a primary alert—check it out!
            </div>

            <div class="block text-sm text-left text-indigo-600 bg-indigo-200 border border-indigo-400 h-12 flex items-center p-4 rounded-sm" role="alert">
                This is a success alert—check it out!
            </div>

            <div class="block text-sm text-left text-blue-600 bg-blue-200 border border-blue-400 h-12 flex items-center p-4 rounded-sm" role="alert">
                This is a info alert—check it out!
            </div>

            <div class="block text-sm text-left text-yellow-600 bg-yellow-200 border border-yellow-400 h-12 flex items-center p-4 rounded-sm" role="alert">
                This is a warning alert—check it out!
            </div>

            <div class="block text-sm text-left text-red-600 bg-red-200 border border-red-400 h-12 flex items-center p-4 rounded-sm" role="alert">
                This is a danger alert—check it out!
            </div>

        </div>








        <!-- component -->
        <div class="bg-white shadow rounded-lg p-6">
            <div class="grid lg:grid-cols-2 gap-6">
                <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="name" class="bg-white text-gray-600 px-1">First name *</label>
                        </p>
                    </div>
                    <p>
                        <input id="name" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 text-gray-900 outline-none block h-full w-full">
                    </p>
                </div>
                <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="lastname" class="bg-white text-gray-600 px-1">Last name *</label>
                        </p>
                    </div>
                    <p>
                        <input id="lastname" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
                    </p>
                </div>
                <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="username" class="bg-white text-gray-600 px-1">Username *</label>
                        </p>
                    </div>
                    <p>
                        <input id="username" autocomplete="false" tabindex="0" type="text" class="py-1 px-1 outline-none block h-full w-full">
                    </p>
                </div>
                <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                    <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="password" class="bg-white text-gray-600 px-1">Password *</label>
                        </p>
                    </div>
                    <p>
                        <input id="password" autocomplete="false" tabindex="0" type="password" class="py-1 px-1 outline-none block h-full w-full">
                    </p>
                </div>
            </div>
            <div class="border-t mt-6 pt-3">
                <button class="rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
                    Save
                </button>
            </div>
        </div>



        <div class="container">
            <span class="tracking-wider text-white bg-orange-500 px-4 py-1 text-sm rounded leading-loose mx-2 font-semibold" title="">
  <i class="fas fa-star" aria-hidden="true"></i> Admin
</span>

            <span class="tracking-wider text-white bg-red-500 px-4 py-1 text-sm rounded leading-loose mx-2 font-semibold" title="">
  <i class="fas fa-heart" aria-hidden="true"></i> User
</span>

            <span class="tracking-wider text-white bg-blue-500 px-4 py-1 text-sm rounded leading-loose mx-2 font-semibold" title="">
  <i class="fas fa-award" aria-hidden="true"></i> Winner
</span>
        </div>

        <!-- component -->


        <!-- component -->






        <!-- component -->
        <div class="p-24 flex flex-wrap items-center justify-center">

            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                    <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">Indoor</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Peace Lily</span>
                        <span class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$36.00</span>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                    <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">Outdoor</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Monstera</span>
                        <span class="block bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$45.00</span>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-purple-500 rounded-lg max-w-xs shadow-lg">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                    <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">Outdoor</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Oak Tree</span>
                        <span class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- component -->
        <!-- Display Container (not part of component) START -->
        <div class="m-10 mx-auto p-16 sm:p-24 lg:p-48 bg-gray-200">

            <!-- Carousel Body -->
            <div class="relative rounded-lg block md:flex items-center bg-gray-100 shadow-xl" style="min-height: 19rem;">
                <div class="relative w-full md:w-2/5 h-full overflow-hidden rounded-t-lg md:rounded-t-none md:rounded-l-lg" style="min-height: 19rem;">
                    <img class="absolute inset-0 w-full h-full object-cover object-center" src="https://stripe.com/img/v3/payments/overview/photos/missguided.jpg" alt="">
                    <div class="absolute inset-0 w-full h-full bg-indigo-900 opacity-75"></div>
                    <div class="absolute inset-0 w-full h-full flex items-center justify-center fill-current text-white">
                        <svg class="w-full h-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 239 120"><path d="M4.21 86.4V33.31h8.94l4 28.85.86 9.52.87-9.52 4-28.85h9.02V86.4h-5.19V42.83l-.87 7.22-5.19 36.35h-5.19l-5.2-36.93-.57-6.64V86.4zm35.79 0h6V33.31h-6zm114.24 0h6.06V33.31h-6.06zm46.16-24h5.48v-6.01h-5.48v-17h9.23v-6.08h-15.31V86.4h15.29v-6.06h-9.23zm-60-29.14v44.19a2.89 2.89 0 1 1-5.77 0V33.31h-6.34v44.14a9.23 9.23 0 1 0 18.46 0V33.31zm40.11 44.14V42.55a2.9 2.9 0 0 0-2.89-2.89h-2.88v41h2.88a3.68 3.68 0 0 0 2.89-3.18zm-3.21-44.09a9.12 9.12 0 0 1 9.23 9.24v34.9a9.12 9.12 0 0 1-9.23 9.24h-9.23V33.31h9.23m51.64 44.14v-34.9a2.89 2.89 0 0 0-2.88-2.89h-2.89v41h2.89a3.67 3.67 0 0 0 2.88-3.18zm-2.88-44.14a9.06 9.06 0 0 1 8.94 9.24v34.9a9.12 9.12 0 0 1-9.23 9.24h-9.23V33.31h9.52M89.31 57.55c-2.88-2.6-5.19-4.91-5.19-9.23v-5.77A2.89 2.89 0 0 1 87 39.66a3.1 3.1 0 0 1 2.89 2.89v6.05H96v-6.05a9.24 9.24 0 1 0-18.47 0v6.05c.58 6.93 4.62 10.68 7.5 13.56 2.89 2.6 5.2 4.91 5.2 9.24v6a2.89 2.89 0 1 1-5.77 0v-8.89h-6.11v8.94a9.23 9.23 0 1 0 18.46 0v-6c-.57-7.22-4.32-10.68-7.5-13.85m-25.1 0C61.33 55 59 52.64 59 48.32v-5.77a2.89 2.89 0 1 1 5.77 0v6.05h6.06v-6.05a9.24 9.24 0 1 0-18.47 0v6.05c0 6.93 4 10.68 6.93 13.56 2.88 2.6 5.19 4.91 5.19 9.24v6a2.89 2.89 0 0 1-2.88 2.89 3.1 3.1 0 0 1-2.89-2.89v-8.89h-5.46v8.94a9.23 9.23 0 1 0 18.46 0v-6c-.28-7.22-4.32-10.68-7.5-13.85m56.84-9.23v-5.82a9.24 9.24 0 1 0-18.47 0v34.9a9.45 9.45 0 0 0 9 9.24 6.63 6.63 0 0 0 6.34-4l2.89 4V62.45h-9.23v6.06h2.88v8.94a2.73 2.73 0 0 1-2.88 2.89 2.89 2.89 0 0 1-2.89-2.89v-34.9a2.9 2.9 0 0 1 2.89-2.89 3.1 3.1 0 0 1 2.88 2.89v6.05h6.64z"></path></svg>
                    </div>
                </div>
                <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
                    <div class="p-12 md:pr-24 md:pl-16 md:py-12">
                        <p class="text-gray-600"><span class="text-gray-900">Missguided</span> is a UK-based fashion retailer that has nearly doubled in size since last year. They integrated Stripe to deliver seamless checkout across mobile and web for customers in 100+ countries, all while automatically combating fraud.</p>
                        <a class="flex items-baseline mt-3 text-indigo-600 hover:text-indigo-900 focus:text-indigo-900" href="">
                            <span>Learn more about our users</span>
                            <span class="text-xs ml-1">&#x279c;</span>
                        </a>
                    </div>
                    <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="50,0 100,0 50,100 0,100" />
                    </svg>
                </div>
                <button class="absolute top-0 mt-32 left-0 bg-white rounded-full shadow-md h-12 w-12 text-2xl text-indigo-600 hover:text-indigo-400 focus:text-indigo-400 -ml-6 focus:outline-none focus:shadow-outline">
                    <span class="block" style="transform: scale(-1);">&#x279c;</span>
                </button>
                <button class="absolute top-0 mt-32 right-0 bg-white rounded-full shadow-md h-12 w-12 text-2xl text-indigo-600 hover:text-indigo-400 focus:text-indigo-400 -mr-6 focus:outline-none focus:shadow-outline">
                    <span class="block" style="transform: scale(1);">&#x279c;</span>
                </button>
            </div>

            <!-- Carousel Tabs -->
            <div class="flex items-center pt-5 justify-between">
                <button class="px-2 opacity-50 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/kickstarter.svg" alt="" style="max-height: 60px;"></button>
                <button class="px-2 opacity-50 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/slack.svg" alt="" style="max-height: 60px;"></button>
                <button class="px-2 opacity-50 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/glossier.svg" alt="" style="max-height: 60px;"></button>
                <button class="px-2 opacity-50 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/charity_water.svg" alt="" style="max-height: 60px;"></button>
                <button class="px-2 opacity-100 hover:opacity-100 focus:opacity-100"><img class="w-full" src="https://stripe.com/img/v3/payments/overview/logos/missguided.svg" alt="" style="max-height: 60px;"></button>
            </div>

        </div>
        <!-- Display Container (not part of component) END -->

        <!-- component -->
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <div class="inline-block relative">
                    <div class="relative w-16 h-16 rounded-full overflow-hidden">
                        <img class="absolute top-0 left-0 w-full h-full bg-cover object-fit object-cover" src="https://picsum.photos/id/646/200/200" alt="Profile picture">
                        <div class="absolute top-0 left-0 w-full h-full rounded-full shadow-inner"></div>
                    </div>
                    <svg class="fill-current text-white bg-green-600 rounded-full p-1 absolute bottom-0 right-0 w-6 h-6 -mx-1 -my-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z"/>
                    </svg>
                </div>
            </div>
            <div class="ml-6">
                <p class="flex items-baseline">
                    <span class="text-gray-600 font-bold">Mary T.</span>
                    <span class="ml-2 text-green-600 text-xs">Verified Buyer</span>
                </p>
                <div class="flex items-center mt-1">
                    <svg class="w-4 h-4 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-4 h-4 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-4 h-4 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-4 h-4 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-4 h-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                </div>
                <div class="flex items-center mt-4 text-gray-600">
                    <div class="flex items-center">
                        <span class="text-sm">Product Quality</span>
                        <div class="flex items-center ml-2">
                            <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-3 h-3 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                    </div>
                    <div class="flex items-center ml-4">
                        <span class="text-sm">Purchasing Experience</span>
                        <div class="flex items-center ml-2">
                            <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-3 h-3 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-3 h-3 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <span class="font-bold">Sapien consequat eleifend!</span>
                    <p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="flex items-center justify-between mt-4 text-sm text-gray-600 fill-current">
                    <button class="flex items-center">
                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5.08 12.16A2.99 2.99 0 0 1 0 10a3 3 0 0 1 5.08-2.16l8.94-4.47a3 3 0 1 1 .9 1.79L5.98 9.63a3.03 3.03 0 0 1 0 .74l8.94 4.47A2.99 2.99 0 0 1 20 17a3 3 0 1 1-5.98-.37l-8.94-4.47z"/></svg>
                        <span class="ml-2">Share</span>
                    </button>
                    <div class="flex items-center">
                        <span>Was this review helplful?</span>
                        <button class="flex items-center ml-6">
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11 0h1v3l3 7v8a2 2 0 0 1-2 2H5c-1.1 0-2.31-.84-2.7-1.88L0 12v-2a2 2 0 0 1 2-2h7V2a2 2 0 0 1 2-2zm6 10h3v10h-3V10z"/></svg>
                            <span class="ml-2">56</span>
                        </button>
                        <button class="flex items-center ml-4">
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11 20a2 2 0 0 1-2-2v-6H2a2 2 0 0 1-2-2V8l2.3-6.12A3.11 3.11 0 0 1 5 0h8a2 2 0 0 1 2 2v8l-3 7v3h-1zm6-10V0h3v10h-3z"/></svg>
                            <span class="ml-2">10</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- component -->
        <section class="font-sans antialiased w-full bg-green-200 py-8">
            <div class="container mx-auto">
                <div class="py-8 w-full mx-auto">
                    <h1 class="text-indigo-darkest text-4xl text-center font-normal">Simple, transparent pricing.</h1>
                    <h2 class="text-white text-4xl text-center font-normal">Always know what you'll pay</h2>
                    <div class="my-8 flex flex-wrap md:items-center w-full">
                        <div class="bg-white shadow rounded w-full md:w-1/2 z-10">
                            <div class="py-8 text-center text-green font-semibold uppercase">Pay as you go</div>
                            <hr class="py-0 my-0 border border-grey-lighter">
                            <div class="py-8">
                                <div class="flex items-top">
                                    <div class="w-1/2 flex justify-center items-center"><span class="text-3xl font-semibold text-indigo-darker">1.4%</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current text-grey mx-2 h-6 w-6">
                                            <path d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z" class="heroicon-ui"></path>
                                        </svg> <span class="text-xl font-semibold text-indigo-darker">&euro;0.25</span>
                                    </div>
                                    <div class="w-1/2 flex justify-center items-center"><span class="text-3xl font-semibold text-indigo-darker">2.9%</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current text-grey mx-2 h-6 w-6">
                                            <path d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z" class="heroicon-ui"></path>
                                        </svg> <span class="text-xl font-semibold text-indigo-darker">&euro;0.25</span>
                                    </div>
                                </div>
                                <div class="flex items-top mt-4">
                                    <div class="w-1/2 text-center text-xs text-grey-dark">for European cards.</div>
                                    <div class="w-1/2 text-center text-xs text-grey-dark">for non-European cards.</div>
                                </div>
                                <div class="mt-8 mx-auto w-2/3">
                                    <div class="flex items-center mb-4"><span class="inline-flex bg-green-lighter rounded-full mr-4 p-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current text-green h-4 w-4"><path d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z" class="heroicon-ui"></path></svg></span>  <span class="text-grey-darker">No setup, monthly, or hidden fees</span>
                                    </div>
                                    <div class="flex items-center mb-4"><span class="inline-flex bg-green-lighter rounded-full mr-4 p-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current text-green h-4 w-4"><path d="M11 18.59V3a1 1 0 0 1 2 0v15.59l5.3-5.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-7-7a1 1 0 0 1 1.4-1.42l5.3 5.3z" class="heroicon-ui"></path></svg></span>  <span class="text-grey-darker">Pay only for what you use</span>
                                    </div>
                                    <div class="flex items-center mb-4"><span class="inline-flex bg-green-lighter rounded-full mr-4 p-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current text-green h-4 w-4"><path d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z" class="heroicon-ui"></path></svg></span>  <span class="text-grey-darker">Real-time fee reporting</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="py-8 bg-grey-lighter hover:bg-grey-light text-indigo-darker rounded rounded-t-none text-center uppercase font-bold flex items-center justify-center"><span>Create account</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current w-4 h-4 ml-2">
                                        <path d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z" class="heroicon-ui"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="bg-indigo-darker rounded shadow w-5/6 md:w-1/2 z-0 mx-auto -mt-1 md:-mt-0 md:-ml-1">
                            <div class="py-8 text-center text-indigo-lightest font-semibold uppercase">Enterprise</div>
                            <hr class="mb-8 my-0 border border-indigo-dark opacity-25">
                            <div class="w-2/3 mx-auto">
                                <p class="text-center text-sm text-indigo-lightest opacity-75 leading-normal">Stripe offers everything needed to run an online business at scale. Get in touch for details.</p>
                            </div>
                            <div class="py-8">
                                <table class="w-3/4 mx-auto text-indigo-lightest text-center" style="border-collapse: collapse;">
                                    <tbody>
                                    <tr>
                                        <td class="px-2 py-4 border border-indigo-dark">Account management</td>
                                        <td class="px-2 py-4 border border-indigo-dark">Volume discounts</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-4 border border-indigo-dark">Migration assistance</td>
                                        <td class="px-2 py-4 border border-indigo-dark">Dedicated support</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="#">
                                <div class="py-8 opacity-50 bg-indigo-darkest hover:bg-indigo-dark text-indigo-lighter rounded rounded-t-none text-center uppercase font-bold flex items-center justify-center"><span>Contact sales</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="icon fill-current w-4 h-4 ml-2">
                                        <path d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z" class="heroicon-ui"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- component -->
        <!-- This is an example component -->
        <div class="my-10">
            <div class="bg-white rounded overflow-hidden shadow-lg">
                <div class="text-center p-6  border-b">
                    <img
                        class="h-24 w-24 rounded-full mx-auto"
                        src="https://randomuser.me/api/portraits/men/24.jpg"
                        alt="Randy Robertson"
                    />
                    <p class="pt-2 text-lg font-semibold">Randy Robertson</p>
                    <p class="text-sm text-gray-600">randy.robertson@example.com</p>
                    <div class="mt-5">
                        <a
                            href="#"
                            class="border rounded-full py-2 px-4 text-xs font-semibold text-gray-700"
                        >
                            Manage your Account
                        </a>
                    </div>
                </div>
                <div class="border-b">
                    <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                        <div class="text-gray-800">
                            <svg
                                fill="none"
                                stroke="currentColor"
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth="1"
                                viewBox="0 0 24 24"
                                class="w-5 h-5"
                            >
                                <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="pl-3">
                            <p class="text-sm font-medium text-gray-800 leading-none">Add members</p>
                            <p class="text-xs text-gray-500">Add/manage users &amp; teams</p>
                        </div>
                    </a>
                    <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                        <div class="text-gray-800">
                            <svg
                                fill="none"
                                stroke="currentColor"
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth="1"
                                viewBox="0 0 24 24"
                                class="w-5 h-5"
                            >
                                <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="pl-3">
                            <p class="text-sm font-medium text-gray-800 leading-none">Account settings</p>
                            <p class="text-xs text-gray-500">Usage, billing, branding, teams</p>
                        </div>
                    </a>
                    <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                        <div class="text-gray-800">
                            <svg
                                fill="none"
                                stroke="currentColor"
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth="1"
                                viewBox="0 0 24 24"
                                class="w-5 h-5"
                            >
                                <path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="pl-3">
                            <p class="text-sm font-medium text-gray-800 leading-none">Personal settings</p>
                            <p class="text-xs text-gray-500">Email, profile, notifications</p>
                        </div>
                    </a>
                    <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                        <div class="text-green-600">
                            <svg
                                fill="none"
                                stroke="currentColor"
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth="1"
                                viewBox="0 0 24 24"
                                class="w-5 h-5"
                            >
                                <path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <div class="pl-3">
                            <p class="text-sm font-medium text-gray-800 leading-none">
                                Apps &amp; integrations
                            </p>
                            <p class="text-xs text-gray-500">Google, slack, mail</p>
                        </div>
                    </a>
                </div>

                <div class="">
                    <a href="#" class="px-4 py-2 pb-4 hover:bg-gray-100 flex">
                        <p class="text-sm font-medium text-gray-800 leading-none">Product updates</p>
                    </a>
                    <a href="#" class="px-4 py-2 pb-4 hover:bg-gray-100 flex">
                        <p class="text-sm font-medium text-gray-800 leading-none">Status updates</p>
                    </a>
                    <a href="#" class="px-4 py-2 pb-4 hover:bg-gray-100 flex">
                        <p class="text-sm font-medium text-gray-800 leading-none">Support FAQ</p>
                    </a>
                    <a href="#" class="px-4 py-2 pb-4 hover:bg-gray-100 flex">
                        <p class="text-sm font-medium text-gray-800 leading-none">Logout</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- component -->


        <!-- comment form -->
        <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-lg">
            <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                    <div class="w-full md:w-full px-3 mb-2 mt-2">
                        <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Type Your Comment' required></textarea>
                    </div>
                    <div class="w-full md:w-full flex items-start md:w-full px-3">
                        <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                            <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>
                        </div>
                        <div class="-mr-1">
                            <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value='Post Comment'>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- component -->
        <div class="h-screen w-screen bg-gray-300">
            <div class="container h-screen mx-auto flex justify-center items-center p-2 md:p-0">
                <div class="border border-gray-300 p-6 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">
                    <div class="flex flex-col md:flex-row">
                        <div class="">
                            <select class="border p-2 rounded">
                                <option>Round-trip</option>
                                <option>Missouri</option>
                                <option>texas</option>
                            </select>
                        </div>
                        <div class="pt-6 md:pt-0 md:pl-6">
                            <select class="border p-2 rounded">
                                <option>4 Passangers</option>
                                <option>3 Passangers</option>
                                <option>2 Passangers</option>
                            </select>
                        </div>
                        <div class="pt-6 md:pt-0 md:pl-6">
                            <select class="border p-2 rounded">
                                <option>Economy</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui"
                                          d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/>
                                </svg>
                                <input type="text" placeholder="Enter text here..."
                                       class="bg-gray-300 max-w-full focus:outline-none text-gray-700"/>
                            </div>
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                <svg  class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui"
                                          d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z"/>
                                </svg>
                                <input type="text" placeholder="Enter text here..."
                                       class="bg-gray-300 max-w-full focus:outline-none text-gray-700"/>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui"
                                          d="M14 5.62l-4 2v10.76l4-2V5.62zm2 0v10.76l4 2V7.62l-4-2zm-8 2l-4-2v10.76l4 2V7.62zm7 10.5L9.45 20.9a1 1 0 0 1-.9 0l-6-3A1 1 0 0 1 2 17V4a1 1 0 0 1 1.45-.9L9 5.89l5.55-2.77a1 1 0 0 1 .9 0l6 3A1 1 0 0 1 22 7v13a1 1 0 0 1-1.45.89L15 18.12z"/>
                                </svg>
                                <input type="text" placeholder="Enter text here..."
                                       class="bg-gray-300 max-w-full focus:outline-none text-gray-700"/>
                            </div>
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui"
                                          d="M13.04 14.69l1.07-2.14a1 1 0 0 1 1.2-.5l6 2A1 1 0 0 1 22 15v5a2 2 0 0 1-2 2h-2A16 16 0 0 1 2 6V4c0-1.1.9-2 2-2h5a1 1 0 0 1 .95.68l2 6a1 1 0 0 1-.5 1.21L9.3 10.96a10.05 10.05 0 0 0 3.73 3.73zM8.28 4H4v2a14 14 0 0 0 14 14h2v-4.28l-4.5-1.5-1.12 2.26a1 1 0 0 1-1.3.46 12.04 12.04 0 0 1-6.02-6.01 1 1 0 0 1 .46-1.3l2.26-1.14L8.28 4zm7.43 5.7a1 1 0 1 1-1.42-1.4L18.6 4H16a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V5.41l-4.3 4.3z"/>
                                </svg>
                                <input type="text" placeholder="Enter text here..."
                                       class="bg-gray-300 max-w-full focus:outline-none text-gray-700"/>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center"><button class="p-2 border w-1/4 rounded-md bg-gray-800 text-white">Search</button></div>
                </div>
            </div>
        </div>



    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
export default {
    components: {AppLayout}
}
</script>
