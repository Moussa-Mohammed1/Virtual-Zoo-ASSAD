<?php
include "./../../config.php";
session_start();
$loggedguide = $_SESSION['loggeduser'] ?? '';

?>

<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>My Guided Tours - Virtual Zoo CAN 2025</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Icons -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#11d452",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102216",
                        "surface-dark": "#1c2e22",
                        "surface-light": "#ffffff",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-gray-900 dark:text-gray-100 min-h-screen flex flex-col overflow-x-hidden">
    <!-- Top Navbar -->
    <header
        class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-[#28392e] bg-surface-light dark:bg-[#111813]">
        <div class="px-6 lg:px-10 py-3 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div
                    class="bg-center bg-no-repeat bg-cover rounded-full h-10 w-10 shrink-0 shadow-lg shadow-primary/20">
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
                <div class="flex flex-col overflow-hidden">
                    <h1 class="text-white text-base font-bold leading-tight truncate">ASSAD Guide</h1>
                    <p class="text-[#9db9a6] text-xs font-normal truncate">Virtual Zoo Portal</p>
                </div>
            </div>
            <div class="flex items-center gap-4 sm:gap-8">
                <nav class="hidden md:flex items-center gap-6">
                    <a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors"
                        href="/ASSAD/Guide/dashboard.php">Dashboard</a>
                    <a class="text-primary text-sm font-medium" href="/ASSAD/Guide/Tours/tours.php">My Tours</a>
                </nav>
                <a href="/ASSAD/Guide/Tours/create-tour.php"
                    class="hidden sm:inline-flex items-center justify-center rounded-lg h-9 px-4 bg-primary text-[#111813] text-sm font-bold">Create
                    Tour</a>
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-transparent hover:border-primary transition-colors cursor-pointer"
                    data-alt="User profile avatar showing a smiling guide in uniform"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCoCV4spzIBmv7a6A9BMjRgr_a0agYRa3LNyDSYHzzGnguO62dec_My0oka-Oxvi_uaolPsu0PM5LiuCTdcutulEdx2zQ49D4wy4z5h0fQ9mhp3Z8iKFoS0m47NIlOsAnEN2C8cDVCtr7YHZcgQcqlAFbBghwbmb5o6ckkCC8blFRwJKx71mavngHe1PiHJ8S3ZKp_dlOEIGgzYWrcUjAjgo9tk0yo2aBJ9z6x1CtkdEUG-yDr_hnHiDheFPxMH4gXm_yyiO8GCR7ZW");'>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="flex-grow flex justify-center py-6 sm:py-10 px-4 sm:px-6 md:px-10 lg:px-40">
        <div class="flex flex-col w-full max-w-6xl gap-6">
            <div class="flex flex-wrap gap-2 text-sm">
                <a class="text-gray-500 dark:text-[#9db9a6] hover:underline"
                    href="/ASSAD/guide/dashboard.php">dashboard</a>
                <span class="text-gray-400 dark:text-[#5e7164]">/</span>
                <span class="text-gray-900 dark:text-white font-medium">My Guided Tours</span>
            </div>
            <div
                class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-2 border-b border-gray-200 dark:border-[#28392e]">
                <div class="flex flex-col gap-2">
                    <h1 class="text-3xl md:text-4xl font-black tracking-tight text-gray-900 dark:text-white">My Guided
                        Tours</h1>
                    <p class="text-gray-500 dark:text-[#9db9a6] text-base max-w-2xl">
                        Manage your upcoming safari schedules, track bookings, and update tour details for the CAN 2025
                        visitors.
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col gap-4">
                <?php
                if (empty($loggedguide) || empty($loggedguide['id_user'])) {
                    echo '<div class="p-6 bg-yellow-50 dark:bg-[#2f2f2f] rounded">Please <a class="text-primary" href="/ASSAD/auth/login.php">login</a> to view your tours.</div>';
                } else {
                    $guide_id = (int) $loggedguide['id_user'];

                    $stmt = $conn->prepare("SELECT v.id_visite, v.titre, v.dateheure, v.langue, v.capacite_max, v.duree, v.prix, v.status, v.id_user, (SELECT COUNT(*) FROM reservation r WHERE r.id_visite = v.id_visite) AS booked_count FROM visitesguidees v WHERE v.id_user = ? ORDER BY v.dateheure DESC");
                    $stmt->bind_param('i', $guide_id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows === 0) {
                        ?>
                        <div
                            class="p-6 bg-surface-light dark:bg-surface-dark rounded-lg border border-gray-200 dark:border-[#28392e]">
                            <p class="text-gray-700 dark:text-gray-200">You have not created any tours yet.</p>
                            <a href="/ASSAD/Guide/Tours/create-tour.php"
                                class="inline-block mt-3 px-4 py-2 bg-primary text-[#111813] rounded-lg font-semibold">Create
                                your first tour</a>
                        </div>
                        <?php
                    } else {
                        while ($t = $result->fetch_assoc()) {
                            $date = $t['dateheure'] ? date('M d, Y', strtotime($t['dateheure'])) : 'TBD';
                            $time = $t['dateheure'] ? date('H:i', strtotime($t['dateheure'])) : '';
                            $duration = $t['duree'] ? $t['duree'] . 'm' : '';
                            $booked = (int) ($t['booked_count'] ?? 0);
                            $capacity = (int) ($t['capacite_max'] ?? 0);
                            $percent = $capacity > 0 ? intval(($booked / $capacity) * 100) : 0;
                            $status = strtoupper($t['status'] ?? 'DRAFT');
                            $status_badge = 'bg-gray-600 text-white';
                            if ($status === 'UPCOMING' || $status === 'ACTIVE')
                                $status_badge = 'bg-primary text-[#111813]';
                            if ($status === 'DRAFT')
                                $status_badge = 'bg-yellow-500 text-yellow-950';
                            if ($status === 'CANCELLED')
                                $status_badge = 'bg-red-600 text-white';
                            ?>
                            <div
                                class="bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-[#28392e] rounded-xl p-5 shadow-sm hover:border-primary/50 dark:hover:border-primary/50 transition-all group flex flex-col md:flex-row gap-6">
                                <div class="w-full md:w-48 lg:w-60 h-48 md:h-auto shrink-0 relative rounded-lg overflow-hidden">
                                    <div
                                        class="absolute top-3 left-3 <?php echo $status_badge; ?> text-xs font-bold px-2 py-1 rounded shadow-sm z-10">
                                        <?php echo htmlspecialchars($status); ?>
                                    </div>
                                </div>
                                <div class="flex-1 flex flex-col justify-between gap-4">
                                    <div class="flex justify-between items-start gap-4">
                                        <div>
                                            <h3
                                                class="text-xl font-bold text-gray-900 dark:text-white mb-1 group-hover:text-primary transition-colors cursor-pointer">
                                                <?= htmlspecialchars($t['titre']) ?>
                                            </h3>
                                            <div
                                                class="flex flex-wrap gap-x-6 gap-y-2 text-sm text-gray-500 dark:text-[#9db9a6] mt-2">
                                                <div class="flex items-center gap-1.5"><span
                                                        class="material-symbols-outlined text-lg">calendar_today</span><span><?= $date ?></span>
                                                </div>
                                                <div class="flex items-center gap-1.5"><span
                                                        class="material-symbols-outlined text-lg">schedule</span><span><?= $time ?>
                                                        <?= $duration ? '(' . $duration . ')' : '' ?></span></div>
                                                <div class="flex items-center gap-1.5"><span
                                                        class="material-symbols-outlined text-lg">translate</span><span><?= htmlspecialchars($t['langue'] ?? '') ?></span>
                                                </div>
                                                <div class="flex items-center gap-1.5 font-semibold text-gray-900 dark:text-white">
                                                    <span
                                                        class="material-symbols-outlined text-lg">payments</span><span><?= '$' . number_format((float) $t['prix'], 2) ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden md:flex items-center gap-2">
                                            <a href="/ASSAD/Guide/Tours/edit-tour.php?id=<?= $t['id_visite'] ?>"
                                                class="size-9 rounded-lg flex items-center justify-center text-gray-500 dark:text-[#9db9a6] hover:bg-gray-100 dark:hover:bg-[#28392e] hover:text-primary transition-colors"
                                                title="Edit Tour">
                                                <span class="material-symbols-outlined">edit</span>
                                            </a>

                                            <form action="/ASSAD/Guide/Tours/Actions/delete.php" method="POST">
                                                <input type="hidden" name="id_visite" value="<?= $t['id_visite'] ?>">

                                                <button type="submit"
                                                    class="size-9 rounded-lg flex items-center justify-center text-gray-500 dark:text-[#9db9a6] hover:bg-red-500/10 hover:text-red-500 transition-colors"
                                                    title="Delete Tour">
                                                    <span class="material-symbols-outlined">delete</span>
                                                </button>
                                            </form>

                                            <a href="/ASSAD/Guide/steps/steps.php?visite_id=<?= $t['id_visite'] ?>"
                                                class="size-9 rounded-lg flex items-center justify-center text-gray-500 dark:text-[#9db9a6] hover:bg-gray-100 dark:hover:bg-[#28392e] hover:text-primary transition-colors"
                                                title="Manage Steps">
                                                <span class="material-symbols-outlined">list</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div
                                            class="flex justify-between text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-[#9db9a6] mb-2">
                                            <span>Capacity: <?= $booked ?> / <?= $capacity ?> Booked</span>
                                            <span class="text-primary"><?= $percent ?>% Full</span>
                                        </div>
                                        <div class="w-full h-2 bg-gray-200 dark:bg-[#111813] rounded-full overflow-hidden">
                                            <div class="h-full bg-primary rounded-full" style="width: <?= $percent ?>%"></div>
                                        </div>
                                    </div>
                                    <div class="flex md:hidden gap-3 mt-2">
                                        <a href="/ASSAD/Guide/Tours/edit-tour.php?id=<?= $t['id_visite'] ?>"
                                            class="flex-1 h-10 rounded-lg bg-gray-100 dark:bg-[#28392e] text-gray-700 dark:text-white font-medium text-sm hover:bg-gray-200 dark:hover:bg-[#344a3c]">Edit</a>
                                        <a href="/ASSAD/Guide/Tours/Actions/delete.php?id=<?= $t['id_visite'] ?>"
                                            class="flex-1 h-10 rounded-lg bg-red-500/10 text-red-500 font-medium text-sm hover:bg-red-500/20">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    $stmt->close();
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>