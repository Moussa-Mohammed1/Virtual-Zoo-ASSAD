<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>ASSAD Admin - Animal Management</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#11d452",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102216",
                        "surface-dark": "#28392e",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <link rel="stylesheet" href="/ASSAD/assets/css/styles.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #102216;
        }

        ::-webkit-scrollbar-thumb {
            background: #28392e;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #11d452;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white h-screen flex overflow-hidden font-display selection:bg-primary selection:text-black">
    <div id="loader">
        <div class="spinner" aria-hidden="true"></div>
        <div class="text-sm text-white mt-2">Loading...</div>
    </div>
    <aside
        class="w-64 bg-background-dark border-r border-[#28392e] flex flex-col flex-shrink-0 transition-all duration-300 hidden md:flex">
        <div class="p-6 flex items-center gap-3">
            <div class="bg-center bg-no-repeat bg-cover rounded-full h-10 w-10 shrink-0 shadow-lg shadow-primary/20">
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
                            <path d="M40.007,42s0,6,7,8l-3,5h-.862a2.138,2.138,0,0,0-2.138,2.138V59h6l4-10s7-20-7-21"
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
            <div class="flex flex-col overflow-hidden">
                <h1 class="text-white text-base font-bold leading-tight truncate">ASSAD Admin</h1>
                <p class="text-[#9db9a6] text-xs font-normal truncate">Virtual Zoo Portal</p>
            </div>
        </div>
        <nav class="flex-1 overflow-y-auto px-4 py-4 flex flex-col gap-2">
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-dark/50 transition-colors group text-[#9db9a6] hover:text-white"
                href="/ASSAD/Admin/dashboard.php">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">dashboard</span>
                <p class="text-sm font-medium leading-normal">Dashboard</p>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-dark/50 transition-colors group text-[#9db9a6] hover:text-white"
                href="/ASSAD/Admin/users/users.php">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">group</span>
                <p class="text-sm font-medium leading-normal">User Management</p>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-surface-dark border-l-4 border-primary shadow-sm group"
                href="/ASSAD/Admin/animals/animals.php">
                <span
                    class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">pets</span>
                <p class="text-white text-sm font-medium leading-normal">Animal Management</p>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-dark/50 transition-colors group text-[#9db9a6] hover:text-white"
                href="/ASSAD/Admin/habitats/habitats.php">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">landscape</span>
                <p class="text-sm font-medium leading-normal">Habitats</p>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-dark/50 transition-colors group text-[#9db9a6] hover:text-white"
                href="/ASSAD/Admin/Tours/tours.php">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">map</span>
                <p class="text-sm font-medium leading-normal">Guided Tours</p>
            </a>

        </nav>
        <div class="p-4 border-t border-[#28392e]">
            <div
                class="flex items-center gap-3 p-2 rounded-lg bg-surface-dark/50 hover:bg-surface-dark cursor-pointer transition-colors">
                <div class="bg-center bg-no-repeat bg-cover rounded-full h-8 w-8"
                    data-alt="Profile picture of the admin user"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBKhw_hzdz9yoEDpYxdcLkdxEJGsxOm2FEwVJBj3LZ3rAHeY5Na3uNzpt1VCN2GyQBN348ClzgctgUQ-LE70ebh8ZQjAs_HoEo4FEtphuLmCmkcA7JesvqP3r1jVV8GeyA6okkfHYepeQfbA3Qe6m1IugrAfH6-vtFQ5mzPs2dXMklDDx-_iH6M7itv4BWiqejYaxS0OoH6qe4wrtIZbPEFPc_0t1T2Fv4JSw6cTlz5IFbJFjUnOp6NnfYaWOHEe-Gw5oGwkgUV-RUO");'>
                    <script src="/ASSAD/assets/js/preloader.js" defer></script>
                </div>
                <div class="flex flex-col">
                    <p class="text-white text-xs font-bold">Admin User</p>
                    <p class="text-[#9db9a6] text-[10px]">admin@assad.zoo</p>
                </div>
            </div>
        </div>
    </aside>
    <main class="flex-1 flex flex-col h-full overflow-hidden relative">
        <header
            class="flex items-center justify-between px-6 py-4 bg-background-dark/95 border-b border-[#28392e] backdrop-blur-sm ">
            <div class="flex items-center gap-4 text-white md:hidden">
                <button class="p-1 rounded-md hover:bg-surface-dark text-white">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <h2 class="text-lg font-bold">Animal Management</h2>
            </div>
            <div class="hidden md:flex items-center gap-4 text-white">
                <h2 class="text-xl font-bold tracking-tight">Animal Management</h2>
            </div>
            <div class="flex flex-1 justify-end gap-4 items-center">
                <div class="hidden sm:flex relative w-full max-w-md">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-[#9db9a6]">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                    <input
                        class="block w-full pl-10 pr-3 py-2 border-none rounded-lg leading-5 bg-surface-dark text-white placeholder-[#9db9a6] focus:outline-none focus:ring-1 focus:ring-primary sm:text-sm transition-all"
                        placeholder="Search globally..." type="text" />
                </div>
                <div class="flex gap-2">
                    <button
                        class="flex items-center justify-center h-10 w-10 rounded-lg bg-surface-dark text-white hover:bg-primary hover:text-black transition-colors relative">
                        <span class="material-symbols-outlined text-[20px]">notifications</span>
                        <span
                            class="absolute top-2 right-2 h-2 w-2 rounded-full bg-red-500 border border-surface-dark"></span>
                    </button>
                    <button
                        class="flex items-center justify-center h-10 w-10 rounded-lg bg-surface-dark text-white hover:bg-primary hover:text-black transition-colors">
                        <span class="material-symbols-outlined text-[20px]">account_circle</span>
                    </button>
                </div>
            </div>
        </header>
        <div class="flex-1 flex overflow-hidden">
            <div class="flex-1 flex flex-col min-w-0 bg-background-dark relative">
                <div
                    class="px-6 py-5 border-b border-[#28392e] flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <div class="flex gap-4 items-center">
                        <div class="relative">
                            <span
                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-[#9db9a6]">
                                <span class="material-symbols-outlined text-[20px]">filter_list</span>
                            </span>
                            <select
                                class="pl-10 pr-8 py-2 bg-surface-dark border border-white/10 rounded-lg text-sm text-white focus:ring-1 focus:ring-primary focus:border-primary cursor-pointer appearance-none">
                                <option>All Habitats</option>
                                <option>Savanna</option>
                                <option>Rainforest</option>
                                <option>Wetlands</option>
                            </select>
                        </div>
                        <div class="text-sm text-[#9db9a6]">
                            Showing <span class="text-white font-bold">3</span> of <span
                                class="text-white font-bold">85</span> animals
                        </div>
                    </div>
                    <div class="relative w-full sm:w-64">
                        <input
                            class="block w-full px-4 py-2 bg-surface-dark border border-white/10 rounded-lg text-sm text-white placeholder-[#5a6b60] focus:ring-1 focus:ring-primary focus:border-primary"
                            placeholder="Search by name or species..." type="text" />
                        <span
                            class="material-symbols-outlined absolute right-3 top-2.5 text-[#5a6b60] text-[18px]">search</span>
                    </div>
                </div>
                <div class="flex-1 overflow-y-auto p-6">
                    <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                        <div
                            class="bg-surface-dark rounded-xl border border-white/5 p-4 flex gap-4 group hover:border-primary/30 transition-all">
                            <div class="w-24 h-24 sm:w-32 sm:h-32 rounded-lg bg-cover bg-center shrink-0"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCBN31E-LnMXibKOxw-5VyATd4Ac25sT9zyd1hccmY6RDxSfeiMrYUDVmgQZEsT6CemdFlOXAsjSRxifHqf_wH-90cIEhpR-n847Fz6JeQ8Za1bVEaCWTPbgZTMW2O7lY-29MBE0w73DMOoggjmS3LU61NenV4On70bkN0f3JYaJpcvnBPUm25l3CrwoZBeUc9ietV-1YNGbuFMXQJSvN-b8T09hw6BWKXY_DzWQAzziEs2sJu_mtTwH_0VgxoEsrjpldMjzkc3nCcl");'>
                            </div>
                            <div class="flex-1 flex flex-col">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-white font-bold text-lg">African Lion</h3>
                                        <p class="text-[#9db9a6] text-xs italic">Panthera leo</p>
                                    </div>
                                    <div
                                        class="px-2 py-1 rounded bg-[#11d452]/10 border border-[#11d452]/20 text-[#11d452] text-[10px] uppercase font-bold tracking-wide">
                                        Savanna
                                    </div>
                                </div>
                                <p class="mt-2 text-[#9db9a6] text-sm line-clamp-2">
                                    The king of the beasts, known for its majestic mane and powerful roar. A key
                                    attraction for virtual safari tours.
                                </p>
                                <div class="mt-auto pt-3 flex items-center justify-between border-t border-white/5">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                        <span class="text-xs text-[#9db9a6]">Active</span>
                                    </div>
                                    <div class="flex gap-1">
                                        <button
                                            class="p-1.5 text-[#9db9a6] hover:text-white hover:bg-white/10 rounded transition-colors"
                                            title="View Details">
                                            <span class="material-symbols-outlined text-[18px]">visibility</span>
                                        </button>
                                        <button class="p-1.5 text-primary hover:bg-primary/10 rounded transition-colors"
                                            title="Edit">
                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                        </button>
                                        <button
                                            class="p-1.5 text-red-400 hover:text-red-300 hover:bg-red-400/10 rounded transition-colors"
                                            title="Delete">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-surface-dark rounded-xl border border-white/5 p-4 flex gap-4 group hover:border-primary/30 transition-all">
                            <div class="w-24 h-24 sm:w-32 sm:h-32 rounded-lg bg-cover bg-center shrink-0"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBpKMFxyrxGaawgQIKy0d09AWsusaT1tuJt6UGTSxEGbrx6wdj5VxA9PkzGfFWau4dMq3P0oDS5ga3L-OCProEcam58LoR-9UBjzVKxjqaIplYSLNdoi7rM14JXs3kYKbNQaGhpq-Y0wZLqPVpJuUC5UEYXUpoEj3KHntC51SHuRx7oZv4d7DqqA31XjENRyVeQC21ORqwmYDj7b96KE3uPwgFf_A-zYTJafR6ZGghGlpdeOd4YN1hf7niAn8Clz9cTgrEDNC_NwTy8");'>
                            </div>
                            <div class="flex-1 flex flex-col">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-white font-bold text-lg">African Elephant</h3>
                                        <p class="text-[#9db9a6] text-xs italic">Loxodonta africana</p>
                                    </div>
                                    <div
                                        class="px-2 py-1 rounded bg-[#11d452]/10 border border-[#11d452]/20 text-[#11d452] text-[10px] uppercase font-bold tracking-wide">
                                        Savanna
                                    </div>
                                </div>
                                <p class="mt-2 text-[#9db9a6] text-sm line-clamp-2">
                                    The largest living land animal. Highly intelligent and social, forming complex
                                    matriarchal groups.
                                </p>
                                <div class="mt-auto pt-3 flex items-center justify-between border-t border-white/5">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                        <span class="text-xs text-[#9db9a6]">Active</span>
                                    </div>
                                    <div class="flex gap-1">
                                        <button
                                            class="p-1.5 text-[#9db9a6] hover:text-white hover:bg-white/10 rounded transition-colors"
                                            title="View Details">
                                            <span class="material-symbols-outlined text-[18px]">visibility</span>
                                        </button>
                                        <button class="p-1.5 text-primary hover:bg-primary/10 rounded transition-colors"
                                            title="Edit">
                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                        </button>
                                        <button
                                            class="p-1.5 text-red-400 hover:text-red-300 hover:bg-red-400/10 rounded transition-colors"
                                            title="Delete">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="bg-surface-dark rounded-xl border border-white/5 p-4 flex gap-4 group hover:border-primary/30 transition-all">
                            <div class="w-24 h-24 sm:w-32 sm:h-32 rounded-lg bg-cover bg-center shrink-0"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBXYr6bkHu7Nqeo36wN2p1Is7uri7_WfHmgeaU1TDHpIDyBqRafqLqPvCTE75RDKjO7ZZaO3XBrUT9QSAco1sBdjqMeVDrsLAxqlKn9Dc6NmkI4SajI00Lui76emH3L2oyTPW1HEjEGSpzn8BVkX2QdxquIA_Pn6DZdiayVg01rq_3WobpJPGZvHqh0f0m2GJ6HHr4v_l3wIVLMrAvll9O2wOkuxizrrqWzTttQdMemDrNLp4q3TvqE43Xjd2EP0iCDvrZCfhQR7mSV");'>
                            </div>
                            <div class="flex-1 flex flex-col">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-white font-bold text-lg">Reticulated Giraffe</h3>
                                        <p class="text-[#9db9a6] text-xs italic">Giraffa camelopardalis</p>
                                    </div>
                                    <div
                                        class="px-2 py-1 rounded bg-[#11d452]/10 border border-[#11d452]/20 text-[#11d452] text-[10px] uppercase font-bold tracking-wide">
                                        Savanna
                                    </div>
                                </div>
                                <p class="mt-2 text-[#9db9a6] text-sm line-clamp-2">
                                    The tallest land mammal, easily recognized by its long neck and distinctive coat
                                    pattern.
                                </p>
                                <div class="mt-auto pt-3 flex items-center justify-between border-t border-white/5">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-yellow-500"></span>
                                        <span class="text-xs text-[#9db9a6]">Maintenance</span>
                                    </div>
                                    <div class="flex gap-1">
                                        <button
                                            class="p-1.5 text-[#9db9a6] hover:text-white hover:bg-white/10 rounded transition-colors"
                                            title="View Details">
                                            <span class="material-symbols-outlined text-[18px]">visibility</span>
                                        </button>
                                        <button class="p-1.5 text-primary hover:bg-primary/10 rounded transition-colors"
                                            title="Edit">
                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                        </button>
                                        <button
                                            class="p-1.5 text-red-400 hover:text-red-300 hover:bg-red-400/10 rounded transition-colors"
                                            title="Delete">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="fixed bottom-4 right-4 flex-1 px-4 py-2 bg-primary rounded-lg
                       text-black hover:bg-green-400 transition-colors
                       shadow-lg shadow-primary/20 text-sm font-bold">
                + Add new animal
            </button>
            <!-- Overlay -->
            <div class="hidden fixed inset-0 z-50 flex items-center justify-center backdrop-blur-md bg-black/40">

                <!-- Modal -->
                <div class="w-11/12 lg:w-3/5 h-[90vh] lg:h-3/4
               bg-[#1a2a22] rounded-xl
               border border-[#28392e]
               flex flex-col overflow-y-auto
               scrollbar-none">

                    <!-- Header -->
                    <div class="p-6 border-b border-[#28392e] flex justify-between items-center">
                        <h3 class="text-white font-bold text-lg">Add New Animal</h3>
                        <button class="text-[#9db9a6] hover:text-white transition-colors">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>

                    <!-- Body -->
                    <div class="p-6 flex-1 space-y-6">

                        <!-- Image Upload -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-[#9db9a6]">Animal Image</label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-dashed border-[#5a6b60]
                           rounded-lg hover:border-primary transition-colors cursor-pointer group">
                                <div class="space-y-1 text-center">
                                    <span
                                        class="material-symbols-outlined text-[#5a6b60] text-4xl group-hover:text-primary transition-colors">
                                        add_photo_alternate
                                    </span>
                                    <div class="flex justify-center text-sm text-[#9db9a6]">
                                        <span class="font-medium text-primary hover:text-green-400 cursor-pointer">
                                            Upload a file
                                        </span>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-[#5a6b60]">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>

                        <!-- Inputs -->
                        <div class="space-y-4">

                            <div>
                                <label class="block text-sm font-medium text-[#9db9a6] mb-1" for="name">
                                    Common Name
                                </label>
                                <input class="w-full bg-transparent border border-[#5a6b60] rounded-lg px-3 py-2
                               text-white placeholder-[#5a6b60]
                               focus:ring-1 focus:ring-primary focus:border-primary text-sm" id="name"
                                    placeholder="e.g. African Lion" type="text" />
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-[#9db9a6] mb-1" for="species">
                                    Species (Scientific)
                                </label>
                                <input class="w-full bg-transparent border border-[#5a6b60] rounded-lg px-3 py-2
                               text-white placeholder-[#5a6b60]
                               focus:ring-1 focus:ring-primary focus:border-primary text-sm" id="species"
                                    placeholder="e.g. Panthera leo" type="text" />
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-[#9db9a6] mb-1" for="habitat">
                                    Habitat
                                </label>
                                <div class="relative">
                                    <select
                                        class="w-full bg-surface-dark border border-[#5a6b60] rounded-lg px-3 py-2 text-white focus:ring-1 focus:ring-primary focus:border-primary text-sm appearance-none transition-shadow"
                                        id="habitat">
                                        <option disabled="" selected="" value="">Select habitat</option>
                                        <option value="savanna">Savanna</option>
                                        <option value="rainforest">Rainforest</option>
                                        <option value="wetlands">Wetlands</option>
                                        <option value="desert">Desert</option>
                                    </select>
                                    <span
                                        class="material-symbols-outlined absolute right-3 top-2.5 text-[#5a6b60] pointer-events-none">
                                        expand_more
                                    </span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-[#9db9a6] mb-1" for="description">
                                    Description
                                </label>
                                <textarea class="w-full bg-transparent border border-[#5a6b60] rounded-lg px-3 py-2
                               text-white placeholder-[#5a6b60]
                               focus:ring-1 focus:ring-primary focus:border-primary text-sm" id="description" rows="4"
                                    placeholder="Enter animal details, behavior, and fun facts..."></textarea>
                            </div>

                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="p-6 border-t border-[#28392e] flex gap-3">
                        <button class="flex-1 px-4 py-2 border border-[#5a6b60] rounded-lg
                       text-white hover:bg-white/5 transition-colors text-sm font-medium">
                            Cancel
                        </button>
                        <button class="flex-1 px-4 py-2 bg-primary rounded-lg
                       text-black hover:bg-green-400 transition-colors
                       shadow-lg shadow-primary/20 text-sm font-bold">
                            Save Animal
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </main>

</body>

</html>