/**
 * SANG GRAWA Universal JavaScript Components
 * Universal scripts for multiple pages usage
 */

// ========================================
// ANIMATION INITIALIZATION
// ========================================

// Initialize AOS (Animate On Scroll) Library
function initializeAOS() {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1200,
            easing: 'ease-in-out-sine',
            delay: 100,
            offset: 50,
            once: true
        });
    }
}

// ========================================
// COUNTER ANIMATIONS
// ========================================

// Animated Counter Function
function animateCounter(element, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        
        const easeOutQuart = 1 - Math.pow(1 - progress, 4);
        const current = Math.floor(easeOutQuart * (end - start) + start);
        
        element.textContent = current.toLocaleString();
        
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

// Initialize all counters on the page
function initializeCounters() {
    const counters = document.querySelectorAll('.counter');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.hasAttribute('data-animated')) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-target'));
                
                counter.setAttribute('data-animated', 'true');
                animateCounter(counter, 0, target, 2000);
            }
        });
    });

    counters.forEach(counter => {
        observer.observe(counter);
    });
}

// ========================================
// SEARCH AND FILTER FUNCTIONALITY
// ========================================

// Live Search Function
function initializeLiveSearch() {
    const searchInput = document.getElementById('searchInput');
    const tableRows = document.querySelectorAll('tbody .table-row');
    
    if (searchInput && tableRows.length > 0) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();
            
            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                    row.style.animation = 'fadeInUp 0.5s ease-out';
                } else {
                    row.style.display = 'none';
                }
            });
            
            updateRowNumbers();
        });
    }
}

// Filter by Type Function
function initializeTypeFilter() {
    const typeFilter = document.getElementById('typeFilter');
    const tableRows = document.querySelectorAll('tbody .table-row');
    
    if (typeFilter && tableRows.length > 0) {
        typeFilter.addEventListener('change', function() {
            const selectedType = this.value.toLowerCase();
            
            tableRows.forEach(row => {
                const typeBadge = row.querySelector('.type-badge');
                if (!typeBadge) return;
                
                const rowType = typeBadge.textContent.toLowerCase();
                
                if (selectedType === '' || rowType === selectedType) {
                    row.style.display = '';
                    row.style.animation = 'fadeInUp 0.5s ease-out';
                } else {
                    row.style.display = 'none';
                }
            });
            
            updateRowNumbers();
        });
    }
}

// Filter by Status Function
function initializeStatusFilter() {
    const statusFilter = document.getElementById('statusFilter');
    const tableRows = document.querySelectorAll('tbody .table-row');
    
    if (statusFilter && tableRows.length > 0) {
        statusFilter.addEventListener('change', function() {
            const selectedStatus = this.value.toLowerCase();
            
            tableRows.forEach(row => {
                const statusBadge = row.querySelector('.status-badge');
                if (!statusBadge) return;
                
                const rowStatus = statusBadge.classList.contains('active') ? 'active' : 'inactive';
                
                if (selectedStatus === '' || rowStatus === selectedStatus) {
                    row.style.display = '';
                    row.style.animation = 'fadeInUp 0.5s ease-out';
                } else {
                    row.style.display = 'none';
                }
            });
            
            updateRowNumbers();
        });
    }
}

// Update row numbers after filtering
function updateRowNumbers() {
    const visibleRows = document.querySelectorAll('tbody .table-row[style=""], tbody .table-row:not([style*="display: none"])');
    visibleRows.forEach((row, index) => {
        const rowNumber = row.querySelector('.row-number');
        if (rowNumber) {
            rowNumber.textContent = index + 1;
        }
    });
}

// Reset all filters
function resetFilters() {
    const searchInput = document.getElementById('searchInput');
    const typeFilter = document.getElementById('typeFilter');
    const statusFilter = document.getElementById('statusFilter');
    const tableRows = document.querySelectorAll('tbody .table-row');
    
    // Reset form values
    if (searchInput) searchInput.value = '';
    if (typeFilter) typeFilter.selectedIndex = 0;
    if (statusFilter) statusFilter.selectedIndex = 0;
    
    // Show all rows
    tableRows.forEach((row, index) => {
        row.style.display = '';
        row.style.animation = 'fadeInUp 0.5s ease-out';
        
        const rowNumber = row.querySelector('.row-number');
        if (rowNumber) {
            rowNumber.textContent = index + 1;
        }
    });
}

// ========================================
// ACTION HANDLERS
// ========================================

// View Action Handler
function viewItem(id, name) {
    // Custom view logic - can be overridden per page
    console.log(`Viewing item: ${name} (ID: ${id})`);
    
    // Example: Show modal or redirect to view page
    // window.location.href = `/view/${id}`;
    
    // Or show alert for demo
    alert(`Melihat detail: ${name}`);
}

// Edit Action Handler
function editItem(id, name) {
    // Custom edit logic - can be overridden per page
    console.log(`Editing item: ${name} (ID: ${id})`);
    
    // Example: Redirect to edit page
    // window.location.href = `/edit/${id}`;
    
    // Or show alert for demo
    alert(`Mengedit: ${name}`);
}

// Delete Action Handler
function deleteItem(id, name) {
    // Custom delete logic - can be overridden per page
    console.log(`Deleting item: ${name} (ID: ${id})`);
    
    // Show confirmation dialog
    if (confirm(`Apakah Anda yakin ingin menghapus "${name}"?`)) {
        // Example: Send delete request
        // fetch(`/delete/${id}`, { method: 'DELETE' })
        //     .then(response => response.json())
        //     .then(data => {
        //         if (data.success) {
        //             location.reload();
        //         }
        //     });
        
        // For demo, just show alert
        alert(`${name} berhasil dihapus!`);
    }
}

// ========================================
// EXPORT FUNCTIONS
// ========================================

// Export to Excel Function
function exportToExcel() {
    // Get table data
    const table = document.querySelector('.data-table');
    if (!table) return;
    
    // Basic implementation - can be enhanced with libraries like SheetJS
    const rows = [];
    const headers = [];
    
    // Get headers
    table.querySelectorAll('thead th').forEach(th => {
        headers.push(th.textContent.trim());
    });
    rows.push(headers);
    
    // Get data rows
    table.querySelectorAll('tbody tr[style=""], tbody tr:not([style*="display: none"])').forEach(tr => {
        const row = [];
        tr.querySelectorAll('td').forEach(td => {
            row.push(td.textContent.trim());
        });
        rows.push(row);
    });
    
    // Convert to CSV format
    const csvContent = rows.map(row => row.join(',')).join('\n');
    
    // Download file
    const blob = new Blob([csvContent], { type: 'text/csv' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'data_export.csv';
    a.click();
    window.URL.revokeObjectURL(url);
    
    console.log('Data exported to Excel/CSV');
}

// Print Function
function printTable() {
    // Get the table content
    const table = document.querySelector('.data-table-card');
    if (!table) return;
    
    // Create print window
    const printWindow = window.open('', '_blank');
    printWindow.document.write(`
        <html>
            <head>
                <title>Print Data</title>
                <style>
                    body { font-family: Arial, sans-serif; margin: 20px; }
                    table { width: 100%; border-collapse: collapse; }
                    th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
                    th { background-color: #f2f2f2; font-weight: bold; }
                    .action-buttons { display: none; }
                    @media print {
                        .no-print { display: none; }
                    }
                </style>
            </head>
            <body>
                <h2>Data Sekolah - SANG GRAWA</h2>
                ${table.innerHTML}
            </body>
        </html>
    `);
    
    printWindow.document.close();
    printWindow.focus();
    setTimeout(() => {
        printWindow.print();
        printWindow.close();
    }, 250);
    
    console.log('Printing table data');
}

// ========================================
// UTILITY FUNCTIONS
// ========================================

// Format numbers with Indonesian locale
function formatNumber(num) {
    return new Intl.NumberFormat('id-ID').format(num);
}

// Format date to Indonesian format
function formatDate(date) {
    return new Intl.DateTimeFormat('id-ID', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    }).format(new Date(date));
}

// Show toast notification
function showToast(message, type = 'success') {
    // Create toast element
    const toast = document.createElement('div');
    toast.className = `toast-notification toast-${type}`;
    toast.innerHTML = `
        <div class="toast-content">
            <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
            <span>${message}</span>
        </div>
    `;
    
    // Add styles
    toast.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? '#27ae60' : '#e74c3c'};
        color: white;
        padding: 15px 20px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        z-index: 9999;
        animation: slideInRight 0.3s ease;
    `;
    
    document.body.appendChild(toast);
    
    // Auto remove after 3 seconds
    setTimeout(() => {
        toast.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(() => {
            document.body.removeChild(toast);
        }, 300);
    }, 3000);
}

// ========================================
// INITIALIZATION
// ========================================

// Initialize all components when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS animations
    initializeAOS();
    
    // Initialize counters
    initializeCounters();
    
    // Initialize search and filters
    initializeLiveSearch();
    initializeTypeFilter();
    initializeStatusFilter();
    
    // Add event listeners for action buttons
    document.addEventListener('click', function(e) {
        if (e.target.matches('.btn-reset, .btn-reset *')) {
            e.preventDefault();
            resetFilters();
        }
        
        if (e.target.matches('.btn-export, .btn-export *')) {
            e.preventDefault();
            exportToExcel();
        }
        
        if (e.target.matches('.btn-print, .btn-print *')) {
            e.preventDefault();
            printTable();
        }
    });
    
    console.log('SANG GRAWA Universal Scripts Initialized');
});

// ========================================
// CSS ANIMATIONS (Added via JavaScript)
// ========================================

// Add CSS animations to document
const animationStyles = document.createElement('style');
animationStyles.textContent = `
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(300px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes slideOutRight {
        from {
            opacity: 1;
            transform: translateX(0);
        }
        to {
            opacity: 0;
            transform: translateX(300px);
        }
    }
`;
document.head.appendChild(animationStyles);

// ========================================
// SCHOOL MODAL FUNCTIONS
// Functions for Add School Modal
// ========================================

// Initialize Add School Modal functionality
function initializeAddSchoolModal() {
    const form = document.getElementById('addSchoolForm');
    const modal = document.getElementById('addSchoolModal');
    
    if (!form || !modal) return;
    
    const submitButton = form.querySelector('button[type="submit"]');

    // Form validation styling
    const inputs = form.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.borderColor = 'var(--primary-red, #e74c3c)';
            this.style.boxShadow = '0 0 0 0.2rem rgba(231, 76, 60, 0.25)';
        });

        input.addEventListener('blur', function() {
            this.style.borderColor = '#e9ecef';
            this.style.boxShadow = 'none';

            // Validate individual field
            validateField(this);
        });

        input.addEventListener('input', function() {
            // Remove invalid styling on input
            this.classList.remove('is-invalid');
            const feedback = this.parentNode.querySelector('.invalid-feedback');
            if (feedback) {
                feedback.remove();
            }
        });
    });

    // NPSN formatting (only numbers, max 8 digits)
    const npsnInput = document.getElementById('npsn');
    if (npsnInput) {
        npsnInput.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '').substring(0, 8);
        });
    }

    // Phone number formatting
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function() {
            // Allow numbers, hyphens, spaces, and parentheses
            this.value = this.value.replace(/[^0-9\\-\\s\\(\\)]/g, '');
        });
    }

    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        if (validateSchoolForm()) {
            submitSchoolForm();
        }
    });

    // Reset form when modal is closed
    modal.addEventListener('hidden.bs.modal', function() {
        form.reset();
        clearSchoolValidation();
    });
}

// Validate individual field for school form
function validateField(field) {
    const value = field.value.trim();
    let isValid = true;
    let message = '';

    // Clear previous validation
    field.classList.remove('is-invalid', 'is-valid');
    const existingFeedback = field.parentNode.querySelector('.invalid-feedback');
    if (existingFeedback) {
        existingFeedback.remove();
    }

    // Required field validation
    if (field.hasAttribute('required') && !value) {
        isValid = false;
        message = 'Field ini wajib diisi';
    }

    // Specific validations
    switch (field.id) {
        case 'school_name':
            if (value && value.length < 3) {
                isValid = false;
                message = 'Nama sekolah minimal 3 karakter';
            }
            break;

        case 'npsn':
            if (value && (value.length !== 8 || !/^\\d{8}$/.test(value))) {
                isValid = false;
                message = 'NPSN harus 8 digit angka';
            }
            break;

        case 'email':
            if (value && !/^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/.test(value)) {
                isValid = false;
                message = 'Format email tidak valid';
            }
            break;

        case 'established_year':
            const currentYear = new Date().getFullYear();
            if (value && (value < 1900 || value > currentYear)) {
                isValid = false;
                message = `Tahun harus antara 1900 dan ${currentYear}`;
            }
            break;

        case 'student_count':
            if (value && (value < 0 || value > 10000)) {
                isValid = false;
                message = 'Jumlah siswa tidak valid';
            }
            break;
    }

    // Apply validation styling
    if (!isValid) {
        field.classList.add('is-invalid');
        const feedback = document.createElement('div');
        feedback.className = 'invalid-feedback';
        feedback.textContent = message;
        field.parentNode.appendChild(feedback);
    } else if (value) {
        field.classList.add('is-valid');
    }

    return isValid;
}

// Validate entire school form
function validateSchoolForm() {
    const form = document.getElementById('addSchoolForm');
    if (!form) return false;
    
    const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
    let isValid = true;

    inputs.forEach(input => {
        if (!validateField(input)) {
            isValid = false;
        }
    });

    return isValid;
}

// Clear all validation for school form
function clearSchoolValidation() {
    const form = document.getElementById('addSchoolForm');
    if (!form) return;
    
    const inputs = form.querySelectorAll('input, select, textarea');

    inputs.forEach(input => {
        input.classList.remove('is-invalid', 'is-valid');
        input.style.borderColor = '#e9ecef';
        input.style.boxShadow = 'none';
    });

    const feedbacks = form.querySelectorAll('.invalid-feedback');
    feedbacks.forEach(feedback => feedback.remove());
}

// Submit school form (placeholder - would normally send to server)
function submitSchoolForm() {
    const form = document.getElementById('addSchoolForm');
    if (!form) return;
    
    const submitButton = form.querySelector('button[type="submit"]');
    const modal = bootstrap.Modal.getInstance(document.getElementById('addSchoolModal'));

    // Show loading state
    const originalText = submitButton.innerHTML;
    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i>Menyimpan...';
    submitButton.disabled = true;

    // Collect form data
    const formData = new FormData(form);
    const schoolData = Object.fromEntries(formData);

    // Simulate API call
    setTimeout(() => {
        // Success simulation
        console.log('School data to be saved:', schoolData);

        // Show success message
        showToast('Sekolah berhasil ditambahkan!', 'success');

        // Reset form and close modal
        form.reset();
        clearSchoolValidation();
        modal.hide();

        // Reset button
        submitButton.innerHTML = originalText;
        submitButton.disabled = false;

        // Optionally reload the table or add new row
        // reloadSchoolsTable();

    }, 1500); // Simulate network delay
}