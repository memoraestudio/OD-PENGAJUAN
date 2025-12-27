@extends('layouts.admin')


@section('title')
<title>Status Cheque</title>
@endsection

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Status Cheque</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-header py-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title mb-0" style="margin-left: -9px">
                                        <i class="fas fa-file-invoice-dollar mr-2"></i> Status Cheque
                                    </h4>
                                    <small>Monitoring Status Cheque Perusahaan</small>
                                </div>

                            </div>
                        </div>

                        <div class="card-body">
                            <!-- Status Summary Cards -->
                            <div class="row">
                                <!-- Row 1 -->
                                <div class="col-md-3 mb-4">
                                    <div class="card status-card border-left-secondary h-100" data-status="blank"
                                        data-title="Cheque Blank">
                                        <div class="card-header bg-white border-bottom-0 pb-0">
                                            <h6 class="card-title mb-0">
                                                <i class="fas fa-file-alt mr-2 text-secondary"></i>
                                                Cheque Blank
                                            </h6>
                                        </div>
                                        <div class="card-body text-center py-2">
                                        </div>
                                        <div class="card-footer bg-white border-top-0 pt-0">
                                            <small class="text-muted">Klik untuk detail</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <div class="card status-card border-left-info h-100" data-status="nominal_tujuan"
                                        data-title="Cheque Isi Nominal & Tujuan">
                                        <div class="card-header bg-white border-bottom-0 pb-0">
                                            <h6 class="card-title mb-0">
                                                <i class="fas fa-file-invoice-dollar mr-2 text-info"></i>
                                                Isi Nominal & Tujuan
                                            </h6>
                                        </div>
                                        <div class="card-body text-center py-2">
                                        </div>
                                        <div class="card-footer bg-white border-top-0 pt-0">
                                            <small class="text-muted">Klik untuk detail</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <div class="card status-card border-left-warning h-100" data-status="tujuan"
                                        data-title="Cheque Isi Tujuan">
                                        <div class="card-header bg-white border-bottom-0 pb-0">
                                            <h6 class="card-title mb-0">
                                                <i class="fas fa-file-signature mr-2 text-warning"></i>
                                                Isi Tujuan
                                            </h6>
                                        </div>
                                        <div class="card-body text-center py-2">
                                        </div>
                                        <div class="card-footer bg-white border-top-0 pt-0">
                                            <small class="text-muted">Klik untuk detail</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <div class="card status-card border-left-success h-100" data-status="tujuan_ttd1"
                                        data-title="Cheque Isi Tujuan & TTD 1">
                                        <div class="card-header bg-white border-bottom-0 pb-0">
                                            <h6 class="card-title mb-0">
                                                <i class="fas fa-file-contract mr-2 text-success"></i>
                                                Isi Tujuan & TTD 1
                                            </h6>
                                        </div>
                                        <div class="card-body text-center py-2">
                                        </div>
                                        <div class="card-footer bg-white border-top-0 pt-0">
                                            <small class="text-muted">Klik untuk detail</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 2 -->
                                <div class="col-md-3 mb-4">
                                    <div class="card status-card border-left-primary h-100" data-status="tujuan_ttd2"
                                        data-title="Cheque Isi Tujuan & TTD 2">
                                        <div class="card-header bg-white border-bottom-0 pb-0">
                                            <h6 class="card-title mb-0">
                                                <i class="fas fa-file-contract mr-2 text-primary"></i>
                                                Isi Tujuan & TTD 2
                                            </h6>
                                        </div>
                                        <div class="card-body text-center py-2">
                                        </div>
                                        <div class="card-footer bg-white border-top-0 pt-0">
                                            <small class="text-muted">Klik untuk detail</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <div class="card status-card border-left-info h-100" data-status="ttd1"
                                        data-title="Cheque Isi TTD 1">
                                        <div class="card-header bg-white border-bottom-0 pb-0">
                                            <h6 class="card-title mb-0">
                                                <i class="fas fa-signature mr-2 text-info"></i>
                                                Isi TTD 1
                                            </h6>
                                        </div>
                                        <div class="card-body text-center py-2">
                                        </div>
                                        <div class="card-footer bg-white border-top-0 pt-0">
                                            <small class="text-muted">Klik untuk detail</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <div class="card status-card border-left-success h-100"
                                        data-status="tujuan_nominal_ttd1"
                                        data-title="Cheque Isi Tujuan, Nominal & TTD 1">
                                        <div class="card-header bg-white border-bottom-0 pb-0">
                                            <h6 class="card-title mb-0">
                                                <i class="fas fa-file-invoice mr-2 text-success"></i>
                                                Isi Lengkap & TTD 1
                                            </h6>
                                        </div>
                                        <div class="card-body text-center py-2">
                                        </div>
                                        <div class="card-footer bg-white border-top-0 pt-0">
                                            <small class="text-muted">Klik untuk detail</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <div class="card status-card border-left-success h-100"
                                        data-status="tujuan_nominal_ttd1_ttd2"
                                        data-title="Cheque Isi Lengkap & TTD 1+2">
                                        <div class="card-header bg-white border-bottom-0 pb-0">
                                            <h6 class="card-title mb-0">
                                                <i class="fas fa-file-certificate mr-2 text-success"></i>
                                                Isi Lengkap & TTD 1+2
                                            </h6>
                                        </div>
                                        <div class="card-body text-center py-2">
                                        </div>
                                        <div class="card-footer bg-white border-top-0 pt-0">
                                            <small class="text-muted">Klik untuk detail</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 3 -->
                                <div class="col-md-3 mb-4">
                                    <div class="card status-card border-left-warning h-100"
                                        data-status="serahkan_vendor" data-title="Cheque Serahkan ke Vendor">
                                        <div class="card-header bg-white border-bottom-0 pb-0">
                                            <h6 class="card-title mb-0">
                                                <i class="fas fa-truck mr-2 text-warning"></i>
                                                Serahkan ke Vendor
                                            </h6>
                                        </div>
                                        <div class="card-body text-center py-2">
                                        </div>
                                        <div class="card-footer bg-white border-top-0 pt-0">
                                            <small class="text-muted">Klik untuk detail</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <div class="card status-card border-left-info h-100" data-status="tamassalam_bank"
                                        data-title="Cheque Transfer ke Bank">
                                        <div class="card-header bg-white border-bottom-0 pb-0">
                                            <h6 class="card-title mb-0">
                                                <i class="fas fa-university mr-2 text-info"></i>
                                                Transfer ke Bank
                                            </h6>
                                        </div>
                                        <div class="card-body text-center py-2">
                                        </div>
                                        <div class="card-footer bg-white border-top-0 pt-0">
                                            <small class="text-muted">Klik untuk detail</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <div class="card status-card border-left-primary h-100" data-status="serahkan_metro"
                                        data-title="Cheque Serahkan ke Metro/HO">
                                        <div class="card-header bg-white border-bottom-0 pb-0">
                                            <h6 class="card-title mb-0">
                                                <i class="fas fa-building mr-2 text-primary"></i>
                                                Serahkan ke Metro/HO
                                            </h6>
                                        </div>
                                        <div class="card-body text-center py-2">
                                        </div>
                                        <div class="card-footer bg-white border-top-0 pt-0">
                                            <small class="text-muted">Klik untuk detail</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <div class="card status-card border-left-danger h-100" data-status="batal"
                                        data-title="Cheque Batal">
                                        <div class="card-header bg-white border-bottom-0 pb-0">
                                            <h6 class="card-title mb-0">
                                                <i class="fas fa-times-circle mr-2 text-danger"></i>
                                                Cheque Batal
                                            </h6>
                                        </div>
                                        <div class="card-body text-center py-2">
                                        </div>
                                        <div class="card-footer bg-white border-top-0 pt-0">
                                            <small class="text-muted">Klik untuk detail</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal Detail Cheque -->
<div class="modal fade" id="modalDetailCheque" tabindex="-1" role="dialog" aria-labelledby="modalDetailChequeLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">
                    <i class="fas fa-file-invoice-dollar mr-2"></i>
                    <span id="modalStatusTitle">Detail Cheque</span>
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info">
                    <i class="fas fa-info-circle mr-2"></i>
                    Menampilkan data cheque untuk status: <strong id="modalStatusDesc">-</strong>
                </div>

                <!-- Filter Controls -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small">Tampilkan per halaman:</label>
                            <select class="form-control form-control-sm" id="modalItemsPerPage">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small">Cari data:</label>
                            <input type="text" class="form-control form-control-sm" id="modalSearchInput"
                                placeholder="Cari berdasarkan no cheque, vendor, dll...">
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-sm table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th width="5%">No</th>
                                <th>No. Cheque</th>
                                <th>Vendor</th>
                                <th>Nominal</th>
                                <th>Bank</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody id="modalChequeData">
                            <!-- Data akan diisi via JavaScript -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="text-muted small">
                        Menampilkan <span id="modalPageStart">0</span> - <span id="modalPageEnd">0</span>
                        dari <span id="modalTotalData">0</span> data
                    </div>
                    <nav>
                        <ul class="pagination pagination-sm mb-0" id="modalPagination">
                            <!-- Pagination akan diisi via JavaScript -->
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
                    <i class="fas fa-times mr-1"></i> Tutup
                </button>
                <button type="button" class="btn btn-primary btn-sm" id="btnExport">
                    <i class="fas fa-download mr-1"></i> Export
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    .status-card {
        transition: all 0.3s ease;
        cursor: pointer;
        border-left-width: 4px !important;
    }

    .status-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .status-card .card-title {
        font-size: 0.95rem;
        font-weight: 600;
    }

    .status-count {
        font-size: 2.5rem;
        line-height: 1;
    }

    .card-header.bg-primary {
        background: linear-gradient(135deg, #0069d9 0%, #0056b3 100%);
    }

    /* Modal styling */
    .modal-header {
        padding: 0.75rem 1rem;
    }

    .modal-title {
        font-size: 1.1rem;
        font-weight: 600;
    }

    .modal-body {
        padding: 1rem;
    }

    .table th {
        font-weight: 600;
        font-size: 0.85rem;
        background-color: #f8f9fa;
    }

    .table td {
        font-size: 0.85rem;
        vertical-align: middle;
    }

    /* Responsive adjustments */
    <blade media|%20(max-width%3A%20768px)%20%7B%0D>.status-count {
        font-size: 2rem;
    }

    .card-header .d-flex {
        flex-direction: column;
        text-align: center;
    }

    .card-header .d-flex>div:last-child {
        margin-top: 10px;
    }
    }

</style>
@endsection

@section('js')
<script>
    // Cheque Status Module
    const ChequeModule = {
        // Module configuration
        config: {
            itemsPerPage: 10,
            currentPage: 1,
            searchTerm: '',
            currentStatus: ''
        },

        // Initialize module
        init: function () {
            this.bindEvents();
            console.log('Cheque Status Module initialized');
        },

        // Bind all event listeners
        bindEvents: function () {
            const self = this;

            // Status card click events
            $('.status-card').on('click', function () {
                const status = $(this).data('status');
                const title = $(this).data('title');
                self.openModal(status, title);
            });

            // Modal filter events
            $('#modalItemsPerPage').on('change', function () {
                self.config.itemsPerPage = parseInt($(this).val());
                self.config.currentPage = 1;
                self.renderModalTable();
            });

            // Modal search with debounce
            let searchTimeout;
            $('#modalSearchInput').on('keyup', function () {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(function () {
                    self.config.searchTerm = $('#modalSearchInput').val().trim();
                    self.config.currentPage = 1;
                    self.renderModalTable();
                }, 500);
            });

            // Export button
            $('#btnExport').on('click', function () {
                self.exportData();
            });
        },

        // Open modal with status details
        openModal: function (status, title) {
            this.config.currentStatus = status;
            this.config.currentPage = 1;
            this.config.searchTerm = '';

            // Set modal title
            $('#modalStatusTitle').text(title);
            $('#modalStatusDesc').text(title);

            // Reset filters
            $('#modalSearchInput').val('');
            $('#modalItemsPerPage').val('10');

            // Show modal
            $('#modalDetailCheque').modal('show');

            // Render initial table
            this.renderModalTable();
        },

        // Generate mock data for demo
        generateMockData: function (count) {
            const data = [];
            const vendors = ['PT. Abadi Jaya', 'CV. Sejahtera', 'UD. Makmur', 'PT. Sumber Rejeki',
                'CV. Berkah'
            ];
            const banks = ['BCA', 'BRI', 'Mandiri', 'BNI', 'BTN'];

            for (let i = 1; i <= count; i++) {
                data.push({
                    no_cheque: 'CHQ-' + (1000 + i),
                    vendor: vendors[Math.floor(Math.random() * vendors.length)],
                    nominal: Math.floor(Math.random() * 10000000) + 1000000,
                    bank: banks[Math.floor(Math.random() * banks.length)],
                    tanggal: '2024-01-' + (i < 10 ? '0' + i : i)
                });
            }

            return data;
        },

        // Render table in modal
        renderModalTable: function () {
            // Generate mock data (15 items for demo)
            const allData = this.generateMockData(15);

            // Apply search filter
            let filteredData = allData;
            if (this.config.searchTerm) {
                const term = this.config.searchTerm.toLowerCase();
                filteredData = allData.filter(item =>
                    item.no_cheque.toLowerCase().includes(term) ||
                    item.vendor.toLowerCase().includes(term) ||
                    item.bank.toLowerCase().includes(term)
                );
            }

            // Calculate pagination
            const totalItems = filteredData.length;
            const totalPages = Math.ceil(totalItems / this.config.itemsPerPage);

            // Adjust current page if needed
            if (this.config.currentPage > totalPages && totalPages > 0) {
                this.config.currentPage = totalPages;
            }

            // Update pagination info
            $('#modalTotalData').text(totalItems);

            if (totalItems === 0) {
                this.renderEmptyTable();
                this.renderPagination(totalPages);
                return;
            }

            // Calculate slice for current page
            const startIndex = (this.config.currentPage - 1) * this.config.itemsPerPage;
            const endIndex = Math.min(startIndex + this.config.itemsPerPage, totalItems);

            // Update page info
            $('#modalPageStart').text(startIndex + 1);
            $('#modalPageEnd').text(endIndex);

            // Render table rows
            let tableHtml = '';
            const pageData = filteredData.slice(startIndex, endIndex);

            pageData.forEach((item, index) => {
                const rowNum = startIndex + index + 1;
                tableHtml += `
                <tr>
                    <td class="text-center">${rowNum}</td>
                    <td>${item.no_cheque}</td>
                    <td>${item.vendor}</td>
                    <td>${this.formatRupiah(item.nominal)}</td>
                    <td>${item.bank}</td>
                    <td>${item.tanggal}</td>
                </tr>
            `;
            });

            $('#modalChequeData').html(tableHtml);
            this.renderPagination(totalPages);
        },

        // Render empty table state
        renderEmptyTable: function () {
            const message = this.config.searchTerm ?
                'Tidak ada data yang sesuai dengan pencarian' :
                'Tidak ada data cheque untuk status ini';

            $('#modalChequeData').html(`
            <tr>
                <td colspan="6" class="text-center py-4">
                    <i class="fas fa-search fa-2x text-muted mb-3"></i>
                    <p class="text-muted">${message}</p>
                </td>
            </tr>
        `);

            $('#modalPageStart').text('0');
            $('#modalPageEnd').text('0');
        },

        // Render pagination controls
        renderPagination: function (totalPages) {
            if (totalPages <= 1) {
                $('#modalPagination').html('');
                return;
            }

            let paginationHtml = '';
            const current = this.config.currentPage;

            // Previous button
            paginationHtml += `
            <li class="page-item ${current === 1 ? 'disabled' : ''}">
                <a class="page-link" href="#" onclick="ChequeModule.changePage(${current - 1})">
                    <span>&laquo;</span>
                </a>
            </li>
        `;

            // Page numbers
            let startPage = Math.max(1, current - 2);
            let endPage = Math.min(totalPages, startPage + 4);

            // Adjust start if near end
            if (endPage - startPage < 4) {
                startPage = Math.max(1, endPage - 4);
            }

            for (let i = startPage; i <= endPage; i++) {
                paginationHtml += `
                <li class="page-item ${i === current ? 'active' : ''}">
                    <a class="page-link" href="#" onclick="ChequeModule.changePage(${i})">${i}</a>
                </li>
            `;
            }

            // Next button
            paginationHtml += `
            <li class="page-item ${current === totalPages ? 'disabled' : ''}">
                <a class="page-link" href="#" onclick="ChequeModule.changePage(${current + 1})">
                    <span>&raquo;</span>
                </a>
            </li>
        `;

            $('#modalPagination').html(paginationHtml);
        },

        // Change page in modal
        changePage: function (page) {
            if (page < 1 || page > Math.ceil($('#modalTotalData').text() / this.config.itemsPerPage)) {
                return;
            }

            this.config.currentPage = page;
            this.renderModalTable();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        },

        // Export data function
        exportData: function () {
            const status = this.config.currentStatus;
            const title = $('#modalStatusTitle').text();

            alert(
                `Export data untuk: ${title}\nStatus: ${status}\n\nFitur export akan diimplementasikan sesuai kebutuhan.`
            );

            // Implementasi export bisa berupa:
            // 1. Download CSV
            // 2. Print
            // 3. Export ke Excel
            // 4. PDF Report
        },

        // Format currency to Rupiah
        formatRupiah: function (angka) {
            if (!angka) return 'Rp 0';
            return 'Rp ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
    };

    // Initialize when document is ready
    $(document).ready(function () {
        ChequeModule.init();
    });

    // Global refresh function (if needed)
    window.refreshChequeStatus = function () {
        alert('Refresh data cheque...');
        // Implement API call here if needed
    };

</script>
@endsection
