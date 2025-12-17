<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Detailed Habitat Management - ASSAD Admin</title>
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
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-dark/50 transition-colors group text-[#9db9a6] hover:text-white"
                href="/ASSAD/Admin/animals/animals.php">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">pets</span>
                <p class="text-sm font-medium leading-normal">Animal Management</p>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-surface-dark border-l-4 border-primary shadow-sm group"
                href="/ASSAD/Admin/habitats/habitats.php">
                <span
                    class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">landscape</span>
                <p class="text-white text-sm font-medium leading-normal">Habitats</p>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-dark/50 transition-colors group text-[#9db9a6] hover:text-white"
                href="/ASSAD/Admin/Tours/tours.php">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">map</span>
                <p class="text-sm font-medium leading-normal">Guided Tours</p>
            </a>
            <div class="pt-4 mt-4 border-t border-[#28392e]">
                <p class="px-3 text-xs font-semibold text-[#5a6b60] uppercase tracking-wider mb-2">System</p>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-dark/50 transition-colors group text-[#9db9a6] hover:text-white"
                    href="#">
                    <span class="material-symbols-outlined group-hover:scale-110 transition-transform">settings</span>
                    <p class="text-sm font-medium leading-normal">Settings</p>
                </a>
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-dark/50 transition-colors group text-[#9db9a6] hover:text-white"
                    href="#">
                    <span class="material-symbols-outlined group-hover:scale-110 transition-transform">help</span>
                    <p class="text-sm font-medium leading-normal">Support</p>
                </a>
            </div>
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
            class="flex items-center justify-between px-6 py-4 bg-background-dark/95 border-b border-[#28392e] backdrop-blur-sm z-10">
            <div class="flex items-center gap-4 text-white md:hidden">
                <button class="p-1 rounded-md hover:bg-surface-dark text-white">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <h2 class="text-lg font-bold">Habitats</h2>
            </div>
            <div class="hidden md:flex items-center gap-4 text-white">
                <h2 class="text-xl font-bold tracking-tight">Habitat Management</h2>
            </div>
            <div class="flex flex-1 justify-end gap-4 items-center">
                <div class="hidden sm:flex relative w-full max-w-md">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-[#9db9a6]">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                    <input
                        class="block w-full pl-10 pr-3 py-2 border-none rounded-lg leading-5 bg-surface-dark text-white placeholder-[#9db9a6] focus:outline-none focus:ring-1 focus:ring-primary sm:text-sm transition-all"
                        placeholder="Search habitats by name, biome, or ID..." type="text" />
                </div>
                <div class="flex gap-2">
                    <button
                        class="flex items-center justify-center h-10 w-10 rounded-lg bg-surface-dark text-white hover:bg-primary hover:text-black transition-colors relative">
                        <span class="material-symbols-outlined text-[20px]">notifications</span>
                        <span
                            class="absolute top-2 right-2 h-2 w-2 rounded-full bg-red-500 border border-surface-dark"></span>
                    </button>
                    <button
                        class="md:hidden flex items-center justify-center h-10 w-10 rounded-lg bg-surface-dark text-white hover:bg-primary hover:text-black transition-colors">
                        <span class="material-symbols-outlined text-[20px]">add_circle</span>
                    </button>
                </div>
            </div>
        </header>
        <div class="flex-1 overflow-hidden flex flex-col md:flex-row">
            <div class="flex-1 overflow-y-auto p-4 md:p-6 scroll-smooth">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                    <div class="flex gap-2 overflow-x-auto pb-2 sm:pb-0 w-full sm:w-auto">
                        <button
                            class="px-4 py-2 rounded-lg bg-primary text-black text-sm font-bold whitespace-nowrap shadow-md shadow-primary/20">All
                            Habitats</button>
                        <button
                            class="px-4 py-2 rounded-lg bg-surface-dark border border-white/5 text-[#9db9a6] hover:text-white hover:bg-white/5 text-sm font-medium whitespace-nowrap transition-colors">Savannah</button>
                        <button
                            class="px-4 py-2 rounded-lg bg-surface-dark border border-white/5 text-[#9db9a6] hover:text-white hover:bg-white/5 text-sm font-medium whitespace-nowrap transition-colors">Rainforest</button>
                        <button
                            class="px-4 py-2 rounded-lg bg-surface-dark border border-white/5 text-[#9db9a6] hover:text-white hover:bg-white/5 text-sm font-medium whitespace-nowrap transition-colors">Aquatic</button>
                    </div>
                    <div class="flex items-center gap-3 w-full sm:w-auto">
                        <span class="text-[#5a6b60] text-xs font-medium hidden sm:inline-block">3 items found</span>
                        <div class="h-4 w-px bg-white/10 hidden sm:block"></div>
                        <button
                            class="flex items-center gap-2 px-3 py-2 rounded-lg bg-surface-dark border border-white/5 text-[#9db9a6] hover:text-white text-sm font-medium transition-colors ml-auto sm:ml-0">
                            <span class="material-symbols-outlined text-[18px]">sort</span>
                            Sort by Name
                        </button>
                    </div>
                </div>
                <div class="bg-surface-dark rounded-xl border border-white/5 overflow-hidden shadow-sm">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-black/20 text-[#9db9a6] text-xs uppercase tracking-wider border-b border-white/5">
                                    <th
                                        class="py-4 px-6 font-semibold cursor-pointer hover:text-white group transition-colors">
                                        <div class="flex items-center gap-1">Habitat Name <span
                                                class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">arrow_drop_down</span>
                                        </div>
                                    </th>
                                    <th class="py-4 px-6 font-semibold">Biome</th>
                                    <th
                                        class="py-4 px-6 font-semibold cursor-pointer hover:text-white group transition-colors">
                                        <div class="flex items-center gap-1">Conditions <span
                                                class="material-symbols-outlined text-[14px] opacity-0 group-hover:opacity-100 transition-opacity">arrow_drop_down</span>
                                        </div>
                                    </th>
                                    <th class="py-4 px-6 font-semibold">Inhabitants</th>
                                    <th class="py-4 px-6 font-semibold">Status</th>
                                    <th class="py-4 px-6 font-semibold text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-white/5">
                                <tr class="group hover:bg-white/[0.02] transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-4">
                                            <div class="h-12 w-16 rounded-lg bg-cover bg-center shrink-0 border border-white/10"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCBN31E-LnMXibKOxw-5VyATd4Ac25sT9zyd1hccmY6RDxSfeiMrYUDVmgQZEsT6CemdFlOXAsjSRxifHqf_wH-90cIEhpR-n847Fz6JeQ8Za1bVEaCWTPbgZTMW2O7lY-29MBE0w73DMOoggjmS3LU61NenV4On70bkN0f3JYaJpcvnBPUm25l3CrwoZBeUc9ietV-1YNGbuFMXQJSvN-b8T09hw6BWKXY_DzWQAzziEs2sJu_mtTwH_0VgxoEsrjpldMjzkc3nCcl");'>
                                            </div>
                                            <div>
                                                <p
                                                    class="font-bold text-white group-hover:text-primary transition-colors">
                                                    Serengeti Plains</p>
                                                <p class="text-[#5a6b60] text-xs mt-0.5">Area: 12km²</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="px-2.5 py-1 rounded-md bg-yellow-500/10 text-yellow-500 border border-yellow-500/20 text-xs font-bold inline-block">Savannah</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex flex-col gap-1 text-[#9db9a6]">
                                            <span class="flex items-center gap-1.5 text-xs"><span
                                                    class="material-symbols-outlined text-[14px]">thermostat</span>
                                                32°C</span>
                                            <span class="flex items-center gap-1.5 text-xs"><span
                                                    class="material-symbols-outlined text-[14px]">water_drop</span>
                                                40%</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex -space-x-2">
                                            <div class="h-8 w-8 rounded-full ring-2 ring-surface-dark bg-cover bg-center"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCBN31E-LnMXibKOxw-5VyATd4Ac25sT9zyd1hccmY6RDxSfeiMrYUDVmgQZEsT6CemdFlOXAsjSRxifHqf_wH-90cIEhpR-n847Fz6JeQ8Za1bVEaCWTPbgZTMW2O7lY-29MBE0w73DMOoggjmS3LU61NenV4On70bkN0f3JYaJpcvnBPUm25l3CrwoZBeUc9ietV-1YNGbuFMXQJSvN-b8T09hw6BWKXY_DzWQAzziEs2sJu_mtTwH_0VgxoEsrjpldMjzkc3nCcl");'
                                                title="Lion"></div>
                                            <div class="h-8 w-8 rounded-full ring-2 ring-surface-dark bg-cover bg-center"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBXYr6bkHu7Nqeo36wN2p1Is7uri7_WfHmgeaU1TDHpIDyBqRafqLqPvCTE75RDKjO7ZZaO3XBrUT9QSAco1sBdjqMeVDrsLAxqlKn9Dc6NmkI4SajI00Lui76emH3L2oyTPW1HEjEGSpzn8BVkX2QdxquIA_Pn6DZdiayVg01rq_3WobpJPGZvHqh0f0m2GJ6HHr4v_l3wIVLMrAvll9O2wOkuxizrrqWzTttQdMemDrNLp4q3TvqE43Xjd2EP0iCDvrZCfhQR7mSV");'
                                                title="Giraffe"></div>
                                            <div class="h-8 w-8 rounded-full ring-2 ring-surface-dark bg-cover bg-center"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBpKMFxyrxGaawgQIKy0d09AWsusaT1tuJt6UGTSxEGbrx6wdj5VxA9PkzGfFWau4dMq3P0oDS5ga3L-OCProEcam58LoR-9UBjzVKxjqaIplYSLNdoi7rM14JXs3kYKbNQaGhpq-Y0wZLqPVpJuUC5UEYXUpoEj3KHntC51SHuRx7oZv4d7DqqA31XjENRyVeQC21ORqwmYDj7b96KE3uPwgFf_A-zYTJafR6ZGghGlpdeOd4YN1hf7niAn8Clz9cTgrEDNC_NwTy8");'
                                                title="Elephant"></div>
                                            <div
                                                class="h-8 w-8 rounded-full ring-2 ring-surface-dark bg-[#2d4034] text-white flex items-center justify-center text-[10px] font-bold">
                                                +5</div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-2">
                                            <span class="relative flex h-2.5 w-2.5">
                                                <span
                                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                                <span
                                                    class="relative inline-flex rounded-full h-2.5 w-2.5 bg-primary"></span>
                                            </span>
                                            <span class="text-white text-xs font-medium">Active</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button
                                                class="h-8 w-8 rounded-lg flex items-center justify-center text-[#9db9a6] hover:text-primary hover:bg-primary/10 transition-colors"
                                                title="Edit Details">
                                                <span class="material-symbols-outlined text-[18px]">edit</span>
                                            </button>
                                            <button
                                                class="h-8 w-8 rounded-lg flex items-center justify-center text-[#9db9a6] hover:text-red-500 hover:bg-red-500/10 transition-colors"
                                                title="Delete Habitat">
                                                <span class="material-symbols-outlined text-[18px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="group hover:bg-white/[0.02] transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-4">
                                            <div class="h-12 w-16 rounded-lg bg-cover bg-center shrink-0 border border-white/10"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBpKMFxyrxGaawgQIKy0d09AWsusaT1tuJt6UGTSxEGbrx6wdj5VxA9PkzGfFWau4dMq3P0oDS5ga3L-OCProEcam58LoR-9UBjzVKxjqaIplYSLNdoi7rM14JXs3kYKbNQaGhpq-Y0wZLqPVpJuUC5UEYXUpoEj3KHntC51SHuRx7oZv4d7DqqA31XjENRyVeQC21ORqwmYDj7b96KE3uPwgFf_A-zYTJafR6ZGghGlpdeOd4YN1hf7niAn8Clz9cTgrEDNC_NwTy8");'>
                                            </div>
                                            <div>
                                                <p
                                                    class="font-bold text-white group-hover:text-primary transition-colors">
                                                    Elephant Valley</p>
                                                <p class="text-[#5a6b60] text-xs mt-0.5">Area: 8km²</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="px-2.5 py-1 rounded-md bg-green-500/10 text-green-500 border border-green-500/20 text-xs font-bold inline-block">Rainforest</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex flex-col gap-1 text-[#9db9a6]">
                                            <span class="flex items-center gap-1.5 text-xs"><span
                                                    class="material-symbols-outlined text-[14px]">thermostat</span>
                                                28°C</span>
                                            <span class="flex items-center gap-1.5 text-xs"><span
                                                    class="material-symbols-outlined text-[14px]">water_drop</span>
                                                75%</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex -space-x-2">
                                            <div class="h-8 w-8 rounded-full ring-2 ring-surface-dark bg-cover bg-center"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBpKMFxyrxGaawgQIKy0d09AWsusaT1tuJt6UGTSxEGbrx6wdj5VxA9PkzGfFWau4dMq3P0oDS5ga3L-OCProEcam58LoR-9UBjzVKxjqaIplYSLNdoi7rM14JXs3kYKbNQaGhpq-Y0wZLqPVpJuUC5UEYXUpoEj3KHntC51SHuRx7oZv4d7DqqA31XjENRyVeQC21ORqwmYDj7b96KE3uPwgFf_A-zYTJafR6ZGghGlpdeOd4YN1hf7niAn8Clz9cTgrEDNC_NwTy8");'>
                                            </div>
                                            <div
                                                class="h-8 w-8 rounded-full ring-2 ring-surface-dark bg-[#2d4034] text-white flex items-center justify-center text-[10px] font-bold">
                                                +12</div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-2">
                                            <span class="h-2.5 w-2.5 rounded-full bg-yellow-500"></span>
                                            <span class="text-white text-xs font-medium">Maintenance</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button
                                                class="h-8 w-8 rounded-lg flex items-center justify-center text-[#9db9a6] hover:text-primary hover:bg-primary/10 transition-colors"
                                                title="Edit Details">
                                                <span class="material-symbols-outlined text-[18px]">edit</span>
                                            </button>
                                            <button
                                                class="h-8 w-8 rounded-lg flex items-center justify-center text-[#9db9a6] hover:text-red-500 hover:bg-red-500/10 transition-colors"
                                                title="Delete Habitat">
                                                <span class="material-symbols-outlined text-[18px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="group hover:bg-white/[0.02] transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-4">
                                            <div class="h-12 w-16 rounded-lg bg-cover bg-center shrink-0 border border-white/10"
                                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBac-1izIUX6E_GnUXLU6jprqzPCUbIk_VTdXm_rUqyaKNFbn_lnWwI-7Y16F0Uge6wdR6Ar5KzSXiAVN_jCqGZHnMzB4ga8TCr7Nslx8-YD5s3CzFJhwdfbU9BQRKV2u2U4oBHgHmFmaNV1xivsM6ppRBrYMIW-p_YgX84VM_pc2XWmJAL2-uQ2-td6_qemR_5kEAjloPJo1l2XNOQP28OGo45Eche5U81pzdNGsPBhTonVFh56fPnjvt0XW8Y9HN_8LfPsKM0WY13");'>
                                            </div>
                                            <div>
                                                <p
                                                    class="font-bold text-white group-hover:text-primary transition-colors">
                                                    Nile Delta</p>
                                                <p class="text-[#5a6b60] text-xs mt-0.5">Area: 4km²</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span
                                            class="px-2.5 py-1 rounded-md bg-blue-500/10 text-blue-500 border border-blue-500/20 text-xs font-bold inline-block">Aquatic</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex flex-col gap-1 text-[#9db9a6]">
                                            <span class="flex items-center gap-1.5 text-xs"><span
                                                    class="material-symbols-outlined text-[14px]">thermostat</span>
                                                25°C</span>
                                            <span class="flex items-center gap-1.5 text-xs"><span
                                                    class="material-symbols-outlined text-[14px]">water_drop</span>
                                                90%</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex -space-x-2">
                                            <div
                                                class="h-8 w-8 rounded-full ring-2 ring-surface-dark bg-[#334652] text-white flex items-center justify-center text-[10px] font-bold">
                                                H</div>
                                            <div
                                                class="h-8 w-8 rounded-full ring-2 ring-surface-dark bg-[#2d4034] text-white flex items-center justify-center text-[10px] font-bold">
                                                +8</div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-2">
                                            <span class="relative flex h-2.5 w-2.5">
                                                <span
                                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                                <span
                                                    class="relative inline-flex rounded-full h-2.5 w-2.5 bg-primary"></span>
                                            </span>
                                            <span class="text-white text-xs font-medium">Active</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button
                                                class="h-8 w-8 rounded-lg flex items-center justify-center text-[#9db9a6] hover:text-primary hover:bg-primary/10 transition-colors"
                                                title="Edit Details">
                                                <span class="material-symbols-outlined text-[18px]">edit</span>
                                            </button>
                                            <button
                                                class="h-8 w-8 rounded-lg flex items-center justify-center text-[#9db9a6] hover:text-red-500 hover:bg-red-500/10 transition-colors"
                                                title="Delete Habitat">
                                                <span class="material-symbols-outlined text-[18px]">delete</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t border-white/5 bg-black/10 flex items-center justify-between">
                        <p class="text-xs text-[#9db9a6]">Showing 1 to 3 of 3 habitats</p>
                        <div class="flex gap-2">
                            <button
                                class="h-8 w-8 rounded-md bg-surface-dark border border-white/5 flex items-center justify-center text-[#9db9a6] cursor-not-allowed opacity-50">
                                <span class="material-symbols-outlined text-[16px]">chevron_left</span>
                            </button>
                            <button
                                class="h-8 w-8 rounded-md bg-surface-dark border border-white/5 flex items-center justify-center text-[#9db9a6] cursor-not-allowed opacity-50">
                                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="w-full md:w-[400px] border-l border-[#28392e] bg-background-dark/50 backdrop-blur-xl overflow-y-auto flex flex-col h-full relative z-20 shadow-2xl">
                <div
                    class="p-6 border-b border-[#28392e] flex justify-between items-center bg-background-dark sticky top-0 z-10">
                    <div>
                        <h3 class="text-white text-lg font-bold">New Habitat</h3>
                        <p class="text-[#9db9a6] text-xs">Create a new environment</p>
                    </div>
                    <button class="text-[#9db9a6] hover:text-white transition-colors">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
                <div class="p-6 flex flex-col gap-6">
                    <div class="space-y-4">
                        <p class="text-xs font-bold text-white uppercase tracking-wider border-b border-white/5 pb-2">
                            General Information</p>
                        <div class="space-y-1.5">
                            <label class="text-sm font-medium text-[#9db9a6]">Habitat Name</label>
                            <input
                                class="w-full bg-surface-dark border-none rounded-lg text-white placeholder-white/20 focus:ring-1 focus:ring-primary text-sm py-2.5"
                                placeholder="e.g., Northern Savannah" type="text" />
                        </div>
                        <div class="space-y-1.5">
                            <label class="text-sm font-medium text-[#9db9a6]">Biome Type</label>
                            <select
                                class="w-full bg-surface-dark border-none rounded-lg text-white focus:ring-1 focus:ring-primary text-sm py-2.5">
                                <option>Select Biome...</option>
                                <option>Savannah Grassland</option>
                                <option>Tropical Rainforest</option>
                                <option>Desert / Arid</option>
                                <option>Wetlands / Aquatic</option>
                            </select>
                        </div>
                        <div class="space-y-1.5">
                            <label class="text-sm font-medium text-[#9db9a6]">Description</label>
                            <textarea
                                class="w-full bg-surface-dark border-none rounded-lg text-white placeholder-white/20 focus:ring-1 focus:ring-primary text-sm py-2.5 resize-none"
                                placeholder="Describe the environment, vegetation, and terrain..." rows="3"></textarea>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <p class="text-xs font-bold text-white uppercase tracking-wider border-b border-white/5 pb-2">
                            Environment Controls</p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="text-sm font-medium text-[#9db9a6] flex items-center gap-1">
                                    <span class="material-symbols-outlined text-xs">thermostat</span> Avg. Temp
                                </label>
                                <div class="relative">
                                    <input
                                        class="w-full bg-surface-dark border-none rounded-lg text-white focus:ring-1 focus:ring-primary text-sm py-2.5 pr-8"
                                        type="number" value="28" />
                                    <span class="absolute right-3 top-2.5 text-[#9db9a6] text-sm">°C</span>
                                </div>
                            </div>
                            <div class="space-y-1.5">
                                <label class="text-sm font-medium text-[#9db9a6] flex items-center gap-1">
                                    <span class="material-symbols-outlined text-xs">water_drop</span> Humidity
                                </label>
                                <div class="relative">
                                    <input
                                        class="w-full bg-surface-dark border-none rounded-lg text-white focus:ring-1 focus:ring-primary text-sm py-2.5 pr-8"
                                        type="number" value="45" />
                                    <span class="absolute right-3 top-2.5 text-[#9db9a6] text-sm">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-1.5">
                            <label class="text-sm font-medium text-[#9db9a6]">Status</label>
                            <div class="flex gap-2">
                                <label class="flex-1 cursor-pointer">
                                    <input checked="" class="peer sr-only" name="status" type="radio" />
                                    <div
                                        class="text-center py-2 rounded-lg bg-surface-dark border border-transparent peer-checked:bg-primary/20 peer-checked:border-primary peer-checked:text-primary text-[#9db9a6] text-sm transition-all">
                                        Active
                                    </div>
                                </label>
                                <label class="flex-1 cursor-pointer">
                                    <input class="peer sr-only" name="status" type="radio" />
                                    <div
                                        class="text-center py-2 rounded-lg bg-surface-dark border border-transparent peer-checked:bg-yellow-500/20 peer-checked:border-yellow-500 peer-checked:text-yellow-500 text-[#9db9a6] text-sm transition-all">
                                        Maintenance
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <p class="text-xs font-bold text-white uppercase tracking-wider border-b border-white/5 pb-2">
                            Associated Animals</p>
                        <div class="bg-surface-dark rounded-lg p-3 space-y-2 border border-white/5">
                            <div class="relative">
                                <span
                                    class="absolute left-2 top-2 text-[#9db9a6] material-symbols-outlined text-[18px]">search</span>
                                <input
                                    class="w-full bg-black/20 border-none rounded-md text-white text-xs py-2 pl-8 focus:ring-0"
                                    placeholder="Search animals to add..." type="text" />
                            </div>
                            <div class="flex flex-wrap gap-2 mt-2">
                                <div
                                    class="flex items-center gap-1 bg-primary/10 border border-primary/20 rounded-full px-2 py-1">
                                    <span class="text-xs text-primary font-medium">Lion (M)</span>
                                    <button class="text-primary/70 hover:text-primary"><span
                                            class="material-symbols-outlined text-[14px]">close</span></button>
                                </div>
                                <div
                                    class="flex items-center gap-1 bg-primary/10 border border-primary/20 rounded-full px-2 py-1">
                                    <span class="text-xs text-primary font-medium">Lion (F)</span>
                                    <button class="text-primary/70 hover:text-primary"><span
                                            class="material-symbols-outlined text-[14px]">close</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 border-t border-[#28392e] bg-background-dark mt-auto sticky bottom-0">
                    <div class="flex gap-3">
                        <button
                            class="flex-1 py-2.5 rounded-lg border border-white/10 text-white hover:bg-white/5 transition-colors text-sm font-medium">Cancel</button>
                        <button
                            class="flex-1 py-2.5 rounded-lg bg-primary text-black hover:bg-white transition-colors text-sm font-bold shadow-lg shadow-primary/20">Create
                            Habitat</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>