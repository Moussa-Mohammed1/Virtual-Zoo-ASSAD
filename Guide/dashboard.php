<?php
include './../config.php';
session_start();
$logged = $_SESSION['loggeduser'] ?? null;
if (!$logged) {
    header('Location: /ASSAD/auth/login.php');
    exit();
}
$guideId = intval($logged['id_user'] ?? 0);

$total_tours = 0;
$stmt = $conn->prepare("SELECT COUNT(*) AS total_tours FROM visitesguidees WHERE id_user = ?");
if ($stmt) {
    $stmt->bind_param("i", $guideId);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();
    $total_tours = intval($row['total_tours'] ?? 0);
}


$upcoming = 0;
$stmt = $conn->prepare("SELECT COUNT(*) AS upcoming FROM visitesguidees WHERE id_user = ? AND status = 'ACTIVE' AND dateheure >= NOW()");
if ($stmt) {
    $stmt->bind_param("i", $guideId);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();
    $upcoming = intval($row['upcoming'] ?? 0);
}

$next_label = 'No upcoming';
$stmt = $conn->prepare("SELECT dateheure FROM visitesguidees WHERE id_user = ? AND dateheure >= NOW() ORDER BY dateheure ASC LIMIT 1");
if ($stmt) {
    $stmt->bind_param("i", $guideId);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();
    $next = $row['dateheure'] ?? null;
    if ($next)
        $next_label = date('M j, Y H:i', strtotime($next));
}

$recent_count = 0;
$stmt = $conn->prepare("SELECT COUNT(r.id_reservation) AS recent_count FROM reservation r JOIN visitesguidees v ON r.id_visite = v.id_visite WHERE v.id_user = ? AND r.datereservations >= DATE_SUB(CURRENT_DATE(), INTERVAL 30 DAY)");
if ($stmt) {
    $stmt->bind_param("i", $guideId);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();
    $recent_count = intval($row['recent_count'] ?? 0);
}

$avg_rating = '—';
$stmt = $conn->prepare("SELECT AVG(c.note) AS avg_rating FROM commentaire c JOIN visitesguidees v ON c.id_visite = v.id_visite WHERE v.id_user = ?");
if ($stmt) {
    $stmt->bind_param("i", $guideId);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();
    if (!is_null($row['avg_rating']))
        $avg_rating = round(floatval($row['avg_rating']), 1);
}

$reservations = [];
$stmt = $conn->prepare("SELECT r.id_reservation, r.nbpersonnes, r.datereservations, v.titre, u.nom AS visitor_nom, u.email AS visitor_email FROM reservation r JOIN visitesguidees v ON r.id_visite = v.id_visite LEFT JOIN utilisateur u ON r.id_user = u.id_user WHERE v.id_user = ? ORDER BY r.datereservations DESC LIMIT 8");
if ($stmt) {
    $stmt->bind_param("i", $guideId);
    $stmt->execute();
    $rs = $stmt->get_result();
    while ($row = $rs->fetch_assoc()) {
        $reservations[] = $row;
    }
}

$reviews = [];
$stmt = $conn->prepare("SELECT c.id_comment, c.note, c.texte, c.date_commentaire, v.titre, u.nom AS reviewer_nom FROM commentaire c JOIN visitesguidees v ON c.id_visite = v.id_visite LEFT JOIN utilisateur u ON c.id_user = u.id_user WHERE v.id_user = ? ORDER BY c.date_commentaire DESC LIMIT 5");
if ($stmt) {
    $stmt->bind_param("i", $guideId);
    $stmt->execute();
    $rs = $stmt->get_result();
    while ($row = $rs->fetch_assoc()) {
        $reviews[] = $row;
    }
}

?>
<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Guide Dashboard - Virtual Zoo CAN 2025</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
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
                    <a class="text-primary text-sm font-medium" href="/ASSAD/Guide/dashboard.php">Dashboard</a>
                    <a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors"
                        href="/ASSAD/Guide/Tours/tours.php">My Tours</a>
                </nav>
                <button
                    class="hidden sm:flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-9 px-4 bg-primary text-[#111813] text-sm font-bold shadow-lg hover:bg-opacity-90 transition-all">
                    <span>Create Tour</span>
                </button>
                <div class="flex items-center gap-2">
                    <a href="/ASSAD/logout.php" title="Logout"
                        class="text-gray-600 dark:text-gray-300 hover:text-red-400 transition-colors">
                        <span class="material-symbols-outlined">logout</span>
                    </a>
                    <a href="/ASSAD/Guide/profile.php"
                        class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-transparent hover:border-primary transition-colors cursor-pointer"
                        data-alt="User profile avatar"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCoCV4spzIBmv7a6A9BMjRgr_a0agYRa3LNyDSYHzzGnguO62dec_My0oka-Oxvi_uaolPsu0PM5LiuCTdcutulEdx2zQ49D4wy4z5h0fQ9mhp3Z8iKFoS0m47NIlOsAnEN2C8cDVCtr7YHZcgQcqlAFbBghwbmb5o6ckkCC8blFRwJKx71mavngHe1PiHJ8S3ZKp_dlOEIGgzYWrcUjAjgo9tk0yo2aBJ9z6x1CtkdEUG-yDr_hnHiDheFPxMH4gXm_yyiO8GCR7ZW");'>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="flex-grow flex justify-center py-6 sm:py-10 px-4 sm:px-6 md:px-10 lg:px-40">
        <div class="flex flex-col w-full max-w-7xl gap-8">
            <div class="flex flex-wrap gap-2 text-sm">
                <a class="text-gray-500 dark:text-[#9db9a6] hover:underline" href="#">Home</a>
                <span class="text-gray-400 dark:text-[#5e7164]">/</span>
                <span class="text-gray-900 dark:text-white font-medium">Dashboard</span>
            </div>
            <div
                class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-2 border-b border-gray-200 dark:border-[#28392e]">
                <div class="flex flex-col gap-2">
                    <h1 class="text-3xl md:text-4xl font-black tracking-tight text-gray-900 dark:text-white">Guide
                        Overview</h1>
                    <p class="text-gray-500 dark:text-[#9db9a6] text-base max-w-2xl">
                        Welcome back! Here's a summary of your tours, upcoming reservations, and recent visitor
                        feedback.
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 stats">
                <div
                    class="bg-surface-light dark:bg-surface-dark p-5 rounded-xl border border-gray-200 dark:border-[#28392e] shadow-sm flex items-start justify-between hover:border-primary/40 transition-colors">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-[#9db9a6]">Total Tours</p>
                        <h3 class="text-3xl font-black text-gray-900 dark:text-white mt-2">
                            <?php echo htmlspecialchars($total_tours); ?>
                        </h3>
                    </div>
                    <div
                        class="size-10 rounded-lg bg-green-100 dark:bg-green-900/20 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">tour</span>
                    </div>
                </div>
                <div
                    class="bg-surface-light dark:bg-surface-dark p-5 rounded-xl border border-gray-200 dark:border-[#28392e] shadow-sm flex items-start justify-between hover:border-primary/40 transition-colors">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-[#9db9a6]">Upcoming</p>
                        <h3 class="text-3xl font-black text-gray-900 dark:text-white mt-2">
                            <?php echo htmlspecialchars($upcoming); ?>
                        </h3>
                    </div>
                    <div
                        class="size-10 rounded-lg bg-blue-100 dark:bg-blue-900/20 flex items-center justify-center text-blue-500">
                        <span class="material-symbols-outlined">calendar_clock</span>
                    </div>
                </div>
                <div
                    class="bg-surface-light dark:bg-surface-dark p-5 rounded-xl border border-gray-200 dark:border-[#28392e] shadow-sm flex items-start justify-between hover:border-primary/40 transition-colors">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-[#9db9a6]">Recent Bookings</p>
                        <h3 class="text-3xl font-black text-gray-900 dark:text-white mt-2">
                            <?php echo htmlspecialchars($recent_count); ?>
                        </h3>
                        <p class="text-xs text-green-500 font-semibold mt-1 flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">arrow_upward</span>
                            <?php echo ($recent_count > 0) ? 'Up' : '—'; ?>
                        </p>
                    </div>
                    <div
                        class="size-10 rounded-lg bg-orange-100 dark:bg-orange-900/20 flex items-center justify-center text-orange-500">
                        <span class="material-symbols-outlined">confirmation_number</span>
                    </div>
                </div>
                <div
                    class="bg-surface-light dark:bg-surface-dark p-5 rounded-xl border border-gray-200 dark:border-[#28392e] shadow-sm flex items-start justify-between hover:border-primary/40 transition-colors">
                    <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-[#9db9a6]">Avg Rating</p>
                        <h3 class="text-3xl font-black text-gray-900 dark:text-white mt-2">
                            <?php echo htmlspecialchars($avg_rating); ?>
                        </h3>
                        <div class="flex text-yellow-500 text-xs mt-1">
                            <span class="material-symbols-outlined text-sm fill-current">star</span>
                            <span class="material-symbols-outlined text-sm fill-current">star</span>
                            <span class="material-symbols-outlined text-sm fill-current">star</span>
                            <span class="material-symbols-outlined text-sm fill-current">star</span>
                            <span class="material-symbols-outlined text-sm fill-current">star_half</span>
                        </div>
                    </div>
                    <div
                        class="size-10 rounded-lg bg-yellow-100 dark:bg-yellow-900/20 flex items-center justify-center text-yellow-500">
                        <span class="material-symbols-outlined">reviews</span>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-2 flex flex-col gap-5">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">book_online</span>
                            Recent Reservations
                        </h2>
                        <a class="text-sm font-semibold text-primary hover:underline flex items-center gap-1" href="#">
                            View All <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                    <div
                        class="bg-surface-light dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-[#28392e] shadow-sm overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr
                                        class="border-b border-gray-200 dark:border-[#28392e] bg-gray-50 dark:bg-[#15231b]">
                                        <th
                                            class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-[#9db9a6]">
                                            Visitor</th>
                                        <th
                                            class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-[#9db9a6]">
                                            Tour</th>
                                        <th
                                            class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-[#9db9a6]">
                                            Date/Time</th>
                                        <th
                                            class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-[#9db9a6] text-right">
                                            Seats</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-[#28392e]">
                                    <?php if (count($reservations) === 0): ?>
                                        <tr>
                                            <td colspan="4" class="py-6 px-6 text-center text-sm text-gray-500">No recent
                                                reservations</td>
                                        </tr>
                                    <?php else: ?>
                                        <?php foreach ($reservations as $r):
                                            $visitor = trim($r['visitor_nom'] ?? $r['visitor_email'] ?? 'Guest');
                                            $dt = $r['datereservations'] ?? null;
                                            $date = $time = '';
                                            if ($dt) {
                                                $d = new DateTime($dt);
                                                $date = $d->format('M d');
                                                $time = $d->format('H:i');
                                            }
                                            $countLabel = $r['nbpersonnes'] ?? 1;
                                            ?>
                                            <tr class="hover:bg-gray-50 dark:hover:bg-[#28392e] transition-colors">
                                                <td class="py-4 px-6">
                                                    <div class="flex items-center gap-3">
                                                        <div
                                                            class="size-8 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center font-bold text-xs"><?php
                                                            $nameSource = $r['visitor_nom'] ?? $r['visitor_email'] ?? '';
                                                            $initials = strtoupper(substr($nameSource, 0, 2));
                                                            echo $initials ?: 'G';
                                                            ?></div>
                                                        <span
                                                            class="text-sm font-medium text-gray-900 dark:text-white"><?php echo htmlspecialchars($visitor); ?></span>
                                                    </div>
                                                </td>
                                                <td class="py-4 px-6">
                                                    <span
                                                        class="text-sm text-gray-600 dark:text-gray-300 block truncate max-w-[150px]"><?php echo htmlspecialchars($r['titre'] ?? ''); ?></span>
                                                </td>
                                                <td class="py-4 px-6">
                                                    <div class="flex flex-col">
                                                        <span
                                                            class="text-sm text-gray-900 dark:text-white"><?php echo $date; ?></span>
                                                        <span
                                                            class="text-xs text-gray-500 dark:text-gray-400"><?php echo $time; ?></span>
                                                    </div>
                                                </td>
                                                <td class="py-4 px-6 text-right">
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400"><?php echo htmlspecialchars($countLabel); ?>
                                                        person<?php echo ($countLabel > 1) ? 's' : ''; ?></span>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-6">

                    <div class="flex flex-col gap-4">
                        <div class="flex items-center justify-between">
                            <h2 class="text-xl font-bold text-gray-900 dark:text-white flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">comment</span>
                                Latest Reviews
                            </h2>
                        </div>
                        <div class="flex flex-col gap-3">
                            <?php if (count($reviews) === 0): ?>
                                <div
                                    class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl border border-gray-200 dark:border-[#28392e] shadow-sm">
                                    <p class="text-sm text-gray-500 dark:text-[#9db9a6]">No recent reviews.</p>
                                </div>
                            <?php else: ?>
                                <?php foreach ($reviews as $rv):
                                    $reviewer = trim($rv['reviewer_nom'] ?? 'Visitor');
                                    $text = $rv['texte'] ?? '';
                                    $when = $rv['date_commentaire'] ?? null;
                                    $ago = '';
                                    if ($when) {
                                        $diff = (new DateTime())->diff(new DateTime($when));
                                        if ($diff->d > 0)
                                            $ago = $diff->d . 'd ago';
                                        elseif ($diff->h > 0)
                                            $ago = $diff->h . 'h ago';
                                        else
                                            $ago = $diff->i . 'm ago';
                                    }
                                    ?>
                                    <div
                                        class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl border border-gray-200 dark:border-[#28392e] shadow-sm">
                                        <div class="flex items-center justify-between mb-2">
                                            <div class="flex items-center gap-2">
                                                <div
                                                    class="size-6 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-[10px] font-bold"><?php
                                                    $nameSource = $rv['reviewer_nom'] ?? '';
                                                    $initials = strtoupper(substr($nameSource, 0, 2));
                                                    echo $initials ?: 'V';
                                                    ?></div>
                                                <span
                                                    class="text-xs font-bold text-gray-900 dark:text-white"><?php echo htmlspecialchars($reviewer); ?></span>
                                            </div>
                                            <span class="text-[10px] text-gray-400"><?php echo $ago; ?></span>
                                        </div>
                                        <div class="flex text-yellow-500 text-[10px] mb-2">
                                            <span class="material-symbols-outlined text-sm fill-current">star</span>
                                            <span class="material-symbols-outlined text-sm fill-current">star</span>
                                            <span class="material-symbols-outlined text-sm fill-current">star</span>
                                            <span class="material-symbols-outlined text-sm fill-current">star</span>
                                            <span class="material-symbols-outlined text-sm fill-current">star_half</span>
                                        </div>
                                        <p class="text-xs text-gray-600 dark:text-gray-300 leading-relaxed">
                                            <?php echo htmlspecialchars($text); ?></p>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>