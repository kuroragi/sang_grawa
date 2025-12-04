<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Custom Scripts -->

<script>
    // Sidebar Toggle Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarToggle = document.getElementById('sidebarToggleMobile');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const sidebarClose = document.getElementById('sidebarToggle');

        // Toggle sidebar on mobile
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.add('show');
                sidebarOverlay.classList.add('show');
                document.body.style.overflow = 'hidden';
            });
        }

        // Close sidebar
        function closeSidebar() {
            sidebar.classList.remove('show');
            sidebarOverlay.classList.remove('show');
            document.body.style.overflow = '';
        }

        if (sidebarClose) {
            sidebarClose.addEventListener('click', closeSidebar);
        }

        if (sidebarOverlay) {
            sidebarOverlay.addEventListener('click', closeSidebar);
        }

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 992) {
                closeSidebar();
            }
        });

        // Active menu system
        initializeActiveMenu();
    });

    // Initialize active menu highlighting and submenu expansion
    function initializeActiveMenu() {
        // Get current route or URL
        const currentPath = window.location.pathname;

        // Find all nav links
        const navLinks = document.querySelectorAll('.sidebar .nav-link');

        navLinks.forEach(link => {
            const href = link.getAttribute('href');

            // Skip if href is # (collapse triggers)
            if (href === '#') return;

            // Check if current path matches the link
            if (href && currentPath === href) {
                // Add active class to the link
                link.classList.add('active');

                // Check if it's a submenu item and expand parent
                const parentCollapse = link.closest('.collapse');
                if (parentCollapse) {
                    parentCollapse.classList.add('show');

                    // Also mark parent nav-link as active
                    const parentNavLink = document.querySelector(`[data-bs-target="#${parentCollapse.id}"]`);
                    if (parentNavLink) {
                        parentNavLink.classList.add('active');
                    }
                }
            }
        });

        // Handle submenu highlighting based on route patterns
        highlightSubmenuByRoute();
    }

    // Highlight submenu items based on route patterns
    function highlightSubmenuByRoute() {
        const currentRoute = window.location.pathname;

        // Master Data submenu routes
        if (currentRoute.includes('/schools')) {
            setSubmenuActive('masterDataCollapse', 'schools');
        } else if (currentRoute.includes('/companies')) {
            setSubmenuActive('masterDataCollapse', 'companies');
        } else if (currentRoute.includes('/vehicles')) {
            setSubmenuActive('masterDataCollapse', 'vehicles');
        } else if (currentRoute.includes('/routes')) {
            setSubmenuActive('masterDataCollapse', 'routes');
        } else if (currentRoute.includes('/drivers')) {
            setSubmenuActive('masterDataCollapse', 'drivers');
        }

        // Reports submenu routes
        else if (currentRoute.includes('/reports/daily')) {
            setSubmenuActive('laporanCollapse', 'daily');
        } else if (currentRoute.includes('/reports/weekly')) {
            setSubmenuActive('laporanCollapse', 'weekly');
        } else if (currentRoute.includes('/reports/monthly')) {
            setSubmenuActive('laporanCollapse', 'monthly');
        } else if (currentRoute.includes('/reports/payment')) {
            setSubmenuActive('laporanCollapse', 'payment');
        }
    }

    // Helper function to set submenu active
    function setSubmenuActive(collapseId, routeType) {
        const collapse = document.getElementById(collapseId);
        const parentNavLink = document.querySelector(`[data-bs-target="#${collapseId}"]`);

        if (collapse && parentNavLink) {
            // Show the submenu
            collapse.classList.add('show');

            // Mark parent as active
            parentNavLink.classList.add('active');

            // Mark specific submenu item as active based on route
            const submenuLinks = collapse.querySelectorAll('.nav-link');
            submenuLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href && href.includes(routeType)) {
                    link.classList.add('active');
                }
            });
        }
    }
</script>

@stack('scripts')
