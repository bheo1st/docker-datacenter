<div class="card">
    <div class="card-body">
        <h4 class="card-title"><?= ucfirst($action); ?> Virtual Server</h4>
        <div class="row">
            <div class="col-12">
                <br>
                <form class="forms-sample">
                <input type="hidden" id="virtualId" value="<?= (isset($data->virtual_id)? $data->virtual_id : ''); ?>" name="virtualId">
                    <div class="form-group">
                        <label>Name Virtual</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="virtualName" name="virtualName" placeholder="Input Virtual Name" value="<?= (isset($data->virtual_name) ? $data->virtual_name : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>Virtual IP</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="virtualIp" name="virtualIp" placeholder="Input Virtual IP" value="<?= (isset($data->virtual_ip) ? $data->virtual_ip : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>Virtual Username</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="virtualUsername" name="virtualUsername" placeholder="Input Virtual Username" value="<?= (isset($data->virtual_username) ? $data->virtual_username : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>Password Virtual</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="virtualPassword" name="virtualPassword" placeholder="Input Virtual Password" value="<?= (isset($data->virtual_password) ? $data->virtual_password : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>Server</label> <label style="font-size: 12px; color: red;">*required</label>
                        <select id="selectServer" name="selectServer" class="browser-default custom-select" style="width:100%" $readOnly>
                            <?php foreach ($listServer as $lcu) { ?>
                                <option value="<?= $lcu['server_id']; ?>" <?= (isset($data->server_id) ? ($data->server_id === $lcu['server_id'] ? 'selected' : '') : ''); ?>> <?= $lcu['server_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="button" onclick="submit_virtual('<?= $action; ?>');" class="btn btn-success mr-2"><?= ($action != 'add' ? 'Update' : 'Submit'); ?></button>
                    <button type="button" class="btn btn-light" onclick="location.href='<?= site_url(); ?>mst/c_virtual';">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>