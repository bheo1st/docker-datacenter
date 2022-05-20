<div class="card">
    <div class="card-body">
        <h4 class="card-title"><?= ucfirst($action); ?> Role</h4>
        <div class="row">
            <div class="col-12">
                <br>
                <form class="forms-sample" id="formRole">
                    <div class="form-group">
                        <label>Level Role</label> <label style="font-size: 12px; color: red;">*required</label>
                        <select id="selectRoleLevel" name="selectRoleLevel" class="browser-default custom-select" style="width:100%">
                            <?php foreach ($listLevel as $lvl) { ?>
                                <option value="<?= $lvl['i_level']; ?>" <?= (isset($data[0]['i_level']) ? (($lvl['i_level'] === $data[0]['i_level'] ? 'selected' : '')) : ''); ?>> <?= $lvl['n_level']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Role Name</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="roleName" name="roleName" placeholder="Input Role Name" value="<?= (isset($data[0]['n_role']) ? $data[0]['n_role'] : ''); ?>">
                        <input type="text" hidden="true" class="form-control" id="roleID" name="roleID" placeholder="Input Role ID" value="<?= (isset($data[0]['c_role']) ? $data[0]['c_role'] : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" id="descriptionrole" name="descriptionrole" placeholder="Input Description" value="<?= (isset($data[0]['e_desc']) ? $data[0]['e_desc'] : ''); ?>">
                    </div>

                    <div class="form-group">
                        <label>List Menu</label> <label style="font-size: 12px; color: red;">*required</label>
                        <?php
                        $menuExist = [];
                        if ($action == 'edit') {
                            foreach ($data as $dt) {
                                $menuExist[] .= $dt['c_menu'];
                            }
                        }
                        foreach ($listMenu as $lmn) {
                            if ($lmn['parent_menu'] != NULL) {
                        ?>
                                <div class="form-check" style="margin-left: 2em;">
                                    <label class="form-check-label">
                                        <input <?php if (!empty($menuExist)) {
                                                    if (in_array($lmn['c_menu'], $menuExist)) {
                                                        echo 'checked';
                                                    } else {
                                                        echo '';
                                                    }
                                                } ?> type="checkbox" id="chkRoleMenu" name="chkRoleMenu" class="form-check-input" value="<?= $lmn['c_menu']; ?>"> <?= $lmn['n_menu']; ?> <i class="input-helper"></i></label>
                                </div>
                            <?php } else { ?>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input <?php if (!empty($menuExist)) {
                                                    if (in_array($lmn['c_menu'], $menuExist)) {
                                                        echo 'checked';
                                                    } else {
                                                        echo '';
                                                    }
                                                } ?> type="checkbox" id="chkRoleMenu" name="chkRoleMenu" onclick="menuParent(<?= $lmn['c_menu']; ?>);" class="form-check-input" value="<?= $lmn['c_menu']; ?>"> <?= $lmn['n_menu']; ?> <i class="input-helper"></i></label>
                                </div>
                        <?php }
                        } ?>
                        </select>
                    </div>

                    <button type="button" onclick="submit_role('<?= $action; ?>');" class="btn btn-success mr-2"><?= ($action != 'add' ? 'Update' : 'Submit'); ?></button>
                    <button type="button" class="btn btn-light" onclick="location.href='<?= site_url(); ?>svc/c_role';">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>