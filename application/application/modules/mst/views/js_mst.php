<script type="text/javascript">
    $(document).ready(function() {
        $("#companyUser").change(function() {
            var validasiCompany = $('#companyUser').val();
            if (validasiCompany.length < 1 || validasiCompany === ' ') {
                $("#wrn").remove();
                $("#companyUser").removeAttr('css');
                $("<label id='wrn'>Please fill the company name.</label>").appendTo("#warning_companyUser");
                $("#companyUser").css('border', '3px #ff0000 solid');
            } else {
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('mst/c_company/validate_companyUser'); ?>",
                    data: {
                        validasiCompany:validasiCompany
                    },
                    success: function(data, response) {
                        if (data == 'true') {
                            $("#wrn").remove();
                            $("#companyUser").removeAttr('css');
                            $("<label id='wrn'>Company Name can be used.</label>").appendTo("#warning_companyUser");
                            $("#companyUser").css('border', '3px #00a9ff solid');
                        } else {
                            $("#wrn").remove();
                            $("#companyUser").removeAttr('css');
                            $("<label id='wrn'>Company Name already Exist.</label>").appendTo("#warning_companyUser");
                            $("#companyUser").css('border', '3px #ff0000 solid');
                        }
                    }
                });
            }
        });
    });


    function delete_data(action, id) {
        swal({
            title: "Are you sure to delete this data?",
            icon: "warning",
            buttons: ['No, cancel it!', 'Yes, I am sure!'],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Please Wait..!',
                    text: 'Loading...',
                    allowOutsideClick: false,
                    closeOnEsc: false,
                    allowEnterKey: false,
                    buttons: false,
                    onOpen: () => {
                        swal.showLoading()
                    }
                })
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('mst/c_'); ?>" + action + "/submit_" + action,
                    data: {
                        action: 'delete',
                        companyId: id,
                        gedungId: id,
                        roomId: id,
                        rackId:id,
                        virtualId:id,
                    },
                    success: function(data, response) {
                        if (response == 'success') {
                            swal({
                                title: 'Success !',
                                text: 'Successfully delete data.',
                                icon: 'success'
                            }).then(() => {
                                window.location.href = "<?= site_url('mst/c_'); ?>" + action;
                            });
                        } else {
                            swal("Oops...", "Failed delete data.", "error");
                        }
                    }
                });
            } else {
                swal("Canceled", "Proses delete Data Canceled", "error");
            }
        });
    }

    function submit_company(action) {
        var reqUser = true;
        $('.required').each(function() {
            if ($(this).val() == "") {
                reqUser = false;
            }
        });

        if (reqUser != true) {
            swal("Warning", "Please fill all the required fields", "warning");
        } else {
            var companyId= $('#companyId').val();
            var companyUser = $('#companyUser').val();
            var companyAddress = $('#companyAddress').val();
            var act = (action != 'add' ? 'update' : 'save');

            swal({
                title: "Are you sure to " + act + " this data?",
                icon: "warning",
                buttons: ['No, cancel it!', 'Yes, I am sure!'],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Please Wait..!',
                        text: 'Loading...',
                        allowOutsideClick: false,
                        closeOnEsc: false,
                        allowEnterKey: false,
                        buttons: false,
                        onOpen: () => {
                            swal.showLoading()
                        }
                    })
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('mst/c_company/submit_company'); ?>",
                        data: {
                            action: action,
                            companyId: companyId,
                            companyUser: companyUser,
                            companyAddress: companyAddress,
                        },
                        success: function(data, response) {

                            if (response == 'success') {
                                swal({
                                    title: 'Success !',
                                    text: 'Successfully ' + act + ' data.',
                                    icon: 'success'
                                }).then(() => {
                                    window.location.href = "<?= site_url('mst/c_company'); ?>";
                                });
                            } else {
                                swal("Oops...", "Failed " + act + " data.", "error");
                            }
                        }
                    });
                } else {
                    swal("Canceled", "Proses " + act + " Data Canceled", "error");
                }
            });
        }
        
    }

    function submit_gedung(action) {
        var reqUser = true;
        $('.required').each(function() {
            if ($(this).val() == "") {
                reqUser = false;
            }
        });

        if (reqUser != true) {
            swal("Warning", "Please fill all the required fields", "warning");
        } else {
            var gedungId = $('#gedungId').val();
            var gedungName = $('#gedungName').val();
            var selectCompanyUser = $('#selectCompanyUser').val();
            var gedungAddress = $('#gedungAddress').val();
            var act = (action != 'add' ? 'update' : 'save');

            swal({
                title: "Are you sure to " + act + " this data?",
                icon: "warning",
                buttons: ['No, cancel it!', 'Yes, I am sure!'],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Please Wait..!',
                        text: 'Loading...',
                        allowOutsideClick: false,
                        closeOnEsc: false,
                        allowEnterKey: false,
                        buttons: false,
                        onOpen: () => {
                            swal.showLoading()
                        }
                    })
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('mst/c_gedung/submit_gedung'); ?>",
                        data: {
                            action: action,
                            gedungId: gedungId,
                            gedungName: gedungName,
                            selectCompanyUser: selectCompanyUser,
                            gedungAddress: gedungAddress
                        },
                        success: function(data, response) {

                            if (response == 'success') {
                                swal({
                                    title: 'Success !',
                                    text: 'Successfully ' + act + ' data.',
                                    icon: 'success'
                                }).then(() => {
                                    window.location.href = "<?= site_url('mst/c_gedung'); ?>";
                                });
                            } else {
                                swal("Oops...", "Failed " + act + " data.", "error");
                            }
                        }
                    });
                } else {
                    swal("Canceled", "Proses " + act + " Data Canceled", "error");
                }
            });
        }
        
    }

    function submit_room(action) {
        var reqUser = true;
        $('.required').each(function() {
            if ($(this).val() == "") {
                reqUser = false;
            }
        });

        if (reqUser != true) {
            swal("Warning", "Please fill all the required fields", "warning");
        } else {
            var roomId= $('#roomId').val();
            var roomName = $('#roomName').val();
            var selectGedung = $('#selectGedung').val();
            var act = (action != 'add' ? 'update' : 'save');

            swal({
                title: "Are you sure to " + act + " this data?",
                icon: "warning",
                buttons: ['No, cancel it!', 'Yes, I am sure!'],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Please Wait..!',
                        text: 'Loading...',
                        allowOutsideClick: false,
                        closeOnEsc: false,
                        allowEnterKey: false,
                        buttons: false,
                        onOpen: () => {
                            swal.showLoading()
                        }
                    })
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('mst/c_room/submit_room'); ?>",
                        data: {
                            action: action,
                            roomId: roomId,
                            roomName: roomName,
                            selectGedung: selectGedung
                        },
                        success: function(data, response) {

                            if (response == 'success') {
                                swal({
                                    title: 'Success !',
                                    text: 'Successfully ' + act + ' data.',
                                    icon: 'success'
                                }).then(() => {
                                    window.location.href = "<?= site_url('mst/c_room'); ?>";
                                });
                            } else {
                                swal("Oops...", "Failed " + act + " data.", "error");
                            }
                        }
                    });
                } else {
                    swal("Canceled", "Proses " + act + " Data Canceled", "error");
                }
            });
        }
        
    }

    function submit_rack(action) {
        var reqUser = true;
        $('.required').each(function() {
            if ($(this).val() == "") {
                reqUser = false;
            }
        });

        if (reqUser != true) {
            swal("Warning", "Please fill all the required fields", "warning");
        } else {
            var rackId= $('#rackId').val();
            var rackName = $('#rackName').val();
            var selectRoom = $('#selectRoom').val();
            var act = (action != 'add' ? 'update' : 'save');

            swal({
                title: "Are you sure to " + act + " this data?",
                icon: "warning",
                buttons: ['No, cancel it!', 'Yes, I am sure!'],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Please Wait..!',
                        text: 'Loading...',
                        allowOutsideClick: false,
                        closeOnEsc: false,
                        allowEnterKey: false,
                        buttons: false,
                        onOpen: () => {
                            swal.showLoading()
                        }
                    })
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('mst/c_rack/submit_rack'); ?>",
                        data: {
                            action: action,
                            rackId: rackId,
                            rackName: rackName,
                            selectRoom: selectRoom
                        },
                        success: function(data, response) {

                            if (response == 'success') {
                                swal({
                                    title: 'Success !',
                                    text: 'Successfully ' + act + ' data.',
                                    icon: 'success'
                                }).then(() => {
                                    window.location.href = "<?= site_url('mst/c_rack'); ?>";
                                });
                            } else {
                                swal("Oops...", "Failed " + act + " data.", "error");
                            }
                        }
                    });
                } else {
                    swal("Canceled", "Proses " + act + " Data Canceled", "error");
                }
            });
        }
        
    }


    function submit_server(action) {
        var reqUser = true;
        $('.required').each(function() {
            if ($(this).val() == "") {
                reqUser = false;
            }
        });

        if (reqUser != true) {
            swal("Warning", "Please fill all the required fields", "warning");
        } else {
            var serverId= $('#serverId').val();
            var serverName = $('#serverName').val();
            var serverIp = $('#serverIp').val();
            var typeOs = $('#typeOs').val();
            var serverCpu = $('#serverCpu').val();
            var serverRam = $('#serverRam').val();
            var serverStorage = $('#serverStorage').val();
            var selectRack = $('#selectRack').val();
            var act = (action != 'add' ? 'update' : 'save');

            swal({
                title: "Are you sure to " + act + " this data?",
                icon: "warning",
                buttons: ['No, cancel it!', 'Yes, I am sure!'],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Please Wait..!',
                        text: 'Loading...',
                        allowOutsideClick: false,
                        closeOnEsc: false,
                        allowEnterKey: false,
                        buttons: false,
                        onOpen: () => {
                            swal.showLoading()
                        }
                    })
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('mst/c_server/submit_server'); ?>",
                        data: {
                            action: action,
                            serverId: serverId,
                            serverName: serverName,
                            serverIp: serverIp,
                            typeOs: typeOs,
                            serverCpu: serverCpu,
                            serverRam: serverRam,
                            serverStorage: serverStorage,
                            selectRack: selectRack
                        },
                        success: function(data, response) {

                            if (response == 'success') {
                                swal({
                                    title: 'Success !',
                                    text: 'Successfully ' + act + ' data.',
                                    icon: 'success'
                                }).then(() => {
                                    window.location.href = "<?= site_url('mst/c_server'); ?>";
                                });
                            } else {
                                swal("Oops...", "Failed " + act + " data.", "error");
                            }
                        }
                    });
                } else {
                    swal("Canceled", "Proses " + act + " Data Canceled", "error");
                }
            });
        }
        
    }

    function submit_virtual(action) {
        var reqUser = true;
        $('.required').each(function() {
            if ($(this).val() == "") {
                reqUser = false;
            }
        });

        if (reqUser != true) {
            swal("Warning", "Please fill all the required fields", "warning");
        } else {
            var virtualId= $('#virtualId').val();
            var virtualName = $('#virtualName').val();
            var virtualIp = $('#virtualIp').val();
            var virtualUsername = $('#virtualUsername').val();
            var virtualPassword = $('#virtualPassword').val();
            var selectServer = $('#selectServer').val();            
            var act = (action != 'add' ? 'update' : 'save');

            swal({
                title: "Are you sure to " + act + " this data?",
                icon: "warning",
                buttons: ['No, cancel it!', 'Yes, I am sure!'],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Please Wait..!',
                        text: 'Loading...',
                        allowOutsideClick: false,
                        closeOnEsc: false,
                        allowEnterKey: false,
                        buttons: false,
                        onOpen: () => {
                            swal.showLoading()
                        }
                    })
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('mst/c_virtual/submit_virtual'); ?>",
                        data: {
                            action: action,
                            virtualId: virtualId,
                            virtualName: virtualName,
                            virtualIp: virtualIp,
                            virtualUsername: virtualUsername,
                            virtualPassword: virtualPassword,
                            selectServer: selectServer
                        },
                        success: function(data, response) {

                            if (response == 'success') {
                                swal({
                                    title: 'Success !',
                                    text: 'Successfully ' + act + ' data.',
                                    icon: 'success'
                                }).then(() => {
                                    window.location.href = "<?= site_url('mst/c_virtual'); ?>";
                                });
                            } else {
                                swal("Oops...", "Failed " + act + " data.", "error");
                            }
                        }
                    });
                } else {
                    swal("Canceled", "Proses " + act + " Data Canceled", "error");
                }
            });
        }
        
    }
</script>