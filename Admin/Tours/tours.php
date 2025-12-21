<?php
include './../../config.php';
session_start();
$logged = $_SESSION['loggeduser'] ?? ['nom' => 'Admin User', 'email' => 'admin@assad.zoo'];
?>
<?php
// Stats queries
$stmt_active = $conn->prepare("SELECT COUNT(*) AS c FROM visitesguidees WHERE status = 'ACTIVE'");
$stmt_active->execute();
$active_res = $stmt_active->get_result()->fetch_assoc();
$active_count = $active_res['c'] ?? 0;

$stmt_bookings_today = $conn->prepare("SELECT COUNT(*) AS c FROM reservation WHERE DATE(datereservations) = CURRENT_DATE()");
$stmt_bookings_today->execute();
$bookings_res = $stmt_bookings_today->get_result()->fetch_assoc();
$bookings_today = $bookings_res['c'] ?? 0;

$stmt_guides = $conn->prepare("SELECT COUNT(*) AS c FROM utilisateur WHERE role = 'guide' AND isactive = 1");
$stmt_guides->execute();
$guides_res = $stmt_guides->get_result()->fetch_assoc();
$guides_online = $guides_res['c'] ?? 0;

$stmt_rating = $conn->prepare("SELECT AVG(note) AS avg_note FROM commentaire");
$stmt_rating->execute();
$rating_res = $stmt_rating->get_result()->fetch_assoc();
$avg_rating = $rating_res['avg_note'] ? round($rating_res['avg_note'], 1) : 'N/A';

$tours_stmt = $conn->prepare("SELECT v.*, u.nom AS guide_nom, (SELECT COUNT(*) FROM reservation r WHERE r.id_visite = v.id_visite) AS reserved_count FROM visitesguidees v LEFT JOIN utilisateur u ON v.id_user = u.id_user ORDER BY v.dateheure DESC");
$tours_stmt->execute();
$tours_result = $tours_stmt->get_result();
?>
<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>ASSAD Admin - Guided Tours</title>
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
    <!-- <div id="loader">
        <div class="spinner" aria-hidden="true"></div>
        <div class="text-sm text-white mt-2">Loading...</div>
    </div> -->
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
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-dark/50 transition-colors group text-[#9db9a6] hover:text-white"
                href="/ASSAD/Admin/habitats/habitats.php">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">landscape</span>
                <p class="text-sm font-medium leading-normal">Habitats</p>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-surface-dark border-l-4 border-primary shadow-sm group"
                href="/ASSAD/Admin/Tours/tours.php">
                <span
                    class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">map</span>
                <p class="text-white text-sm font-medium leading-normal">Guided Tours</p>
            </a>
        </nav>
        <div class="p-4 border-t border-[#28392e] profile-admin">
            <div
                class="flex items-center gap-3 p-2 rounded-lg bg-surface-dark/50 hover:bg-surface-dark transition-colors group">
                <div class="bg-center bg-no-repeat bg-cover rounded-full h-8 w-8 shrink-0"
                    data-alt="Profile picture of the admin user"
                    style='background-image: url("https://avatars.githubusercontent.com/u/209652052?v=4");'>
                </div>

                <div class="flex flex-col flex-1 min-w-0">
                    <p class="text-white text-xs font-bold truncate"><?= $logged['nom'] ?></p>
                    <p class="text-[#9db9a6] text-[10px] truncate"><?= $logged['email'] ?></p>
                </div>
                <a href="/ASSAD/logout.php">
                    <button
                        class="p-1.5 rounded-md text-[#9db9a6] hover:text-red-400 hover:bg-red-400/10 transition-all"
                        title="Logout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                    </button>
                </a>
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
                <h2 class="text-lg font-bold">Guided Tours</h2>
            </div>
            <div class="hidden md:flex items-center gap-4 text-white">
                <h2 class="text-xl font-bold tracking-tight">Guided Tours Management</h2>
            </div>
            <div class="flex flex-1 justify-end gap-4 items-center">
                <div class="hidden sm:flex relative w-full max-w-md">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-[#9db9a6]">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                    <input
                        class="block w-full pl-10 pr-3 py-2 border-none rounded-lg leading-5 bg-surface-dark text-white placeholder-[#9db9a6] focus:outline-none focus:ring-1 focus:ring-primary sm:text-sm transition-all"
                        placeholder="Search tours, guides, animals..." type="text" />
                </div>
                <div class="flex gap-2">
                    <button
                        class="flex items-center justify-center h-10 w-10 rounded-lg bg-surface-dark text-white hover:bg-primary hover:text-black transition-colors relative">
                        <span class="material-symbols-outlined text-[20px]">notifications</span>
                        <span
                            class="absolute top-2 right-2 h-2 w-2 rounded-full bg-red-500 border border-surface-dark"></span>
                    </button>
                </div>
            </div>
        </header>
        <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
            <div class="max-w-7xl mx-auto flex flex-col gap-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div
                        class="flex flex-col p-5 bg-surface-dark rounded-xl border border-white/5 hover:border-primary/30 transition-colors shadow-sm group">
                        <div class="flex justify-between items-start mb-4">
                            <div
                                class="p-2 bg-primary/10 rounded-lg text-primary group-hover:bg-primary group-hover:text-black transition-colors">
                                <span class="material-symbols-outlined">tour</span>
                            </div>
                            <span
                                class="text-[#0bda43] text-xs font-bold bg-[#0bda43]/10 px-2 py-1 rounded-full">+3</span>
                        </div>
                        <p class="text-[#9db9a6] text-sm font-medium">Active Tours</p>
                        <p class="text-white text-3xl font-bold mt-1"><?= (int) $active_count ?></p>
                    </div>
                    <div
                        class="flex flex-col p-5 bg-surface-dark rounded-xl border border-white/5 hover:border-primary/30 transition-colors shadow-sm group">
                        <div class="flex justify-between items-start mb-4">
                            <div
                                class="p-2 bg-blue-500/10 rounded-lg text-blue-500 group-hover:bg-blue-500 group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined">confirmation_number</span>
                            </div>
                            <span
                                class="text-[#0bda43] text-xs font-bold bg-[#0bda43]/10 px-2 py-1 rounded-full">+24%</span>
                        </div>
                        <p class="text-[#9db9a6] text-sm font-medium">Bookings Today</p>
                        <p class="text-white text-3xl font-bold mt-1"><?= (int) $bookings_today ?></p>
                    </div>
                    <div
                        class="flex flex-col p-5 bg-surface-dark rounded-xl border border-white/5 hover:border-primary/30 transition-colors shadow-sm group">
                        <div class="flex justify-between items-start mb-4">
                            <div
                                class="p-2 bg-purple-500/10 rounded-lg text-purple-500 group-hover:bg-purple-500 group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined">person_apron</span>
                            </div>
                            <span
                                class="text-[#9db9a6] text-xs font-bold bg-white/5 px-2 py-1 rounded-full">Available</span>
                        </div>
                        <p class="text-[#9db9a6] text-sm font-medium">Guides Online</p>
                        <p class="text-white text-3xl font-bold mt-1"><?= (int) $guides_online ?></p>
                    </div>
                    <div
                        class="flex flex-col p-5 bg-surface-dark rounded-xl border border-white/5 hover:border-primary/30 transition-colors shadow-sm group">
                        <div class="flex justify-between items-start mb-4">
                            <div
                                class="p-2 bg-orange-500/10 rounded-lg text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined">star</span>
                            </div>
                            <span class="text-[#9db9a6] text-xs font-bold bg-white/5 px-2 py-1 rounded-full">Avg</span>
                        </div>
                        <p class="text-[#9db9a6] text-sm font-medium">Tour Rating</p>
                        <p class="text-white text-3xl font-bold mt-1"><?= htmlspecialchars($avg_rating) ?></p>
                    </div>
                </div>
                <div class="grid grid-cols-1  gap-6">
                    <div class="w-full flex flex-col gap-6">
                        <div
                            class="bg-surface-dark rounded-xl border border-white/5 overflow-hidden flex flex-col h-full">
                            <div
                                class="p-6 border-b border-white/5 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                                <div>
                                    <h3 class="text-white text-lg font-bold">Upcoming &amp; Active Tours</h3>
                                    <p class="text-[#9db9a6] text-sm">Manage schedules, guides, and capacity.</p>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="px-3 py-1.5 rounded-lg bg-primary text-black text-sm font-medium hover:bg-white transition-colors shadow-lg shadow-primary/20">All
                                        Tours</button>
                                    <button
                                        class="px-3 py-1.5 rounded-lg bg-white/5 text-[#9db9a6] text-sm font-medium hover:text-white hover:bg-white/10 transition-colors">Today</button>
                                    <button
                                        class="px-3 py-1.5 rounded-lg bg-white/5 text-[#9db9a6] text-sm font-medium hover:text-white hover:bg-white/10 transition-colors">Pending</button>
                                </div>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead class="bg-black/20 text-[#9db9a6] text-xs uppercase font-medium">
                                        <tr>
                                            <th class="px-6 py-4">Tour Name</th>
                                            <th class="px-6 py-4">Guide</th>
                                            <th class="px-6 py-4">Schedule</th>
                                            <th class="px-6 py-4">Capacity</th>
                                            <th class="px-6 py-4">Status</th>
                                            <th class="px-6 py-4 text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-white/5">
                                        <?php while ($tour = $tours_result->fetch_assoc()):
                                            $start = new DateTime($tour['dateheure']);
                                            $end = clone $start;
                                            $duree = (int) $tour['duree'];
                                            if ($duree > 0) {
                                                $end->modify("+{$duree} minutes");
                                            }
                                            $today = new DateTime();
                                            $tomorrow = (new DateTime())->modify('+1 day');
                                            $whenLabel = $start->format('M j, Y');
                                            if ($start->format('Y-m-d') === $today->format('Y-m-d')) {
                                                $whenLabel = 'Today';
                                            } elseif ($start->format('Y-m-d') === $tomorrow->format('Y-m-d')) {
                                                $whenLabel = 'Tomorrow';
                                            }
                                            $capacity = (int) $tour['capacite_max'];
                                            $reserved = (int) $tour['reserved_count'];
                                            $percent = $capacity > 0 ? round(($reserved / $capacity) * 100) : 0;
                                            $status = strtoupper($tour['status'] ?? 'OFFLINE');
                                            if ($status === 'ACTIVE') {
                                                $badgeClass = 'bg-[#0bda43]/10 text-[#0bda43] border-[#0bda43]/20';
                                            } elseif ($status === 'SCHEDULED' || $status === 'SCHEDULE') {
                                                $badgeClass = 'bg-blue-500/10 text-blue-400 border-blue-500/20';
                                            } else {
                                                $badgeClass = 'bg-white/5 text-[#9db9a6] border-white/10';
                                            }
                                            ?>
                                            <tr class="group hover:bg-white/5 transition-colors">
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center gap-3">
                                                        <div class="h-10 w-10 rounded-lg bg-cover bg-center shrink-0 shadow-sm"
                                                            style='background-image: url("<?= htmlspecialchars($tour['image'] ?? '/ASSAD/assets/img/default-tour.jpg') ?>");'>
                                                        </div>
                                                        <div>
                                                            <p class="text-white text-sm font-bold">
                                                                <?= htmlspecialchars($tour['titre']) ?></p>
                                                            <p class="text-[#9db9a6] text-xs">Duration: <?= $duree ?> min
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center gap-2">
                                                        <div
                                                            class="h-6 w-6 rounded-full bg-primary flex items-center justify-center text-[10px] text-black font-bold">
                                                            <?= strtoupper(substr($tour['guide_nom'] ?? 'GA', 0, 2)) ?>
                                                        </div>
                                                        <span
                                                            class="text-white text-sm"><?= htmlspecialchars($tour['guide_nom'] ?? 'Guide') ?></span>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <p class="text-white text-sm"><?= $whenLabel ?></p>
                                                    <p class="text-[#9db9a6] text-xs"><?= $start->format('h:i A') ?> -
                                                        <?= $end->format('h:i A') ?></p>
                                                </td>
                                                <td class="px-6 py-4 min-w-[140px]">
                                                    <div class="flex justify-between mb-1">
                                                        <span
                                                            class="text-xs text-white"><?= $reserved ?>/<?= $capacity ?: '—' ?></span>
                                                        <span
                                                            class="text-xs text-<?= $percent >= 90 ? 'red-400' : ($percent >= 50 ? '9db9a6' : '0bda43') ?>"><?= $capacity ? $percent . '%' : '—' ?></span>
                                                    </div>
                                                    <div class="h-1.5 w-full bg-white/5 rounded-full overflow-hidden">
                                                        <div class="h-full <?= $percent >= 90 ? 'bg-red-500' : ($percent >= 50 ? 'bg-primary' : 'bg-[#0bda43]') ?>"
                                                            style="width:<?= max(0, min(100, $percent)) ?>%;"></div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium <?= $badgeClass ?> border">
                                                        <?php if ($status === 'ACTIVE'): ?>
                                                            <span
                                                                class="w-1.5 h-1.5 rounded-full bg-[#0bda43] animate-pulse mr-2"></span>
                                                        <?php endif; ?>
                                                        <?= htmlspecialchars(ucfirst(strtolower($status))) ?>
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <a href="./edit.php?id=<?= (int) $tour['id_visite'] ?>"
                                                        class="text-[#9db9a6] hover:text-white transition-colors p-1">
                                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                                    </a>
                                                    <a href="./delete.php?id=<?= (int) $tour['id_visite'] ?>"
                                                        class="text-red-400 hover:text-red-300 transition-colors p-1 ml-1"
                                                        onclick="return confirm('Delete this tour?');">
                                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="p-4 border-t border-white/5 flex justify-center">
                                <button
                                    class="text-primary text-sm font-medium hover:text-white transition-colors flex items-center gap-2">
                                    View Full Schedule <span
                                        class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>