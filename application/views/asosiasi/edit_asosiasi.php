<div class="right_col" role="main">
    <div class="col-md-6 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Asosiasi</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form class="form-horizontal form-label-left" action="<?= base_url('asosiasi/update/'.$asosiasi->id)?>" method="post">
                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Nama Asosiasi</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input name="asosiasi" value="<?= $asosiasi->nama ?>" type="text" class="form-control" placeholder="Nama Asosiasi">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                            <button type="button" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>