<script type="text/javascript">
	$(document).ready(function() {
		$("#userName").change(function() {
			var username = $("#userName").val();
			if (username.length < 1 || username === ' ') {
				$("#wrn").remove();
				$("#userName").removeAttr('css');
				$("<label id='wrn'>Please fill the username.</label>").appendTo("#warning_username");
				$("#userName").css('border', '3px #ff0000 solid');
			} else {
				$.ajax({
					type: "POST",
					url: "<?= site_url('svc/c_user/validate_username'); ?>",
					data: {
						username: username
					},
					success: function(data, response) {
						if (data == 'true') {
							$("#wrn").remove();
							$("#userName").removeAttr('css');
							$("<label id='wrn'>Username can be used.</label>").appendTo("#warning_username");
							$("#userName").css('border', '3px #00a9ff solid');
						} else {
							$("#wrn").remove();
							$("#userName").removeAttr('css');
							$("<label id='wrn'>Username already Exist.</label>").appendTo("#warning_username");
							$("#userName").css('border', '3px #ff0000 solid');
						}
					}
				});
			}
		});
	});

	function submit_role(action) {
		var req = true;
		var role_menu = [];
		$.each($("input[name='chkRoleMenu']:checked"), function() {
			role_menu.push($(this).val());
		});
		$('.required').each(function() {
			if ($(this).val() == "" || role_menu.length < 1) {
				req = false;
			}
		});

		if (req != true) {
			swal("Warning", "Please fill all the required fields", "warning");
		} else {
			var role_name = $("#roleName").val();
			var role_id = $("#roleID").val();
			var role_desc = $("#descriptionrole").val();
			var role_level = $("#selectRoleLevel").val();
			var act = (action != 'add' ? 'update' : 'save');
			var role_menu = [];
			$.each($("input[name='chkRoleMenu']:checked"), function() {
				role_menu.push($(this).val());
			});
			console.log(role_menu);
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
						url: "<?= site_url('svc/c_role/submit_role'); ?>",
						data: {
							action: action,
							role_name: role_name,
							role_id: role_id,
							role_desc: role_desc,
							role_level: role_level,
							role_menu: role_menu
						},
						success: function(data, response) {
							if (response == 'success') {
								swal({
									title: 'Success !',
									text: 'Successfully ' + act + ' data.',
									icon: 'success'
								}).then(() => {
									window.location.href = "<?= site_url('svc/c_role'); ?>";
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
					url: "<?= site_url('svc/c_'); ?>" + action + "/submit_" + action,
					data: {
						action: 'delete',
						id: id
					},
					success: function(data, response) {
						if (response == 'success') {
							swal({
								title: 'Success !',
								text: 'Successfully delete data.',
								icon: 'success'
							}).then(() => {
								window.location.href = "<?= site_url('svc/c_'); ?>" + action;
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

	function submit_user(action) {
		var reqUser = true;
		$('.required').each(function() {
			if ($(this).val() == "") {
				reqUser = false;
			}
		});

		if (reqUser != true) {
			swal("Warning", "Please fill all the required fields", "warning");
		} else {
			var userRole = $('#selectRoleUser').val();
			var userType = $('#selectTypeUser').val();
			var selectCompanyUser = $('#selectCompanyUser').val();
			var userFullname = $('#userFullname').val();
			var userName = $('#userName').val();
			var userPass = $('#userPass').val();
			var userEmail = $('#userEmail').val();
			var userPhone = $('#userPhone').val();
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
						url: "<?= site_url('svc/c_user/submit_user'); ?>",
						data: {
							action: action,
							userRole: userRole,
							selectCompanyUser:selectCompanyUser,
							userType: userType,
							userFullname: userFullname,
							userName: userName,
							userPass: userPass,
							userEmail: userEmail,
							userPhone: userPhone
						},
						success: function(data, response) {

							if (response == 'success') {
								swal({
									title: 'Success !',
									text: 'Successfully ' + act + ' data.',
									icon: 'success'
								}).then(() => {
									window.location.href = "<?= site_url('svc/c_user'); ?>";
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