(function ($) {
    'use strict';
    $(function () {
        var exportColumns = [];

        $('#order-listing').DataTable({
            data: window.DB.data,
            autoWidth: true,
            pagingType: 'full_numbers',
            paging: true,
            processing: true,
            serverSide: false,
            lengthMenu: [
                [10, 50, 100, -1],
                [10, 50, 100, "All"]
            ],
            language: {
                lengthMenu: '_MENU_',
                search: '',
            },
            dom: `
                <'row no-gutters'<'col-sm-12 col-md-auto mr-md-1 mb-2'l><'col-sm-12 col-md'B><'col-sm-12 col-md-3'f>>
                <'row'<'col-sm-12'tr>>
                <'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>
            `,
            buttons: {
                dom: {
                    container: {
                        className: 'dataTables_buttons'
                    },
                    button: {
                        className: 'btn btn-xs btn-info col-md-2 mb-2',
                    },
                },
                buttons: [
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: exportColumns,
                            modifier: {
                                page: 'all'
                            }
                        },
                    },
                    {
                        extend: 'pdf',
                        orientation: 'landscape',
                        pageSize: 'legal',
                        exportOptions: {
                            columns: exportColumns,
                            modifier: {
                                page: 'all'
                            }
                        },
                        customize: doc => {
                            doc.styles.tableHeader.fontSize = 8;
                            doc.defaultStyle.fontSize = 8;
                            doc.content[1].table.widths = 
                                Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                            doc.content[1].table.widths[0] = 30;
                            
                            $.each(doc.content[1].table.body, i => {
                                if (i == 0) return;

                                doc.content[1].table.body[i][0].alignment = "center";
                            });
                        },
                    },
                ],
            },
        });

        $('#order-listing').each(function () {
            var datatable = $(this);
            var search_label = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] label');
            var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
            var length_label = datatable.closest('.dataTables_wrapper').find('div[id$=_length] label');
            var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');

            datatable.find('tbody').first().find('tr').first().find('td:not(:has(a))').each((i, col) => {
                exportColumns.push(col.cellIndex);
            });

            search_label.addClass('w-100');
            search_input.attr('placeholder', 'Search');
            search_input.removeClass('form-control-sm');
            search_input.addClass('w-100');
            length_label.addClass('w-100');
            length_sel.removeClass('form-control-sm');
            length_sel.addClass('w-100');
        });

        $('.tableDataTable').DataTable({
            data: window.DB.data,
            autoWidth: true,
            pagingType: 'full_numbers',
            paging: true,
            processing: true,
            serverSide: false,
            lengthMenu: [
                [10, 50, 100, -1],
                [10, 50, 100, "All"]
            ],
            language: {
                lengthMenu: '_MENU_',
                search: '',
            },
            dom: `
                <'row no-gutters'<'col-sm-12 col-md-auto mr-md-1 mb-2'l><'col-sm-12 col-md'B><'col-sm-12 col-md-3'f>>
                <'row'<'col-sm-12'tr>>
                <'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>
            `,
            buttons: {
                dom: {
                    container: {
                        className: 'dataTables_buttons'
                    },
                    button: {
                        className: 'btn btn-xs btn-info col-md-2 mb-2',
                    },
                },
                buttons: [
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: exportColumns,
                            modifier: {
                                page: 'all'
                            }
                        },
                    },
                    {
                        extend: 'pdf',
                        orientation: 'landscape',
                        pageSize: 'legal',
                        exportOptions: {
                            columns: exportColumns,
                            modifier: {
                                page: 'all'
                            }
                        },
                        customize: doc => {
                            doc.styles.tableHeader.fontSize = 8;
                            doc.defaultStyle.fontSize = 8;
                            doc.content[1].table.widths = 
                                Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                            doc.content[1].table.widths[0] = 30;
                            
                            $.each(doc.content[1].table.body, i => {
                                if (i == 0) return;

                                doc.content[1].table.body[i][0].alignment = "center";
                            });
                        },
                    },
                ],
            },
        });

        $('.tableDataTable').each(function () {
            var datatable = $(this);
            var search_label = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] label');
            var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
            var length_label = datatable.closest('.dataTables_wrapper').find('div[id$=_length] label');
            var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');

            datatable.find('tbody').first().find('tr').first().find('td:not(:has(a))').each((i, col) => {
                exportColumns.push(col.cellIndex);
            });

            search_label.addClass('w-100');
            search_input.attr('placeholder', 'Search');
            search_input.removeClass('form-control-sm');
            search_input.addClass('w-100');
            length_label.addClass('w-100');
            length_sel.removeClass('form-control-sm');
            length_sel.addClass('w-100');
        });

    });
})(jQuery);