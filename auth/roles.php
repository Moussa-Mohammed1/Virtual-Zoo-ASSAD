<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Virtual Zoo ASSAD - Role Selection</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    "primary": "#ee8c2b",
                    "background-light": "#f8f7f6",
                    "background-dark": "#221910",
                    "card-dark": "#2d241b",
                    "card-light": "#ffffff",
                    "text-muted-dark": "#b9ab9d",
                    "text-muted-light": "#6b5d52",
                },
                fontFamily: {
                    "display": ["Spline Sans", "sans-serif"]
                },
                borderRadius: {
                    "DEFAULT": "1rem",
                    "lg": "2rem",
                    "xl": "3rem",
                    "full": "9999px"
                },
            },
        },
    }
    </script>
    <style>
    body {
        font-family: "Spline Sans", sans-serif;
    }
    </style>
</head>

<body>
    <div
        class="relative flex h-auto min-h-screen w-full flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden text-[#111418] dark:text-white">
        <div class="layout-container flex h-full grow flex-col">
            <header
                class="fixed top-0 left-0 w-full z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-[#e6e0db] dark:border-[#393028] px-4 md:px-10 py-3 bg-background-light dark:bg-background-dark">
                <div class="flex items-center gap-4 text-[#111418] dark:text-white">
                    <div class="size-8 text-primary">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="#000000"
                            transform="matrix(-1, 0, 0, 1, 0, 0)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>lion</title>
                                <g id="lion">
                                    <circle cx="36.5" cy="25.5" r="21.5" style="fill:#e5efef"></circle>
                                    <circle cx="13" cy="7" r="2"
                                        style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </circle>
                                    <circle cx="56.044" cy="22.014" r="1.069" style="fill:#4c241d"></circle>
                                    <line x1="53" y1="5" x2="56" y2="8"
                                        style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </line>
                                    <line x1="56" y1="5" x2="53" y2="8"
                                        style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </line>
                                    <polygon points="9 17 21 17 21 19 15 28 5 27 3 22 7 20 9 17"
                                        style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </polygon>
                                    <path d="M16,34V55h-.862A2.138,2.138,0,0,0,13,57.138V59h7l2.5-15.5"
                                        style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </path>
                                    <path
                                        d="M40.007,42s0,6,7,8l-3,5h-.862a2.138,2.138,0,0,0-2.138,2.138V59h6l4-10s7-20-7-21"
                                        style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </path>
                                    <path
                                        d="M20,41V55h-.862A2.138,2.138,0,0,0,17,57.138V59h7l2.5-15.5A14.594,14.594,0,0,0,34,45c5.27-.6,11.532-3.578,15-3a7.966,7.966,0,0,0,6.5,7.5l-1,5.5h-.862A2.138,2.138,0,0,0,51.5,57.138V59h6l2-10.5-1-4s8-16-6-17-17-1-17-1"
                                        style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </path>
                                    <path
                                        d="M38,15l1.138.853A10.729,10.729,0,0,0,45.578,18H58a5,5,0,0,1,5,5v1a5,5,0,0,1-5,5h-.283"
                                        style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </path>
                                    <ellipse cx="35.5" cy="12" rx="2.5" ry="3.703"
                                        transform="translate(0.223 24.639) rotate(-38.389)"
                                        style="fill:#bf7e68;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </ellipse>
                                    <circle cx="11.044" cy="20.014" r="1.069" style="fill:#4c241d"></circle>
                                    <line x1="49" y1="42" x2="49" y2="38"
                                        style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </line>
                                    <line x1="5" y1="59" x2="35" y2="59"
                                        style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </line>
                                    <line x1="39" y1="59" x2="62" y2="59"
                                        style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </line>
                                    <path
                                        d="M41,26l-6.74-2.384L29.7,16.324a8.578,8.578,0,0,0-8.089-4c-1.563.147-3.444.361-5.613.671-7,1-7,4-7,4h8.5a1.5,1.5,0,0,1,0,3H16v2l-5,5H5l1,3h4L20,41,31,31l8.4-1.778C40,29,41.888,27.331,41,26Z"
                                        style="fill:#bf7e68;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </path>
                                    <polyline points="27 24 27 27 31 31"
                                        style="fill:#bf7e68;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </polyline>
                                    <polyline points="20 25 20 30 25.678 35.838"
                                        style="fill:#bf7e68;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                    </polyline>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">
                        Virtual Zoo ASSAD</h2>
                </div>
                <div class="flex flex-1 justify-end gap-4 md:gap-8 items-center">
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-medium hidden md:block text-[#111418] dark:text-white">Welcome,
                            User</span>
                        <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary"
                            data-alt="User profile avatar placeholder"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAVsl_y6jdgqk3SBcmR81Ple2OTldm6Ci-VEzXpXqTWzK4I0BBN05YhqWR72rYsZ9Puk46y1gWekoAP-m7tbk5bA7yDsncu7Lo-qUoqXlqMeugFIcUpmr8-EP7hPjf1FZlU6876VZ8e7zZdOcz6ieNDQoicd0SnBeqyt0QgLm7hG7Qsoaz-weG5QJMWN38AODKvLha_XbE1CUzvmnH9z32Dlq2iX2afcZbkAxsoePq1XD76qajUKsBscn_9kgljNLEAx1alD5bGnQHZ");'>
                        </div>
                    </div>
                    <button
                        class="flex cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 w-10 bg-[#e6e0db] dark:bg-[#393028] text-[#111418] dark:text-white hover:bg-primary hover:text-white transition-colors">
                        <span class="material-symbols-outlined">logout</span>
                    </button>
                </div>
            </header>
            <div class="px-4 md:px-40 mt-10  flex flex-1 justify-center py-5 md:py-10">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-col gap-3 p-4 mb-4">
                        <div class="flex gap-6 justify-between items-end">
                            <p class="text-[#111418] dark:text-white text-base font-medium leading-normal">Step 2 of 3
                            </p>
                            <p class="text-[#111418] dark:text-white text-sm font-normal leading-normal">50%</p>
                        </div>
                        <div class="rounded-full bg-[#e6e0db] dark:bg-[#54473b] h-2 overflow-hidden">
                            <div class="h-full rounded-full bg-primary" style="width: 50%;"></div>
                        </div>
                        <p class="text-text-muted-light dark:text-text-muted-dark text-sm font-normal leading-normal">
                            Role Selection</p>
                    </div>
                    <div class="flex flex-wrap justify-between gap-3 p-4 mb-6">
                        <div class="flex min-w-72 flex-col gap-3">
                            <h1
                                class="text-[#111418] dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                                How will you experience the wild today?</h1>
                            <p
                                class="text-text-muted-light dark:text-text-muted-dark text-lg font-normal leading-normal">
                                Select your role to unlock the Virtual Zoo experience.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-4">
                        <div
                            class="group flex flex-col rounded-xl shadow-md bg-card-light dark:bg-card-dark border border-[#e6e0db] dark:border-[#393028] hover:border-primary dark:hover:border-primary transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                            <div class="w-full h-56 bg-center bg-no-repeat bg-cover rounded-t-xl relative overflow-hidden"
                                data-alt="Tourists in a jeep observing giraffes on a savanna"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCLOjUS7T0_WVW4SFS2ujt_mZKusd9TWcQcIwLdiMuJLPcu0o8Qo9d7_hTwg1eG1hgiLx8EyhJuEJMMBiiBK061cxXbxN7Efau4iMmKzJ1uwgQuoXeL6NTBqpLLG1wGHWaWbwQADf91fAKxKEJ_7e-6Uu-ErbmXmpnsTlDbaxagcreAa1_Zussv3kNj3Nz1OfesD--OoZ77fa-Fp1gWZOGAenlYdA7JJghZ-IrksP32n8X1qPYyB37WEKkSRzullGDmI-y9fDGgiOFW");'>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div
                                    class="absolute bottom-4 left-4 bg-black/40 backdrop-blur-md px-3 py-1 rounded-full border border-white/20">
                                    <span class="text-white text-xs font-bold uppercase tracking-wider">Most
                                        Popular</span>
                                </div>
                            </div>
                            <div class="flex flex-col flex-1 p-6 gap-4">
                                <div>
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="material-symbols-outlined text-primary">visibility</span>
                                        <h3 class="text-[#111418] dark:text-white text-2xl font-bold leading-tight">The
                                            Explorer (Visitor)</h3>
                                    </div>
                                    <p
                                        class="text-text-muted-light dark:text-text-muted-dark text-base font-normal leading-relaxed">
                                        Discover the richness of African wildlife at your own pace. Watch animals in
                                        real-time, unlock fun facts, and enjoy the atmosphere.
                                    </p>
                                </div>
                                <div class="mt-auto pt-4">
                                    <button
                                        class="w-full cursor-pointer flex items-center justify-center gap-2 rounded-full h-12 px-6 bg-primary text-[#181411] text-base font-bold leading-normal hover:bg-orange-400 transition-colors">
                                        <span>Join as Visitor</span>
                                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="group flex flex-col rounded-xl shadow-md bg-card-light dark:bg-card-dark border border-[#e6e0db] dark:border-[#393028] hover:border-primary dark:hover:border-primary transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                            <div class="w-full h-56 bg-center bg-no-repeat bg-cover rounded-t-xl relative overflow-hidden"
                                data-alt="A park ranger with binoculars looking out over a landscape"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDpUBjNA4O91eovCAhM8ZLtv1LPE-xq-1HWcV-iejWu1kRVAyET38_8DcTokBf6gMEdxwoBvSen9QQCAKtPaAgUabj62unayTkiiqpoa7d1uZ4jRsYeJZsYOG5cVV596aYkezulitgGEnGqW8JP56fRuqp78L01PJ-w71nTXhAGoC404SP_A_7ubzu2Y3TOHnBJFtBAbiNg5KP1RskFjGjv0sEnYqi8AeMl3-g1sbSpJvlm-Kn55JRLUHV5nmwogOrywD0irhvHrF6r");'>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            </div>
                            <div class="flex flex-col flex-1 p-6 gap-4">
                                <div>
                                    <div class="flex items-center gap-2 mb-2">
                                        <span class="material-symbols-outlined text-primary">record_voice_over</span>
                                        <h3 class="text-[#111418] dark:text-white text-2xl font-bold leading-tight">The
                                            Ranger (Guide)</h3>
                                    </div>
                                    <p
                                        class="text-text-muted-light dark:text-text-muted-dark text-base font-normal leading-relaxed">
                                        Lead the way for fellow fans. Host interactive tours, share your expert
                                        knowledge, earn special badges, and build a following.
                                    </p>
                                </div>
                                <div class="mt-auto pt-4">
                                    <button
                                        class="w-full cursor-pointer flex items-center justify-center gap-2 rounded-full h-12 px-6 bg-[#e6e0db] dark:bg-[#393028] text-[#111418] dark:text-white text-base font-bold leading-normal hover:bg-primary hover:text-[#181411] transition-all border border-transparent hover:border-primary">
                                        <span>Join as Guide</span>
                                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex justify-center mt-8 pb-8 gap-6 text-sm text-text-muted-light dark:text-text-muted-dark">
                        <a class="hover:text-primary transition-colors" href="#">Need Help?</a>
                        <span class="opacity-30">|</span>
                        <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>