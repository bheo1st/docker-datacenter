<div class="card">
    <div class="card-body">
        <h4 class="card-title"><?= ucfirst($action); ?> Server</h4>
        <div class="row">
            <div class="col-12">
                <br>
                <form class="forms-sample">
                <input type="hidden" id="serverId" value="<?= (isset($data->server_id)? $data->server_id : ''); ?>" name="serverId">
                    <div class="form-group">
                        <label>Name Server</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="serverName" name="serverName" placeholder="Input server Name" value="<?= (isset($data->server_name) ? $data->server_name : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>Server IP</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="serverIp" name="serverIp" placeholder="Input server ip" value="<?= (isset($data->server_ip) ? $data->server_ip : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>TYPE OS</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="typeOs" name="typeOs" placeholder="Input type OS" value="<?= (isset($data->type_os) ? $data->type_os : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>CPU</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="serverCpu" name="serverCpu" placeholder="Input server CPU" value="<?= (isset($data->server_cpu) ? $data->server_cpu : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>RAM</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="serverRam" name="serverRam" placeholder="Input server Ram" value="<?= (isset($data->server_ram) ? $data->server_ram : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>STORAGE</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="serverStorage" name="serverStorage" placeholder="Input server Storage" value="<?= (isset($data->server_storage) ? $data->server_storage : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>Rack</label> <label style="font-size: 12px; color: red;">*required</label>
                        <select id="selectRack" name="selectRack" class="browser-default custom-select" style="width:100%" $readOnly>
                            <?php foreach ($listRack as $lcu) { ?>
                                <option value="<?= $lcu['rack_id']; ?>" <?= (isset($data->rack_id) ? ($data->rack_id === $lcu['rack_id'] ? 'selected' : '') : ''); ?>> <?= $lcu['rack_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="button" onclick="submit_server('<?= $action; ?>');" class="btn btn-success mr-2"><?= ($action != 'add' ? 'Update' : 'Submit'); ?></button>
                    <button type="button" class="btn btn-light" onclick="location.href='<?= site_url(); ?>mst/c_server';">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>