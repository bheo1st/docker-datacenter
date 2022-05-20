<div class="card">
    <div class="card-body">
        <h4 class="card-title"><?= ucfirst($action); ?> User</h4>
        <div class="row">
            <div class="col-12">
                <br>
                <form class="forms-sample">
                    <div class="form-group">
                        <label>Role Name</label> <label style="font-size: 12px; color: red;">*required</label>
                        <select id="selectRoleUser" name="selectRoleUser" class="browser-default custom-select" style="width:100%">
                            <?php foreach ($listRole as $lr) { ?>
                                <option value="<?= $lr['c_role']; ?>" <?= (isset($data->c_role) ? ($data->c_role === $lr['c_role'] ? 'selected' : '') : ''); ?>> <?= $lr['n_role']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <?php if (!empty($this->session->userdata('company_id'))) $readOnly = 'readOnly'; ?>
                    <div class="form-group">
                        <label>Company</label> <label style="font-size: 12px; color: red;">*required</label>
                        <select id="selectCompanyUser" name="selectCompanyUser" class="browser-default custom-select" style="width:100%" $readOnly>
                            <?php foreach ($listCompany as $lcu) { ?>
                                <option value="<?= $lcu['company_id']; ?>" <?= (isset($data->company_id) ? ($data->company_id === $lcu['company_id'] ? 'selected' : '') : ''); ?>> <?= $lcu['company_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Full Name User</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="userFullname" name="userFullname" placeholder="Input User Full Name" value="<?= (isset($data->n_name) ? $data->n_name : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>Username</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="userName" name="userName" placeholder="Input Username" value="<?= (isset($data->n_user) ? $data->n_user : ''); ?>">
                        <span id="warning_username"> </span>
                    </div>
                    <?php if ($action == 'add') { ?>
                        <div class="form-group">
                            <label>Password</label> <label style="font-size: 12px; color: red;">*required</label>
                            <input type="text" class="form-control required" id="userPass" name="userPass" placeholder="Input User Password" value="<?= (isset($data->n_pass) ? $data->n_pass : ''); ?>">
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="userEmail" name="userEmail" placeholder="Input Email" value="<?= (isset($data->n_mail) ? $data->n_mail : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" id="userPhone" name="userPhone" placeholder="Input Phone Number" value="<?= (isset($data->n_phone) ? $data->n_phone : ''); ?>">
                    </div>
                    <button type="button" onclick="submit_user('<?= $action; ?>');" class="btn btn-success mr-2"><?= ($action != 'add' ? 'Update' : 'Submit'); ?></button>
                    <button type="button" class="btn btn-light" onclick="location.href='<?= site_url(); ?>svc/c_user';">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>