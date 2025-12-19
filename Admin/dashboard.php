<?php
    include "./../config.php";
    session_start();
    $logged = $_SESSION['loggeduser'] ?? '';

    if(!$logged || $logged['role'] != 'Admin'){header('Location: ./../auth/login.php');exit();}

    // store habitats
    $habitats = [];
    $stmt_habitat = $conn->prepare("SELECT * FROM habitat");
    $stmt_habitat->execute();
    $results_habitat = $stmt_habitat->get_result();

    if ($results_habitat->num_rows > 0) {
        while ($row = $results_habitat->fetch_assoc()) {
            $habitats[$row['id_habitat']] = $row;
        }
    }

    // store habitats
    $animals = [];
    $stmt_animal = $conn->prepare("SELECT a.*, h.nom FROM animal a LEFT JOIN habitat h ON a.id_habitat = h.id_habitat");
    $stmt_animal->execute();
    $result_animal = $stmt_animal->get_result();

    if ($result_animal->num_rows > 0) {
        while ($row = $result_animal->fetch_assoc()) {
            $animals[] = $row;
        }
    }

    // users statistics
    $statement = $conn->prepare('SELECT * FROM utilisateur');
    $statement->execute();
    $result = $statement->get_result();
    $visitors = [];
    $guides = [];
    $pending = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['role'] == 'visiteur') {
                $visitors[] = $row;
            }
            if ($row['approved'] == '0') {
                $pending[] = $row;
            }
            if ($row['role'] == 'guide') {
                $guides[] = $row;
            }
        }
    }

    // visites statistic

    $active_v = [];
    $stmt_visite = $conn->prepare("SELECT * FROM visitesguidees");
    $stmt_visite->execute();
    $resuts_visite = $stmt_visite->get_result();
    if ($resuts_visite->num_rows > 0) {
        while ($row = $$resuts_visite->fetch_assoc()) {
            if ($row['status'] == 'ACTIVE') {
                $active_v[] = $row;
            }
        }
    }
    
?>

<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>ASSAD Admin - Virtual Zoo Dashboard</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-surface-dark border-l-4 border-primary shadow-sm group"
                href="/ASSAD/Admin/dashboard.php">
                <span
                    class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">dashboard</span>
                <p class="text-white text-sm font-medium leading-normal">Dashboard</p>
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
                    style='background-image: url("https://avatars.githubusercontent.com/u/209652052?v=4");'>
                </div>
                <div class="flex flex-col">
                    <p class="text-white text-xs font-bold"><?=$logged['nom']?></p>
                    <p class="text-[#9db9a6] text-[10px]"><?= $logged['nom']?>@assad.zoo</p>
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
                <h2 class="text-lg font-bold">Dashboard</h2>
            </div>
            <div class="hidden md:flex items-center gap-4 text-white">
                <h2 class="text-xl font-bold tracking-tight">Overview</h2>
            </div>
            <div class="flex flex-1 justify-end gap-4 items-center">
                <div class="hidden sm:flex relative w-full max-w-md">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-[#9db9a6]">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                    <input
                        class="block w-full pl-10 pr-3 py-2 border-none rounded-lg leading-5 bg-surface-dark text-white placeholder-[#9db9a6] focus:outline-none focus:ring-1 focus:ring-primary sm:text-sm transition-all"
                        placeholder="Search animals, users, tours..." type="text" />
                </div>
                
            </div>
        </header>
        <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
            <div class="max-w-7xl mx-auto flex flex-col gap-8">
                <div>
                    <h2 class="text-white text-2xl font-bold">Welcome back, <?= $logged['nom']?> 👋</h2>
                    <p class="text-[#9db9a6] mt-1">Here is what is happening with CAN 2025 Virtual Zoo today.</p>
                </div>
                <script src="/ASSAD/assets/js/preloader.js" defer></script>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div
                        class="flex flex-col p-5 bg-surface-dark rounded-xl border border-white/5 hover:border-primary/30 transition-colors shadow-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-primary/10 rounded-lg text-primary">
                                <span class="material-symbols-outlined">group</span>
                            </div>
                            <span
                                class="text-[#0bda43] text-xs font-bold bg-[#0bda43]/10 px-2 py-1 rounded-full">+12%</span>
                        </div>
                        <p class="text-[#9db9a6] text-sm font-medium">Total Visitors</p>
                        <p class="text-white text-3xl font-bold mt-1"><?=count($visitors)?></p>
                    </div>
                    <div
                        class="flex flex-col p-5 bg-surface-dark rounded-xl border border-white/5 hover:border-primary/30 transition-colors shadow-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-blue-500/10 rounded-lg text-blue-500">
                                <span class="material-symbols-outlined">pets</span>
                            </div>
                            <span
                                class="text-[#0bda43] text-xs font-bold bg-[#0bda43]/10 px-2 py-1 rounded-full">+2%</span>
                        </div>
                        <p class="text-[#9db9a6] text-sm font-medium">Total Animals</p>
                        <p class="text-white text-3xl font-bold mt-1"><?=count($animals)?></p>
                    </div>
                    <div
                        class="flex flex-col p-5 bg-surface-dark rounded-xl border border-white/5 hover:border-primary/30 transition-colors shadow-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-yellow-500/10 rounded-lg text-yellow-500">
                                <span class="material-symbols-outlined">pending_actions</span>
                            </div>
                            <span
                                class="text-yellow-500 text-xs font-bold bg-yellow-500/10 px-2 py-1 rounded-full">Action
                                Req.</span>
                        </div>
                        <p class="text-[#9db9a6] text-sm font-medium">Pending Approvals</p>
                        <p class="text-white text-3xl font-bold mt-1"><?=count($pending)?></p>
                    </div>
                    <div
                        class="flex flex-col p-5 bg-surface-dark rounded-xl border border-white/5 hover:border-primary/30 transition-colors shadow-sm">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-purple-500/10 rounded-lg text-purple-500">
                                <span class="material-symbols-outlined">tour</span>
                            </div>
                            <span
                                class="text-[#9db9a6] text-xs font-bold bg-white/5 px-2 py-1 rounded-full">Stable</span>
                        </div>
                        <p class="text-[#9db9a6] text-sm font-medium">Active Tours</p>
                        <p class="text-white text-3xl font-bold mt-1"><?= count($active_v)?></p>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 bg-surface-dark rounded-xl border border-white/5 p-6 flex flex-col">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-white text-lg font-bold">Global Reach</h3>
                            <button class="text-sm text-primary hover:text-white transition-colors">View Report</button>
                        </div>
                        <div class="flex flex-col md:flex-row gap-6 h-full">
                            <div class="flex-1 rounded-lg overflow-hidden relative group">
                                <div class="w-full h-64 md:h-full bg-cover bg-center opacity-80 group-hover:opacity-100 transition-opacity"
                                    data-alt="World map highlighting African regions with visitor hotspots"
                                    data-location="Africa"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBac-1izIUX6E_GnUXLU6jprqzPCUbIk_VTdXm_rUqyaKNFbn_lnWwI-7Y16F0Uge6wdR6Ar5KzSXiAVN_jCqGZHnMzB4ga8TCr7Nslx8-YD5s3CzFJhwdfbU9BQRKV2u2U4oBHgHmFmaNV1xivsM6ppRBrYMIW-p_YgX84VM_pc2XWmJAL2-uQ2-td6_qemR_5kEAjloPJo1l2XNOQP28OGo45Eche5U81pzdNGsPBhTonVFh56fPnjvt0XW8Y9HN_8LfPsKM0WY13");'>
                                    <div class="absolute inset-0 bg-gradient-to-t from-surface-dark to-transparent">
                                    </div>
                                </div>
                                <div class="absolute bottom-4 left-4">
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary">public</span>
                                        <span class="text-white font-medium text-sm">Real-time Activity</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-64 flex flex-col justify-center gap-4">
                                <div class="space-y-1">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-white">Ivory Coast</span>
                                        <span class="text-primary font-bold">45%</span>
                                    </div>
                                    <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                                        <div class="h-full bg-primary w-[45%] rounded-full"></div>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-white">Cameroon</span>
                                        <span class="text-[#9db9a6]">24%</span>
                                    </div>
                                    <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                                        <div class="h-full bg-[#9db9a6] w-[24%] rounded-full"></div>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-white">Senegal</span>
                                        <span class="text-[#9db9a6]">18%</span>
                                    </div>
                                    <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                                        <div class="h-full bg-[#9db9a6] w-[18%] rounded-full"></div>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-white">France</span>
                                        <span class="text-[#9db9a6]">8%</span>
                                    </div>
                                    <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                                        <div class="h-full bg-[#9db9a6] w-[8%] rounded-full"></div>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-white">Other</span>
                                        <span class="text-[#9db9a6]">5%</span>
                                    </div>
                                    <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                                        <div class="h-full bg-[#9db9a6] w-[5%] rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-surface-dark rounded-xl border border-white/5 p-6 flex flex-col">
                        <h3 class="text-white text-lg font-bold mb-6">Most Viewed Animals</h3>
                        <div class="flex flex-col gap-4 flex-1">
                            <div class="flex items-center gap-4 group cursor-pointer">
                                <div class="h-12 w-12 rounded-lg bg-cover bg-center shrink-0"
                                    data-alt="Close up of a majestic lion"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCBN31E-LnMXibKOxw-5VyATd4Ac25sT9zyd1hccmY6RDxSfeiMrYUDVmgQZEsT6CemdFlOXAsjSRxifHqf_wH-90cIEhpR-n847Fz6JeQ8Za1bVEaCWTPbgZTMW2O7lY-29MBE0w73DMOoggjmS3LU61NenV4On70bkN0f3JYaJpcvnBPUm25l3CrwoZBeUc9ietV-1YNGbuFMXQJSvN-b8T09hw6BWKXY_DzWQAzziEs2sJu_mtTwH_0VgxoEsrjpldMjzkc3nCcl");'>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between mb-1">
                                        <span
                                            class="text-white text-sm font-medium group-hover:text-primary transition-colors">African
                                            Lion</span>
                                        <span class="text-[#9db9a6] text-xs">2.4k views</span>
                                    </div>
                                    <div class="h-1.5 w-full bg-white/5 rounded-full">
                                        <div class="h-full bg-primary w-[85%] rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 group cursor-pointer">
                                <div class="h-12 w-12 rounded-lg bg-cover bg-center shrink-0"
                                    data-alt="Elephant walking in savannah"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBpKMFxyrxGaawgQIKy0d09AWsusaT1tuJt6UGTSxEGbrx6wdj5VxA9PkzGfFWau4dMq3P0oDS5ga3L-OCProEcam58LoR-9UBjzVKxjqaIplYSLNdoi7rM14JXs3kYKbNQaGhpq-Y0wZLqPVpJuUC5UEYXUpoEj3KHntC51SHuRx7oZv4d7DqqA31XjENRyVeQC21ORqwmYDj7b96KE3uPwgFf_A-zYTJafR6ZGghGlpdeOd4YN1hf7niAn8Clz9cTgrEDNC_NwTy8");'>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between mb-1">
                                        <span
                                            class="text-white text-sm font-medium group-hover:text-primary transition-colors">Elephant</span>
                                        <span class="text-[#9db9a6] text-xs">1.8k views</span>
                                    </div>
                                    <div class="h-1.5 w-full bg-white/5 rounded-full">
                                        <div class="h-full bg-[#9db9a6] w-[70%] rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 group cursor-pointer">
                                <div class="h-12 w-12 rounded-lg bg-cover bg-center shrink-0"
                                    data-alt="Giraffe neck and head"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBXYr6bkHu7Nqeo36wN2p1Is7uri7_WfHmgeaU1TDHpIDyBqRafqLqPvCTE75RDKjO7ZZaO3XBrUT9QSAco1sBdjqMeVDrsLAxqlKn9Dc6NmkI4SajI00Lui76emH3L2oyTPW1HEjEGSpzn8BVkX2QdxquIA_Pn6DZdiayVg01rq_3WobpJPGZvHqh0f0m2GJ6HHr4v_l3wIVLMrAvll9O2wOkuxizrrqWzTttQdMemDrNLp4q3TvqE43Xjd2EP0iCDvrZCfhQR7mSV");'>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between mb-1">
                                        <span
                                            class="text-white text-sm font-medium group-hover:text-primary transition-colors">Giraffe</span>
                                        <span class="text-[#9db9a6] text-xs">1.2k views</span>
                                    </div>
                                    <div class="h-1.5 w-full bg-white/5 rounded-full">
                                        <div class="h-full bg-[#9db9a6] w-[50%] rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                            <button
                                class="mt-auto w-full py-2.5 rounded-lg border border-white/10 text-[#9db9a6] text-sm hover:text-white hover;border-white/30 hover:bg-white/5 transition-all">
                                Manage Animals
                            </button>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 pb-6">
                    <div
                        class="lg:col-span-2 bg-surface-dark rounded-xl border border-white/5 overflow-hidden flex flex-col">
                        <div class="p-6 border-b border-white/5 flex justify-between items-center">
                            <div>
                                <h3 class="text-white text-lg font-bold">New Registrations</h3>
                                <p class="text-[#9db9a6] text-sm">Users waiting for account approval</p>
                            </div>
                            <button
                                class="bg-primary/10 text-primary text-sm font-bold px-4 py-2 rounded-lg hover:bg-primary hover:text-black transition-colors">
                                View All
                            </button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead class="bg-black/20 text-[#9db9a6] text-xs uppercase font-medium">
                                    <tr>
                                        <th class="px-6 py-4">User</th>
                                        <th class="px-6 py-4">Country</th>
                                        <th class="px-6 py-4">Date</th>
                                        <th class="px-6 py-4 text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-white/5">
                                    <tr class="group hover:bg-white/5 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="h-8 w-8 rounded-full bg-gradient-to-tr from-blue-500 to-purple-500 flex items-center justify-center text-white font-bold text-xs">
                                                    JD</div>
                                                <div>
                                                    <p class="text-white text-sm font-medium">Jean Dubois</p>
                                                    <p class="text-[#9db9a6] text-xs">jean.d@example.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-[#9db9a6] text-sm">Ivory Coast</td>
                                        <td class="px-6 py-4 text-[#9db9a6] text-sm">Oct 24, 2024</td>
                                        <td class="px-6 py-4 text-right">
                                            <div
                                                class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button
                                                    class="p-1.5 rounded bg-red-500/10 text-red-500 hover:bg-red-500 hover:text-white transition-colors"
                                                    title="Deny">
                                                    <span class="material-symbols-outlined text-[18px]">close</span>
                                                </button>
                                                <button
                                                    class="p-1.5 rounded bg-primary text-black hover:bg-white transition-colors shadow-lg shadow-primary/20"
                                                    title="Approve">
                                                    <span class="material-symbols-outlined text-[18px]">check</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="group hover:bg-white/5 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="h-8 w-8 rounded-full bg-gradient-to-tr from-orange-500 to-red-500 flex items-center justify-center text-white font-bold text-xs">
                                                    AM</div>
                                                <div>
                                                    <p class="text-white text-sm font-medium">Aminata Mbaye</p>
                                                    <p class="text-[#9db9a6] text-xs">aminata.m@example.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-[#9db9a6] text-sm">Senegal</td>
                                        <td class="px-6 py-4 text-[#9db9a6] text-sm">Oct 23, 2024</td>
                                        <td class="px-6 py-4 text-right">
                                            <div
                                                class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button
                                                    class="p-1.5 rounded bg-red-500/10 text-red-500 hover:bg-red-500 hover:text-white transition-colors">
                                                    <span class="material-symbols-outlined text-[18px]">close</span>
                                                </button>
                                                <button
                                                    class="p-1.5 rounded bg-primary text-black hover:bg-white transition-colors shadow-lg shadow-primary/20">
                                                    <span class="material-symbols-outlined text-[18px]">check</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="group hover:bg-white/5 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="h-8 w-8 rounded-full bg-gradient-to-tr from-green-500 to-teal-500 flex items-center justify-center text-white font-bold text-xs">
                                                    KO</div>
                                                <div>
                                                    <p class="text-white text-sm font-medium">Kofi Osei</p>
                                                    <p class="text-[#9db9a6] text-xs">k.osei@example.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-[#9db9a6] text-sm">Ghana</td>
                                        <td class="px-6 py-4 text-[#9db9a6] text-sm">Oct 23, 2024</td>
                                        <td class="px-6 py-4 text-right">
                                            <div
                                                class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button
                                                    class="p-1.5 rounded bg-red-500/10 text-red-500 hover:bg-red-500 hover:text-white transition-colors">
                                                    <span class="material-symbols-outlined text-[18px]">close</span>
                                                </button>
                                                <button
                                                    class="p-1.5 rounded bg-primary text-black hover:bg-white transition-colors shadow-lg shadow-primary/20">
                                                    <span class="material-symbols-outlined text-[18px]">check</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="bg-surface-dark rounded-xl border border-white/5 p-6 flex flex-col">
                        <h3 class="text-white text-lg font-bold mb-6">Popular Tours</h3>
                        <div class="flex-1 flex flex-col justify-center items-center relative min-h-[200px]">
                            <div
                                class="relative w-48 h-48 rounded-full border-[16px] border-[#9db9a6]/20 flex items-center justify-center">
                                <svg class="w-full h-full -rotate-90" viewbox="0 0 36 36">
                                    <path class="text-primary"
                                        d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                        fill="none" stroke="currentColor" stroke-dasharray="60, 100" stroke-width="3">
                                    </path>
                                    <path class="text-blue-500"
                                        d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                                        fill="none" stroke="currentColor" stroke-dasharray="25, 100"
                                        stroke-dashoffset="-60" stroke-width="3"></path>
                                </svg>
                                <div class="absolute inset-0 flex flex-col items-center justify-center">
                                    <span class="text-3xl font-bold text-white">1,240</span>
                                    <span class="text-xs text-[#9db9a6]">Bookings</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex flex-col gap-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span class="h-3 w-3 rounded-full bg-primary"></span>
                                    <span class="text-sm text-[#9db9a6]">Savannah Safari</span>
                                </div>
                                <span class="text-white font-bold text-sm">60%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span class="h-3 w-3 rounded-full bg-blue-500"></span>
                                    <span class="text-sm text-[#9db9a6]">Rainforest Trek</span>
                                </div>
                                <span class="text-white font-bold text-sm">25%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span class="h-3 w-3 rounded-full bg-[#9db9a6]/20"></span>
                                    <span class="text-sm text-[#9db9a6]">Others</span>
                                </div>
                                <span class="text-white font-bold text-sm">15%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>